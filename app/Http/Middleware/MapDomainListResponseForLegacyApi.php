<?php

namespace App\Http\Middleware;

use Closure;
use App\Domain;

class MapDomainListResponseForLegacyApi
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

            $newContent = collect();

            foreach ($json->domains as $domain) {
                $domain = Domain::whereDomain($domain->domain)->first();
                $newContent->push([
                    "id" => $domain->id,
                    "domain" => $domain->mainUrl,
                    "verificationStatus" => $domain->is_verified,
                    "domainToken" => $domain->token->verification_token
                ]);
            }

            $response->setContent(json_encode([
                'message' => 'List of all domains',
                'hasFailed' => false,
                'domains' => $newContent
            ]));
        }

        return $response;
    }
}
