<?php

namespace App\Controllers;

use App\Models\DisponibilidadModel;

use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    use ResponseTrait;

    public function index(): string
    {
        return view('calendario');
    }


    public function generarhorariostesis()
    {
        $model = new DisponibilidadModel();
        $resultado = $model->generarHorariosTesis();
        if ($resultado) {
            return $this->response->setJSON(['success' => true, 'message' => 'Horarios generados correctamente']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Error al generar horarios']);
        }
    }


    public function cambiarEstado()
    {
        $json = $this->request->getJSON();

        $id = $json->id_evento ?? null;
        $estado = $json->estado ?? null;

        if (!$id || is_null($estado)) {
            return $this->fail("Faltan parámetros requeridos", 400);
        }

        $db = \Config\Database::connect();
        $builder = $db->table('asignaciones_eventos');

        $updated = $builder->where('id', $id)
            ->update(['estado' => $estado]);

        if ($updated) {
            return $this->respond(['message' => 'Estado actualizado correctamente']);
        } else {
            return $this->fail("No se pudo actualizar el estado");
        }
    }
}
