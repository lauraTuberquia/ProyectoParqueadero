<?php


include_once 'BaseModel.php';

class Reserva extends BaseModel {
    public function crearReserva($cliente, $espacio, $fecha, $hora_inicio, $hora_fin) {
        $sql = "INSERT INTO reservas (cliente, espacio, fecha, hora_inicio, hora_fin, estado) VALUES (?, ?, ?, ?, ?, 'reservado')";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$cliente, $espacio, $fecha, $hora_inicio, $hora_fin]);
        $this->actualizarEstadoEspacio($espacio, 'reservado');
    }

    public function eliminarReserva($id) {
        $sql = "DELETE FROM reservas WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
      
    }

    public function actualizarEstadoEspacio($espacio, $estado) {
        $sql = "UPDATE espacios SET estado = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$estado, $espacio]);
    }
}
