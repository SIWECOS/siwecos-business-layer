<?php

namespace App\Http\Middleware;

use Closure;

class MapUserTokenToSiwecosTokenMiddleware
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
        $request->headers->set('SIWECOS-Token', $request->header('userToken'));

        return $next($request);
    }
}
