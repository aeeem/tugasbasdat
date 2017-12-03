<?php

namespace Kepolisian\Http\Middleware;

use Closure;

class Polisi
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
    if (Auth::check()){

            if(Auth::user()->Polisi())
            {
                return $next($request);

            }
    }

        return abort(404);
        
    }
}

