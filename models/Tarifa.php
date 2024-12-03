<?php


include_once 'BaseModel.php';

class Tarifa extends BaseModel {
    

    public function calcularTarifa($tipo, $duracion) {
        $tarifa = 0;

        if ($tipo == 'normal') {
            $tarifa = 5 * $duracion;
        } elseif ($tipo == 'vip') {
            $tarifa = 10 * $duracion;
        }

        return $tarifa;
    }
}
