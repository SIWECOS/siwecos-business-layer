<?php

namespace App\Http\Middleware;

use Closure;

class MapDomainDeletedResponseForLegacyApi
{
    /**
     * Handle an outgoing response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $response->setContent(json_encode([
            'message' => 'Domain removed',
            'hasFailed' => false,
        ]));

        return $response;
    }
}
