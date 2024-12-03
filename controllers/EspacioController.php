<?php


include_once '../models/Reserva.php';
include_once '../config/database.php';

class ReservaController {
    private $reservaModel;

    public function __construct() {
        global $pdo;
        $this->reservaModel = new Reserva($pdo);
    }

    public function crear() {
     
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $cliente = $_POST['cliente'];
            $espacio = $_POST['espacio'];
            $fecha = $_POST['fecha'];
            $hora_inicio = $_POST['hora_inicio'];
            $hora_fin = $_POST['hora_fin'];
            $this->reservaModel->crearReserva($cliente, $espacio, $fecha, $hora_inicio, $hora_fin);
        }
    }

    public function eliminar($id) {
        $this->reservaModel->eliminarReserva($id);
    }
}
