<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class cliente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()->id_tipo_usu ===3){

            return $next($request);
            }elseif(Auth::check() && Auth::user()->id_tipo_usu ===1){
                return $next($request);
            }
            return redirect(asset('/'));
    }
}
