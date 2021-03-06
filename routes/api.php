<?php

use App\Http\Middleware\MapDomainCreatedResponseForLegacyApi;
use App\Http\Middleware\MapDomainDeletedResponseForLegacyApi;
use App\Http\Middleware\MapDomainListResponseForLegacyApi;
use App\Http\Middleware\MapDomainVerifiedResponseForLegacyApi;
use App\Http\Middleware\MapScanStartedResponseForLegacyApi;
use App\Http\Middleware\MapScanReportResponseForLegacyApi;
use App\Http\Middleware\MapGetDomainQueryStringToScanForACorrectReportRequestForLegacyApi;
use App\Http\Middleware\MapDomainUrlParameterToDomainForLegacyApi;
use App\Http\Middleware\MapUserTokenToSiwecosTokenForLegacyApi;
use App\Http\Middleware\MapScanStatusResponseForLegacyApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::prefix('v2')->group(function () {

    // User
    Route::post('/user', 'UserController@create');
    Route::get('/user/activate/{key}', 'UserController@activate')->name('activateurl');
    Route::post('/user/activate/resend', 'UserController@resendActivationMail');
    Route::post('/user/login', 'UserController@login');
    Route::post('/user/password/sendResetMail', 'UserController@sendPasswordResetMail');
    Route::post('/user/password/reset', 'UserController@resetPassword');

    Route::middleware(['userIsActivatedAndLoggedIn'])->group(function () {
        Route::get('/user', 'UserController@show');
        Route::patch('/user', 'UserController@update');
        Route::delete('/user', 'UserController@delete');
    });

    // Token
    Route::post('/token', 'TokenController@registerNewToken')->middleware('throttle:60,1');

    // Domain
    Route::middleware(['siwecosToken'])->group(function () {
        Route::get('/domain', 'DomainController@list');
        Route::get('/domain/{domain}', 'DomainController@show');
        Route::post('/domain', 'DomainController@create');
        Route::delete('/domain', 'DomainController@delete');
        Route::post('/domain/verify', 'DomainController@verify');
    });

    Route::get('/domain/{domain}/report/{language?}', 'DomainController@latestScanReport');
    Route::get('/domain/{domain}/fullreport/{language?}', 'DomainController@latestScanReportV3');
    Route::get('/domain/{domain}/sealproof', 'DomainController@sealproof');

    // Scan
    Route::middleware(['siwecosToken'])->group(function () {
        Route::post('/scan', 'ScanController@start');
    });

    // Callback URL for the SIWECOS/siwecos-crawler
    Route::post('/crawler/finished', 'CrawlerController@finished');

    // Callback URL for the SIWECOS/siwecos-core-api
    Route::post('/scan/finished/{scan}', 'ScanController@finished');

    Route::post('/scan/{siwecosScan}/{language?}', 'ScanController@report');
    Route::post('/scan/{siwecosScan}/{language?}/pdf', 'ScanController@pdfReport');
    Route::post('/siwecosScan/{siwecosScan}/{language?}', 'ScanController@reportV3');
    Route::post('/siwecosScan/{siwecosScan}/{language?}/pdf', 'ScanController@pdfReportV3');

    Route::post('/freescan', 'ScanController@startFreescan');
});

Route::prefix('v1')->group(function () {

    // legacy compatibility with plugins
    Route::post('/users/login', 'UserController@login');

    Route::post('/getFreeScanStart', 'ScanController@startFreescan')->middleware([MapScanStartedResponseForLegacyApi::class, MapDomainUrlParameterToDomainForLegacyApi::class]);
    Route::get('/scan/status/free/{siwecosScan}', 'ScanController@report')->middleware([MapUserTokenToSiwecosTokenForLegacyApi::class, MapScanStatusResponseForLegacyApi::class]);

    Route::middleware([MapUserTokenToSiwecosTokenForLegacyApi::class, 'siwecosToken', MapDomainUrlParameterToDomainForLegacyApi::class])->group(function () {
        Route::post('/domains/verifyDomain', 'DomainController@verify')->middleware(MapDomainVerifiedResponseForLegacyApi::class);
        Route::post('/domains/addNewDomain', 'DomainController@create')->middleware(MapDomainCreatedResponseForLegacyApi::class);
        Route::post('/domains/deleteDomain', 'DomainController@delete')->middleware(MapDomainDeletedResponseForLegacyApi::class);
        Route::post('/domains/listDomains', 'DomainController@list')->middleware(MapDomainListResponseForLegacyApi::class);

        Route::post('/scan/start', 'ScanController@start')->middleware(MapScanStartedResponseForLegacyApi::class);
    });
    Route::get('/scan/result/{language?}', 'DomainController@latestScanReport')->middleware([MapUserTokenToSiwecosTokenForLegacyApi::class, MapGetDomainQueryStringToScanForACorrectReportRequestForLegacyApi::class, MapScanReportResponseForLegacyApi::class]);
    Route::get('/freescan/result/{siwecosScan}/{language?}', 'ScanController@report')->middleware([MapScanReportResponseForLegacyApi::class]);
});
