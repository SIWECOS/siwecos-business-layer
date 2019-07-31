<?php

namespace App\Http\Middleware;

use Closure;

class MapDomainUrlParameterToDomainForLegacyApi
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
        $url = $request->json('domain');

        $request->merge(['domain' => parse_url($url, PHP_URL_HOST)]);

        return $next($request);
    }
}
