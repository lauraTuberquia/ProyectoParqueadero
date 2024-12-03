<?php


include_once '../models/Tarifa.php';
include_once '../config/database.php';

class TarifaController {
    private $tarifaModel;

    public function __construct() {
        global $pdo;
        $this->tarifaModel = new Tarifa($pdo);
    }

    public function calcular($tipo, $duracion) {
        return $this->tarifaModel->calcularTarifa($tipo, $duracion);
    }
}
