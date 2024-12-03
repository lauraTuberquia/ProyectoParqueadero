<?php
require_once 'models/Reserva.php';

class ReservaController {
    public function listarReservas() {
        $reserva = new Reserva();
        return $reserva->findAll();
    }
}
?>
