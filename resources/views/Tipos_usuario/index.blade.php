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
    <h1>Listado de tipos de usuario</h1>
    <a class="btn btn-primary" href="tipos_usuario/create">crear un nuevo tipo de usuario</a>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Nivel</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($tipo_usuario as $tipo_usuario)
        <tr>
            <td>{!! $tipo_usuario->id !!}</td>
            <td>{!! $tipo_usuario->nombre !!}</td>
            <td>{!! $tipo_usuario->nivel !!}</td>
            <td>{!! $tipo_usuario->status !!}</td>
            <td>
                <a class="btn btn-primary" href="{!! 'tipos_usuario/'.$tipo_usuario->id !!}">Detalle</a>
                <a class="btn btn-warning" href="{!! 'tipos_usuario/'.$tipo_usuario->id.'/edit' !!}">Editar</a>
                {!! Form::open(['method' => 'DELETE' , 'url' => '/tipos_usuario/'.$tipo_usuario->id]) !!}
        {!! Form::submit('Eliminar',['class'=>'btn btn-outline-dark']) !!}
    {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <a class="btn btn-primary" href="{!! asset('cruds')!!}">Regresar a los cruds</a>
    </div>
    <x-layouts.footer/>
</body>
</html>