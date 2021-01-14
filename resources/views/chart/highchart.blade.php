<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HighCharts de Usuarios</title>
</head>
<body>
    <div id="chart-container"></div>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        var data = <?php echo json_encode($data ?? '') ?>

        Highcharts.chart('chart-container', {
            title: {
                text: 'Crecimiento de usuarios nuevos, 2020'
            },
            subtitle: {
                text: 'Source: github.com/FernandoCalmet'
            },
            xAxis: {
                categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
            },
            yAxis: {
                title:{
                    text: 'Numero de usuarios nuevos'
                }
            },
            legend:{
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions:{
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'Usuario nuevo',
                data: data
            }],
            responsive: {
                rules: [
                    {
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions:{
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }
                ]
            }
        });
    </script>
</body>
</html>