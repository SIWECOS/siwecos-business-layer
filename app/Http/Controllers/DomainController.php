<?php

namespace App\Http\Controllers;

use App\Domain;
use Illuminate\Http\Request;
use App\Http\Requests\CreateDomainRequest;
use App\Token;
use App\Http\Requests\VerifyDomainRequest;
use App\DomainVerifier;
use Keygen\Keygen;
use App\HTTPClient;
use App\Http\Requests\DeleteDomainRequest;
use App\Http\Responses\DomainListResponse;
use App\Http\Responses\StatusResponse;
use App\Http\Responses\DomainResponse;
use App\Jobs\StartCrawlerJob;

class DomainController extends Controller
{
    public function __construct(HTTPClient $client)
    {
        $this->client = $client;
    }

    public function create(CreateDomainRequest $request)
    {
        $token = Token::whereToken($request->header('SIWECOS-Token'))->first();
        $newDomain = strtolower($request->json('domain'));

        $domain = Domain::whereDomain($newDomain)->firstOrNew([
            'domain' => $newDomain
        ]);

        if (!$domain->is_verified) {
            $domain->verification_token = Keygen::alphanum(64)->generate();
            $domain->token()->associate($token);

            if ($domain->save()) {
                return response()->json(new DomainResponse($domain), 200);
            }

            return response()->json(new StatusResponse('Domain was not created'), 410);
        }

        return response()->json(new StatusResponse('Domain is already verified'), 403);
    }

    public function verify(VerifyDomainRequest $request)
    {
        $domain = Domain::whereDomain($request->json('domain'))->first();

        if (!$domain->is_verified) {
            $verifier = new DomainVerifier($domain, $this->client);

            if ($verifier->verify()) {
                if ($domain->update(['is_verified' => true])) {
                    $this->dispatch(new StartCrawlerJob($domain));
                    return response()->json(new DomainResponse($domain), 200);
                }
            }
            return response()->json(new StatusResponse('Domain could not be verified'), 404);
        }

        return response()->json(new StatusResponse('Domain is already verified'), 403);
    }

    public function list(Request $request)
    {
        $domains = Token::whereToken($request->header('SIWECOS-Token'))->first()->domains;

        return response()->json(new DomainListResponse($domains));
    }

    public function show(Domain $domain, Request $request)
    {
        $token = Token::whereToken($request->header('SIWECOS-Token'))->first();

        if ($token && $token == $domain->token) {
            return response()->json(new DomainResponse($domain));
        }

        return response()->json(new StatusResponse('Forbidden'), 403);
    }

    public function delete(DeleteDomainRequest $request)
    {
        $token = Token::whereToken($request->header('SIWECOS-Token'))->first();
        $domain = $token->domains()->whereDomain($request->json('domain'))->first();

        if ($domain && $domain->delete()) {
            return response()->json(new StatusResponse('Domain deleted'), 200);
        }

        return response()->json(new StatusResponse('Forbidden'), 403);
    }

    public function latestScanReport(Domain $domain, $language = 'de', Request $request)
    {
        // For Legacy API Compatibility
        if ($domain->domain == null) {
            $domain = Domain::whereDomain($request->input('domain'))->first();
            if ($domain === null) {
                return response()->json(new StatusResponse('Domain Not Found'), 404);
            }
        }

        $scan = $domain->siwecosScans()->whereIsFreescan(true)->latest()->first();

        if ($domain->token->token == $request->header('SIWECOS-Token')) {
            $scan = $domain->siwecosScans()->whereIsFreescan(false)->latest()->first() ?: $scan;
        }

        if ($scan) {
            return (new ScanController())->report($scan, $language);
        }

        return response()->json(new StatusResponse('Scan Not Found'), 404);
    }

    public function sealproof(Domain $domain)
    {
        if ($domain->is_verified) {
            $siwecosScan = $domain->siwecosScans()
                ->whereIsFreescan(false)
                ->latest()
                ->take(10)
                ->get()
                ->filter(function ($siwecosScan) {
                    return $siwecosScan->isFinished;
                })
                ->first();

            if ($siwecosScan) {
                return response()->json([
                    'domain' => $domain->domain,
                    'finished_at' => $siwecosScan->finished_at->toIso8601ZuluString(),
                    'score' => $siwecosScan->score
                ]);
            }

            return response()->json(new StatusResponse('No valid recurrent scan found.'), 404);
        }

        return response()->json(new StatusResponse('Domain is not verified by SIWECOS.'), 409);
    }
}
