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
                $domain = Domain::whereUrl($domain->url)->first();
                $newContent->push([
                    "id" => $domain->id,
                    "domain" => $domain->url,
                    "verificationStatus" => $domain->is_verified,
                    "domainToken" => $domain->verification_token
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
