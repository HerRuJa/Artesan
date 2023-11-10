<?php

use App\Http\Controllers\GraficasController;
use App\Http\Controllers\PdfController;
use App\Models\Fotos_productos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\Detalle_compraController;
use App\Http\Controllers\Detalle_ventaController;
use App\Http\Controllers\EntidadesController;
use App\Http\Controllers\Fotos_productosController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\Tipos_pagoController;
use App\Http\Controllers\Tipos_usuarioController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\CorreoController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AjaxController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('inicio');
});


Route::get('cruds', function () {
    return view('cruds');
})->middleware('user2');



Route::get('fotoProducto', [Fotos_productos::class, 'fotoProducto1']);


//Route::get('login', function () {
//    return view('login');
//});


///////////////////////////////////
Route::get('form_enviar_correo', [CorreoController::class, 'formulario_correo'])->middleware('cliente');
Route::post('enviar_correo', [CorreoController::class, 'enviar'])->middleware('cliente');


//Route::get('cruds', function () {
//    return view('cruds');
//})->name('cruds');

Route::get('combo_entidad_muni/{id_pais}', [MunicipiosController::class, 'cambia_combo']);
Route::get('combo_municipio/{id_entidad}', [MunicipiosController::class, 'cambia_combo2']);

Route::get('Vproductos', [AjaxController::class, 'ver_productos']);
Route::get('ver_carrito', [AjaxController::class, 'ver_carrito']);
Route::get('agregar_carrito/{id_prod}', [AjaxController::class, 'agregar_carrito']);
Route::get('add_del_producto/{tipo}/{id_prod}', [AjaxController::class, 'add_del_producto']);
Route::get('finalizar', [AjaxController::class, 'finalizar']);


Route::view('/login',"login")->name('login')->middleware('guest');
Route::view('/registro',"register")->name('registro')->middleware('guest');
Route::view('/privada',"secret")->middleware('auth')->name('privada');

Route::post('/validar-registro',[LoginController::class,'register'])->middleware('guest')->name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class,'login'])->middleware('guest')->name('inicia-sesion');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::middleware(['user2'])->group(function(){
    Route::resource('paises', PaisesController::class);
    Route::resource('categorias', CategoriasController::class);
    Route::resource('compras', ComprasController::class);
    Route::resource('detalle_compra', Detalle_compraController::class);
    Route::resource('detalle_venta', Detalle_ventaController::class);
    Route::resource('entidades', EntidadesController::class);
    Route::resource('fotos_productos', Fotos_productosController::class);
    Route::resource('municipios', MunicipiosController::class);
    Route::resource('productos', ProductosController::class);
    Route::resource('proveedores', ProveedoresController::class);
    Route::resource('tipos_pago', Tipos_pagoController::class);
    Route::resource('tipos_usuario', Tipos_usuarioController::class);
    Route::resource('usuarios', UsuariosController::class);
    Route::resource('ventas', VentasController::class);



    Route::get('genera_pdf', [PdfController::class, 'genera_pdf']);
    Route::get('productos_nombre/{tipo}', [PdfController::class, 'productos_nombre']);
    Route::get('ticket/{tipo}/{id_venta}', [PdfController::class, 'ticket']);

    Route::get('ticket2/{tipo}/{id_compra}', [PdfController::class, 'ticketCompra']);


    Route::get('graficas', [GraficasController::class, 'graficas']);
    Route::get('grafica_areas', [GraficasController::class, 'grafica_areas']);
    Route::get('grafica_barras', [GraficasController::class, 'grafica_barras']);

    Route::get('grafica_mes', [GraficasController::class, 'grafica_mes']);
});




