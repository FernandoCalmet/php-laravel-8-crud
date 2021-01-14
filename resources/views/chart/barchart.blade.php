<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarCharts de Usuarios</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js" integrity="sha512-SuxO9djzjML6b9w9/I07IWnLnQhgyYVSpHZx0JV97kGBfTIsUYlWflyuW4ypnvhBrslz1yJ3R+S14fdCWmSmSA==" crossorigin="anonymous"></script>
</head>
<body>
    <div style="height: 400px; width: 900px; margin: auto;">
        <canvas id="barChart"></canvas>
    </div>

    <script>
        $(function(){
            var data = <?php echo json_encode($data) ?>;
            var barCanvas = $("#barChart");
            var barChart = new Chart(barCanvas, {
                type: 'bar',
                data: {
                    labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                    datasets: [
                        {
                            label: 'Crecimiento de nuevos usuarios 2020',
                            data: data,
                            backgroundColor: ['blue', 'orange', 'green', 'red', 'indigo', 'violet', 'yellow', 'pink', 'silver', 'gold', 'purple', 'brown']
                        }
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        })
    </script>
</body>
</html>