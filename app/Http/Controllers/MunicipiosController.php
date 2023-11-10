<?php

namespace App\Http\Controllers;

use App\Models\Municipios;
use App\Models\Entidades;
use App\Models\Paises;

use Illuminate\Http\Request;

class MunicipiosController extends Controller
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
        $municipio = Municipios::where('status',1)
            ->orderBy('id_entidad')
            ->orderBy('nombre')->get();
        return view('Municipios.index')->with('municipio',$municipio);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $entidad = Entidades::select('id','nombre')
            ->orderBy('nombre')->get();
        $pais = Paises::select('id','nombre')
            ->orderBy('nombre')->get();
        return view('Municipios.create')
            ->with('entidad',$entidad)
            ->with('pais',$pais);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos = $request->all();
        Municipios::create($datos);
        return redirect('/municipios');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $municipio = Municipios::find($id);
        return view('Municipios.read')->with('municipio',$municipio);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $municipio = Municipios::find($id);
        $entidad = Entidades::select('id','nombre')
            ->where('id_pais',$municipio->entidades->id_pais)
            ->orderBy('nombre')->get();
        $pais = Paises::select('id','nombre')
            ->orderBy('nombre')->get();
        return view('Municipios.edit')
            ->with('municipio',$municipio) 
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
        $municipio = Municipios::find($id);
        $municipio->update($datos);
        return redirect('/municipios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $municipio = Municipios::find($id);
        $municipio->status=0;
        $municipio->save();
        return redirect('/municipios');
    }
    public function cambia_combo($id_pais){
        $entidades = Entidades::
                        select('id','nombre')
                        ->where('id_pais',$id_pais)
                        ->orderBy('nombre')
                        ->get();
        return $entidades;
    }

    public function cambia_combo2($id_entidad){
        $municipios = Municipios::
                        select('id','nombre')
                        ->where('id_entidad',$id_entidad)
                        ->orderBy('nombre')
                        ->get();
        return $municipios;
    }
}
