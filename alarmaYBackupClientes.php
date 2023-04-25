<link rel="stylesheet" href="./css/alarmaYBackupClientes.css">

<?php
class AlarmaYBackupClientes
{
    public $clientes;

    public function __construct($clientes)
    {
        $this->clientes = $clientes;
    }

    public function render()
    {
        echo "<table>";
        for ($i = 0; $i < 4; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 6; $j++) {
                $index = $i * 6 + $j;
                if ($index < count($this->clientes)) {
                    $cliente = $this->clientes[$index];
                    echo "<td>";
                    echo "<div class='cliente-nombre'>$cliente[0]</div>";
                    echo "<div class='cliente-backup'>$cliente[1]</div>";
                    echo "</td>";
                } else {
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>