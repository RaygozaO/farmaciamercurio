<?php
require_once '../models/mainModel.php';

class cargar_citas extends mainModel{

    /*function obtenerCitas($id_medico){
        $conn = mainModel::conectar();
        $stmt = $conn->prepare('SELECT idcitas, id_cliente, diacita, horacita FROM citas WHERE id_cliente = ?');
        $stmt->execute([$id_medico]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    if (isset($_GET['id_cliente'])) {
        $id_medico = $_GET['id_medico'];
        $citas = obtenerCitas($id_medico);

        $eventos = [];
        foreach ($citas as $cita) {
            $eventos[] = [
                'title' => 'Paciente: ' . $cita['id_paciente'],
                'start' => $cita['fecha'] . 'T' . $cita['hora']
            ];
        }

        header('Content-Type: application/json');
        echo json_encode($eventos);
    }*/
}

