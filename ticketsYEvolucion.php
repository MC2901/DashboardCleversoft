<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tickets y Evolución</title>
    <link rel="stylesheet" href="./css/ticketsYEvolucion.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
</head>

<body>
    <div class="container">

        <?php
        echo "<h1 style='text-align:center'>Tickets y Evolución</h1>";
        class TicketsYEvolucion
        {
            public $title;
            public $data1;
            public $data2;
            public function __construct($title, $data1, $data2)
            {
                $this->title = $title;
                $this->data1 = $data1;
                $this->data2 = $data2;
            }

            public function render()
            {
                echo "<div class='celda'>";
                echo "<div class='celda-titulo'>$this->title</div>";
                echo "<div class='celda-data1'>$this->data1</div>";
                echo "<div class='celda-data2'>$this->data2</div>";
                echo "</div>";
            }
        }

        class TablaTicketsYEvolucion
        {
            public $datos;

            public function __construct($datos)
            {
                $this->datos = $datos;
            }

            public function render()
            {
                echo "<table class='ticketsYEvolucion'>";
                echo "<tr>";
                foreach ($this->datos as $d) {
                    echo "<td>";
                    $celda = new TicketsYEvolucion($d[0], $d[1], $d[2]);
                    $celda->render();
                    echo "</td>";
                }
                echo "</tr>";
                echo "</table>";
            }
        }
        ?>
        <canvas id="chartTickets"></canvas>
        <script>
            // Datos estáticos para los gráficos de ejemplo
            const dataSoporte = {
                label: "Soporte",
                backgroundColor: "#28a745",
                borderColor: "#28a745",
                borderWidth: 1,
                data: [12, 19, 3, 5, 2, 3, 7, 8, 2, 5, 6, 14]
            };

            const dataDesarrollo = {
                label: "Desarrollo",
                backgroundColor: "#ffae06",
                borderColor: "#ffae06",
                borderWidth: 1,
                data: [7, 11, 5, 8, 9, 2, 10, 6, 5, 3, 7, 8]
            };

            // Gráfico de tickets
            const chartTickets = new Chart(document.getElementById("chartTickets"), {
                type: "bar", // Cambiamos el tipo a "bar"
                data: {
                    labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
                    datasets: [dataSoporte, dataDesarrollo]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    },
                    maintainAspectRatio: false,
                    responsive: true
                }
            });
        </script>
    </div>
</body>

</html>