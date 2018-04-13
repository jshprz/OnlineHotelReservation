<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;
class FrontdeskMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next ,$guard = null)
    {
         if (Auth::guard($guard)->check() && Auth::user()->permission=="frontdesk") {
            return $next($request);
        }
        return redirect()->route('login');
    }
}
