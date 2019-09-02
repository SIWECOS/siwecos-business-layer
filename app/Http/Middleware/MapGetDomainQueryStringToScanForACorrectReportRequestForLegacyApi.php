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
        $domain = Domain::whereDomain(parse_url($url, PHP_URL_HOST))->first();

        if ($domain) {
            $request->merge(['domain' => $domain->domain]);
        }

        return $next($request);
    }
}
