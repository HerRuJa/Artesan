<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Correo;

class CorreoController extends Controller
{
    

    //
    public function formulario_correo()
    {
        return view("Correo.form_mail");
    }

    public function enviar(Request $_request){
        $destinatario=$_request->input("destinatario");
        $asunto=$_request->input("asunto");
        $contenido=$_request->input("contenido_mail");

        $data= array('contenido'=>$contenido);
        $r = Mail::send('Correo.plantilla_correo', $data, function($message) use ($asunto,$destinatario)
            {
        $message->from('jruizh2@toluca.tecnm.mx', 'Jaime Ruiz Hernández');
        $message->to($destinatario)->subject($asunto);
            });
            
        $correo = new Correo;
        $correo->destinatario = $destinatario;
        $correo->asunto = $asunto;
        $correo->mensaje = $contenido;
        $correo->save();

        if(!$r){
            return view("Mensajes.plantillamensaje")
                ->with('var','2')
                ->with('msj','Error al enviar el correo')
                ->with('ruta_boton','/')
                ->with('mensaje_boton','Inicio');
        }else{
            return view("Mensajes.plantillamensaje")
                ->with('var','1')
                ->with('msj','Correo enviado correctamente')
                ->with('ruta_boton','/')
                ->with('mensaje_boton','Inicio');

        }
    }
}
