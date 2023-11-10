<?php

namespace App\Http\Controllers;
use App\Models\Paises;
use Illuminate\Http\Request;

class PaisesController extends Controller
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
        $pais = Paises::where('status',1)
            ->orderBy('nombre')->get();

        return view('Paises.index')->with('pais',$pais);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Paises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos = $request->all();
        Paises::create($datos);
        return redirect('/paises');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $pais = Paises::find($id);
        return view('Paises.read')->with('pais',$pais);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $pais = Paises::find($id);
        return view('Paises.edit')->with('pais',$pais);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datos = $request->all();
        $pais = Paises::find($id);
        $pais->update($datos);
        return redirect('/paises');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pais = Paises::find($id);
        $pais->status=0;
        $pais->save();
        
        return redirect('/paises');
    }
}
