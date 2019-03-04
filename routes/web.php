<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware'=>'guest','namespace'=>'Web'],function (){
    Route::get('/login','AppController@getLogin') -> name('login');
    Route::get('/auth/{social}','AuthenticationController@getSocialRedirect');
    Route::get( '/auth/{social}/callback', 'AuthenticationController@getSocialCallback' );
});

Route::group(['middleware'=>'auth'],function (){
    Route::get('/','Web\AppController@getApp');
});
