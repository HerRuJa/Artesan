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
        
        @media (max-width: 720px) {
            .custom-container {
                margin-top: 20px;
            }
        }
        .form-container {
        margin: auto; 
        width: 450px;
        border: 1px solid #ccc; 
        border-radius: 5px; 
        padding: 30px;
        margin-top: 15px;
        margin-bottom:30px;
        }
        
        label{
            margin-bottom:10px;
            margin-top: 2px;
        }

        
    </style>
</head>
<body>
<x-layouts.navigation/>
    <section id="contact" class="contact">
        <div class="container " data-aos="fade-up">
            <div class="section-title text-center"> 
                <h2>Envio de correo electronico</h2>
            </div>
            
            <div class="row">
                <div class="col-lg-7 form-container d-flex align-items-stretch ">
                    {!! Form::open(['url'=>'/enviar_correo','role'=>'form', 'method'=>'post']) !!}
                    
                    {!! Form::label('destinatario','Para:',['class'=>'control-label']) !!}
                    {!! Form::text('destinatario',null,['placeholder'=>'Ingresa la direccion de destino', 'required',
                        'class'=>'form-control']) !!}
                    <br />
                    

                    {!! Form::label('asunto','Asunto:',['class'=>'control-label']) !!}
                    {!! Form::text('asunto',null,['placeholder'=>'Asunto', 'required',
                        'class'=>'form-control']) !!}
                    <br />
                    

                    {!! Form::label('contenido_mail','Contenido:',['class'=>'control-label']) !!}
                    {!! Form::textarea('contenido_mail',null,['placeholder'=>'contenido', 'required',
                        'class'=>'form-control']) !!}
                    <br />
                    
                    
                    {!! Form::submit('Enviar correo',['class'=>'btn btn-outline-dark']) !!}
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </section>

    <x-layouts.footer/>
</body>
</html>