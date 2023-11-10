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
<div class="container cont">
    <h1>Listado de Municipios</h1>
    <a class="btn btn-primary" href="municipios/create">Crear un nuevo Municipio</a>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Id_entidad</th>
            <th>Entidad</th>
            <th>Pais</th>
            <th>Nombre</th>             
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($municipio as $municipio)
        <tr>
            <td>{!! $municipio->id !!}</td>
            <td>{!! $municipio->id_entidad !!}</td>
            <td>{!! $municipio->entidades->nombre !!}</td>
            <td>{!! $municipio->entidades->paises->nombre !!}</td>
            <td>{!! $municipio->nombre !!}</td>             
            <td>{!! $municipio->status !!}</td>
            <td>
                <a class="btn btn-primary" href="{!! 'municipios/'.$municipio->id !!}">Detalle</a>              
                <a class="btn btn-warning" href="{!! 'municipios/'.$municipio->id.'/edit' !!}">Editar</a>

                {!! Form::open(['method' => 'DELETE' , 'url' => '/municipios/'.$municipio->id]) !!}
                    {!! Form::submit('Eliminar',['class'=>'btn btn-outline-dark']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    <br />
    <a class="btn btn-primary" href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>
    </div>
    <x-layouts.footer/>
</body>
</html>
