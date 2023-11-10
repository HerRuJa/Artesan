<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Contacto</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{!! asset('') !!}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{!! asset('css/styles.css') !!}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        h1 {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        .formulario {
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
        }
        
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            font-family: Arial, sans-serif;
        }
        
        textarea {
            height: 150px;
        }
        
        input[type="submit"] {
            display: block;
            margin: 0 auto;
            padding: 10px 20px;
            background-color: #0099ff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #0088cc;
        }

        .formulario {
            margin-top: 30px;
            margin-bottom: 30px;
        }
    </style>

    </head>
<body>
<x-layouts.navigation/>
    <h1>Contacto</h1>
    
    <form class="formulario" action="#" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        
        <label for="asunto">Asunto:</label>
        <input type="text" name="asunto" id="asunto">
        
        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" id="mensaje" cols="30" rows="5"></textarea>
        
        <button class="btn btn-outline-dark" type="submit">
            <i class="me-1"></i>
                Enviar
        </button>
        
    </form>
    <x-layouts.footer/>
</body>
</html>