<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Carrito</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{!! asset('') !!}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{!! asset('css/styles.css') !!}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<style>
    body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
}

header {
	background-color: #333;
	color: #fff;
	padding: 10px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

nav ul {
	list-style: none;
	display: flex;
	margin: 0;
	padding: 0;
}

nav li {
	margin: 0 10px;
}

nav a {
	color: #fff;
	text-decoration: none;
}

nav .active {
	font-weight: bold;
}

main {
	margin: 20px;
}

h2 {
	font-size: 24px;
	margin: 0;
	padding-bottom: 10px;
	border-bottom: 1px solid #ccc;
}

table {
	width: 100%;
	border-collapse: collapse;
	margin-top: 20px;
}

th, td {
	border: 1px solid #ccc;
	padding: 10px;
	text-align: center;
}

th {
	background-color: #f5f5f5;
}

tfoot td {
	font-weight: bold;
}

footer {
	background-color: #f5f5f5;
	color: #333;
	text-align: center;
	padding: 10px;
}

</style>
</head>
<body>
<script src="../resources/js/jquery-3.7.0.min.js"></script>
	<script>

		function add_prod(tipo,id_prod){
			var ruta = "{{ asset('add_del_producto') }}/"+tipo+"/"+id_prod;
			$("#respuesta").html("");
			$.ajax({
				type:'GET',
				url:ruta,
				success:function(data){
					$("#respuesta").html(data);
				}

			});
		}

	</script>

	<script> 
		function finalizar(){
				var ruta = "{!! asset('finalizar') !!}";
				$("#respuesta").html("");
				$.ajax({
					type:'GET',
					url:ruta,
					success:function(data){
						$("#respuesta").html(data);
					}

				});
			}
	</script>
<x-layouts.navigation/>
<main>
		<h2>Carrito de Compra</h2>
		
		@if($total_venta_carrito == 0 || $con == 0)
		<div class = " alert alert-danger">
			Carrito de compras vacio, favor de seleccionar productos
		</div>
		@else
		<div class = " alert alert-success">
			Lista de productos
		</div>
		
		<div id = "respuesta">

			<table border="1">
				<thead>
					<tr>
						<th>Producto</th>
						<th>Cantidad</th>
						<th>Precio</th>
						<th>Subtotal</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($detalle_venta as $detalle)
					<tr>
						<td>{!! $detalle->productos->nombre !!}</td>
						<td>{!! $detalle->cantidad !!}</td>
						<td>{!! $detalle->precio_venta !!}</td>
						<td>{!! $detalle-> cantidad * $detalle->precio_venta !!}</td>
						<td> 
							<button class = "btn btn-outline-dark" onclick= "add_prod(1,{!! $detalle->producto_id !!});"><i class="fa fa-plus-circle"></i>
							Incrementar</button>

							<button class = "btn btn-outline-dark" onclick= "add_prod(2,{!! $detalle->producto_id !!});"><i class="fa fa-plus-circle"></i>
							Decrementar</button>

							<button class = "btn btn-outline-dark" onclick= "add_prod(3,{!! $detalle->producto_id !!});"><i class="fa fa-plus-circle"></i>
							Eliminar</button>
						</td>
					</tr>
					@endforeach
					
				</tbody>
				
			</table>
			<button class = "btn btn-outline-dark" onclick= "finalizar();"><i class="fa fa-plus-circle"></i>
							Finalizar compra</button>
		</div>
		
		@endif
	</main>
<x-layouts.footer/>    
</body>
</html>