<?php

namespace App\Http\Controllers;

use App\Models\Paises;
use App\Models\Entidades;
use Illuminate\Http\Request;

class EntidadesController extends Controller
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
        $entidad = Entidades::where('status',1)
            ->orderBy('id_pais')
            ->orderBy('nombre')->get();
        return view('Entidades.index')->with('entidad',$entidad);
            
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pais = Paises::select('id','nombre')
            ->orderBy('nombre')->get();
        return view('Entidades.create')
            ->with('pais',$pais);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos = $request->all();
        Entidades::create($datos);
        return redirect('/entidades');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $entidad = Entidades::find($id);
        return view('Entidades.read')->with('entidad',$entidad);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $entidad = Entidades::find($id);
        $pais = Paises::select('id','nombre')
            ->orderBy('nombre')->get();
        return view('Entidades.edit')
            ->with('entidad',$entidad)
            ->with('pais',$pais);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datos = $request->all();
        $entidad = Entidades::find($id);
        $entidad->update($datos);
        return redirect('/entidades');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $entidad = Entidades::find($id);
        $entidad->status=0;
        $entidad->save();
        return redirect('/entidades');
    }
}
