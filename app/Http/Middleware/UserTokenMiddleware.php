<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class UserTokenMiddleware
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
        $token = $request->header('userToken');
        if (isset($token))
        {
            $authenticatedUser = User::getTokenByString($request->header('userToken'));
            if ($authenticatedUser instanceof User)
            {
                    return $next($request);
            }
        }
        return response('Token not allowed', 403);
    }
}
