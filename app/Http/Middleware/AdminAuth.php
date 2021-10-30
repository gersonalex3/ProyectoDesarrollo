<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     //aca se hace la funcion para autenticar el usuario
    public function handle(Request $request, Closure $next)
    {
        //validamos si el usuario unicia session
        if(Auth()->check());
        {
            if (auth()->user()->role == 'admin'){ //si la variable usuarios el rol es igual a admin entonces
                return $next($request);
            }
            
        }
        return redirect()->to('/');//si no hay session iniciada me manda al login luego de aca vamos a Web.php
    }
}
