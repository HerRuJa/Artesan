<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bienvenido a Artesan</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{!! asset('fotos/logoICO.ico') !!}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{!! asset('css/styles.css') !!}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <style>
        .cont{
            margin-bottom:  160px;
            margin-top:  20px;
        }
        </style>
    </head>
<body>
    <x-layouts.navigation/>
	
    <!-- Logo section -->
    <section class="py-3 bg-dark">
        <div class="container text-center">
            <img src="{{ asset('fotos/logoSinFondo.png') }}" alt="Logo de la tienda" style="max-height: 100px;">
        </div>
    </section>
	
    <!-- Welcome section -->
    <section class="py-5 cont">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-12 text-center">
                    <h1 class="display-4 fw-bolder">Bienvenido al Punto de Venta</h1>
	
                    <p class="lead">Aquí puedes encontrar nuestros productos y servicios de alta calidad.</p>
                </div>
            </div>
        </div>
    </section>
	
    <x-layouts.footer/>
	
    <!-- Bootstrap core JS-->
    
</body>
</html>
