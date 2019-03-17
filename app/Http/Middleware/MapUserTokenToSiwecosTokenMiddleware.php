<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\HeaderBag;

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
        if ($request->header('userToken', false)) {
            // Need to add HTTP_ in order to make this work
            // See: https://www.reddit.com/r/laravel/comments/292ymn/apicentric_laravel_how_to_add_headers_to_internal/ciiq5vn/
            $request->server->set('HTTP_SIWECOS-Token', $request->header('userToken'));

            // $request->headers->set('SIWECOS-Token', $request->header('userToken')); // does not work!
        }

        return $next($request);
    }
}
