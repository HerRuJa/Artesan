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
    <h1>Editar proveedor</h1>

    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/proveedores/'.$proveedor->id]) !!}
        
        {!! Form::label ('nombre','Nombre del proveedor') !!}
        {!! Form::text ('nombre',$proveedor->nombre,['placeholder'=>'Ingresa nombre del proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('rfc','RFC del proveedor') !!}
        {!! Form::text ('rfc',$proveedor->rfc,['placeholder'=>'Ingresa rfc del proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('razon_social','Razon social del proveedor') !!}
        {!! Form::text ('razon_social',$proveedor->razon_social,['placeholder'=>'Ingresa razon social del proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('direccion','Direccion del proveedor') !!}
        {!! Form::text ('direccion',$proveedor->direccion,['placeholder'=>'Ingresa direccion del proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('email','Email del proveedor') !!}
        {!! Form::text ('email',$proveedor->email,['placeholder'=>'Ingresa email del proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('contacto','Nombre del proveedor') !!}
        {!! Form::text ('contacto',$proveedor->contacto,['placeholder'=>'Ingresa contacto del proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('id_pais','Pais:') !!}
        {!! Form::select ('id_pais', $pais->pluck('nombre','id')->all() , $proveedor->id_pais ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('id_entidad','Entidad:') !!}
        {!! Form::select ('id_entidad', $entidad->pluck('nombre','id')->all() , $proveedor->id_entidad ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('municipio_id','Entidad:') !!}
        {!! Form::select ('municipio_id', $municipio->pluck('nombre','id')->all() , $proveedor->municipio_id ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('cp','CP del proveedor') !!}
        {!! Form::text ('cp',$proveedor->cp,['placeholder'=>'Ingresa CP del proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('colonia','Colonia del proveedor') !!}
        {!! Form::text ('colonia',$proveedor->colonia,['placeholder'=>'Ingresa colonia del proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('telefono','Telefono del proveedor') !!}
        {!! Form::text ('telefono',$proveedor->telefono,['placeholder'=>'Ingresa telefono del proveedor']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , $proveedor->status ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar proveedor',['class'=>'btn btn-outline-dark']) !!}
        {!! Form::close() !!}
        </div>
        <x-layouts.footer/>
</body>
</html>