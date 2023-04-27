<link rel="stylesheet" href="./css/dashboard.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php
echo "<div class='dashboard grid-container'>";
echo "<div class= 'estadoServidores'>";
require 'estadoServidores.php';

$serverData = array(
    array('Servidor' => 'Servidor 1', 'EstadoServidor' => true, 'EstadoSQL' => false, 'Porcentaje' => '90%'),
    array('Servidor' => 'Servidor 2', 'EstadoServidor' => false, 'EstadoSQL' => true, 'Porcentaje' => '53%'),
    array('Servidor' => 'Servidor 3', 'EstadoServidor' => true, 'EstadoSQL' => true, 'Porcentaje' => '43%'),
    array('Servidor' => 'Servidor 4', 'EstadoServidor' => false, 'EstadoSQL' => false, 'Porcentaje' => '23%'),
    array('Servidor' => 'Servidor 5', 'EstadoServidor' => true, 'EstadoSQL' => true, 'Porcentaje' => '83%'),
    array('Servidor' => 'Servidor 6', 'EstadoServidor' => false, 'EstadoSQL' => true, 'Porcentaje' => '55%'),
    array('Servidor' => 'Servidor 7', 'EstadoServidor' => true, 'EstadoSQL' => false, 'Porcentaje' => '44%'),
    array('Servidor' => 'Servidor 8', 'EstadoServidor' => false, 'EstadoSQL' => true, 'Porcentaje' => '65%'),
    array('Servidor' => 'Servidor 9', 'EstadoServidor' => true, 'EstadoSQL' => true, 'Porcentaje' => '12%'),
    array('Servidor' => 'Servidor 10', 'EstadoServidor' => true, 'EstadoSQL' => true, 'Porcentaje' => '25%'),
    array('Servidor' => 'Servidor 11', 'EstadoServidor' => true, 'EstadoSQL' => false, 'Porcentaje' => '89%'),
);

$estadoServidores = new EstadoServidores('Estado de Servidores', $serverData);
$estadoServidores->render();
echo "</div>";
echo "<div class='ticketsYEvolucion'>";
require 'ticketsYEvolucion.php';

$datos = [
    ['Tickets Abiertos', '257', 'Goal: 20%'],
    ['Tickets Urgentes', '60', 'Goal: 80%'],
    ['Tickets Cerrados', '80', 'Goal: 30%'],
    ['Tickets mes anterior', '200', 'Goal: 70%'],
];

$tabla = new TablaTicketsYEvolucion($datos);
$tabla->render();

echo "</div>";
echo "<div class='alarmaYBackupClientes'>";
require 'alarmaYBackupClientes.php';

echo "</div>";
echo "<div class= 'salaDeEspera'>";
require 'salaDeEspera.php';

echo "</div>";
echo "</div>";
?>