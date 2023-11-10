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
        <div>
            <h1>Este es un correo enviado desde Artesan</h1>
        </div>
        <hr>
        <div> <?=$contenido;?></div>
        <div>
        Saludos <br>
        Atte:
        <?php
            // Verificar si el usuario está autenticado antes de mostrar el nombre
            if (Auth::check()) {
                echo Auth::user()->name;
            }
            ?>
        <br>
            _______________________________________________________ <br>
            Artesan sv de cv<br>
        </div>
    <x-layouts.footer/>
</body>
</html>