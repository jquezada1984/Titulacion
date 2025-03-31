<?php

namespace App\Controllers;

use App\Models\DisponibilidadModel;

class Home extends BaseController
{
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


    public function index3(): string
    {
        $json = '[
            {
                "id": 1,
                "title": "Evento externo",
                "start": "2025-03-25T09:00:00",
                "end": "2025-03-25T11:00:00",
                "extendedProps": {
                    "calendar": "Danger"
                }
            }
        ]';
        return $json;
    }    
}
