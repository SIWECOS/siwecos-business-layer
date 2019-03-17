<?php

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

    Route::post('/user', 'UserController@create');
    Route::get('/user/activate/{key}', 'UserController@activate')->name('activateurl');
    Route::post('/user/activate/resend', 'UserController@resendActivationMail');
    Route::post('/user/login', 'UserController@login');
    Route::post('/user/password/sendResetMail', 'UserController@sendPasswordResetMail');
    Route::post('/user/password/reset', 'UserController@resetPassword');

    Route::middleware(['userIsActivatedAndLoggedIn'])->group(function () {
        Route::patch('/user', 'UserController@update');
        Route::delete('/user', 'UserController@delete');
    });

    Route::middleware(['siwecosToken'])->group(function () {
        Route::get('/domain', 'DomainController@list');
        Route::post('/domain', 'DomainController@create');
        Route::delete('/domain', 'DomainController@delete');
    });

    Route::post('/domain/verify', 'DomainController@verify');
});

Route::prefix('v1')->group(function () {

    // legacy compatibility with plugins
    Route::post('/users/login', 'UserController@login');

    Route::middleware(['mapUserTokenToSiwecosToken', 'mapDomainParameterToUrl'])->group(function () {
        Route::post('/domains/verifyDomain', 'DomainController@verify');
        Route::post('/domains/addNewDomain', 'DomainController@create');
        Route::post('/domains/deleteDomain', 'DomainController@delete');
        Route::post('/domains/listDomains', 'SiwecosDomainController@getDomainList');
    });
    // Not implemented yet

    // Route::Post('/scan/start', 'SiwecosScanController@CreateNewScan');
    // Route::Get('/scan/result/{lang?}', 'SiwecosScanController@GetScanResult');

    // old - to be removed


    Route::Get('/freescan/result/{id}/{lang?}', 'SiwecosScanController@GetScanResultById');
    Route::Get('/domainscan', 'SiwecosScanController@GetSimpleOutput');

    Route::post('/report', 'SiwecosScanController@generateReport');
    Route::post('/pdf', 'SiwecosScanController@generatePdf');

    Route::post('/scan/finished', 'SiwecosScanController@scanFinished');

    Route::middleware(['usertoken'])->group(function () {
        Route::Post('/users/getUserData', 'SiwecosUserController@getUserInfoByToken');

        Route::middleware(['activation'])->group(function () {
            Route::Post('/users/getTokenCredits', 'SiwecosUserController@getUserCreditInfoByToken');

            Route::Post('/scan/start', 'SiwecosScanController@CreateNewScan');
            Route::Get('/scan/resultRaw', 'SiwecosScanController@GetScanResultRaw');
            Route::Get('/scan/result/{lang?}', 'SiwecosScanController@GetScanResult');
        });
    });
});
