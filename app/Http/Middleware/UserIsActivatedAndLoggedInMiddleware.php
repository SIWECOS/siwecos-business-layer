<?php

namespace App\Http\Middleware;

use Closure;
use App\Token;

class UserIsActivatedAndLoggedInMiddleware
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
        $token = Token::with('user')->whereToken($request->header('SIWECOS-Token'))->first();

        if ($token) {
            if ($token->user && $token->user->active) {
                return $next($request);
            }
        }

        return response('Token not allowed', 403);
    }
}
