<?php

namespace Kepolisian\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class administrator
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

            if(Auth::user()->IsAdmin()){
                return $next($request);

            }
        }
        return abort(404);
        
    }
}
