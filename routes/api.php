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

Route::name('apimessages')->middleware('auth:api')->resource('apimessages', 'Back\ApiController'); 


//Route::name('apimessages')->resource('apimessages', 'Back\ApiController');
