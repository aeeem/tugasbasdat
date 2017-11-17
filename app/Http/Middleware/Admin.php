<?php

namespace Kepolisian\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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

    if ( auth::check())
        {
            if(auth::User()->administrator{

            return $next($request);
            }
        }

        return redirect('\');




    }
    
}

  
             





    
     

