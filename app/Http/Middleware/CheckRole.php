<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //if (Auth::check()) {
            if (Auth::user()->role_id == 1) {
                return redirect()->route('main');
            } else if (Auth::user()->role_id == 2) {
                return $next($request);
            }
        //}
        return $next($request);
    }
}
