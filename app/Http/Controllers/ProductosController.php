<?php

namespace App\Http\Controllers;

use App\Models\Fotos_productos;
use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Categorias;
use App\Models\Proveedores;
class ProductosController extends Controller
{
    public function __construct(){
        $this->middleware('user2');
        
    }
    /**
     * Display a listing of the resource.
     */
    public function mostrarProductos()
    {
        // $productos = Productos::where('status',1)
        //     ->orderBy('nombre')->get();
        // $fotos = [];

        // foreach ($productos as $producto) {
        //     $foto = Fotos_productos::where('producto_id', $producto->id)->get();

        //     // Recorre la colección de fotos para obtener la ruta de cada objeto
        //     $rutas_fotos = [];
        //     foreach ($foto as $f) {
        //         $rutas_fotos[] = $f->ruta;
        //     }

        // $fotos[$producto->id] = $rutas_fotos;
        // }

        // return view('productos')->with('productos', $productos)->with('fotos', $fotos);

        $fotos = Fotos_productos::all();
        return view('Ajax.productos')->with('fotos', $fotos);
    }

    public function mostrarProductosWelcome()
    {
        $fotos = Fotos_productos::all();
        
        $fotoR = Fotos_productos::inRandomOrder()->first();
        return view('components.layouts.app')->with('fotos', $fotos)->with('fotoR', $fotoR);
    }
    public function index()
    {
        //
        $producto = Productos::where('status',1)
            ->orderBy('categoria_id')
            ->orderBy('nombre')->get();
        return view('Productos.index')->with('producto',$producto);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $proveedor = Proveedores::select('id','nombre','direccion','telefono','email')
            ->orderBy('nombre')->get();
        $categoria = Categorias::select('id','nombre')
            ->orderBy('nombre')->get();
        return view('Productos.create')
            ->with('proveedor',$proveedor)
            ->with('categoria',$categoria);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos = $request->all();
        Productos::create($datos);
        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $producto = Productos::find($id);
        return view('Productos.read')->with('producto',$producto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $producto = Productos::find($id);
        $proveedor = Proveedores::select('id','nombre','direccion','telefono','email')
            ->orderBy('nombre')->get();
        $categoria = Categorias::select('id','nombre')
            ->orderBy('nombre')->get();
        return view('Productos.edit')
            ->with('producto',$producto) 
            ->with('proveedor',$proveedor)
            ->with('categoria',$categoria);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $datos = $request->all();
        $producto = Productos::find($id);
        $producto->update($datos);
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $producto = Productos::find($id);
        $producto->status=0;
        $producto->save();
        return redirect('/productos');
    }
}
