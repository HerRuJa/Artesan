<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\Usuarios;

use App\Models\Municipios;
use App\Models\Entidades;
use App\Models\Paises;
use App\Models\Tipos_usuario;

class UsuariosController extends Controller
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
        $usuario = Usuarios::where('status',1)
            ->orderBy('id_tipo_usu')
            ->orderBy('ap_pat')->get();
        return view('Usuarios.index')->with('usuario',$usuario);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pais = Paises::select('id','nombre')
            ->orderBy('nombre')->get();

        $tipo_usuario = Tipos_usuario::select('id','nombre','nivel')
            ->orderBy('nivel')->get();
        return view('Usuarios.create')
            ->with('pais',$pais)
            ->with('tipo_usuario',$tipo_usuario);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos = $request->all();
        $datos['password'] = Hash::make($request->input('password'));
        Usuarios::create($datos);
        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $usuario = Usuarios::find($id);
        return view('Usuarios.read')->with('usuario',$usuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $usuario = Usuarios::find($id);
        $pais = Paises::select('id','nombre')
            ->orderBy('nombre')->get();
        $entidad = Entidades::select('id','nombre')
            ->where('id_pais',$usuario->municipios->entidades->id_pais)
            ->orderBy('nombre')->get();
        $municipio = Municipios::select('id','nombre')
            ->where('id_entidad',$usuario->municipios->id_entidad)
            ->orderBy('nombre')->get();
        $tipo_usuario = Tipos_usuario::select('id','nombre','nivel')
            ->orderBy('nivel')->get();
        return view('Usuarios.edit')
            ->with('usuario',$usuario) 
            ->with('pais',$pais) 
            ->with('entidad',$entidad)
            ->with('municipio',$municipio)
            ->with('tipo_usuario',$tipo_usuario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datos = $request->all();
        $usuario = Usuarios::find($id);
        $datos['password']= Hash::make($request->input('password'));
        $usuario->update($datos);
        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $usuario = Usuarios::find($id);
        $usuario->status=0;
        $usuario->save();
        return redirect('/usuarios');
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
