<?php

namespace App\Http\Middleware;

use Closure;

class AppVerifyUserRequestJson
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
        //auth()->check()  &&
        if (  $request->wantsJson() ){
            return $next( $request );
         }
         return Redirect('/');
    }
}



