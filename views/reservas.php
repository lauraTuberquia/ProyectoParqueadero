<?php
require_once __DIR__ . '/../controllers/ReservaController.php';

$controller = new ReservaController();
$reservas = $controller->listarReservas();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reservas</title>
</head>
<body>
    <h1>Lista de Reservas</h1>
    <table border="1">
        <tr>
            <th>ID Cliente</th>
            <th>ID Vehículo</th>
            <th>Fecha</th>
            <th>Hora Inicio</th>
            <th>Hora Fin</th>
            <th>Número Espacio</th>
            <th>Estado</th>
            <th>Monto</th>
        </tr>
        <?php foreach ($reservas as $reserva): ?>
            <tr>
                <td><?= $reserva['id_cliente'] ?></td>
                <td><?= $reserva['id_vehiculo'] ?></td>
                <td><?= $reserva['fecha_reserva'] ?></td>
                <td><?= $reserva['hora_inicio'] ?></td>
                <td><?= $reserva['hora_fin'] ?></td>
                <td><?= $reserva['numero_espacio'] ?></td>
                <td><?= $reserva['estado'] ?></td>
                <td><?= $reserva['monto_total'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
