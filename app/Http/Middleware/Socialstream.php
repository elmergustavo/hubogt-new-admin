<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Socialstream
{
    public function handle(Request $request, Closure $next)
    {
        // Update: Make Socialstream think we're in the register page always to allow the backwards compatibility of matching provider->email = user->email
        if(session()->get('socialstream.previous_url') === route('login'))
            session()->put('socialstream.previous_url', route('register'));

        return $next($request);
    }
}
