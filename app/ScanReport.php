<?php

namespace App;

use Illuminate\Support\Collection;

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
            $scannerReport->put('error_message', $scanner->get('errorMessage'));
            $scannerReport->put('started_at', $scanner->get('started_at'));
            $scannerReport->put('finished_at', $scanner->get('finished_at'));

            $scannerReport->put('tests', $this->getTranslatedTests($scanner->get('tests'), $scannerCode));

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
            $output->push([
                'headline' => __($scannerCode . "." . $test->get('name') . "_HEADLINE"),
                'score' => $test->get('score'),
                'has_error' => $test->get('hasError'),
                'result' => $this->getTranslatedResult($test, $scannerCode),
                'result_details' => $this->getTranslatedTestDetails($test, $scannerCode),
                'result_description' => $this->getAdditionalResultDescriptionWhenScore100IsNotReached($test, $scannerCode),
                'solution_tips' => __($scannerCode . "." . $test->get('name') . "_SOLUTION_TIPS"),
                'information_link' => __($scannerCode . "." . $test->get('name') . "_LINK"),
            ]);
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
                $details->push($this->getResolvedTranslateableMessage($translateableMessage, $scannerCode));
            }
        }

        if ($test->get('hasError')) {
            $details->push($this->getResolvedTranslateableMessage($test->get('errorMessage'), $scannerCode));
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
    public function getResolvedTranslateableMessage(Collection $message, string $scannerCode)
    {
        if ($message->get('values')) {
            return __($scannerCode . "." . $message->get('placeholder'), $message->get('values')->toArray());
        }
        return __($scannerCode . "." . $message->get('placeholder'));
    }
}
