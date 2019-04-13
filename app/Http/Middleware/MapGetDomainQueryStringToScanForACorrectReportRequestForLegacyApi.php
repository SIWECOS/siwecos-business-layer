<?php

namespace App\Http\Middleware;

use Closure;
use App\Domain;
use App\Http\Responses\StatusResponse;

class MapGetDomainQueryStringToScanForACorrectReportRequestForLegacyApi
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
        $url = urldecode(substr($request->getQueryString(), 7));
        $domain = Domain::whereUrl($url)->first();

        if ($domain && $scan = $domain->scans()->latest()->first()) {
            $request->merge(['scan' => $scan]);

            return $next($request);
        }

        return response()->json(new StatusResponse('Scan not found'), 404);
    }
}
