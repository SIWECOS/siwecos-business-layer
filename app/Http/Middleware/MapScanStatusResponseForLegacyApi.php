<?php

namespace App\Http\Middleware;

use Closure;

class MapScanStatusResponseForLegacyApi
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
        /**
         * @var \Illuminate\Http\JsonResponse $response
         */
        $response = $next($request);

        if ($response->getStatusCode() === 200) {

            $json = json_decode($response->content());

            $status = 2;
            if ($json->status === 'finished')
                $status = 3;

            $response->setContent(json_encode([
                'message' => '',
                'hasFailed' => false,
                'progress' => $status === 3 ? 100 : 0,
                'status' => $status,
                // for freescan status tests extract id from REQUEST_URI (/api/v1/scan/status/free/_NUMERIC_SCAN_ID_)
                'id' => substr($request->server('REQUEST_URI'), 25)
            ]));
        }

        return $response;
    }
}
