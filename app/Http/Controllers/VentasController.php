<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;
use App\Models\Usuarios;
use App\Models\Tipos_pago;

class VentasController extends Controller
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
        $venta = Ventas::where('status',1)
            ->orderBy('id_cliente')
            ->orderBy('fecha')->get();
        return view('Ventas.index')->with('venta',$venta);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //cliente
        $cliente = Usuarios::select('id','name')
            ->orderBy('name')->get();
        $pago = Tipos_pago::select('id','nombre')
            ->orderBy('nombre')->get();
        $usuario = Usuarios::select('id','name')
            ->orderBy('name')->get();
        return view('Ventas.create')
            ->with('usuario',$usuario)
            ->with('cliente',$cliente)
            ->with('pago',$pago);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos = $request->all();
        Ventas::create($datos);
        return redirect('/ventas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $venta = Ventas::find($id);
        return view('Ventas.read')->with('venta',$venta);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $cliente = Usuarios::select('id','name')
            ->orderBy('name')->get();
        $venta = Ventas::find($id);
        $pago = Tipos_pago::select('id','nombre')
            ->orderBy('nombre')->get();
        //falta campos
        $usuario = Usuarios::select('id','name')
            ->orderBy('name')->get();
        return view('Ventas.edit')
            ->with('venta',$venta) 
            ->with('pago',$pago)
            ->with('cliente',$cliente)
            ->with('usuario',$usuario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datos = $request->all();
        $venta = Ventas::find($id);
        $venta->update($datos);
        return redirect('/ventas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $venta = Ventas::find($id);
        $venta->status=0;
        $venta->save();
        return redirect('/ventas');
    }
}
