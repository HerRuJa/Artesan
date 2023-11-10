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
    <h1>Detalle de usuario</h1>

    <h2>Nombre: {!! $usuario->name !!}</h2>
    <h2>Ap Paterno: {!! $usuario->ap_pat !!}</h2>
    <h2>Ap Materno: {!! $usuario->ap_mat !!}</h2>
    <h2>Email: {!! $usuario->email !!}</h2>
    <h2>Telefono: {!! $usuario->telefono !!}</h2>
    <h2>Direccion: {!! $usuario->direccion !!}</h2>

    <h2>Pais: {!! $usuario->paises->nombre !!}</h2>
    <h2>Entidad: {!! $usuario->entidades->nombre !!}</h2>
    <h2>Municipio: {!! $usuario->municipios->nombre !!}</h2>
    <h2>Tipo de usuario: {!! $usuario->tipos_usuario->nombre !!}</h2>

    <h2>Colonia: {!! $usuario->colonia !!}</h2>
    <h2>CP: {!! $usuario->cp !!}</h2>
    <h2>Fecha de nacimiento: {!! $usuario->fecha_naci !!}</h2>
    <h2>Password: {!! $usuario->password !!}</h2>

    <h2>Status: {!! $usuario->status !!}</h2>

    <br />

    <a class="btn btn-primary" href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>
    </div>
    <x-layouts.footer/>
</body>
</html>