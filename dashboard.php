<link rel="stylesheet" href="./css/dashboard.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php
echo "<div class='dashboard grid-container'>";
echo "<div classname= 'estadoServidores'>";
require 'estadoServidores.php';

$serverData = array(
    array('Servidor' => 'Servidor 1', 'Estado' => 'Activo', 'Memoria' => '30396 MB', 'Porcentaje' => '93%'),
    array('Servidor' => 'Servidor 2', 'Estado' => 'Inactivo', 'Memoria' => '43906 MB', 'Porcentaje' => '65%'),
    array('Servidor' => 'Servidor 3', 'Estado' => 'Activo', 'Memoria' => '12354 MB', 'Porcentaje' => '45%'),
    array('Servidor' => 'Servidor 4', 'Estado' => 'Activo', 'Memoria' => '24354 MB', 'Porcentaje' => '75%'),
    array('Servidor' => 'Servidor 5', 'Estado' => 'Activo', 'Memoria' => '18356 MB', 'Porcentaje' => '95%'),
    array('Servidor' => 'Servidor 6', 'Estado' => 'Activo', 'Memoria' => '15689 MB', 'Porcentaje' => '25%'),
    array('Servidor' => 'Servidor 7', 'Estado' => 'Activo', 'Memoria' => '45321 MB', 'Porcentaje' => '72%'),
    array('Servidor' => 'Servidor 8', 'Estado' => 'Activo', 'Memoria' => '6550 MB', 'Porcentaje' => '10%'),
    array('Servidor' => 'Servidor 9', 'Estado' => 'Inactivo', 'Memoria' => '15002 MB', 'Porcentaje' => '65%'),
    array('Servidor' => 'Servidor 10', 'Estado' => 'Activo', 'Memoria' => '15623 MB', 'Porcentaje' => '42%'),
    array('Servidor' => 'Servidor 11', 'Estado' => 'Activo', 'Memoria' => '98735 MB', 'Porcentaje' => '12%'),
    array('Servidor' => 'Servidor 12', 'Estado' => 'Inactivo', 'Memoria' => '45320 MB', 'Porcentaje' => '82%'),
    array('Servidor' => 'Servidor 13', 'Estado' => 'Activo', 'Memoria' => '11235 MB', 'Porcentaje' => '91%'),
);

$estadoServidores = new EstadoServidores('Estado de Servidores', $serverData);
$estadoServidores->render();
echo "</div>";
echo "<div classname='ticketsYEvolucion'>";
require 'ticketsYEvolucion.php';

$datos = [
    ['Tickets Pendientes', '100', 'Goal: 20%'],
    ['Tickets por vencer SLA', '60', 'Goal: 40%'],
    ['Tickets mes actual', '80', 'Goal: 30%'],
    ['Tickets mes anterior', '200', 'Goal: 70%'],
];

$tabla = new TablaTicketsYEvolucion($datos);
$tabla->render();

echo "</div>";
echo "<div classname='alarmaYBackupClientes'>";
require 'alarmaYBackupClientes.php';

echo "</div>";
echo "<div classname= 'salaDeEspera'>";
require 'salaDeEspera.php';

echo "</div>";
echo "</div>";
?>