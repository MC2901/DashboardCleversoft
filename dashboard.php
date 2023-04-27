<link rel="stylesheet" href="./css/dashboard.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php
echo "<div class='dashboard grid-container'>";
echo "<div classname= 'estadoServidores'>";
require 'estadoServidores.php';

$serverData = array(
    array('Servidor' => 'Servidor 1', 'Estado' => false, 'Porcentaje' => '93%'),
    array('Servidor' => 'Servidor 2', 'Estado' => true, 'Porcentaje' => '65%'),
    array('Servidor' => 'Servidor 3', 'Estado' => false, 'Porcentaje' => '44%'),
    array('Servidor' => 'Servidor 4', 'Estado' => true, 'Porcentaje' => '12%'),
    array('Servidor' => 'Servidor 5', 'Estado' => true, 'Porcentaje' => '89%'),
    array('Servidor' => 'Servidor 6', 'Estado' => true, 'Porcentaje' => '57%'),
    array('Servidor' => 'Servidor 7', 'Estado' => false, 'Porcentaje' => '32%'),
    array('Servidor' => 'Servidor 8', 'Estado' => false, 'Porcentaje' => '25%'),
    array('Servidor' => 'Servidor 9', 'Estado' => true, 'Porcentaje' => '40%'),
    array('Servidor' => 'Servidor 10', 'Estado' => true, 'Porcentaje' => '73%'),
    array('Servidor' => 'Servidor 11', 'Estado' => true, 'Porcentaje' => '13%'),
    
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