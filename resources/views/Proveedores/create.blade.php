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
    <h1>Crear Proveedores</h1>

    {!! Form::open(['url'=>'/proveedores']) !!}
        
        

        {!! Form::label ('nombre','Nombre del Proveedores') !!}
        {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del Proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('rfc','Rfc del Proveedor') !!}
        {!! Form::text ('rfc',null,['placeholder'=>'Ingresa el rfc del Proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('razon_social','Razon social del Proveedor') !!}
        {!! Form::text ('razon_social',null,['placeholder'=>'Ingresa la razon social del Proveedor']) !!}
        <br />
        <br />
        {!! Form::label ('direccion','Direccion del Proveedor') !!}
        {!! Form::text ('direccion',null,['placeholder'=>'Ingresa la direccion del Proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('email','Email del Proveedor') !!}
        {!! Form::text ('email',null,['placeholder'=>'Ingresa el email del Proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('contacto','Contacto del Proveedor') !!}
        {!! Form::text ('contacto',null,['placeholder'=>'Ingresa el contacto del Proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('id_pais','Pais:') !!}
        {!! Form::select ('id_pais', $pais->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('id_entidad','Entidad:') !!}
        {!! Form::select ('id_entidad', $entidad->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('municipio_id','Municipio:') !!}
        {!! Form::select ('municipio_id', $municipio->pluck('nombre','id')->all() , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('cp','CP del Proveedor') !!}
        {!! Form::text ('cp',null,['placeholder'=>'Ingresa el CP del Proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('colonia','colonia del Proveedor') !!}
        {!! Form::text ('colonia',null,['placeholder'=>'Ingresa el colonia del Proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('telefono','Telefono del Proveedor') !!}
        {!! Form::text ('telefono',null,['placeholder'=>'Ingresa el telefono del Proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar Proveedor') !!}
        {!! Form::close() !!}
        </div>
        <x-layouts.footer/>
</body>
</html>