<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compras;
use App\Models\Detalle_compra;
use App\Models\Productos;



class Detalle_compraController extends Controller
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
        $detalle_compra = Detalle_compra::where('status',1)
            ->orderBy('compra_id')
            ->orderBy('id')->get();
        return view('Detalle_compra.index')->with('detalle_compra',$detalle_compra);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $compra = Compras::select('id','fecha','subtotal','iva','total')
            ->orderBy('fecha')->get();
        $producto = Productos::select('id','nombre')
            ->orderBy('nombre')->get();
        return view('Detalle_compra.create')
            ->with('compra',$compra)
            ->with('producto',$producto);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos = $request->all();
        Detalle_compra::create($datos);
        return redirect('/detalle_compra');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $detalle_compra = Detalle_compra::find($id);
        return view('Detalle_compra.read')->with('detalle_compra',$detalle_compra);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $detalle_compra = Detalle_compra::find($id);
        $compra = Compras::select('id','fecha','subtotal','iva','total')
            ->orderBy('fecha')->get();
        $producto = Productos::select('id','nombre')
            ->orderBy('nombre')->get();
        return view('Detalle_compra.edit')
            ->with('detalle_compra',$detalle_compra) 
            ->with('compra',$compra)
            ->with('producto',$producto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datos = $request->all();
        $detalle_compra = Detalle_compra::find($id);
        $detalle_compra->update($datos);
        return redirect('/detalle_compra');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $detalle_compra = Detalle_compra::find($id);
        $detalle_compra->status=0;
        $detalle_compra->save();
        return redirect('/detalle_compra');
    }
}
