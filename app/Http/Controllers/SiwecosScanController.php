<?php

namespace App\Http\Controllers;

use App\User;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class SiwecosScanController extends Controller {

	var $coreApi;

	public function __construct() {
		$this->coreApi = new CoreApiController();
	}

	public function CreateNewScan(Request $request) {
		$userToken = $request->header( 'userToken' );
		$tokenUser = User::where( 'token', $userToken )->first();
		if ( $tokenUser instanceof User ) {
			$response = $this->coreApi->CreateScan( $userToken, $request->url, $request->danger_level );
			if ( $response instanceof RequestException ) {
				$responseText = json_decode( $response->getResponse()->getBody() );
				throw new HttpResponseException( response()->json( $responseText, $response->getCode() ) );
			}

			return $response;
		}
		return response( "User not Found", 404 );
	}

	public function GetScanResultRaw(Request $request) {
		$userToken = $request->header( 'userToken' );
		$tokenUser = User::where( 'token', $userToken )->first();
		if ( $tokenUser instanceof User ) {
			$response = $this->coreApi->GetScanResultRaw( $userToken, $request->url);
			if ( $response instanceof RequestException ) {
				$responseText = json_decode( $response->getResponse()->getBody() );
				throw new HttpResponseException( response()->json( $responseText, $response->getCode() ) );
			}

			return $response;
		}
		return response( "User not Found", 404 );
	}
}
