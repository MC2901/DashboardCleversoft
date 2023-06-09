<link rel="stylesheet" href="./css/estadoServidores.css">

<?php
class EstadoServidores
{
  private $title;
  private $serverData;

  public function __construct($title, $serverData)
  {
    $this->title = $title;
    $this->serverData = $serverData;
  }

  private function getProgressBarColor($percentage)
  {
    if ($percentage <= 45) {
      return '#25ff06';
    } elseif ($percentage <= 80) {
      return '#ffae06';
    } else {
      return 'red';
    }
  }

  public function renderProgressBar($percentage)
  {
    $color = $this->getProgressBarColor($percentage);
    echo "<div class='progress-bar'>";
    echo "<div class='progress-bar-color' style='width: calc({$percentage}% - 2px); background-color: {$color};'></div>";
    echo "</div>";
  }

  public function render()
  {
    echo "<table class='estadoServidores'>";
    echo "<tr><th>Servidor</th><th>IP Servidor</th><th>Estado servidor</th><th>Estado SQL</th><th>Memoria ocupada</th></tr>";

    foreach ($this->serverData as $data) {
      echo "<tr class='estadoServidoresTr'>";
      echo "<td>{$data['Servidor']}</td>";
      echo "<td>{$data['IPServidor']}</td>";
    
      if ($data['EstadoSQL'] == true) {
        echo "<td class='icono'><i class='fas fa-check-circle' style='color:green;'></i></td>";
      } else {
        echo "<td class='icono'><i class='fas fa-times-circle' style='color:red;'></i></td>";
      }
    
      if ($data['EstadoServidor'] == true) {
        echo "<td class='icono'><i class='fas fa-check-circle' style='color:green;'></i></td>";
      } else {
        echo "<td class='icono'><i class='fas fa-times-circle' style='color:red;'></i></td>";
      }
    
      echo "<td class='progressBarContainer'>";
      $percentage = intval($data['Porcentaje']);
      echo "<span class='percentage'>$percentage%</span>";
      $this->renderProgressBar($percentage);
      echo "</td>";
      echo "</tr>";
    }

    echo "</table>";
  }
}
