<?php

namespace App\Models;

use CodeIgniter\Model;

// Modelo que representa la tabla 'disponibilidad_defensa_tesis'
// y contiene la lógica para generar los horarios de tesis
class Usuario_model extends Model
{
   
    public function __construct()
    {
        parent::__construct();
    }


    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'tipo_usuario', 'estado'];

    public function get_profesores_activos()
    {
        $db = \Config\Database::connect();

        $sql = "
            SELECT 
                tribunales.id_tribunal, 
                GROUP_CONCAT(CONCAT(usuarios.nombre, ' ', usuarios.apellido) SEPARATOR ' - ') AS miembros_tribunal 
            FROM tribunales 
            INNER JOIN miembros_tribunal ON tribunales.id_tribunal = miembros_tribunal.id_tribunal 
            INNER JOIN usuarios ON miembros_tribunal.id_usuario = usuarios.id_usuario 
            GROUP BY tribunales.id_tribunal
        ";
        
        $query = $db->query($sql);
        return $query->getResult();
    }

    
}