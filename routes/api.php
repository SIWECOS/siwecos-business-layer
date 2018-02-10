<?php

use Illuminate\Http\Request;

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

Route::prefix('v1')->group(function () {
    Route::Post('/users/login', 'SiwecosUserController@loginUser');
    Route::Get('/users/activate/{token}', 'SiwecosUserController@activateUserUrl')->name('activateurl');
	Route::Post('/users/createCaptcha', 'SiwecosUserController@createCaptcha');
    Route::middleware(['mastertoken'])->group(function () {
        Route::Post('/users/create', 'SiwecosUserController@create');
        Route::Post('/users/getToken', 'SiwecosUserController@getTokenByEmail');
        Route::Post('/users/activateUser', 'SiwecosUserController@activateUser');
        Route::Post('/users/updateTokenCredits', 'SiwecosUserController@updateCredits')->middleware('usertoken');
    });
    Route::middleware(['usertoken'])->group(function () {
        Route::Post('/users/getUserData', 'SiwecosUserController@getUserInfoByToken');
        Route::Post('/users/updateUserData', 'SiwecosUserController@updateUserInfo');
        Route::Post('/users/deleteUserData', 'SiwecosUserController@deleteUserInformation');
        Route::middleware(['activation'])->group(function () {
            Route::Post('/users/getTokenCredits', 'SiwecosUserController@getUserCreditInfoByToken');
            Route::Post('/domains/addNewDomain', 'SiwecosDomainController@createNewDomain');
            Route::Post('/domains/deleteDomain', 'SiwecosDomainController@deleteDomain');
            Route::Post('/domains/verifyDomain', 'SiwecosDomainController@verifyDomain');
            Route::Post('/domains/listDomains', 'SiwecosDomainController@getDomainList');

            Route::Post('/scan/start', 'SiwecosScanController@CreateNewScan');
            Route::Get('/scan/resultRaw', 'SiwecosScanController@GetScanResultRaw');
        });

    });

});
