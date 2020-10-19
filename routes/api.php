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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('auth/login', 'UserCOntroller@authenticate');

/* 
Route::group(['middleware' => ['jwt.auth'], 'prefix' => 'v1'], function(){
    Route::post('auth/refresh', 'UserCOntroller@refreshToken');
});

Route::group(['middleware' =>[], 'prefix' => 'v1'], function(){
    Route::post('auth/login', 'UserCOntroller@login');
});
 */

Route::post('login/ValidarIngreso', 'LoginController@ValidarIngreso');
Route::post('login/test', 'LoginController@test');