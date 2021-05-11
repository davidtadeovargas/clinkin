<?php

namespace App\Http\Middleware;

use Closure;

class InitMiddleware
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
        \Config::set('APP_URL', "http://localhost:8081/clinkin");
        \Config::set('ENV', "test"); //production, test

        return $next($request);
    }
}
