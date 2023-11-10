<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Artesan</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{!! asset('') !!}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{!! asset('css/styles.css') !!}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <style>
        .cont{
            margin-bottom:  240px;
            margin-top:  120px;
        }
        .container2 {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        </style>
    </head>
<body>
    <x-layouts.navigation/>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script>
        <script src="{!! asset('code/highcharts.js') !!}"> </script>
        <script src="{!! asset('code/highcharts.3d.js') !!}"> </script>
        <script src="{!! asset('code/modules/exporting.js') !!}"> </script>
        <script src="{!! asset('code/modules/export-data.js') !!}"> </script>

        <section>
            <div class="container2">
                <div class="section-header">
                    <h2 class="section-title">Gráfica de áreas</h2>
                    <h2 class="section-title">Productos existentes</h2>
                </div>
                <div class="row">
                    <?php 
                    $campos = "";
                    foreach ($productos as $prod) {
                        $campos .= "['" . $prod->nombre . "', " . $prod->existencia . "],";
                    }
                    ?>
                    <div id="container" style="min-width: 600px; height: 500px; margin: 0 auto;"></div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
            Highcharts.chart('container', {
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Cantidad de existencias por producto'
                },
                subtitle: {
                    text: 'Mes de junio'
                },
                xAxis: {
                    type: 'category',
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Total de existencia',
                    }
                },
                legend: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: 'Total de existencia: <b>{point.y:.0f}</b>'
                },
                series: [{
                    name: 'Products',
                    colorByPoint: true,
                    data: [
                        <?= $campos ?>
                    ],
                    dataLabels: {
                        enabled: true,
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana',
                        }
                    }
                }]
            })
        </script>
    <x-layouts.footer/>
</body>
</html>