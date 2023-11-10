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
    <main>
        
        <section id="contact" class="contact">
        <div class="container cont" data-aos="fade-up">
                <div class="section-title">
                    <h2>Mensaje</h2>
                    @if($var ==='1')
                        <div class="alert alert-success">{!! $msj !!}</div>
                    @else
                        <div class="alert alert-danger">{!! $msj !!}</div>
                    @endif
                    <a class=" btn btn-outline btn-primary btn-lg pull-right" href="{!! asset($ruta_boton) !!}">
                        {!! $mensaje_boton !!}
                    </a>
                </div>
            </div>
        </section>
    </main>
    <x-layouts.footer/>
</body>
</html>