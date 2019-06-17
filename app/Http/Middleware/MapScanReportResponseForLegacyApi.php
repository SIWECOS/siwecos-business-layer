<?php

namespace App\Http\Middleware;

use Closure;
use App\Scan;
use App\Domain;
use App\Http\Responses\StatusResponse;

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

        // $scan parameter was sent by freescan route (/api/v1/freescan/result/{scan}/{language?})
        $scan = $request->route()->parameter('scan');

        // $scan parameter was not sent
        // get parameter via $domain was used by scan route (/api/v1/scan/result/{language?}?domain=http://example.com)
        if (!($scan instanceof Scan)) {
            $url = urldecode(substr($request->getQueryString(), 7));
            $url = parse_url($url, PHP_URL_HOST);
            $domain = Domain::whereDomain($url)->first();

            $scan = $domain->scans()->latest()->first();
        }

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
                    'scan_id' => $scan->id,
                    'scanner_type' => $scanner->scanner_name,
                    'result' => $tests,
                    'created_at' => $scanner->started_at,
                    'updated_at' => $scanner->finished_at,
                    'total_score' => $scanner->score,
                    'has_error' => $scanner->has_error,
                    'score' => $scanner->score,
                    'scanner_code' => $scanner->scanner_code
                ]);
            }

            $response->setContent(json_encode([
                'scanStarted' => [
                    // 'date' => $scan->started_at->toDateTimeString() . '.000000',
                    'date' => $json->started_at . '.000000',
                    'timezone_type' => 3,
                    'timezone' => 'UTC'
                ],
                'scanFinished' => [
                    'date' => $scan->finished_at->toDateTimeString() . '.000000',
                    'timezone_type' => 3,
                    'timezone' => 'UTC'
                ],
                'scanners' => $scanners,
                'hasFailed' => $scan->has_error,
                'hasCrit' => $scan->has_error,
                'message' => 'current state of requested token',
                'token' => $scan->is_freescan ? 'NOTAVAILABLE' : $scan->token->token,
                'weightedMedia' => $scan->score,
            ]));
        }

        return $response;
    }
}
