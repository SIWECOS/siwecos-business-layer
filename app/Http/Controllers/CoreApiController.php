<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

const BASE_ROUTE  = '/api/v1/';
const CORE_TOKEN  = 'token/';
const CORE_DOMAIN = 'domain/';
const CORE_SCAN   = 'scan/';

class CoreApiController extends Controller {
	var $coreApiUrl;
	var $coreApiMasterToken;
	var $httpClient;

	public function __construct() {
		$this->coreApiUrl         = env( 'CORE_URL', 'http://siwecos-core-api.dev/' );
		$this->coreApiMasterToken = env( 'CORE_MASTER_TOKEN', 'RIdHtlCq9p1iQD2I3DLPwZV0' );
		$this->httpClient         = new Client();
	}

	public function CreateUserToken( int $credits ) {
		try {
			$response = $this->httpClient->POST( $this->coreApiUrl . BASE_ROUTE . CORE_TOKEN . 'add', [
				'json'    => [ 'credits' => $credits ],
				'headers' => [ 'masterToken' => $this->coreApiMasterToken ]
			] );

			return json_decode( $response->getBody(), true );
		} catch ( RequestException $requestEx ) {
			return $requestEx;
		}
	}

	public function GetTokenCredits( $userToken ) {
		try {
			$response = $this->httpClient->POST( $this->coreApiUrl . BASE_ROUTE . CORE_TOKEN . 'status', [
				'json'    => [ 'token' => $userToken ],
				'headers' => [ 'masterToken' => $this->coreApiMasterToken, 'siwecosToken' => $userToken ]
			] );

			return json_decode( $response->getBody(), true );
		} catch ( RequestException $requestEx ) {
			return $requestEx;
		}
	}

	public function UpdateTokenCredits( $userToken, $credits ) {
		try {
			$response = $this->httpClient->POST( $this->coreApiUrl . BASE_ROUTE . CORE_TOKEN . 'setcredits', [
				'json'    => [ 'token' => $userToken, 'credits' => $credits ],
				'headers' => [ 'masterToken' => $this->coreApiMasterToken, 'siwecosToken' => $userToken ]
			] );

			return json_decode( $response->getBody(), true );
		} catch ( RequestException $requestEx ) {
			return $requestEx;
		}
	}

	public function RevokeToken( $userToken ) {
		try {
			$response = $this->httpClient->POST( $this->coreApiUrl . BASE_ROUTE . CORE_TOKEN . 'revoke', [
				'json'    => [ 'token' => $userToken ],
				'headers' => [ 'masterToken' => $this->coreApiMasterToken, 'siwecosToken' => $userToken ]
			] );

			return json_decode( $response->getBody(), true );
		} catch ( RequestException $requestEx ) {
			return $requestEx;
		}
	}

	public function CreateDomain( $userToken, $domain, $danger_level ) {
		try {
			$response = $this->httpClient->POST( $this->coreApiUrl . BASE_ROUTE . CORE_DOMAIN . 'add', [
				'json'    => [ 'domain' => $domain, 'danger_level' => $danger_level ],
				'headers' => [ 'masterToken' => $this->coreApiMasterToken, 'siwecosToken' => $userToken ]
			] );

			return json_decode( $response->getBody(), true );
		} catch ( RequestException $requestEx ) {
			return $requestEx;
		}
	}

	public function DeleteDomain( $userToken, $domain ) {
		try {
			$response = $this->httpClient->POST( $this->coreApiUrl . BASE_ROUTE . CORE_DOMAIN . 'remove', [
				'json'    => [ 'domain' => $domain ],
				'headers' => [ 'masterToken' => $this->coreApiMasterToken, 'siwecosToken' => $userToken ]
			] );

			return json_decode( $response->getBody(), true );
		} catch ( RequestException $requestEx ) {
			return $requestEx;
		}
	}

	public function GetDomains( $userToken ) {
		try {
			$response = $this->httpClient->GET( $this->coreApiUrl . BASE_ROUTE . 'domains', [
				'headers' => [ 'masterToken' => $this->coreApiMasterToken, 'siwecosToken' => $userToken ]
			] );

			return json_decode( $response->getBody(), true );
		} catch ( RequestException $requestEx ) {
			return $requestEx;
		}
	}

	public function VerifyDomain( $userToken, $domain ) {
		try {
			$response = $this->httpClient->POST( $this->coreApiUrl . BASE_ROUTE . CORE_DOMAIN . 'verify', [
				'json'    => [ 'domain' => $domain ],
				'headers' => [ 'masterToken' => $this->coreApiMasterToken, 'siwecosToken' => $userToken ]
			] );

			return json_decode( $response->getBody(), true );
		} catch ( RequestException $requestEx ) {
			return $requestEx;
		}
	}

	public function CreateScan( $userToken, $url, $danger_level ) {
		try {
			$response = $this->httpClient->POST( $this->coreApiUrl . BASE_ROUTE . CORE_SCAN . 'start', [
				'json'    => [ 'domain' => $url, 'dangerLevel' => $danger_level, 'callbackurls' => [] ],
				'headers' => [ 'masterToken' => $this->coreApiMasterToken, 'siwecosToken' => $userToken ]
			] );

			return json_decode( $response->getBody(), true );
		} catch ( RequestException $requestEx ) {
			return $requestEx;
		}
	}

	public function GetScanResultRaw( $userToken, $url ) {
		try {
			$response = $this->httpClient->GET( $this->coreApiUrl . BASE_ROUTE . CORE_SCAN . 'results/raw?domain=' . $url, [
				'headers' => [ 'masterToken' => $this->coreApiMasterToken, 'siwecosToken' => $userToken ]
			] );

			return json_decode( $response->getBody(), true );
		} catch ( RequestException $requestEx ) {
			return $requestEx;
		}
	}
}
