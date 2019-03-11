<?php

namespace App\Http\Middleware;

use Closure;
use App\Token;

class SIWECOSTokenMiddleware
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
        $token = Token::whereToken($request->header('SIWECOS-Token'))->first();

        if ($token)
            return $next($request);

        return response('Token not allowed or missing.', 403);
    }
}
