<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Auth::user())
        {
            return $next($request);
        }
        else
        {
            abort(401, 'Lo sentimos, esta acción no esta permitida 401');
        }

        return $next($request);
    }
}
