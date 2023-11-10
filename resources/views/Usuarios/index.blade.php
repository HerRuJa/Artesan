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
    <h1>Listado de usuarios</h1>
    <a class="btn btn-primary" href="usuarios/create">Crear un nuevo usuario</a>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Ap Paterno</th>
            <th>Ap Materno</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Pais</th>
            <th>Entidad</th>
            <th>Municipio</th>
            <th>Tipo usuario</th>
            <th>Colonia</th>
            <th>CP</th>
            <th>Fecha de nacimiento</th>
            <th>Password</th>             
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach($usuario as $usuario)
        <tr>
            <td>{!! $usuario->id !!}</td>
            <td>{!! $usuario->name !!}</td>
            <td>{!! $usuario->ap_pat !!}</td>
            <td>{!! $usuario->ap_mat !!}</td>
            <td>{!! $usuario->email !!}</td>
            <td>{!! $usuario->telefono !!}</td>
            <td>{!! $usuario->direccion !!}</td>
            <td>{!! $usuario->paises->nombre !!}</td>
            <td>{!! $usuario->entidades->nombre !!}</td>
            <td>{!! $usuario->municipios->nombre !!}</td>
            <td>{!! $usuario->tipos_usuario->nombre !!}</td>
            <td>{!! $usuario->colonia !!}</td> 
            <td>{!! $usuario->cp !!}</td>
            <td>{!! $usuario->fecha_naci !!}</td> 
            <td>{!! $usuario->password !!}</td>           
            <td>{!! $usuario->status !!}</td>
            <td>
                <a class="btn btn-primary" href="{!! 'usuarios/'.$usuario->id !!}">Detalle</a>              
                <a class="btn btn-warning" href="{!! 'usuarios/'.$usuario->id.'/edit' !!}">Editar</a>

                {!! Form::open(['method' => 'DELETE' , 'url' => '/usuarios/'.$usuario->id]) !!}
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
