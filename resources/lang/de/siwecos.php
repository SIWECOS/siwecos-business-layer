<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Authentication Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines are used during authentication for various
	| messages that we need to display to the user. You are free to modify
	| these language lines according to your application's requirements.
	|
	*/

	'SCANNER_NAME_INI_S'    => 'Initiative-S Scanner',
	'SCANNER_NAME_DOMXSS'   => 'DOMXSS Scanner',
	'SCANNER_NAME_INFOLEAK' => 'Info Leak Scanner',
	'SCANNER_NAME_HEADER'   => 'Header Scanner',
	'SCANNER_NAME_WS_TLS'   => 'TLS Scaner',

	'SCORE_success'                => 'Erfolgreich',
	'SCORE_critical'               => 'Critical',
	'SCORE_info'                   => 'Info',

//WSTLS Scanner
	'HTTPS_NO_RESPONSE_SUCCESS'    => 'Server antwortet',
	'HTTPS_NO_RESPONSE_ERROR'      => 'Server antwortet nicht',
	'HTTPS_NO_RESPONSE_ERROR_DESC' => 'Der Server \“%HOST%\“ scheint überhaupt nicht zu antworten. Haben sie die Domain richtig eingegeben?',

	'PROTOCOLVERSION_TLS13_SUCCESS'=>'Moderne TLS 1.3 unterstützt',
	'PROTOCOLVERSION_TLS13_ERROR' => 'TLS 1.3 nicht unterstützt',
	'PROTOCOLVERSION_TLS13_ERROR_DESC' => 'Der Server unterstützt die neueste TLS Protokollversion. Diese befindet sich noch im Standartisierungsprozess. Sollten sie nicht wissen was dies bedeutet, können sie die Version ausschalten, da die meisten Browser diese Version noch nicht unterstützten und TLS 1.3 sich noch in der Entwicklung befindet. '

];
