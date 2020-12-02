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

Route::group(['middleware' => ['api', 'allApi']], function ($routes) {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::get('users', 'AuthController@index');
});
Route::middleware('auth:api')->group(function () {
    Route::get('logout', 'AuthController@logout');
    Route::get('user', 'AuthController@user');
});
