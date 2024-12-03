<?php
require_once 'config/database.php';
require_once 'controllers/ReservaController.php';

$page = $_GET['page'] ?? 'reservas';

if ($page === 'reservas') {
    require_once 'views/reservas.php';
} elseif ($page === 'espacios') {
    require_once 'views/espacios.php';
} elseif ($page === 'tarifas') {
    require_once 'views/tarifas.php';
} else {
    echo "Página no encontrada.";
}
?>
