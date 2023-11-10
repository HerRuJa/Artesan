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
    <h1>Editar detalle_venta</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/detalle_venta/'.$detalle_venta->id]) !!}
        
        {!! Form::label ('venta_id','Venta:') !!}
        {!! Form::select ('venta_id', $venta->pluck('id','id')->all() , $detalle_venta->venta_id ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('producto_id','Producto:') !!}
        {!! Form::select ('producto_id', $producto->pluck('nombre','id')->all() , $detalle_venta->producto_id ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('cantidad','cantidad del detalle_venta') !!}
        {!! Form::text ('cantidad',$detalle_venta->cantidad,['placeholder'=>'Ingresa cantidad del detalle_venta']) !!}
        <br />
        <br />
        {!! Form::label ('precio_compra','precio_compra del detalle_venta') !!}
        {!! Form::text ('precio_compra',$detalle_venta->precio_compra,['placeholder'=>'Ingresa precio_compra del detalle_venta']) !!}
        <br />
        <br />
        {!! Form::label ('precio_venta','precio_venta del detalle_venta') !!}
        {!! Form::text ('precio_venta',$detalle_venta->precio_venta,['placeholder'=>'Ingresa precio_venta del detalle_venta']) !!}
        <br />
        <br />
        
        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $detalle_venta->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar detalle_venta',['class'=>'btn btn-outline-dark']) !!}
        {!! Form::close() !!}
        </div>
        <x-layouts.footer/>
</body>
</html>