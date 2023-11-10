<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fotos_productos;
use App\Models\Productos;
use Illuminate\Support\Facades\Storage;


class Fotos_productosController extends Controller
{
    public function __construct(){
        $this->middleware('user2');
        
    }
    public function fotoProducto1(string $producto_id)
    {
        //
        $foto = Fotos_productos::find($producto_id);
        return view('Fotos_productos.read')->with('foto',$foto);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fotos = Fotos_productos::where('status',1)
            ->orderBy('producto_id')->get();
        // dd($fotos);
        return view('Fotos_productos.index')->with('fotos',$fotos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $producto = Productos::select('id','nombre')
            ->orderBy('nombre')->get();
        return view('Fotos_productos.create')
            ->with('producto',$producto);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos = $request->all();
        $hora = date("h_i_s");
        $fecha = date("d-m-Y");
        $prefijo = $fecha."_".$hora;

        if ($request->hasFile('foto')) {
            
            $archivo = $request->file('foto');
            
            print_r($archivo);
            // Resto del código
            if(!$archivo->isValid()) {
                return 'Error al cargar la foto';
            }
            $nombre_foto = $prefijo."_".$archivo->getClientOriginalName();
            //$nombre_foto = $archivo->hashName();
            
            $rl = Storage::disk('fotografias')->put($nombre_foto,   \File::get($archivo) );
            //dd($rl);
            if($rl){
                $datos['ruta'] = $nombre_foto;
                Fotos_productos::create($datos);
                return redirect('/fotos_productos');
            }else{
                return 'Error al intentar guardar la foto <br /> <br /> <a href="../fotos_productos">
                Regresar a las fotos productos</a>';
            }
        } else {
            return 'No se ha enviado ninguna foto';
        }  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $foto = Fotos_productos::find($id);
        return view('Fotos_productos.read')->with('foto',$foto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $foto = Fotos_productos::find($id);
        $producto = Productos::select('id','nombre')
            ->orderBy('nombre')->get();
        return view('Fotos_productos.edit')
            ->with('foto',$foto) 
            ->with('producto',$producto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();

        $foto = Fotos_productos::find($id);

        $hora = date("h_i_s");
        $fecha = date("d-m-Y");
        $prefijo = $fecha."_".$hora;

        if ($request->hasFile('foto')) {
            
            $archivo = $request->file('foto');
            
            //print_r($archivo);
            
            
            $nombre_foto = $prefijo."_".$archivo->getClientOriginalName();
            //$nombre_foto = $archivo->hashName();
            
            $rl = Storage::disk('fotografias')->put($nombre_foto,   \File::get($archivo) );
            //dd($rl);
            if($rl){
                $datos['ruta'] = $nombre_foto;
                $foto->update($datos);
                return redirect('/fotos_productos');
            }else{
                return 'Error al intentar guardar la foto <br /> <br /> <a href="../fotos_productos">
                Regresar a las fotos productos</a>';
            }
        } else {
            return 'No se ha enviado ninguna foto';
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $foto = Fotos_productos::find($id);
        $foto->status=0;
        $foto->save();
        return redirect('/fotos_productos');
    }
}
