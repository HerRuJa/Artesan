<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedores;
use App\Models\Municipios;
use App\Models\Entidades;
use App\Models\Paises;

class ProveedoresController extends Controller
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
        $proveedor = Proveedores::where('status',1)
            ->orderBy('nombre')->get();

        return view('Proveedores.index')->with('proveedor',$proveedor);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pais = Paises::select('id','nombre')
            ->orderBy('nombre')->get();
        $entidad = Entidades::select('id','nombre')
            ->orderBy('nombre')->get();
        $municipio = Municipios::select('id','nombre')
            ->orderBy('nombre')->get();
        return view('Proveedores.create')
            ->with('pais',$pais)
            ->with('entidad',$entidad)
            ->with('municipio',$municipio);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos = $request->all();
        Proveedores::create($datos);
        return redirect('/proveedores');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $proveedor = Proveedores::find($id);
        return view('Proveedores.read')->with('proveedor',$proveedor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $proveedor = Proveedores::find($id);
        $pais = Paises::select('id','nombre')
            ->orderBy('nombre')->get();
        $entidad = Entidades::select('id','nombre')
            ->orderBy('nombre')->get();
        $municipio = Municipios::select('id','nombre')
            ->orderBy('nombre')->get();
        return view('Proveedores.edit')
            ->with('proveedor',$proveedor)
            ->with('pais',$pais) 
            ->with('entidad',$entidad)
            ->with('municipio',$municipio);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datos = $request->all();
        $proveedor = Proveedores::find($id);
        $proveedor->update($datos);
        return redirect('/proveedores');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $proveedor = Proveedores::find($id);
        $proveedor->status=0;
        $proveedor->save();
        
        return redirect('/proveedores');
    }
}
