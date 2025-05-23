<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetFilamentLocale
{
    public function handle(Request $request, Closure $next)
    {
        App::setLocale('fr');
        
        return $next($request);
    }
}