
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Productos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{!! asset('') !!}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{!! asset('css/styles.css') !!}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <style>
        .cont{
            margin-bottom:  50px;
            margin-top:  20px;
        }
        </style>
      </head>
    <style>
      .tarjeta{
        padding: 30px;
      }
    </style>
<body>
<x-layouts.navigation/>
<script src="../resources/js/jquery-3.7.0.min.js"></script>
  <script>
    function agregar_al_carrito(id_prod){
      var ruta = "{!! asset('agregar_carrito') !!}/"+id_prod;
      $.ajax({
        type:'GET',
        url: ruta,
        success:function(data){
          $( "#respuesta" ).html( data );
        }

      });
    }
  </script>  
  
  <div class="container cont">
  <a href="{!! asset('ver_carrito') !!}" class="btn btn-outline-dark mt-auto"> Ir al carrito</a>

  <div id="respuesta"> 

  </div>
        
@foreach ($productos as $producto)
  @if($loop->iteration % 3 == 1) <!-- Inicio de una nueva fila -->
    <div class="row">
      @endif

      <div class="col-md-4 mb-4 tarjeta">
        <div class="card h-100">
          <!-- Product image-->
      <img class="card-img-top" width="200" height="350" src="../storage/fotografias/{!!$producto->ruta!!}" alt="">
          <!-- Product details-->
          <div class="card-body p-4">
            <div class="text-center">
              <h4>{!! $producto->nom_prod !!}</h4>
              <h4>$ {!! $producto->precio !!} MX</h4>
              <h4>{!! $producto->nom_catego !!}</h4>
            </div>
          </div>
          <!-- Product actions-->
          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <button onclick="agregar_al_carrito({!! $producto->id_prod !!});" class="btn btn-outline-dark mt-auto">
            Agregar al carrito</button>
            
          </div>
        </div>
    </div>

  @if($loop->iteration % 3 == 0 || $loop->last) <!-- Fin de la fila -->
  
    </div>
  @endif
@endforeach




</div>

    <x-layouts.footer/>
</body>
</html>