<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipos_usuario;


class Tipos_usuarioController extends Controller
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
        $tipo_usuario = Tipos_usuario::where('status',1)
        ->orderBy('nivel')->get();

        return view('Tipos_usuario.index')->with('tipo_usuario',$tipo_usuario);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Tipos_usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos = $request->all();
        Tipos_usuario::create($datos);
        return redirect('/tipos_usuario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $tipo_usuario = Tipos_usuario::find($id);
        return view('Tipos_usuario.read')->with('tipo_usuario',$tipo_usuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $tipo_usuario = Tipos_usuario::find($id);
        return view('Tipos_usuario.edit')->with('tipo_usuario',$tipo_usuario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datos = $request->all();
        $tipo_usuario = Tipos_usuario::find($id);
        $tipo_usuario->update($datos);
        return redirect('/tipos_usuario');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $tipo_usuario = Tipos_usuario::find($id);
        $tipo_usuario->status=0;
        $tipo_usuario->save();
        
        return redirect('/tipos_usuario');
    }
}