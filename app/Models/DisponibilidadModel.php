<?php

namespace App\Models;

use CodeIgniter\Model;

class DisponibilidadModel extends Model
{
    protected $table = 'disponibilidad_defensa_tesis';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id_disponibilidad', 'titulo', 'dia', 'mes', 'anio', 'estado'
    ];

    // Método para ejecutar la transacción completa
    public function generarHorariosTesis()
    {
        $db = \Config\Database::connect();

        $db->transStart();

        // Inserción de datos desde disponibilidad_estudiantes
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

        // Actualización del estado a 2 en disponibilidad_estudiantes
        $db->query("
            UPDATE disponibilidad_estudiantes SET estado = 2
            WHERE estado = 1
            AND id_disponibilidad IN (
                SELECT id_disponibilidad FROM disponibilidad_defensa_tesis
            );
        ");

        $db->transComplete();

        // Verificar estado de la transacción
        if ($db->transStatus() === false) {
            // Falló la transacción
            return false;
        } else {
            // Éxito en la transacción
            return true;
        }
    }
}
