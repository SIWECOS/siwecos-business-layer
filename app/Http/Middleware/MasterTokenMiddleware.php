<?php

namespace App\Http\Middleware;

use App\Token;
use Closure;

class MasterTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->header('masterToken');
        if (isset($token)) {
            $headerToken = Token::getTokenByString($token);
            if ($headerToken instanceof Token && $headerToken->acl_level == 9999) {
                return $next($request);
            }
        }

        return response('Token not allowed', 403);
    }
}
