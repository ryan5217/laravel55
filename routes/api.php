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



//Route::get('test','App\Http\Controllers\Api\TestController@index');

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api) {
    $api -> group(['namespace'=>'App\Http\Controllers\Api'],function ($api){
        $api->get('index','IndexController@index');
//        $api->get('test',function (){
//            echo 'ads';
//        });
    });
});
