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
        </style>
    </head>
<body>
<x-layouts.navigation/>
<div class="container cont">
    <h1>Detalle de proveedor</h1>

    <h2>Nombre: {!! $proveedor->nombre !!}</h2>
    <h2>RFC: {!! $proveedor->rfc !!}</h2>
    <h2>Razon social: {!! $proveedor->razon_social !!}</h2>
    <h2>Direccion: {!! $proveedor->direccion !!}</h2>
    <h2>Email: {!! $proveedor->email !!}</h2>
    <h2>Contacto: {!! $proveedor->contacto !!}</h2>

    <h2>Pais: {!! $proveedor->paises->nombre !!}</h2>

    <h2>Entidad: {!! $proveedor->entidades->nombre !!}</h2>

    <h2>Municipio: {!! $proveedor->municipios->nombre !!}</h2>

    <h2>CP: {!! $proveedor->cp !!}</h2>
    <h2>Colonia: {!! $proveedor->colonia !!}</h2>
    <h2>Telefono: {!! $proveedor->telefono !!}</h2>
    <h2>Status: {!! $proveedor->status !!}</h2>

    <br />

    <a class="btn btn-primary" href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>
    </div>
    <x-layouts.footer/>
</body>
</html>