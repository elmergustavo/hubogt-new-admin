<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Comprobar si hay un usuario autenticado
        if ($user = $request->user())
        {
            // Aquí va tu lógica existente con $user en lugar de $request->user()
            if ($request->user()->role == 'vendor')
            {
                return redirect()->route('filament.vendor');
            }
            elseif ($request->user()->role == 'admin')
            {
                return redirect()->route('filament.admin');
            }
            else
            {
                return redirect()->route('home');
            }
        }


        return $next($request);
    }
}
