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
    <h1>Listado de detalle_ventas</h1>
    <a class="btn btn-primary" href="detalle_venta/create">Crear un nuevo detalle_venta</a>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>ID venta</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio compra</th>  
            <th>Precio venta</th>            
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($detalle_venta as $detalle_venta)
        <tr>
            <td>{!! $detalle_venta->id !!}</td>
            <td>{!! $detalle_venta->venta_id !!}</td>
            <td>{!! $detalle_venta->productos->nombre !!}</td>
            <td>{!! $detalle_venta->cantidad !!}</td> 
            <td>{!! $detalle_venta->precio_compra !!}</td>
            <td>{!! $detalle_venta->precio_venta !!}</td>            
            <td>{!! $detalle_venta->status !!}</td>
            <td>
                <a class="btn btn-primary" href="{!! 'detalle_venta/'.$detalle_venta->id !!}">Detalle</a>              
                <a class="btn btn-warning" href="{!! 'detalle_venta/'.$detalle_venta->id.'/edit' !!}">Editar</a>

                {!! Form::open(['method' => 'DELETE' , 'url' => '/detalle_venta/'.$detalle_venta->id]) !!}
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
