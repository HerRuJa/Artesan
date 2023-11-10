<!DOCTYPE html>
<html lang="es">
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
    <h1>Listado de fotos producto</h1>
    <a class="btn btn-primary" href="fotos_productos/create">Crear una foto</a>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Imagen</th> 
            <th>Ruta</th>             
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($fotos as $foto)
        <tr>
            <td>{!! $foto->id !!}</td>
            <td>{!! $foto->productos->nombre !!}</td>
             
            <td><img width="200" heigth=""src="../storage/fotografias/{!! $foto->ruta !!}" alt=""></td> 
            <td>{!! $foto->ruta !!}</td>           
            <td>{!! $foto->status !!}</td>
            <td>
                <a class="btn btn-primary" href="{!! 'fotos_productos/'.$foto->id !!}">Detalle</a>              
                <a class="btn btn-warning" href="{!! 'fotos_productos/'.$foto->id.'/edit' !!}">Editar</a>

                {!! Form::open(['method' => 'DELETE' , 'url' => '/fotos_productos/'.$foto->id]) !!}
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
