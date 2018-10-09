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
//    return $request->user();
//});
Route::namespace('api')->group(function(){
    Route::get('product','ProductionController@index');
    Route::get('product/{product}','ProductionController@show');
    Route::get('banner','BannerController@index');
});

Route::namespace('api\v2')->group(function(){
    Route::prefix('v2')->group(function (){
        Route::get('product','ProductionController@index');
    });
});