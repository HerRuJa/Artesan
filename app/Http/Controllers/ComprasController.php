<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compras;
use App\Models\Proveedores;
use App\Models\Usuarios;

use App\Models\Tipos_usuarios;
use App\Models\Municipios;
use App\Models\Entidades;
use App\Models\Paises;
class ComprasController extends Controller
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
        $compra = Compras::where('status',1)
            ->orderBy('id_proveedor')
            ->orderBy('usuario_id')
            ->orderBy('fecha')->get();
        return view('Compras.index')->with('compra',$compra);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $proveedor = Proveedores::select('id','nombre')
            ->orderBy('nombre');
        $usuario = Usuarios::select('id','name')
            ->orderBy('name');
        return view('Compras.create')
            ->with('proveedor',$proveedor)
            ->with('usuario',$usuario);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos = $request->all();
        Compras::create($datos);
        return redirect('/compras');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $compra = Compras::find($id);
        return view('Compras.read')->with('compra',$compra);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $compra = Compras::find($id);
        $proveedor = Proveedores::select('id','nombre','direccion','telefono','email')
            ->orderBy('nombre')->get();
            //fa
        $usuario = Usuarios::select('id','name')
            ->orderBy('name')->get();
        return view('Compras.edit')
            ->with('compra',$compra) 
            ->with('proveedor',$proveedor)
            ->with('usuario',$usuario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datos = $request->all();
        $compra = Compras::find($id);
        $compra->update($datos);
        return redirect('/compras');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $compra = Compras::find($id);
        $compra->status=0;
        $compra->save();
        return redirect('/compras');
    }
}
