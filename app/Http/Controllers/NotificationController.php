<?php

namespace App\Http\Controllers;

use App\Notifications\lowscore;
use App\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
	private $scanController;

	public function __construct() {
		$this->scanController = new SiwecosScanController();
	}

	public function NotifyUserIfScoreIsBelow(int $scanId){
		// LOAD SCAN RESULT BY ID
		\Log::info('START E_MAIL REPORT: ' . $scanId);
		$numericScore = $this->scanController->GetTotalScore($scanId);
		\Log::info('SCORETEST: ' . $numericScore);
		$siwecosUser = User::whereEmail('botfrei@eco.de')->first();
		if ($numericScore <= 50){
			\Log::info('SEND MAIL TO ' . $siwecosUser->email);
			// INFORM USER AND SEND REPORT AS ATTACHEMENT
			$siwecosUser->notify(new lowscore($scanId));
		}
	}
}
