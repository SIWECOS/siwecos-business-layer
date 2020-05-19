<?php

namespace App\Http\Middleware;

use Closure;
use App\Domain;

class MapDomainCreatedResponseForLegacyApi
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
            $domain = Domain::whereDomain($json->domain)->first();

            $response->setContent(json_encode([
                'message' => 'Domain was created',
                'hasFailed' => false,
                'domainId' => $domain->id,
                'verificationStatus' => $domain->is_verified,
                'domainToken' => $json->verification_token
            ]));
        }

        return $response;
    }
}
