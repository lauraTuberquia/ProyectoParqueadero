<?php
// /models/Espacio.php

include_once 'BaseModel.php';

class Espacio extends BaseModel {
    public function actualizarEspacio($id, $numero, $tipo, $estado) {
        $sql = "UPDATE espacios SET numero = ?, tipo = ?, estado = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$numero, $tipo, $estado, $id]);
    }

    public function obtenerEspacios() {
        $sql = "SELECT * FROM espacios";
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
