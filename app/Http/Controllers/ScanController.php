<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Token;
use App\Http\Responses\StatusResponse;
use App\Http\Requests\ScanStartRequest;
use App\Jobs\StartScanJob;
use App\Domain;
use App\Http\Responses\ScanStartedResponse;
use App\Scan;
use App\Http\Responses\ScanStatusResponse;
use App\Http\Responses\ScanReportResponse;

class ScanController extends Controller
{
    public function start(ScanStartRequest $request)
    {
        $token = Token::whereToken($request->header('SIWECOS-Token'))->first();
        $domain = $token->domains()->whereUrl($request->json('url'))->whereIsVerified(true)->first();

        if ($domain) {
            $scan = $domain->scans()->create([
                'is_freescan' => false,
                'is_recurrent' => false
            ]);

            StartScanJob::dispatch($scan);

            return response()->json(new ScanStartedResponse($scan));
        }

        return response()->json(new StatusResponse('Forbidden'), 403);
    }

    public function startFreescan(ScanStartRequest $request)
    {
        $domain = Domain::whereUrl($request->json('url'))->first();

        // Domain existiert nicht
        if (!$domain) {
            $domain = Token::create([
                'type' => 'freescan',
                'credits' => 5
            ])->domains()->create(['url' => $request->json('url')]);
        }

        $scan = $domain->scans()->create([
            'is_freescan' => true
        ]);

        StartScanJob::dispatch(Scan::latest()->first());

        return response()->json(new ScanStartedResponse($scan));
    }

    public function report(Scan $scan, $language = 'de')
    {
        /**
         * Additional statement for the API v1 compatibility;
         * If the v1 route is used, no $scan gets injected by route model binding
         * Therefore the MapScanReportResponseForLegacyApi Middleware transforms the `domain` parameter and delivers the $scan
         *
         * Note: An injected $scan does not have a domain
         */
        if (!$scan->domain) {
            $scan = request()->get('scan');
        }

        if ($scan->is_freescan || $scan->token == Token::whereToken(request()->header('SIWECOS-Token'))->first()) {
            \App::setLocale($language);
            return response()->json(new ScanReportResponse($scan));
        }

        return response()->json(new StatusResponse('Forbidden'), 403);
    }
}
