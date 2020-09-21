<?php

namespace App\Http\Middleware;

use Closure;

class isPetugas
{
    public function handle($request, Closure $next)
    {
    if(auth()->user()->role=="petugas"){
       return $next($request);
    }
    return redirect(‘home’)->with(‘error’,"You don't have admin access.");
}
}
