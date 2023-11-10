<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalle_venta;
use App\Models\Ventas;
use App\Models\Productos;

use App\Models\Usuarios;
use App\Models\Tipos_pago;

use App\Models\Paises;
use App\Models\Municipios;
use App\Models\Entidades;
use App\Models\Tipos_usuario;

class Detalle_ventaController extends Controller
{
    public function __construct(){
        $this->middleware('user2');
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $detalle_venta = Detalle_venta::where('status',1)
            ->orderBy('venta_id')
            ->orderBy('id')->get();
        return view('Detalle_venta.index')->with('detalle_venta',$detalle_venta);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $venta = Ventas::select('id','fecha','total')
            ->orderBy('fecha')->get();
        $producto = Productos::select('id','nombre','descripcion','existencia','precio_compra','precio_venta','stock')
            ->orderBy('nombre')->get();
        return view('Detalle_venta.create')
            ->with('venta',$venta)
            ->with('producto',$producto);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos = $request->all();
        Detalle_venta::create($datos);
        return redirect('/detalle_venta');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $detalle_venta = Detalle_venta::find($id);
        return view('Detalle_venta.read')->with('detalle_venta',$detalle_venta);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $detalle_venta = Detalle_venta::find($id);
        $venta = Ventas::select('id','fecha','total')
            ->orderBy('fecha')->get();
        $producto = Productos::select('id','nombre','descripcion','existencia','precio_compra','precio_venta','stock')
            ->orderBy('nombre')->get();
        return view('Detalle_venta.edit')
            ->with('detalle_venta',$detalle_venta) 
            ->with('venta',$venta)
            ->with('producto',$producto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datos = $request->all();
        $detalle_venta = Detalle_venta::find($id);
        $detalle_venta->update($datos);
        return redirect('/detalle_venta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $detalle_venta = Detalle_venta::find($id);
        $detalle_venta->status=0;
        $detalle_venta->save();
        return redirect('/detalle_venta');
    }
}
