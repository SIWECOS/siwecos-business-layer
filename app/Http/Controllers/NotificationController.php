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
		$devUser = User::whereEmail('mwege@byte5.de')->first();
		$siwecosUser = User::whereEmail('stephan.hradek@eco.de');
		if ($numericScore <= 50){
			\Log::info('SEND MAIL TO ' . $devUser->email);
			\Log::info('SEND MAIL TO ' . $siwecosUser->email);
			// INFORM USER AND SEND REPORT AS ATTACHEMENT
			$devUser->notify(new lowscore($scanId));
			$siwecosUser->notify(new lowscore($scanId));
		}
	}
}
