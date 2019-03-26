<?php

namespace App\Http\Middleware;

use Closure;

class MapScanStartedResponseForLegacyApi
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
        /**
         * @var \Illuminate\Http\JsonResponse $response
         */
        $response = $next($request);

        if ($response->getStatusCode() === 200) {

            $json = json_decode($response->content());

            $response->setContent(json_encode([
                'message' => '',
                'hasFailed' => false,
                'progress' => 0,
                'status' => 2,
                'id' => $json->scan_id
            ]));
        }

        return $response;
    }
}
