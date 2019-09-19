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
use App\Http\Requests\ScanFinishedRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Jobs\PushScanToElasticsearchJob;
use Barryvdh\Snappy\Facades\SnappyPdf;

class ScanController extends Controller
{
    public function start(ScanStartRequest $request)
    {
        $token = Token::whereToken($request->header('SIWECOS-Token'))->first();
        $domain = $token->domains()->whereDomain($request->json('domain'))->whereIsVerified(true)->first();

        if ($domain) {
            $scan = $domain->scans()->create([
                'is_freescan' => false,
                'is_recurrent' => false
            ]);

            StartScanJob::dispatch($scan);

            return response()->json(new ScanStartedResponse($scan));
        }

        return response()->json(new StatusResponse('Associated Domain not found or unverified'), 404);
    }

    public function startFreescan(ScanStartRequest $request)
    {
        $requestedDomain = strtolower($request->json('domain'));
        $domain = Domain::whereDomain($requestedDomain)->first();

        if (!$domain) {
            $domain = Token::firstOrCreate(['type' => 'freescan'], ['credits' => 10000])
                ->domains()->create(['domain' => $requestedDomain]);
        }

        $lastFreeScan = $domain->scans()->whereIsFreescan(true)->latest()->first();

        if ($lastFreeScan && ($lastFreeScan->status == 'running' || ($lastFreeScan->finished_at && $lastFreeScan->finished_at->diffInHours() < config('siwecos.freeScanCashingHours')))) {
            return response()->json(new ScanStartedResponse($lastFreeScan));
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
            $scan = request()->input('scan');
        }

        if ($scan->is_freescan || $scan->token == Token::whereToken(request()->header('SIWECOS-Token'))->first()) {
            \App::setLocale($language);

            return response()->json(new ScanReportResponse($scan));
        }

        return response()->json(new StatusResponse('Forbidden'), 403);
    }

    public function pdfReport(Scan $scan, $language = 'de', Request $request)
    {
        if ($scan->is_freescan || $scan->token == Token::whereToken($request->post('SIWECOS-Token'))->first()) {

            if ($scan->status === 'finished') {
                \App::setLocale($language);
                $pdf = SnappyPdf::loadView('pdf.report', [
                    'scan' => $scan,
                    'report' => new ScanReportResponse($scan),
                    'gaugeData' => $this->getGaugeData($scan)
                ]);
                return $pdf->download('SIWECOS Scan Report.pdf');
            }

            return response()->json(new StatusResponse('Scan not finished'), 409);
        }

        return response()->json(new StatusResponse('Forbidden'), 403);
    }

    public function finished(ScanFinishedRequest $request, Scan $scan)
    {
        if (!$scan->is_finished) {
            $scan->results = $request->get('results');
            $scan->has_error = $request->get('hasError');

            if ($missing = $request->get('withMissingScannerResults')) {

                \Log::critical("Missing ScanResult for Scan with ID " . $scan->id .  PHP_EOL
                    . "Missing result from scanner: " . implode(', ', $missing));
            }

            if ($scan->save()) {

                $this->dispatch(new PushScanToElasticsearchJob($scan));

                if (!$scan->is_freescan) {
                    $this->generateSiwecosSeals($scan->domain);
                }
                return response()->json(new StatusResponse('OK'));
            }

            return response()->json(new StatusResponse('Could not save results!', 410));
        }

        return response()->json(new StatusResponse('Scan results already retrieved!'), 403);
    }

    /**
     * Generates the seals for SIWECOS.
     *
     * @param Domain $domain
     * @return void
     */
    protected function generateSiwecosSeals(Domain $domain)
    {
        $date = $this->getScanDateSVG(Carbon::now()->format('d.m.Y'));
        $view = view('siwecos-siegel')->withDate($date)->render();
        Storage::put($domain->domain . "/d.m.y.svg", $view);

        $date = $this->getScanDateSVG(Carbon::now()->format('Y-m-d'));
        $view = view('siwecos-siegel')->withDate($date)->render();
        Storage::put($domain->domain . "/y-m-d.svg", $view);
    }

    /**
     * Returns the date for the SIWECOS seal as SVG-Code for usage with siwecos-siegel.blade.php
     *
     * @param string $date
     * @return string SVG-Code for the date
     */
    protected function getScanDateSVG(string $date)
    {
        $digitWidth = array(
            "0" => 12.5,
            "1" => 9.76562,
            "2" => 11.44531,
            "3" => 11.32812,
            "4" => 12.10937,
            "5" => 11.25,
            "6" => 11.99218,
            "7" => 10.58593,
            "8" => 12.14843,
            "9" => 11.99218,
            "." => 5.07812,
            "/" => 8.08593,
            "-" => 9.45312,
        );

        $scandate = "";
        $positionX = 0;
        foreach (str_split($date) as $digit) {
            $scandate .= '<use xlink:href="#L' . $digit . '" x="' . $positionX . '"/>';
            $positionX += $digitWidth[$digit];
        }

        return $scandate;
    }

    /**
     * Calculate data for SVG gauge in PDF Report
     * Copied from :
     * https://github.com/SIWECOS/siwecos-business-layer/blob/05e2dca540e98996b699d669b9c08ed437a31f00/app/Http/Controllers/SiwecosScanController.php#L240-L262
     *
     * @param integer $score
     * @return array
     */
    protected function calculateGaugeData(int $score)
    {
        // Radius of gauge - Fixed! Scaling is done via CSS
        $radius = 50;
        // Start gauge at 180deg+45deg
        $origin = pi() * 0.25;
        // Spread 100% over 270deg
        $factor = pi() * 1.5 / 100;
        // Degrees for the percentage
        $deg = $score * $factor;
        // red part of color
        $red = floor(min((100 - $score) / 25, 1) * 255);
        // green part of color
        $green = floor(min($score / 75, 1) * 255);
        return [
            'score' => $score,
            'score_x' => -cos($deg - $origin) * $radius,
            'score_y' => -sin($deg - $origin) * $radius,
            'score_col' => sprintf('%%23%02x%02x%02x', $red, $green, 0),
            'big_arc' => $deg > pi() ? 1 : 0,
        ];
    }

    protected function getGaugeData(Scan $scan)
    {
        $gaugeData = collect();

        // Total Score
        $gaugeData->put('total', $this->calculateGaugeData($scan->score));

        // Scanner Scores
        foreach ($scan->results as $scannerResult) {
            $scannerResult = collect($scannerResult)->recursive();

            $gaugeData->put($scannerResult->get('name'), $this->calculateGaugeData($scannerResult->get('score')));
        }

        return $gaugeData;
    }
}
