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
            margin-bottom:  260px;
            margin-top:  120px;
        }
        </style>
    </head>
    <body>
    <x-layouts.navigation/>

    <div class="container">
        <h1>Reportes en PDF</h1>
        <div class="row">
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-examples">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> REPORTE </th>
                            <th> VER </th>
                            <th> DESCARGAR </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ver productos ordenados por nombre</td>
                            <td>
                                <a href="{!! asset('productos_nombre/1') !!}" target="_blank">
                                    <button class="btn btn-block btn-outline-dark btn-xs">Ver</button></a>
                            </td>
                            <td>
                                <a href="{!! asset('productos_nombre/3') !!}" target="_blank">
                                    <button class="btn btn-block btn-outline-dark btn-xs">Descargar</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ver ticket de venta</td>
                            <td>
                                <a href="{!! asset('ticket/1/62') !!}" target="_blank">
                                    <button class="btn btn-block btn-outline-dark btn-xs">Ver</button></a>
                            </td>
                            <td>
                                <a href="{!! asset('ticket/3/53') !!}" target="_blank">
                                    <button class="btn btn-block btn-outline-dark btn-xs">Descargar</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ver ticket de compra</td>
                            <td>
                                <a href="{!! asset('ticket2/1/2') !!}" target="_blank">
                                    <button class="btn btn-block btn-outline-dark btn-xs">Ver</button></a>
                            </td>
                            <td>
                                <a href="{!! asset('ticket2/3/2') !!}" target="_blank">
                                    <button class="btn btn-block btn-outline-dark btn-xs">Descargar</button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <x-layouts.footer/>
</body>
</html>