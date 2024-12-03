<?php
require_once 'models/Espacio.php';

class EspacioController {
    public function listarEspacios() {
        $espacio = new Espacio();
        return $espacio->findAll();
    }
}
?>
