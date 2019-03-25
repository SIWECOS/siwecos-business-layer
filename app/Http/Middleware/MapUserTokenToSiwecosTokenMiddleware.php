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
            // Need to add HTTP_ in order to access the $request->header('SIWECOS-Token') in Controllers
            // See: https://www.reddit.com/r/laravel/comments/292ymn/apicentric_laravel_how_to_add_headers_to_internal/ciiq5vn/
            $request->server->set('HTTP_SIWECOS-Token', $request->header('userToken'));

            // Needed for correct handling in other Middleware
            // Without HTTP_ !
            $request->headers->set('SIWECOS-Token', $request->header('userToken'));
        }

        return $next($request);
    }
}
