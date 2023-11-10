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
    <h1>Editar detalle_compra</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/detalle_compra/'.$detalle_compra->id]) !!}
        
        {!! Form::label ('compra_id','Compra:') !!}
        {!! Form::select ('compra_id', $compra->pluck('id','id')->all() , $detalle_compra->compra_id ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('producto_id','Producto:') !!}
        {!! Form::select ('producto_id', $producto->pluck('nombre','id')->all() , $detalle_compra->producto_id ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('cantidad','cantidad del detalle_compra') !!}
        {!! Form::text ('cantidad',$detalle_compra->cantidad,['placeholder'=>'Ingresa cantidad del detalle_compra']) !!}
        <br />
        <br />
        {!! Form::label ('precio_compra','precio_compra del detalle_compra') !!}
        {!! Form::text ('precio_compra',$detalle_compra->precio_compra,['placeholder'=>'Ingresa precio_compra del detalle_compra']) !!}
        <br />
        <br />
        {!! Form::label ('precio_venta','precio_venta del detalle_compra') !!}
        {!! Form::text ('precio_venta',$detalle_compra->precio_venta,['placeholder'=>'Ingresa precio_venta del detalle_compra']) !!}
        <br />
        <br />
        
        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $detalle_compra->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar detalle_compra',['class'=>'btn btn-outline-dark']) !!}
        {!! Form::close() !!}
        </div>
        <x-layouts.footer/>
</body>
</html>