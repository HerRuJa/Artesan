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
        .cont {
            margin-bottom: 260px;
            margin-top: 120px;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }
        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }
        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }
        .table-sm th,
        .table-sm td {
            padding: 0.3rem;
        }
        .table-bordered {
            border: 1px solid #dee2e6;
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }
        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }
        .text-center {
            text-align: center;
        }
        .logo-img {
            max-height: 100px;
        }
    </style>
    </head>
    <body>
        
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-litle">Reporte de productos - <?= $date; ?></h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th style="width: 40px">PROVEEDOR</th>
                                <th style="width: 40px">PRODUCTO</th>
                                <th style="width: 40px">EXISTENCIA</th>
                                <th style="width: 40px">PRECIO COMPRA</th>
                                <th style="width: 40px">PRECIO VENTA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $producto) { ?>
                                <tr>
                                        <td><?= $producto->id ?></td>
                                        <td><?= $producto->proveedores->nombre ?></td>
                                        <td><?= $producto->nombre ?></td>
                                        <td><?= $producto->existencia ?></td>
                                        <td><?= $producto->precio_compra ?></td>
                                        <td><?= $producto->precio_venta ?></td>
                                </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <img src="{{ asset('fotos/logoSinFondo.png') }}" alt="Logo de la tienda" style="max-height: 100px;">
        </div>
    
</body>
</html>