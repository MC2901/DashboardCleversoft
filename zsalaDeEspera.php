<?php

class SalaDeEspera
{
    public function render()
    {
        $clubs = [
            [
                'nombre' => 'CASLA',
                'maximo' => 400,
                'activas' => 100,
                'cola' => 0
            ],
            [
                'nombre' => 'CARC',
                'maximo' => 300,
                'activas' => 300,
                'cola' => 42
            ],
            [
                'nombre' => 'VELEZ',
                'maximo' => 400,
                'activas' => 400,
                'cola' => 65
            ],
        ];

        echo "<canvas id='canvas'></canvas>";

        $data = [
            'maximo' => array_column($clubs, 'maximo'),
            'activas' => array_column($clubs, 'activas'),
            'cola' => array_column($clubs, 'cola')
        ];
        $labels = array_column($clubs, 'nombre');

        // Agregar barras de 'Maximo', 'Activas' y 'Cola' si hay algún valor
        $datasets = [];
        if (max($data['maximo']) > 0) { // Si el valor máximo es 0, no se muestra ninguna barra
            $arr = [
                'backgroundColor' => 'rgba(255, 99, 132, 1)', // Color rojo
                'borderWidth' => 1,
                'borderColor' => 'rgba(255, 99, 132, 1)',
                'data' => $data['maximo'],
                'label' => 'Maximo',
                'stack' => 'Stack 0',
            ];
            array_push($datasets, $arr);
        }
        if (max($data['activas']) > 0) {
            $arr = [
                'backgroundColor' => 'rgba(54, 162, 235, 1)', // Color azul
                'borderColor' => 'rgba(54, 162, 235, 1)',
                'borderWidth' => 1,
                'data' => $data['activas'],
                'label' => 'Activas',
                'stack' => 'Stack 1',
            ];
            array_push($datasets, $arr);
        }
        if (max($data['cola']) > 0) {
            $arr = [
                'backgroundColor' => 'rgba(255, 206, 86, 1)', // Barra amarilla
                'borderColor' => 'rgba(255, 206, 86, 1)',
                'borderWidth' => 1,
                'data' => $data['cola'],
                'label' => 'Cola',
                'stack' => 'Stack 2',
            ];
            array_push($datasets, $arr);
        }

        // Añadir valores de referencia en el eje X
        echo "<script>";
        echo "new Chart(document.getElementById('canvas'), {";
        echo "  type: 'horizontalBar',";
        echo "  data: {";
        echo "    labels: " . json_encode($labels) . ",";
        echo "    datasets: " . json_encode($datasets, JSON_NUMERIC_CHECK);
        echo "  },";
        echo "  options: {";
        echo "    legend: { display: false },";
        echo "    title: {";
        echo "      display: true,";
        echo "      text: 'Leyenda:   Maximo = Azul  |  Activas = Rojo  |  Cola = Amarillo',";
        echo "      fontSize: 14,";
        echo "      fontColor: 'black',";
        echo "      fontFamily: 'Arial',";
        echo "      position: 'bottom',";
        echo "      padding: 10";
        echo "    },";
        echo "    scales: {";
        echo "      xAxes: [{";
        echo "        ticks: {";
        echo "          fontSize: 14,";
        echo "          fontColor: 'black',";
        echo "          fontFamily: 'Arial',";
        echo "          stepSize: 100,";
        echo "          beginAtZero: true,";
        echo "          max: 1000,"; // Establecer el valor máximo del eje X basado en el máximo de conexiones
        echo "        },";
        echo "        gridLines: { display: false }";
        echo "      }],";
        echo "      yAxes: [{";
        echo "        ticks: { fontSize: 20, fontColor: 'black', fontFamily: 'Arial' },";
        echo "        gridLines: { drawBorder: false },";
        echo "      }],";
        echo "    }";
        echo "  }";
        echo "});";
        echo "</script>";
    }
}
