<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Ventas;
use App\Models\Detalle_venta;
use App\Models\Compras;
use App\Models\Detalle_compra;

class PdfController extends Controller
{
    //

    public function __construct(){
        $this->middleware('user2');
        
    }


    public function genera_pdf(){
        return view("Pdf.listado_reportes");
    }

    public function crearPDF($datos,$vistaurl,$tipo){
        $data = $datos;
        $date = date('Y-m-d');
        $view = \View::make($vistaurl,compact('data','date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        if($tipo == 1){return $pdf->stream('reporte');}
        if($tipo == 3){return $pdf->download('reporte.pdf');}
    }

    public function crearPDFventa($venta,$detalle_venta,$vistaurl,$tipo){
        $data_venta = $venta;
        $data_detalle_venta = $detalle_venta;
        $date = date('Y-m-d');
        $view = \View::make($vistaurl,compact('data_venta','data_detalle_venta','date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        if($tipo == 1){return $pdf->stream('ticket');}
        if($tipo == 3){return $pdf->download('ticket.pdf');}
    }

    public function productos_nombre($tipo){
        $vistaurl = "Pdf.reporte_de_productos";
        $productos = Productos::where('status',1)
                    ->orderBy('nombre')->get();
        return $this->crearPDF($productos,$vistaurl,$tipo);
    } 

    public function ticket($tipo,$id_venta){
        $vistaurl = "Pdf.reporte_ticket";
        $venta = Ventas::where('status',2)
                    ->where('id',$id_venta)->first();
        $detalle_venta = Detalle_venta::where('status',2)
                    ->where('venta_id',$id_venta)->get();
        return $this->crearPDFventa($venta,$detalle_venta,$vistaurl,$tipo);
    } 
    
    public function ticketCompra($tipo,$id_venta){
        $vistaurl = "Pdf.reporte_ticket2";
        $venta = Compras::where('status',1)
                    ->where('id',$id_venta)->first();
        $detalle_venta = Detalle_compra::where('status',1)
                    ->where('compra_id',$id_venta)->get();
        return $this->crearPDFventa($venta,$detalle_venta,$vistaurl,$tipo);
    }


}
