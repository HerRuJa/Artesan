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
    <h1>Listado de proveedores</h1>
    <a class="btn btn-primary" href="proveedores/create">Crear un nuevo proveedor</a>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>RFC</th>
            <th>Razon social</th>
            <th>Direccion</th>
            <th>Email</th>
            <th>Contacto</th>
            <th>Pais</th> 
            <th>Entidad</th>
            <th>Municipio</th>
            <th>CP</th>
            <th>Colonia</th>
            <th>Telefono</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($proveedor as $proveedor)
        <tr>
            <td>{!! $proveedor->id !!}</td>
            <td>{!! $proveedor->nombre !!}</td>
            <td>{!! $proveedor->rfc !!}</td>
            <td>{!! $proveedor->razon_social !!}</td>
            <td>{!! $proveedor->direccion !!}</td>
            <td>{!! $proveedor->email !!}</td>
            <td>{!! $proveedor->contacto !!}</td>
            <td>{!! $proveedor->paises->nombre !!}</td>
            <td>{!! $proveedor->entidades->nombre !!}</td>
            <td>{!! $proveedor->municipios->nombre !!}</td>
            <td>{!! $proveedor->cp !!}</td>   
            <td>{!! $proveedor->colonia !!}</td> 
            <td>{!! $proveedor->telefono !!}</td>         
            <td>{!! $proveedor->status !!}</td>
            <td>
                <a class="btn btn-primary" href="{!! 'proveedores/'.$proveedor->id !!}">Detalle</a>              
                <a class="btn btn-warning" href="{!! 'proveedores/'.$proveedor->id.'/edit' !!}">Editar</a>

                {!! Form::open(['method' => 'DELETE' , 'url' => '/proveedores/'.$proveedor->id]) !!}
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
