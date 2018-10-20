<?php

namespace App\Http\Controllers;

use App\Notifications\lowscore;
use App\User;

class NotificationController extends Controller
{
    private $scanController;

    public function __construct()
    {
        $this->scanController = new SiwecosScanController();
    }

    public function NotifyUserIfScoreIsBelow(int $scanId)
    {
        // LOAD SCAN RESULT BY ID
        \Log::info('START E_MAIL REPORT: '.$scanId);
        $numericScore = $this->scanController->GetTotalScore($scanId);
        \Log::info('SCORETEST: '.$numericScore);
        $minimumscore = env('NOTIFICATION_LOW_SCORE', 50);
        if ($numericScore < $minimumscore) {
            $recipients = env('NOTIFICATION_LOW_SCORE_RECIPIENTS', '');
            $count_recipients = 0;
            foreach (preg_split("/[\s,]+/", $recipients) as $recipient) {
                $siwecosUser = User::whereEmail($recipient)->first();
                \Log::info('SEND MAIL TO '.$siwecosUser->email);
                // INFORM USER AND SEND REPORT AS ATTACHEMENT
                $siwecosUser->notify(new lowscore($scanId));
                $count_recipients++;
            }
            \Log::info('Reports sent: '.$count_recipients);
        }
    }
}
