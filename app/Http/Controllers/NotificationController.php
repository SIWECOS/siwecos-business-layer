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
		$siwecosUser = User::whereEmail('mwege@byte5.de')->first();
		$siwecosUser->notify(new lowscore($scanId));
		if ($numericScore <= 50){
			// INFORM USER AND SEND REPORT AS ATTACHEMENT
		}
	}
}
