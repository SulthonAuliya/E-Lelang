<?php

namespace App\Http\Middleware;

use Closure;

class masyarakat
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
        if (auth()->user()->isAdmin == 0 && auth()->user()->isAdmin == 0) {
            return $next($request);
        }
        return redirect('home')->with('error','you dont have access');
    }
}
