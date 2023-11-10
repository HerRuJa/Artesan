<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use App\Models\Ventas;
use Illuminate\Http\Request;
use App\Models\Productos;

class GraficasController extends Controller
{
    //
    public function __construct(){
        $this->middleware('user2');
        
    }
    
    public function graficas(){
        return view("Graficas.listado_graficas");
    }

    public function grafica_areas(){
        $productos = Productos::where('status',1)
            ->orderBy('nombre')->get();
        return view("Graficas.grafica_areas")->with('productos',$productos);
    }

    public function grafica_barras(){
        $ventas = Ventas::where('status',2)
            ->orderBy('fecha')->get();
        return view("Graficas.grafica_barras")->with('ventas',$ventas);

    }

    public function grafica_mes(){
        $compras = Compras::where('status',1)
            ->orderBy('fecha')->get();
        return view("Graficas.grafica_mes")->with('compras',$compras);
    }


}
