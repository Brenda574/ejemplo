<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checarIdioma
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $idioma = session('idioma',null);
        if (is_null($idioma)) {
            session(['idioma' => "desconocido"]);
            return redirect("selecionar");
        } 
        return $next($request);
    }
}
