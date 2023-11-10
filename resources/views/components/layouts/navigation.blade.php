<!-- Navigation-->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{!! asset('/') !!}">Bienvenido a Artesan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{!! asset('/') !!}">Inicio</a></li>
                        @auth 
                        
                            @if ( Auth::user()->id_tipo_usu  == 1) 
                                <li class="nav-item"><a class="nav-link" href="{!! asset('form_enviar_correo') !!}">Correo</a></li>
                                <li class="nav-item"><a class="nav-link" href="{!! asset('cruds') !!}">CRUDS</a></li>
                                <li class="nav-item"><a class="nav-link" href="{!! asset('genera_pdf') !!}">Reportes</a></li>
                                <li class="nav-item"><a class="nav-link" href="{!! asset('graficas') !!}">Graficas</a></li>
                            
                            @elseif ( Auth::user()->id_tipo_usu  == 3) 
                                <li class="nav-item"><a class="nav-link" href="{!! asset('form_enviar_correo') !!}">Correo</a></li>
                                
                            @endif
                            @endauth
                        <li class="nav-item"><a class="nav-link" href="{!! asset('Vproductos') !!}">Productos</a></li>
                        
                        
                    </ul>
                        <form class="d-flex">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle cuenta" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cuenta</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                                        @if(Auth::check()) <!-- Verificar si el usuario ha iniciado sesión -->
                                            <li><a class="dropdown-item" href="{{ route('logout') }}"><button type="button" class="btn btn-outline-dark">Cerrar sesión</button></a></li>
                                        @else
                                            <li><a class="dropdown-item" href="{{ route('registro') }}">Registrarse</a></li>
                                            <li><a class="dropdown-item" href="{!! asset('/login') !!}">Iniciar sesión</a></li>
                                        @endif
                                    
                                    </ul>
                                </li>
                            </ul>

                            <!--boton carrito-->
                
                        </form>
                        <a class="btn btn-outline-dark" href="{!! asset('ver_carrito') !!}">
                                <i class="bi-cart-fill me-1"></i>Carrito</a>
                </div>
            </div>
        </nav>
        