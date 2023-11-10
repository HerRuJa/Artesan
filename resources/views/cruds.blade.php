<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CRUDS</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{!! asset('') !!}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{!! asset('css/styles.css') !!}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        .row {
    --bs-gutter-x: 4rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: 1rem;
    margin-left: 1rem;
}
    </style>
    
    </head>
<body>
    
    <x-layouts.navigation/>

    
    <section>
        <div class="conteiner-fluid">
            <div class="text-center">
                <h1>CRUDS</h1>
            </div>
            <div class="row">
                <div class="col-md-3 mb-5">
                    <div class="card h-100">
                        <!-- Product details-->
                        <div class="card-body p-5">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4>
                                    <a class="alert-link" href="{!! asset('categorias') !!}">Categorias</a>
                                </h4>
                                <p>Gestion de la tabla de categorias</p>
                            </div>
                        </div>
                            
                    </div>
                </div>

                <div class="col-md-3 mb-5">
                    <div class="card h-100">
                        <!-- Product details-->
                        <div class="card-body p-5">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4>
                                    <a class="alert-link" href="{!! asset('compras') !!}">Compras</a>
                                </h4>
                                <p>Gestion de la tabla de categorias</p>
                            </div>
                        </div>
                            
                    </div>
                </div>

                <div class="col-md-3 mb-5">
                    <div class="card h-100">
                        <!-- Product details-->
                        <div class="card-body p-5">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4>
                                    <a class="alert-link" href="{!! asset('detalle_compra') !!}">Detalle compra</a>
                                </h4>
                                <p>Gestion de la tabla de categorias</p>
                            </div>
                        </div>
                            
                    </div>
                </div>

                <div class="col-md-3 mb-5">
                    <div class="card h-100">
                        <!-- Product details-->
                        <div class="card-body p-5">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4>
                                    <a class="alert-link" href="{!! asset('detalle_venta') !!}">Detalle venta</a>
                                </h4>
                                <p>Gestion de la tabla de categorias</p>
                            </div>
                        </div>
                            
                    </div>
                </div>

                <div class="col-md-3 mb-5">
                    <div class="card h-100" >
                        <!-- Product details-->
                        <div class="card-body p-5">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4>
                                    <a class="alert-link" href="{!! asset('entidades') !!}">Entidades</a>
                                </h4>
                                <p>Gestion de la tabla de categorias</p>
                            </div>
                        </div>
                            
                    </div>
                </div>

                <div class="col-md-3 mb-5">
                    <div class="card h-100">
                        <!-- Product details-->
                        <div class="card-body p-5">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4>
                                    <a class="alert-link" href="{!! asset('fotos_productos') !!}">Fotos Productos</a>
                                </h4>
                                <p>Gestion de la tabla de categorias</p>
                            </div>
                        </div>
                            
                    </div>
                </div>

                <div class="col-md-3 mb-5">
                    <div class="card h-100">
                        <!-- Product details-->
                        <div class="card-body p-5">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4>
                                    <a class="alert-link" href="{!! asset('municipios') !!}">Municipios</a>
                                </h4>
                                <p>Gestion de la tabla de categorias</p>
                            </div>
                        </div>
                            
                    </div>
                </div>

                <div class="col-md-3 mb-5">
                    <div class="card h-100">
                        <!-- Product details-->
                        <div class="card-body p-5">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4>
                                    <a class="alert-link" href="{!! asset('paises') !!}">Paises</a>
                                </h4>
                                <p>Gestion de la tabla de categorias</p>
                            </div>
                        </div>
                            
                    </div>
                </div>

                <div class="col-md-3 mb-5">
                    <div class="card h-100" class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                        <!-- Product details-->
                        <div class="card-body p-5">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4>
                                    <a class="alert-link" href="{!! asset('productos') !!}">Productos</a>
                                </h4>
                                <p>Gestion de la tabla de categorias</p>
                            </div>
                        </div>
                            
                    </div>
                </div>

                <div class="col-md-3 mb-5">
                    <div class="card h-100" class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                        <!-- Product details-->
                        <div class="card-body p-5">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4>
                                    <a class="alert-link" href="{!! asset('proveedores') !!}">Proveedores</a>
                                </h4>
                                <p>Gestion de la tabla de categorias</p>
                            </div>
                        </div>
                            
                    </div>
                </div>

                <div class="col-md-3 mb-5">
                    <div class="card h-100" class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                        <!-- Product details-->
                        <div class="card-body p-5">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4>
                                    <a class="alert-link" href="{!! asset('tipos_pago') !!}">Tipos de pago</a>
                                </h4>
                                <p>Gestion de la tabla de categorias</p>
                            </div>
                        </div>
                            
                    </div>
                </div>

                <div class="col-md-3 mb-5">
                    <div class="card h-100" class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                        <!-- Product details-->
                        <div class="card-body p-5">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4>
                                    <a class="alert-link" href="{!! asset('tipos_usuario') !!}">Tipos de usuarios</a>
                                </h4>
                                <p>Gestion de la tabla de categorias</p>
                            </div>
                        </div>
                            
                    </div>
                </div>

                <div class="col-md-3 mb-5">
                    <div class="card h-100" class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                        <!-- Product details-->
                        <div class="card-body p-5">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4>
                                    <a class="alert-link" href="{!! asset('usuarios') !!}">Usuarios</a>
                                </h4>
                                <p>Gestion de la tabla de categorias</p>
                            </div>
                        </div>
                            
                    </div>
                </div>

                <div class="col-md-3 mb-5">
                    <div class="card h-100" class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
                        <!-- Product details-->
                        <div class="card-body p-5">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4>
                                    <a class="alert-link" href="{!! asset('ventas') !!}">Ventas</a>
                                </h4>
                                <p>Gestion de la tabla de categorias</p>
                            </div>
                        </div>
                          
                    </div>
                </div>


                
                
            </div>
        </div>
    </section>

    <x-layouts.footer/>
</body>
</html>