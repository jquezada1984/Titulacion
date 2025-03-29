<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
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
