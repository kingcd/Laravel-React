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
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//  return $request->user();
//});
Route::group(['middleware' => ['web']], function () {
    Route::resource('login','Auth\LoginController@login');
    Route::resource('register','Auth\RegisterController@register');
    Route::resource('logout','Auth\LoginController@logout');
    Route::resource('password/email','Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::resource('password/reset','Auth\ResetPasswordController@reset');

});
