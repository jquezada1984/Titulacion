<?php

namespace App\Models;

use CodeIgniter\Model;

// Modelo que representa la tabla 'disponibilidad_defensa_tesis'
// y contiene la lógica para generar los horarios de tesis
class DisponibilidadModel extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'disponibilidad_defensa_tesis';
    // Clave primaria de la tabla
    protected $primaryKey = 'id';
    // Campos permitidos para inserción/actualización masiva
    protected $allowedFields = [
        'id_disponibilidad', 'titulo', 'dia', 'mes', 'anio', 'estado'
    ];

    /**
     * Genera los horarios de defensa de tesis.
     *
     * Este método realiza una transacción completa que incluye:
     * 1. Insertar registros en 'disponibilidad_defensa_tesis'
     *    desde la tabla 'disponibilidad_estudiantes', uniendo con 'productos_defensa'.
     * 2. Actualizar el estado de los registros usados en 'disponibilidad_estudiantes' a 2.
     *
     * @return bool Retorna true si la transacción fue exitosa, false en caso contrario.
     */
    public function generarHorariosTesis()
    {
        // Conexión con la base de datos
        $db = \Config\Database::connect();

        $db->transStart();

        // Paso 1: Insertar disponibilidad en la tabla destino desde los estudiantes activos (estado = 1)
        $db->query("
            INSERT INTO disponibilidad_defensa_tesis 
                (id_disponibilidad, titulo, dia, mes, anio) 
            SELECT 
                disponibilidad_estudiantes.id_disponibilidad,
                productos_defensa.titulo,
                DAY(disponibilidad_estudiantes.dia_semana),
                MONTH(disponibilidad_estudiantes.dia_semana),
                YEAR(disponibilidad_estudiantes.dia_semana)
            FROM disponibilidad_estudiantes
            INNER JOIN productos_defensa 
                ON disponibilidad_estudiantes.id_producto_defensa = productos_defensa.id_producto_defensa
            WHERE disponibilidad_estudiantes.estado = 1;
        ");

        // Paso 2: Actualizar estado a 2 (procesado) en la tabla de disponibilidad de estudiantes
        $db->query("
            UPDATE disponibilidad_estudiantes SET estado = 2
            WHERE estado = 1
            AND id_disponibilidad IN (
                SELECT id_disponibilidad FROM disponibilidad_defensa_tesis
            );
        ");
        // Finalizar transacción
        $db->transComplete();

        // Validar si la transacción fue exitosa
        if ($db->transStatus() === false) {
            // Falló la transacción
            return false;
        } else {
            // Éxito en la transacción
            return true;
        }
    }
}
