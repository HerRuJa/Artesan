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
    <h1>Listado de ventas</h1>
    <a class="btn btn-primary" href="ventas/create">Crear un nuevo venta</a>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Fecha</th>
            <th>Subtotal</th>
            <th>IVA</th>  
            <th>Total</th>
            <th>Pago</th>
            <th>Usuario</th>           
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($venta as $venta)
        <tr>
            <td>{!! $venta->id !!}</td>
            <td>{!! $venta->clientes->name !!}</td> <!-- cliente-->
            <td>{!! $venta->fecha !!}</td>
            <td>{!! $venta->subtotal !!}</td>
            <td>{!! $venta->iva !!}</td>
            <td>{!! $venta->total !!}</td>
            <td>{!! $venta->tipos_pago->nombre !!}</td>
            <td>{!! $venta->users->name !!}</td>             
            <td>{!! $venta->status !!}</td>
            <td>
                <a class="btn btn-primary" href="{!! 'ventas/'.$venta->id !!}">Detalle</a>              
                <a class="btn btn-warning" href="{!! 'ventas/'.$venta->id.'/edit' !!}">Editar</a>

                {!! Form::open(['method' => 'DELETE' , 'url' => '/ventas/'.$venta->id]) !!}
                    {!! Form::submit('Eliminar',['class'=>'btn btn-outline-dark']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
    <br/>
    <a class="btn btn-primary" href="{!! asset('cruds') !!}">REGRESAR A LOS CRUDS</a>
    </div>
    <x-layouts.footer/>
</body>
</html>
