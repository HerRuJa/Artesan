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
    <h1>Crear producto</h1>

    {!! Form::open(['url'=>'/productos']) !!}

        {!! Form::label ('nombre','Nombre del producto') !!}
        {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del producto']) !!}
        <br />
        <br />
        {!! Form::label ('descripcion','Descripcion del producto') !!}
        {!! Form::text ('descripcion',null,['placeholder'=>'Ingresa descripcion del producto']) !!}
        <br />
        <br />
        {!! Form::label ('existencia','existencia del producto') !!}
        {!! Form::text ('existencia',null,['placeholder'=>'Ingresa existencia del producto']) !!}
        <br />
        <br />
        {!! Form::label ('precio_compra','Precio compra del producto') !!}
        {!! Form::text ('precio_compra',null,['placeholder'=>'Ingresa precio compra del producto']) !!}
        <br />
        <br />
        {!! Form::label ('precio_venta','Precio venta del producto') !!}
        {!! Form::text ('precio_venta',null,['placeholder'=>'Ingresa precio venta del producto']) !!}
        <br />
        <br />
        {!! Form::label ('stock','Stock del producto') !!}
        {!! Form::text ('stock',null,['placeholder'=>'Ingresa stock del producto']) !!}
        <br />
        <br />
        
        {!! Form::label ('categoria_id','Categoria:') !!}
        {!! Form::select ('categoria_id', $categoria->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />
        {!! Form::label ('id_proveedor','Proveedor:') !!}
        {!! Form::select ('id_proveedor', $proveedor->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar producto') !!}
        {!! Form::close() !!}
        </div>
        <x-layouts.footer/>
</body>
</html>