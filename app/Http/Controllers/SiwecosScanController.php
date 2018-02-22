<?php

namespace App\Http\Controllers;

use App;
use App\User;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class SiwecosScanController extends Controller {

	var $coreApi;

	public function __construct() {
		$this->coreApi = new CoreApiController();
	}

	public function CreateNewScan( Request $request ) {
		$userToken = $request->header( 'userToken' );
		$tokenUser = User::where( 'token', $userToken )->first();
		if ( $tokenUser instanceof User ) {
			Log::info( 'User ' . $tokenUser->email . ' requested Scan Start' );
			$response = $this->coreApi->CreateScan( $userToken, $request->domain, $request->dangerLevel );
			if ( $response instanceof RequestException ) {
				$responseText = json_decode( $response->getResponse()->getBody() );
				throw new HttpResponseException( response()->json( $responseText, $response->getCode() ) );
			}

			return $response;
		}

		return response( "User not Found", 404 );
	}

	public function BrodcastScanResult( int $id ) {

		event( new App\Events\FreeScanReady( $id ));
	}

	public function GetScanResultById(int $id){
		//Validation if free scan
		$response = $this->coreApi->GetResultById( $id );
		$rawCollection = collect( $response );
		return response()->json( $this->translateResult( $rawCollection, 'de' ) );
	}

	public function CreateNewFreeScan( Request $request ) {
		$url = $request->json( 'domain' );
	}


	public function GetScanResultRaw( Request $request ) {
		$userToken = $request->header( 'userToken' );
		$tokenUser = User::where( 'token', $userToken )->first();
		if ( $tokenUser instanceof User ) {
			$response = $this->coreApi->GetScanResultRaw( $userToken, $request->domain );
			if ( $response instanceof RequestException ) {
				$responseText = json_decode( $response->getResponse()->getBody() );
				throw new HttpResponseException( response()->json( $responseText, $response->getCode() ) );
			}

			return $response;
		}

		return response( "User not Found", 404 );
	}

	/**
	 * @param Request $request
	 * @param string $lang
	 *
	 * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
	 */
	public function GetScanResult( Request $request, string $lang = 'de' ) {
		Log::info( 'GET RESULTS FOR ' . $request->get( 'domain' ) . ' LANG ' . $lang );
		$userToken = $request->header( 'userToken' );
		$tokenUser = User::where( 'token', $userToken )->first();
		App::setLocale( $lang );
		if ( $tokenUser instanceof User ) {
			$response      = $this->coreApi->GetScanResultRaw( $userToken, $request->domain );
			$rawCollection = collect( $response );

			return response()->json( $this->translateResult( $rawCollection, $lang ) );
		}

		return response( "Result not found", 412 );
	}

	protected function translateResult( Collection $resultCollection, string $language ) {
		$scannerCollection = collect( $resultCollection['scanners'] );
		$scannerCollection->transform( function ( $item, $key ) {
			$item['scanner_type'] = __( 'siwecos.SCANNER_NAME_' . $item['scanner_type'] );
			$item['result']       = collect( $item['result'] );
			$item['result']->transform( function ( $item, $key ) {
				$item['name']        = __( $item['name'] );
				$item['scoreType']   = __( 'siwecos.SCORE_' . $item['scoreType'] );
				$item['testDetails'] = collect( $item['testDetails'] );
				$item['testDetails']->transform( function ( $item, $key ) {
					$item['name'] = __( $item['placeholder'] );
					unset( $item['placeholder'] );

					return $item;
				} );

				return $item;
			} );

			return $item;
		} );
		$resultCollection->put( 'scanners', $scannerCollection );

		return $resultCollection;
	}
}
