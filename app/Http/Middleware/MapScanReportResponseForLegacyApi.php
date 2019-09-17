<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Carbon;

class MapScanReportResponseForLegacyApi
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

            $scanners = collect();

            foreach ($json->report as $scanner) {

                $tests = collect();
                foreach ($scanner->tests as $test) {
                    $testDetails = collect();

                    if ($test->result_details) {
                        foreach ($test->result_details as $details) {
                            $testDetails->push([
                                'report' => $details,
                                'name' => $details
                            ]);
                        }
                    }

                    $tests->push([
                        'name' => $test->headline,
                        'hasError' => $test->has_error,
                        'errorMessage' => $test->has_error ? $test->result : null,
                        'score' => $test->score,
                        'testDetails' => $testDetails,
                        'link' => $test->information_link,
                        'description' => $test->result,
                        'report' => $test->result_description,
                        'scoreTypeRaw' => $test->score_type
                    ]);
                }

                $scanners->push([
                    'scanner_type' => $scanner->scanner_name,
                    'result' => $tests,
                    'created_at' => Carbon::create($scanner->started_at)->toDateTimeString() . '.000000',
                    'updated_at' => Carbon::create($scanner->finished_at)->toDateTimeString() . '.000000',
                    'total_score' => $scanner->score,
                    'has_error' => $scanner->has_error,
                    'error_message' => $scanner->error_message,
                    'score' => $scanner->score,
                    'scanner_code' => $scanner->scanner_code
                ]);
            }

            $response->setContent(json_encode([
                'scanStarted' => [
                    'date' => Carbon::create($json->started_at)->toDateTimeString() . '.000000',
                    'timezone_type' => 3,
                    'timezone' => 'UTC'
                ],
                'scanFinished' => [
                    'date' => Carbon::create($json->finished_at)->toDateTimeString() . '.000000',
                    'timezone_type' => 3,
                    'timezone' => 'UTC'
                ],
                'id' => $json->id,
                'scanners' => $scanners,
                'hasFailed' => $json->has_error,
                'hasCrit' => $json->has_error,
                'message' => 'current state of requested token',
                'token' => 'NOTAVAILABLE',
                'weightedMedia' => $json->score,
            ]));
        }

        return $response;
    }
}
