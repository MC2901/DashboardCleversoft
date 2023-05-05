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
                    echo "<td class= 'informacionTickets'>";
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
            const ticketsAbiertos = {
                label: "Tickets Abiertos",
                borderColor: "#28a745",
                borderWidth: 1.7,
                fill: false,
                data: [10, 19, 7, 15, 10, 7, 4, 8, 12, 8, 10, 19, 15, 20, 12, 5]
            };
            const ticketsCerrados = {
                label: "Tickets cerrados",
                borderColor: "#0004ff",
                borderWidth: 1.7,
                fill: false,
                data: [7, 15, 4, 12, 6, 7, 2, 4, 8, 5, 5, 15, 10, 13, 12]
            };
            const ticketsUrgentes = {
                label: "Tickets urgentes",
                borderColor: "#dc3545",
                borderWidth: 1.7,
                fill: false,
                data: [1, 4, 1, 3, 2, 1, 0, 1, 2, 0, 3, 4, 1, 5, 4, 0]
            };

            const ticketsVencidosSLA = {
                label: "Tickets cumplidos SLA",
                borderColor: "#ffae06",
                borderWidth: 1.7,
                fill: false,
                data: [8, 17, 6, 15, 9, 6, 4, 8, 10, 7, 10, 15, 13, 16]
            };

            // Gráfico de tickets
            const chartTickets = new Chart(document.getElementById("chartTickets"), {
                type: "line",
                data: {
                    labels: ["Months: 13", "12", "11", "10", "9", "8", "7", "6", "5", "4", "3", "2", "1", "Today"],
                    datasets: [ticketsAbiertos, ticketsUrgentes, ticketsCerrados, ticketsVencidosSLA]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                display: true
                            }
                        }]
                    },
                    maintainAspectRatio: false,
                    responsive: true
                },
                
            });
        </script>
       </div>
    </body>



</html>