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
	/**
	 * Weighting array for the individual scanners - lower value means lower impact to scoring
	 */
	const SCANNER_WEIGHTS = [
		"HEADER"   => 5,
		"DOMXSS"   => 5,
		"INFOLEAK" => 5,
		"INI_S"    => 5,
		"WS_TLS"   => 5
	];

	var $coreApi;
	var $currentDomain;

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

		event( new App\Events\FreeScanReady( $id ) );
	}

	public function GetScanResultById( int $id ) {
		//Validation if free scan
		$response      = $this->coreApi->GetResultById( $id );
		$response      = $this->calculateScorings( $response );
		$rawCollection = collect( $response );
		App::setLocale( 'de' );

		return response()->json( $this->translateResult( $rawCollection, 'de' ) );
	}

	public function CreateNewFreeScan( Request $request ) {
		$url = $request->json( 'domain' );
	}


	public function GetScanResultRaw( Request $request ) {
		$userToken = $request->header( 'userToken' );
		$tokenUser = User::where( 'token', $userToken )->first();
		App::setLocale( 'de' );
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
			$response = $this->coreApi->GetScanResultRaw( $userToken, $request->get( 'domain' ) );
			$response = $this->calculateScorings( $response );


			$rawCollection = collect( $response );

			return response()->json( $this->translateResult( $rawCollection, $lang ) );
		}

		return response( "Result not found", 412 );
	}

	public function GetSimpleOutput( Request $request, string $lang = 'de' ) {
		Log::info( 'GET RESULTS FOR ' . $request->get( 'domain' ) . ' LANG ' . $lang );
		App::setLocale( $lang );
		$domain   = 'https://' . $request->get( 'domain' );
		$response = $this->coreApi->GetScanResultRawFree( $domain );
		if ( array_key_exists( 'scanStarted', $response ) ) {
			$response      = $this->calculateScorings( $response );
			$rawCollection = collect( $response );

			return response()->json( new App\Http\Resources\SimpleDomainOutput( $this->translateResult( $rawCollection, $lang ) ) );
		}
		$domain   = 'http://' . $request->get( 'domain' );
		$response = $this->coreApi->GetScanResultRawFree( $domain );
		if ( array_key_exists( 'scanStarted', $response ) ) {
			$response      = $this->calculateScorings( $response );
			$rawCollection = collect( $response );

			return response()->json( new App\Http\Resources\SimpleDomainOutput( $this->translateResult( $rawCollection, $lang ) ) );
		}

		return response( "Result not found", 412 );

	}

	protected function translateResult( Collection $resultCollection, string $language ) {
		$this->currentDomain = $resultCollection['domain'];
		$scannerCollection   = collect( $resultCollection['scanners'] );
		$scannerCollection->transform( function ( $item, $key ) {
			$item['scanner_type'] = __( 'siwecos.SCANNER_NAME_' . $item['scanner_type'] );
			$item['result']       = collect( $item['result'] );
			$item['result']->transform( function ( $item, $key ) {
				$namePlaceholder      = 'siwecos.' . $item['name'];
				$item['link']         = __( $namePlaceholder . '_LINK' );
				$item['description']  = $this->buildDescription( $namePlaceholder, $item['score'] );
				$item['report']       = $this->buildReport( $namePlaceholder, $item['score'] );
				$item['scoreTypeRaw'] = array_has( $item, 'scoreType' ) ? $item['scoreType'] : '';
				$item['scoreType']    = array_has( $item, 'scoreType' ) ? __( 'siwecos.SCORE_' . $item['scoreType'] ) : '';
				$item['testDetails']  = collect( $item['testDetails'] );
				$item['testDetails']->transform( function ( $item, $key ) {
					$item['report'] = __( 'siwecos.' . $item['placeholder'] );
					if ( array_key_exists( 'values', $item ) ) {
						if ( $item['values'] != null && self::isAssoc( $item['values'] ) ) {
							foreach ( $item['values'] as $key => $value ) {
								if (is_array($value)){
									if (is_array($value[0])) $value = $value[0];
									$value = implode(',', $value);
								}
								$item['report'] = str_replace( '%' . $key . '%', $value, $item['report'] );
							}
						} else if ( $item['values'] != null ) {
							foreach ( $item['values'] as $value ) {
								if ( is_array( $value ) ) {
									$item['report'] = str_replace( '%' . $value['name'] . '%', $value['value'], $item['report'] );
								}

							}
						}
						$item['name'] = $item['report'];
					}

					return $item;
				} );
				$item['name'] = __( 'siwecos.' . $item['name'] );

				return $item;
			} );

			return $item;
		} );
		$resultCollection->put( 'scanners', $scannerCollection );

		return $resultCollection;
	}

	function isAssoc( array $arr ) {
		if ( array() === $arr ) {
			return false;
		}

		return array_keys( $arr ) !== range( 0, count( $arr ) - 1 );
	}

	protected function calculateScorings( array $results ) {
		$hasCrit = false;

		foreach ( $results['scanners'] as &$scanner ) {
			$totalScore = 0;
			$scanCount  = 0;
			foreach ( $scanner['result'] as &$result ) {
				if ( array_key_exists( 'scoreType', $result ) && ( $result['scoreType'] == 'hidden' || $result['scoreType'] == 'bonus' ) ) {
					continue;
				}
				$totalScore += $result['score'];
				$scanCount  += 1;

				if ( array_key_exists( 'scoreType', $result ) && $result['scoreType'] === 'critical' ) {
					$hasCrit = true;
				}
			}
            if ($scanCount > 0){
                $scanner['score']  = $totalScore / $scanCount;
                $scanner['weight'] = self::SCANNER_WEIGHTS[ $scanner['scanner_type'] ];
            }

		}

		$results['hasCrit']       = $hasCrit;
		$results['weightedMedia'] = $this->weightedMedian( $results['scanners'], $hasCrit );

		return $results;
	}

	protected function weightedMedian( array $scanners, bool $hasCrit ) {
		$dividend = 0;
		$divisor  = 0;
		$maxScore = 100;
        $average = 0;
		if ( $hasCrit ) {
			$maxScore = 20;
		}

		foreach ( $scanners as $value ) {
			if ( $value['scanner_type'] == 'hidden' || $value['scanner_type'] == 'bonus' ) {
				continue;
			}
            if (array_key_exists('weight', $value)){
                $dividend += ( $value['weight'] * $value['score'] );
                $divisor  += $value['weight'];
            }

		}
        if ($divisor > 0){
            $average = $dividend / $divisor;
            $average = $maxScore * ( $average / 100 );
        }


		return $average;
	}

	protected function buildDescription( string $testDesc, int $score ) {
		if ( $score == 100 ) {
			$testDesc = __( $testDesc . '_SUCCESS' );
			$testDesc = str_replace( '%HOST%', $this->currentDomain, $testDesc );

			return $testDesc;
		} else {
			$testDesc = __( $testDesc . '_ERROR' );
			$testDesc = str_replace( '%HOST%', $this->currentDomain, $testDesc );

			return $testDesc;
		}
	}

	protected function buildReport( string $testDesc, int $score ) {
		if ( $score == 100 ) {

		} else {
			$testDesc = __( $testDesc . '_ERROR_DESC' );
			$testDesc = str_replace( '%HOST%', $this->currentDomain, $testDesc );

			return $testDesc;
		}
	}
}
