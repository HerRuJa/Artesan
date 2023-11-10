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
    <h1>Listado de productos</h1>
    <a class="btn btn-primary" href="productos/create">Crear un nuevo producto</a>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Existencia</th>
            <th>Precio compra</th>
            <th>Precio venta</th>
            <th>Stock</th>
            <th>Categoria</th>
            <th>Proveedor</th>            
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($producto as $producto)
        <tr>
            <td>{!! $producto->id !!}</td>
            <td>{!! $producto->nombre !!}</td>
            <td>{!! $producto->descripcion !!}</td>
            <td>{!! $producto->existencia !!}</td>
            <td>{!! $producto->precio_compra !!}</td>
            <td>{!! $producto->precio_venta !!}</td>
            <td>{!! $producto->stock !!}</td>
            <td>{!! $producto->categorias->nombre !!}</td>
            <td>{!! $producto->proveedores->nombre !!}</td>            
            <td>{!! $producto->status !!}</td>
            <td>
                <a class="btn btn-primary" href="{!! 'productos/'.$producto->id !!}">Detalle</a>              
                <a class="btn btn-warning" href="{!! 'productos/'.$producto->id.'/edit' !!}">Editar</a>

                {!! Form::open(['method' => 'DELETE' , 'url' => '/productos/'.$producto->id]) !!}
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
