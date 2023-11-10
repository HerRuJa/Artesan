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
                <h3 class="box-litle">Artesan S.A. de C.V.</h3> <br />
                <h3 class="box-litle">DPF1234531234HFSS</h3> <br />
                <h3 class="box-litle">Fecha de impresion - <?= $date; ?></h3> <br />
                <h3 class="box-litle">Cliente: </h3>
                <h3 class="box-litle"><?= $data_venta->proveedores->nombre ?>
                &nbsp; RFC: <?= $data_venta->proveedores->rfc ?></h3><br />
                <h3 class="box-litle">Correo: &nbsp;&nbsp;<?= $data_venta->proveedores->email ?></h3><br />
                <h3 class="box-litle">Contacto: &nbsp;&nbsp;<?= $data_venta->proveedores->contacto ?></h3>
                <h3 class="box-litle"><?= 
                $data_venta->proveedores->direccion.' Colonia '.
                $data_venta->proveedores->colonia.' CP '.
                $data_venta->proveedores->cp.', '.
                $data_venta->proveedores->municipios->nombre.' Edo. de '.
                $data_venta->proveedores->entidades->nombre.', '.
                $data_venta->proveedores->paises->nombre;
                
                ?> </h3><br />
                
                <h3 class="box-litle">Fecha de compra - <?= $data_venta->fecha; ?></h3> <br />
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">Cant</th>
                            <th style="width: 40px">Producto</th>
                            <th style="width: 40px">Precio</th>
                            <th style="width: 40px">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data_detalle_venta as $det) { ?>
                            <tr>
                                <td><?= $det->cantidad; ?></td>
                                <td><?= $det->productos->nombre; ?></td>
                                <td><?= $det->precio_venta; ?></td>
                                <td><?= $det->precio_venta * $det->cantidad; ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td colspan="4">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                            <td>Subtotal</td>
                            <td><?= $data_venta->subtotal; ?></td>
                        </tr>
                        <tr>
                        <td colspan="2">&nbsp;</td>
                            <td>IVA</td>
                            <td><?= $data_venta->iva; ?></td>
                        </tr>
                        <tr>
                        <td colspan="2">&nbsp;</td>
                            <td>TOTAL</td>
                            <td><?= $data_venta->subtotal + $data_venta->iva; ?></td>
                        </tr>
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