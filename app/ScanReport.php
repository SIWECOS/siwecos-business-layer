<?php

namespace App;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class ScanReport
{
    public $report;
    protected $scan;

    public function __construct(Scan $scan)
    {
        $this->scan = $scan;
        $this->report = $this->generateReport();
    }

    /**
     * Generates the ScanReport
     *
     * @return Collection
     */
    public function generateReport()
    {
        $report = collect();

        foreach ($this->scan->results as $scanner) {
            $scanner = collect($scanner)->recursive();

            $scannerCode = $scanner->get('name');
            $scannerReport = collect();

            $scannerReport->put('scanner_name', __($scannerCode . '.SCANNER_NAME'));
            $scannerReport->put('scanner_code', $scannerCode);
            $scannerReport->put('score', $scanner->get('score'));
            $scannerReport->put('has_error', $scanner->get('hasError'));

            $errorMessage = collect($scanner->get('errorMessage'))->recursive();

            if ($errorMessage->get('translationStringId')) {
                $scannerReport->put('error_message', __($scannerCode . '.' . $errorMessage->get('translationStringId')));
            } else {
                $scannerReport->put('error_message', null);
            }

            $scannerReport->put('started_at', $scanner->get('startedAt'));
            $scannerReport->put('finished_at', $scanner->get('finishedAt'));

            if ($scanner->get('tests')) {
                $scannerReport->put('tests', $this->getTranslatedTests($scanner->get('tests'), $scannerCode));
            } else {
                $scannerReport->put('tests', []);
            }

            $report->push($scannerReport);
        }

        return $report;
    }

    /**
     * Translates and formats the tests for a given $tests collection
     *
     * @param Collection $tests
     * @param string $scannerCode
     * @return Collection
     */
    public function getTranslatedTests(Collection $tests, string $scannerCode)
    {
        $output = collect();
        foreach ($tests as $test) {
            if ($test->get('scoreType') !== 'hidden') {
                $output->push([
                    'headline' => __($scannerCode . "." . $test->get('name') . "_HEADLINE"),
                    'score' => $test->get('score'),
                    'score_type' => $test->get('scoreType'),
                    'has_error' => $test->get('hasError'),
                    'result' => $this->getTranslatedResult($test, $scannerCode),
                    'result_details' => $this->getTranslatedTestDetails($test, $scannerCode),
                    'result_description' => $this->getAdditionalResultDescriptionWhenScore100IsNotReached($test, $scannerCode),
                    'solution_tips' => __($scannerCode . "." . $test->get('name') . "_SOLUTION_TIPS"),
                    'information_link' => __($scannerCode . "." . $test->get('name') . "_LINK"),
                ]);
            }
        }

        return $output;
    }

    /**
     * Returns the translated result line for the Report.
     *
     * @param Collection $test
     * @param string $scannerCode
     * @return string
     */
    public function getTranslatedResult(Collection $test, string $scannerCode)
    {
        if ($test->get('score') == 100) {
            return __($scannerCode . "." . $test->get('name') . "_POSITIVE");
        }

        if ($test->get('hasError') == true) {
            return __('SIWECOS.TEST_ERROR_MESSAGE');
        }

        return __($scannerCode . "." . $test->get('name') . "_NEGATIVE");
    }

    /**
     * Returns additional result description when the score of 100 is not reached
     *
     * @param Collection $test
     * @param string $scannerCode
     * @return string|null
     */
    public function getAdditionalResultDescriptionWhenScore100IsNotReached(Collection $test, string $scannerCode)
    {
        if ($test->get('score') == 100 || $test->get('hasError') == true) {
            return null;
        }

        return __($scannerCode . "." . $test->get('name') . "_DESCRIPTION");
    }

    /**
     * Returns the translated details for further information in the Report.
     *
     * @param Collection $test
     * @param string $scannerCode
     * @return Collection|null The translated details collection or null if no details were sent
     */
    public function getTranslatedTestDetails(Collection $test, string $scannerCode)
    {
        $details = collect();

        if ($test->get('testDetails')) {
            foreach ($test->get('testDetails') as $translateableMessage) {
                $details->push(self::getResolvedTranslateableMessage($translateableMessage, $scannerCode));
            }
        }

        if ($test->get('hasError')) {
            if ($test->get('errorMessage')) {
                $details->push(self::getResolvedTranslateableMessage($test->get('errorMessage'), $scannerCode));
            } else {
                Log::critical('Scanner Interface Violation! Missing "errorMessage" in scanner ' . $scannerCode . ' : ' . $test);
            }
        }

        return $details->count() ? $details : null;
    }

    /**
     * Return the resolved and translated TranslateableMessage string
     *
     * @param Collection $message
     * @param string $scannerCode
     * @return string
     */
    public static function getResolvedTranslateableMessage(Collection $message, string $scannerCode)
    {
        // Ensure all possible arrays are collections
        $message = $message->recursive();

        try {
            if ($message->get('placeholders')) {
                return __($scannerCode . "." . $message->get('translationStringId'), $message->get('placeholders')->toArray());
            }
        } catch (\Exception $e) {
            Log::critical('Scanner Interface Violation! ' . $scannerCode . ' : ' . $message);
        }

        return __($scannerCode . "." . $message->get('translationStringId'));
    }
}
