<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function register(Request $request){
        //validar datos
        $usuario = new User();

        $usuario->name = $request->nombre;
        
        $usuario->email = $request->email;
        
        $usuario->password = Hash::make($request->password);
        
        
        
        
        $usuario->ap_pat = "vacio";
        $usuario->ap_mat = "vacio";
        $usuario->telefono = "vacio";
        $usuario->direccion = "vacio";
        $usuario->id_pais = 4;
        $usuario->id_entidad = 1;
        $usuario->municipio_id = 1;
        $usuario->id_tipo_usu = 5;
        $usuario->colonia = "vacio";
        $usuario->cp = 12345;
        $usuario->fecha_naci = "1999-05-22";
        
        $usuario->status = 1;
        
        Auth::login($usuario);
        $usuario->save();

        return redirect(route('privada'));
    }

    public function login(Request $request){

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $remember =($request->has('remember') ? true : false);

        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();
            return redirect()->intended(asset('/'));
        }else{
            return redirect('login');
        }
        
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
