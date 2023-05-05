<link rel="stylesheet" href="./css/dashboard.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php
echo "<div class='dashboard grid-container'>";
echo "<div class= 'estadoServidores'>";
require 'estadoServidores.php';

$serverData = array(
    array('Servidor' => '301 Tickets', 'IPServidor' => 'cleversoft-301.homeip.net', 'EstadoSQL' => true, 'EstadoServidor' => true, 'Porcentaje' => '15%'),
    array('Servidor' => '201 ERB Web/Kiosk', 'IPServidor' => 'Cleversoft-201.homeip.net', 'EstadoSQL' => true, 'EstadoServidor' => true, 'Porcentaje' => '60%'),
    array('Servidor' => '302 Servidor Backups', 'IPServidor' => 'cleversoft-302.homeip.net', 'EstadoSQL' => true, 'EstadoServidor' => true, 'Porcentaje' => '25%'),
    array('Servidor' => '202 Miclub - CARC', 'IPServidor' => 'cleversoft-202.homeip.net', 'EstadoSQL' => true, 'EstadoServidor' => false, 'Porcentaje' => '90%'),
    array('Servidor' => '203 - Azure', 'IPServidor' => 'cleversoft-203.homeip.net', 'EstadoSQL' => true, 'EstadoServidor' => true, 'Porcentaje' => '20%')
  );

$estadoServidores = new EstadoServidores('Estado de Servidores', $serverData);
$estadoServidores->render();
echo "</div>";
echo "<div class='ticketsYEvolucion'>";
require 'ticketsYEvolucion.php';

$datos = [
    ['Tickets Abiertos', '43', 'Goal: 20%'],
    ['Tickets Urgentes', '3', 'Goal: 80%'],
    ['Tickets Criticos', '0', 'Goal: 30%'],
    ['Tickets vencidos SLA', '2', 'Goal: 90%'],
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