<?php

namespace App\Http\Controllers;

use App\Notifications\lowscore;
use App\User;
use App\Http\Requests\NotifyUserAboutLowScoreRequest;

class NotificationController extends Controller
{
    private $scanController;

    public function __construct()
    {
        $this->scanController = new SiwecosScanController();
    }

    public function NotifyUserIfScoreIsBelowMinimum(NotifyUserAboutLowScoreRequest $request)
    {
        $minimumscore = env('NOTIFICATION_LOW_SCORE', 50);
        if ($request->json('totalScore') < $minimumscore) {
            /**
             * TODO: Benachrichtungs-Logik ändern.
             * - Diese Funktion ist zur Zeit nur für Testzwecke implementiert.
             * - Es werden noch keine Mails an die Nutzer geschickt
             * - Es wird ein Flag benötigt, der in staging etc. die Nachrichten nur an die in der
             *   .env definierten Empfänger versendet
             * - Andernfalls sollen die recipients => additionalRecipients sein und unabhängig
             *   von einem Eintrag in der User-Tabelle verwendet werden können.
             */
            $recipients = env('NOTIFICATION_LOW_SCORE_RECIPIENTS', '');
            foreach (preg_split("/[\s,]+/", $recipients) as $recipient) {
                $siwecosUser = User::whereEmail($recipient)->first();

                // INFORM USER AND SEND REPORT AS ATTACHEMENT
                $siwecosUser->notify(new lowscore($request->json('scanId')));
            }
        }
    }
}
