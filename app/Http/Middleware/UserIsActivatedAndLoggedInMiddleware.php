<?php

namespace App\Http\Middleware;

use Closure;
use App\Token;
use App\Http\Responses\StatusResponse;

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
            if ($token->user && $token->user->is_active) {
                return $next($request);
            }
        }

        return response()->json(new StatusResponse('Token not allowed'), 403);
    }
}
