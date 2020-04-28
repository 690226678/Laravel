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

//Route::middleware('auth:api')->get('/console', function (Request $request) {
//    return $request->user();
//    Route::get('login', 'Login/LoginController@login');
//    Route::get('login', 'Login/LoginController@login');
//});
//
//
//Route::middleware(['first', 'second'])->group(function () {
//    Route::get('/', function () {
//        // 使用 first 和 second 中间件
//    });
//
//    Route::get('user/profile', function () {
//        // 使用 first 和 second 中间件
//    });
//});

Route::prefix('console')->group(function () {
    Route::get('login', 'Login/LoginController@login');
});
