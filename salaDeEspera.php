<link rel="stylesheet" href="./css/salaDeEspera.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

<div class="containerSalaDeEspera">
    <?php
    $clubs = [
        [
            'nombre' => 'CASLA',
            'maximo' => 400,
            'activas' => 200,
            'cola' => 0
        ],
        [
            'nombre' => 'CARC',
            'maximo' => 400,
            'activas' => 400,
            'cola' => 200
        ],
        [
            'nombre' => 'VELEZ',
            'maximo' => 400,
            'activas' => 100,
            'cola' => 0
        ],
    ];

    echo "<div class='grafica'>";
    echo "<canvas id='canvas'></canvas>";
    echo "</div>";

    // Crear los datos para la gráfica
    $labels = array_column($clubs, 'nombre');
    $maximo = array_column($clubs, 'maximo');
    $activas = array_column($clubs, 'activas');
    $cola = array_column($clubs, 'cola');


    // Crear la gráfica con los datos correspondientes
    echo "<script>";
    echo "new Chart(document.getElementById('canvas'), {";
    echo "  type: 'horizontalBar',";
    echo "  data: {";
    echo "    labels: " . json_encode($labels) . ",";
    echo "datasets: [";
    echo "  {";
    echo "    label: 'Máximo',";
    echo "    backgroundColor: '#375964',";
    echo "    borderColor: '#375964',";
    echo "    borderWidth: 1,";
    echo "    data: " . json_encode($maximo) . ",";
    echo "    stack: 'Stack 0',";
    echo "  },";
    echo "  {";
    echo "    label: 'Activas',";
    echo "    backgroundColor: '#218d3d',";
    echo "    borderColor: '#218d3d',";
    echo "    borderWidth: 1,";
    echo "    data: " . json_encode($activas) . ",";
    echo "    stack: 'Stack 1',";
    echo "  },";
    echo "  {";
    echo "    label: 'En cola',";
    echo "    backgroundColor: '#ffae06',";
    echo "    borderColor: '#ffae06',";
    echo "    borderWidth: 1,";
    echo "    data: " . json_encode($cola) . ",";
    echo "    stack: 'Stack 1',";
    echo "  }";
    echo "],";
    echo "  },";
    echo "  options: {";
    echo "    scales: {";
    echo "      xAxes: [{";
    echo "        ticks: {";
    echo "          beginAtZero: true,";
    echo "          max: 1000,";
    echo "          stepSize: 100";
    echo "        }";
    echo "      }],";
    echo "      yAxes: [{";
    echo "        ticks: {";
    echo "          beginAtZero: true,";
    echo "          padding: 25";
    echo "        },";
    echo "        stacked: true";
    echo "      }]";
    echo "    },";
    echo "    legend: {";
    echo "      display: true,";
    echo "      position: 'bottom',";
    echo "      labels: {";
    echo "        fontColor: '#333',";
    echo "        usePointStyle: true";
    echo "      }";
    echo "    },";
    // Configurar opciones de tamaño de la gráfica
    echo "    responsive: true,";
    echo "    maintainAspectRatio: true,";
    echo "    aspectRatio: 2.5,";
    echo "    width: 650,";
    echo "    height: 450,";
    // Fin de opciones de tamaño de la gráfica
    echo "    plugins: {";
    echo "      afterDatasetsDraw: function(chart) {";
    echo "        var ctx = chart.ctx;";
    echo "        chart.data.datasets.forEach(function(dataset, i) {";
    echo "          var meta = chart.getDatasetMeta(i);";
    echo "          if (!meta.hidden) {";
    echo "            meta.data.forEach(function(element, index) {";
    echo "              var xPos = element._model.x - 35;";
    echo "              var yPos = element._model.y + (element._model.height / 2) +8;";
    echo "              ctx.fillStyle = 'black';";
    echo "              ctx.font = 'bold 20px sans-serif';";
    echo "              var dataString = dataset.data[index].toString() + ' conexiones';";
    echo "              ctx.fillText(dataString, xPos, yPos);";
    echo "            });";
    echo "          }";
    echo "        });";
    echo "      }";
    echo "    }";
    echo "  }";
    echo "});";
    echo "</script>";
    ?>
</div>