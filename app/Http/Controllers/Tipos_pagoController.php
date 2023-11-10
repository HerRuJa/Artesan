<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipos_pago;

class Tipos_pagoController extends Controller
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
        $pago = Tipos_pago::where('status',1)
        ->orderBy('nombre')->get();

        return view('Tipos_pago.index')->with('pago',$pago);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Tipos_pago.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos = $request->all();
        Tipos_pago::create($datos);
        return redirect('/tipos_pago');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $pago = Tipos_pago::find($id);
        return view('Tipos_pago.read')->with('pago',$pago);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $pago = Tipos_pago::find($id);
        return view('Tipos_pago.edit')->with('pago',$pago);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datos = $request->all();
        $pago = Tipos_pago::find($id);
        $pago->update($datos);
        return redirect('/tipos_pago');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pago = Tipos_pago::find($id);
        $pago->status=0;
        $pago->save();
        
        return redirect('/tipos_pago');
    }
}