<?php
class SalaDeEspera
{
    public $cantPersonas;
    public $cantEntradasVendidas;
    public $cantEntradasTotales;
    public $cantEntradasDisponibles;

    public function __construct($cantPersonas, $cantEntradasVendidas, $cantEntradasTotales, $cantEntradasDisponibles)
    {
        $this->cantPersonas = $cantPersonas;
        $this->cantEntradasVendidas = $cantEntradasVendidas;
        $this->cantEntradasTotales = $cantEntradasTotales;
        $this->cantEntradasDisponibles = $cantEntradasDisponibles;
    }

    public function render()
    {
        echo "<ul>";
        echo "<li>Cantidad de personas en sala de espera: $this->cantPersonas</li>";
        echo "<li>Cantidad de entradas vendidas: $this->cantEntradasVendidas</li>";
        echo "<li>Cantidad de entradas totales: $this->cantEntradasTotales</li>";
        echo "<li>Cantidad de entradas disponibles actualmente: $this->cantEntradasDisponibles</li>";
        echo "</ul>";
    }
}
?>