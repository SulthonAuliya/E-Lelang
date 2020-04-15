<?php

namespace App\Http\Middleware;

use Closure;

class petugas
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
        if (auth()->user()->isPetugas == 1) {
            return $next($request);
        }
        return redirect('home')->with('error','you dont have Petugas access');
    }
}
