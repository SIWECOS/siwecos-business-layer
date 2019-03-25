<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Token;
use App\Http\Responses\StatusResponse;
use App\Http\Requests\ScanStartRequest;
use App\Jobs\StartScanJob;

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
            $this->dispatch(new StartScanJob($scan));

            return response()->json(new StatusResponse('Job dispatched'));
        }

        return response()->json(new StatusResponse('Forbidden'), 403);
    }
}
