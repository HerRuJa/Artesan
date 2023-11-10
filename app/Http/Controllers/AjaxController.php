<?php

namespace App\Http\Controllers;

use App\Models\Detalle_venta;
use App\Models\Ventas;
use App\Models\Productos;
use App\Models\Fotos_productos;
use App\Models\Categorias;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    //
    public function ver_productos(){
        $categorias = Categorias::where('status',1)
        ->orderBy('nombre')->get();
        $productos = \DB::select(
            "select 
            fotos_productos.producto_id as id_prod,
            productos.nombre as nom_prod,
            productos.precio_venta as precio,
            fotos_productos.ruta as ruta,
            categorias.nombre as nom_catego
            from fotos_productos, productos, categorias
            where fotos_productos.producto_id=productos.id
            and productos.categoria_id = categorias.id");

        return view('Ajax.productos_en_venta')
            ->with('categorias',$categorias)
            ->with('productos',$productos);
    }
    
    public function ver_carrito(){

        if (!Auth::check()) {
            return redirect()->route('login'); // Redirigir al usuario a la página de inicio de sesión si no está autenticado
        }

        $usuario_id= 2;
        $cliente_id=Auth::user()->id;

        $total_venta_carrito= Ventas::where('status',1)
            ->where('id_cliente',$cliente_id)
            ->where('usuario_id',$usuario_id)
            ->count();
        $venta = Ventas::where('status',1)
            ->where('id_cliente',$cliente_id)
            ->get();
        $id_venta = 0;
        foreach($venta as $v){
            $id_venta = $v->id;
        }


        $detalle_venta = Detalle_venta::where('status',1)
        ->where('venta_id',$id_venta)->get();

        $con= Detalle_venta::where('status',1)
                ->where('venta_id',$id_venta)
                ->count();

        return view('Ajax.carrito')
            ->with('venta',$venta)
            ->with('detalle_venta',$detalle_venta)
            ->with('total_venta_carrito',$total_venta_carrito)
            ->with('con',$con);

    }


    public function agregar_carrito($id_prod){

        if (!Auth::check()) {
            return  "<h3> Producto no agregado, necesita iniciar sesion!!! </h3>";// Redirigir al usuario a la página de inicio de sesión si no está autenticado
        }else{

            //usuario_id = 1 es venta online, el mismo usuario esta haciendo la venta
            $usuario_id= 2;
            $cliente_id=Auth::user()->id;
            $fecha = date("Y-m-d");

            $total_venta_carrito= Ventas::where('status',1)
                ->where('id_cliente',$cliente_id)
                ->where('usuario_id',$usuario_id)
                ->count();

            $venta= Ventas::where('status',1)
                ->where('id_cliente',$cliente_id)
                ->where('usuario_id',$usuario_id)
                ->get();
            $ver=0;
            foreach($venta as $v){
                $ver = Detalle_venta::where('venta_id',$v->id)
                    ->where('producto_id',$id_prod)
                    ->count();
            }
            if ($ver != 0) {
                $producto = Productos::find($id_prod);

                $venta = Ventas::where('status',1)
                ->where('id_cliente',$cliente_id)
                ->first();
                $id_venta = $venta->id;

                Detalle_venta::where('venta_id',$id_venta)
                ->where('producto_id',$id_prod)
                ->increment('cantidad',1);
            }

            

            if($total_venta_carrito == 0){
                \DB::table('ventas')->insert([
                    'id_cliente'=> $cliente_id,
                    'fecha'=> $fecha,
                    'subtotal'=> 0,
                    'iva'=> 0,
                    'total'=> 0,
                    'id_tipo_pago'=> 1,
                    'usuario_id'=> $usuario_id,
                    'status'=> 1
                ]);
            }

            $venta = Ventas::where('status',1)
                ->where('id_cliente',$cliente_id)
                ->first();
            $id_venta = $venta->id;
            
            $producto = Productos::find($id_prod);

            \DB::table('detalle_venta')->insert([
                'venta_id'=>$id_venta,
                'producto_id'=>$id_prod,
                'cantidad'=>1,
                'precio_compra'=>$producto->precio_compra,
                'precio_venta'=>$producto->precio_venta,
                'status'=>1
            ]);

            Productos::where('id',$id_prod)
                ->decrement('existencia',1);

            return "<h3> Producto agregado al carrito </h3>";
        
        }
    }

    public function finalizar(){
        //usuario_id = 1 es venta online, el mismo usuario esta haciendo la venta
        $usuario_id= 2;
        $cliente_id=Auth::user()->id;
        $fecha = date("Y-m-d");

        $venta = Ventas::where('status', 1)
            ->where('id_cliente', $cliente_id)
            ->first();
        $id_venta = $venta->id;

        Detalle_venta::where('venta_id',$id_venta)
                ->where('status',1)
                ->increment('status',1);

        $det = Detalle_venta::where('status', 2)
            ->where('venta_id', $id_venta)
            ->get();
        $sub=0;
        foreach($det as $v){
            $sub += ($v->cantidad * $v->precio_venta);

            Productos::where('id',$v->producto_id)
                ->decrement('existencia',$v->cantidad);
        }
        $iva = 0; // Asigna el valor correcto del IVA
        
        $total = $sub + $iva;

        $fin = Ventas::where('id', $id_venta)->where('status',1)->first();
        
        $fin->fecha = $fecha;
        $fin->subtotal = $sub;
        $fin->total = $total;
        $fin->status = 2;
        $fin->save();
    

        return "<h3> Compra finalizada </h3>";

    }

    public function add_del_producto($tipo,$id_prod){
        //usuario_id = 1 es venta online, el mismo usuario esta haciendo la venta
        $usuario_id= 2;
        $cliente_id=Auth::user()->id;
        $venta = Ventas::where('status',1)
            ->where('id_cliente',$cliente_id)
            ->first();

        $total_venta_carrito= Ventas::where('status',1)
            ->where('id_cliente',$cliente_id)
            ->where('usuario_id',$usuario_id)
            ->count();

        $id_venta = $venta->id;


        if($tipo==1){
            Detalle_venta::where('venta_id',$id_venta)
                ->where('producto_id',$id_prod)
                ->increment('cantidad',1);
            

        }
        if($tipo==2){
            $con = Detalle_venta::where('venta_id',$id_venta)
            ->where('producto_id',$id_prod)->first();
            if($con->cantidad == 1){
                $id_det_venta = Detalle_venta::where('status',1)
                ->where('venta_id',$id_venta)
                ->where('producto_id',$id_prod)
                ->first();
                $det_venta = Detalle_venta::find($id_det_venta->id);
                $det_venta->status=0;
                $det_venta->save();
                $total_venta_carrito= Detalle_venta::where('venta_id',$id_venta)
                    ->count();
                if($total_venta_carrito==1){
                    return "<div class = ' alert alert-danger'>
                    Carrito de compras vacio, favor de seleccionar productos
                </div>";
                }
            }
            Detalle_venta::where('venta_id',$id_venta)
                ->where('producto_id',$id_prod)
                ->decrement('cantidad',1);
        }
        if($tipo==3){
            $id_det_venta = Detalle_venta::where('status',1)
                ->where('venta_id',$id_venta)
                ->where('producto_id',$id_prod)
                ->first();
                $det_venta = Detalle_venta::find($id_det_venta->id);
                
                $det_venta->status=0;
                $det_venta->save();
                $total_venta_carrito= Detalle_venta::where('venta_id',$id_venta)
                    ->count();
                if($total_venta_carrito==1){
                    return "<div class = ' alert alert-danger'>
                    Carrito de compras vacio, favor de seleccionar productos
                </div>";
                }
            

        }
        

        $detalle_venta = Detalle_venta::where('status',1)
        ->where('venta_id',$id_venta)
        ->get();

        

        $registros="";

        $registros.="<table border='1'>";

        $registros.="<thead>";
        $registros.="<tr>";
        $registros.="<th>Producto</th>";
        $registros.="<th>Cantidad</th>";
        $registros.="<th>Precio</th>";
        $registros.="<th>Subtotal</th>";
        $registros.="<th>Acciones</th>";
        $registros.="</tr>";
        $registros.="</thead>";
        $registros.="<tbody>";
					foreach($detalle_venta as $detalle){
                        $registros.="<tr>";
                        $registros.="<td>". $detalle->productos->nombre ."</td>";
                        $registros.="<td>". $detalle->cantidad ."</td>";
                        $registros.="<td>". $detalle->precio_venta ."</td>";
                        $registros.="<td>". ($detalle->cantidad * $detalle->precio_venta) ."</td>";
                        $registros.="<td>";

                        $registros.="<button class = 'btn btn-outline-dark'"; 
                        $registros.=" onclick= 'add_prod(1,". $detalle->producto_id .");'>";
                        $registros.="<i class='fa fa-plus-circle'></i>Incrementar</button>";

                        $registros.="<button class = 'btn btn-outline-dark'" ;
                        $registros.=" onclick= 'add_prod(2,". $detalle->producto_id .");'>";
                        $registros.="<i class='fa fa-plus-circle'></i>Decrementar</button>";

                        $registros.="<button class = 'btn btn-outline-dark'" ;
                        $registros.=" onclick= 'add_prod(3,". $detalle->producto_id .");'>";
                        $registros.="<i class='fa fa-plus-circle'></i>Eliminar</button>";

                        $registros.="</td>";
                        $registros.="</tr>";
                    }
					
                    $registros.="</tbody>";
				
                    $registros.="</table>";
                    $registros.="<button class = 'btn btn-outline-dark'"; 
                    $registros.="onclick= 'finalizar();'>";
                    $registros.="<i class='fa fa-plus-circle'></i>Finalizar compra</button>";
                    
        return $registros;
    }
}
