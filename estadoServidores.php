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
    if ($percentage <= 55) {
      return '#25ff06';
    } elseif ($percentage <= 85) {
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
    echo "<h1 style='text-align:center'>{$this->title}</h1>";
    echo "<table class='estadoServidores'>";
    echo "<tr><th>Servidor</th><th>Estado SQL</th><th>Memoria ocupada</th></tr>";

    foreach ($this->serverData as $data) {
      echo "<tr class='estadoServidoresTr'>";
      echo "<td>{$data['Servidor']}</td>";

      if ($data['Estado'] == true) {
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
