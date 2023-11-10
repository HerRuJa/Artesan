<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Registro de Usuario</title>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
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
      }
      .formu {
        width: 500px;
        margin: 0 auto;
        padding: 30px;
        background-color: #f1f1f1;
        border-radius: 5px;
        margin-top: 20px; /* ajusta el valor según tus necesidades */
        margin-bottom: 20px; /* ajusta el valor según tus necesidades */
      }
      input[type="text"], input[type="email"], input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      .container {
        padding: 16px;
      }
      span.psw {
        float: left;
      }
      /* Responsive */
      @media screen and (max-width: 600px) {
        .formu {
          width: 80%;
        }
      }
      .registrar{
        margin-top: 10px;
      }
      .yes{
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
  <x-layouts.navigation/>
  <div class="container">
    <h2>Registro de Usuario</h2>
      <form class="formu" method="post" action="{{route('validar-registro')}}" >
        @csrf
        <div class="mb-3">
          <label for="nombreInput"><b>Nombre</b></label>
          <input class="form-control" id="nombreInput" 
          type="text" placeholder="Ingresa tu nombre" name="nombre" autocomplete="disable" required>
        </div>
            <div class="mb-3">
                <label for="emailInput"><b>Correo Electrónico</b></label>
                <input class="form-control" id="emailInput" 
                type="email" placeholder="Ingresa tu correo electrónico" name="email" autocomplete="disable" required>
            </div>
            <div class="mb-3">
                <label for="passwordInput"><b>Contraseña</b></label>
                <input class="form-control" id="passwordInput" 
                type="password" placeholder="Ingresa tu contraseña" name="password" required>
            </div>

          <button class="btn btn-outline-dark registrar" type="submit">Registrarse</button>
          
      </form>
    </div>
    <x-layouts.footer/>
  </body>
</html>
