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

        function cambiar_combo(id_pais){
             $("#id_entidad").empty();
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
    
    </script>
<x-layouts.navigation/>
<div class="container cont">
    <h1>Crear Municipio</h1>

    {!! Form::open(['url'=>'/municipios']) !!}
        
        {!! Form::label ('id_pais','Pais:',['class'=>'control-label']) !!}
        {!! Form::select ('id_pais', $pais->pluck('nombre','id')->all(), null, ['class'=>
        'form-control','placeholder'=>'Seleccionar ...','onchange'=>'cambiar_combo(this.value);']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('id_entidad','Entidad:') !!}
        {!! Form::select ('id_entidad', array(''=>''), null,['class'=>
        'form-control','placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        <br />

        {!! Form::label ('nombre','Nombre del municipio') !!}
        {!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del municipio']) !!}
        <br />
        <br />

        {!! Form::label ('status','Estatus:') !!}
        {!! Form::select ('status', 
        array('1'=>'Activo','0'=>'Baja') , null ,['class'=>
        'form-control','placeholder'=>'Seleccionar ...']) !!}
        <br />
        <br />
        {!! Form::submit('Guardar Municipio') !!}
        {!! Form::close() !!}
        </div>
        <x-layouts.footer/>
</body>
</html>