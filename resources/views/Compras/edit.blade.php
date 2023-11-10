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
    <h1>Editar compra</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/compras/'.$compra->id]) !!}
        
        {!! Form::label ('id_proveedor','Proveedor:') !!}
        {!! Form::select ('id_proveedor', $proveedor->pluck('nombre','id')->all() , $compra->id_proveedor ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('fecha','Fecha del compra') !!}
        {!! Form::text ('fecha',$compra->fecha,['placeholder'=>'Ingresa fecha de la compra']) !!}
        <br />
        <br />

        {!! Form::label ('subtotal','Subtotal del compra') !!}
        {!! Form::text ('subtotal',$compra->subtotal,['placeholder'=>'Ingresa subtotal de la compra']) !!}
        <br />
        <br />

        {!! Form::label ('iva','IVA de la compra') !!}
        {!! Form::text ('iva',$compra->iva,['placeholder'=>'Ingresa IVA del compra']) !!}
        <br />
        <br />

        {!! Form::label ('total','Total de la compra') !!}
        {!! Form::text ('total',$compra->total,['placeholder'=>'Ingresa total de la compra']) !!}
        <br />
        <br />

        {!! Form::label ('usuario_id','Usuario:') !!}
        {!! Form::select ('usuario_id', $usuario->pluck('name','id')->all() , $compra->usuario_id ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $compra->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar compra',['class'=>'btn btn-outline-dark']) !!}
        {!! Form::close() !!}
        </div>
        <x-layouts.footer/>
</body>
</html>