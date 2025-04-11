<?php

namespace App\Controllers;

use App\Models\DisponibilidadModel;
use App\Models\Usuario_model;

use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    use ResponseTrait;

     /**
     * Muestra la vista principal del calendario.
     *
     * @return string
     */

    public function index(): string
    {
        $model = new Usuario_model();
        $data['profesores'] = $model->get_profesores_activos();
        return view('calendario',$data);
    }


     /**
     * Genera automáticamente los horarios de sustentaciones de tesis.
     *
     * Llama al método generarHorariosTesis() del modelo DisponibilidadModel.
     * Devuelve una respuesta JSON con el resultado de la operación.
     *
     * @return \CodeIgniter\HTTP\ResponseInterface
     */
    public function generarhorariostesis()
    {
        // Cargar el modelo de disponibilidad
        $model = new DisponibilidadModel();
        // Ejecutar la generación de horarios
        $resultado = $model->generarHorariosTesis();
        // Retornar una respuesta en formato JSON dependiendo del resultado
        if ($resultado) {
            return $this->response->setJSON(['success' => true, 'message' => 'Horarios generados correctamente']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Error al generar horarios']);
        }
    }

     /**
     * Cambia el estado de un evento en la tabla asignaciones_eventos.
     *
     * Espera un JSON con los campos 'id_evento' y 'estado'.
     * Devuelve una respuesta JSON indicando el éxito o fallo de la operación.
     *
     * @return \CodeIgniter\HTTP\ResponseInterface
     */
    public function cambiarEstado()
    {
        // Obtener datos JSON enviados en la solicitud
        $json = $this->request->getJSON();
        // Extraer parámetros
        $id = $json->id_evento ?? null;
        $estado = $json->estado ?? null;
        $tesis = $json->title ?? null;
        $idProfesor = $json->idProfesor ?? null;
        // Validar que se hayan recibido los parámetros necesarios
        if (!$id || is_null($estado)) {
            return $this->fail("Faltan parámetros requeridos", 400);
        }
        // Conectar con la base de datos y obtener el builder de la tabla
        $db = \Config\Database::connect();
        $builder = $db->table('asignaciones_eventos');
        // Actualizar el estado del evento
        $updated = $builder->where('id', $id)
            ->update(['estado' => $estado,'titulo_tesis'=>$tesis,'profesor_id'=>$idProfesor]);
        // Retornar una respuesta según el resultado de la actualización
        if ($updated) {
            return $this->respond(['message' => 'Estado actualizado correctamente']);
        } else {
            return $this->fail("No se pudo actualizar el estado");
        }
    }
}
