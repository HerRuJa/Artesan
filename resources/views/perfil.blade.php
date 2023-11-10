<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
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
        /* Estilos para la página de perfil */
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }
        .contenedor {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .profile-header h1 {
            font-size: 36px;
            margin: 0;
        }
        .profile-header a {
            text-decoration: none;
            color: #333333;
            border: 1px solid #333333;
            padding: 10px 20px;
            border-radius: 20px;
        }
        .profile-header a:hover {
            background-color: #333333;
            color: #ffffff;
        }
        .profile-info {
            display: flex;
            margin-top: 20px;
        }
        .profile-info .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
        }
        .profile-info .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .profile-info .user-details {
            flex: 1;
        }
        .user-details h2 {
            font-size: 28px;
            margin: 0;
        }
        .user-details p {
            font-size: 18px;
            margin: 10px 0;
        }
        .user-details .button {
            display: inline-block;
            background-color: #333333;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
        }
        .user-details .button:hover {
            background-color: #ffffff;
            color: #333333;
            border: 1px solid #333333;
        }
        .contenedor {
            margin-top: 70px; /* ajusta el valor según tus necesidades */
            margin-bottom: 70px; /* ajusta el valor según tus necesidades */
        }
    </style>
</head>
<body>
<x-layouts.navigation/>
    <div class="contenedor">
        <div class="profile-header">
            <h1>Perfil de Usuario</h1>
            <a href="#">Editar Perfil</a>
        </div>
        <div class="profile-info">
            <div class="avatar">
                <img src="https://via.placeholder.com/150" alt="Avatar">
            </div>
            <div class="user-details">
                <h2>Nombre de Usuario</h2>
                <p>Correo electrónico: usuario@ejemplo.com</p>
                <p>Teléfono: (123) 456-7890</p>
                <p>Dirección: 123 Calle Ejemplo, Ciudad de Ejemplo</p>
                <a href="#" class="button">Cerrar Sesión</a>
            </div>
        </div>
    </div>
    <x-layouts.footer/>
</body>
</html>
