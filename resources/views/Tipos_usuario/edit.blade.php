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
    <h1>Editar tipo de usuario</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/tipos_usuario/'.$tipo_usuario->id]) !!}
        {!! Form::label ('nombre','Nombre del tipo de usuario') !!}
        {!! Form::text ('nombre',$tipo_usuario->nombre,['placeholder'=>'Ingresa nombre del tipo de usuario']) !!}
        <br />
        <br />

        {!! Form::label ('nivel','Nivel del tipo de usuario') !!}
        {!! Form::text ('nivel',$tipo_usuario->nivel,['placeholder'=>'Ingresa el nivel del tipo de usuario']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $tipo_usuario->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Editar tipo de usuario',['class'=>'btn btn-outline-dark']) !!}
        {!! Form::close() !!}
        </div>
        <x-layouts.footer/>
</body>
</html>
