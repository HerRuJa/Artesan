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
<script src="../../resources/js/jquery-3.7.0.min.js"></script>
    <script> 

        function cambiar_combo_entidad(id_pais){
             $("#id_entidad").empty();
             $("#municipio_id").empty();
             var ruta = "{!! asset('combo_entidad_muni') !!}/"+id_pais;
             $.ajax({
                type: 'GET',
                url: ruta,

                success:function(data){
                    var entidades = data;
                    $('#id_entidad').append('<option value="">Seleccionar ...</option>');

                    for (var i = 0; i<entidades.length;i++){
                        $('#id_entidad').append('<option value="' + entidades[i].id + '">' + entidades[i].nombre + '</option>');
                    }
                }
             });
        }

        function cambiar_combo_municipio(id_entidad){
             $("#municipio_id").empty();
             var ruta = "{!! asset('combo_municipio') !!}/"+id_entidad;
             $.ajax({
                type: 'GET',
                url: ruta,

                success:function(data){
                    var municipios = data;
                    $('#municipio_id').append('<option value="">Seleccionar ...</option>');

                    for (var i = 0; i<municipios.length;i++){
                        $('#municipio_id').append('<option value="' + municipios[i].id + '">' + municipios[i].nombre + '</option>');
                    }
                }
             });
        }
    
    </script>
<x-layouts.navigation/>
<div class="container cont">
    <h1>Crear usuario</h1>

    {!! Form::open(['url'=>'/usuarios']) !!}

        {!! Form::label ('name','Nombre del usuario') !!}
        {!! Form::text ('name',null,['placeholder'=>'Ingresa nombre del usuario']) !!}
        <br />
        <br />

        {!! Form::label ('ap_pat','Apellido paterno del usuario') !!}
        {!! Form::text ('ap_pat',null,['placeholder'=>'Ingresa apellido paterno del usuario']) !!}
        <br />
        <br />
        {!! Form::label ('ap_mat','Apellido materno del usuario') !!}
        {!! Form::text ('ap_mat',null,['placeholder'=>'Ingresa apellido materno del usuario']) !!}
        <br />
        <br />
        {!! Form::label ('email','Email del usuario') !!}
        {!! Form::text ('email',null,['placeholder'=>'Ingresa email del usuario']) !!}
        <br />
        <br />
        {!! Form::label ('telefono','Telefono del usuario') !!}
        {!! Form::text ('telefono',null,['placeholder'=>'Ingresa telefono del usuario']) !!}
        <br />
        <br />
        {!! Form::label ('direccion','Direccion del usuario') !!}
        {!! Form::text ('direccion',null,['placeholder'=>'Ingresa direccion del usuario']) !!}
        <br />
        <br />
        
        
        {!! Form::label ('id_pais','Pais:',['class'=>'control-label']) !!}
        {!! Form::select ('id_pais', $pais->pluck('nombre','id')->all(), null, ['class'=>
        'form-control','placeholder'=>'Seleccionar ...','onchange'=>'cambiar_combo_entidad(this.value);']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('id_entidad','Entidad:') !!}
        {!! Form::select ('id_entidad', array(''=>'') , null ,['class'=>
        'form-control','placeholder'=>'Seleccionar ...','onchange'=>'cambiar_combo_municipio(this.value);']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('municipio_id','Municipio:') !!}
        {!! Form::select ('municipio_id', array(''=>'') , null ,['class'=>
        'form-control','placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('id_tipo_usu','Tipo de usuario:') !!}
        {!! Form::select ('id_tipo_usu', $tipo_usuario->pluck('nombre','id')->all() , null ,['class'=>
        'form-control','placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('colonia','Colonia del usuario') !!}
        {!! Form::text ('colonia',null,['placeholder'=>'Ingresa colonia del usuario']) !!}
        <br />
        <br />
        {!! Form::label ('cp','CP del usuario') !!}
        {!! Form::text ('cp',null,['placeholder'=>'Ingresa CP del usuario']) !!}
        <br />
        <br />
        {!! Form::label ('fecha_naci','Fecha de nacimiento del usuario') !!}
        {!! Form::date ('fecha_naci',null,['placeholder'=>'Ingresa fecha del usuario']) !!}
        <br />
        <br />
        
        {!! Form::label ('password','Contraseña del usuario') !!}
        {!! Form::text ('password',null,['placeholder'=>'Ingresa contraseña del usuario']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , null ,['placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar usuario') !!}
        {!! Form::close() !!}
        </div>
        <x-layouts.footer/>
</body>
</html>