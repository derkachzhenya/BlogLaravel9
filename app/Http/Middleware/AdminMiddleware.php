<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class AdminMiddleware
{
   
    public function handle(Request $request, Closure $next)
    {
       if((int)auth()->user()->role !== User::ROLE_ADMIN){
       abort('404');
       }
        return $next($request);
    }
}
