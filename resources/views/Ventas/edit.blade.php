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
    <h1>Editar venta</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/ventas/'.$venta->id]) !!}
        
        {!! Form::label ('id_cliente','Entidad:') !!}
        {!! Form::select ('id_cliente', $cliente->pluck('name','id')->all() , $venta->id_cliente ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('fecha','fecha del venta') !!}
        {!! Form::text ('fecha',$venta->fecha,['placeholder'=>'Ingresa fecha del venta']) !!}
        <br />
        <br />
        {!! Form::label ('subtotal','subtotal del venta') !!}
        {!! Form::text ('subtotal',$venta->subtotal,['placeholder'=>'Ingresa subtotal del venta']) !!}
        <br />
        <br />
        {!! Form::label ('iva','IVA del venta') !!}
        {!! Form::text ('iva',$venta->iva,['placeholder'=>'Ingresa iva del venta']) !!}
        <br />
        <br />
        {!! Form::label ('total','total del venta') !!}
        {!! Form::text ('total',$venta->total,['placeholder'=>'Ingresa total del venta']) !!}
        <br />
        <br />
        {!! Form::label ('id_tipo_pago','Pago:') !!}
        {!! Form::select ('id_tipo_pago', $pago->pluck('nombre','id')->all() , $venta->id_tipo_pago ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('usuario_id','Usuario:') !!}
        {!! Form::select ('usuario_id', $usuario->pluck('name','id')->all() , $venta->usuario_id ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $venta->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar venta',['class'=>'btn btn-outline-dark']) !!}
        {!! Form::close() !!}
        </div>
        <x-layouts.footer/>
</body>
</html>