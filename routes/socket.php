<?php


Route::group(['namespace'=>'Socket'],function (){
    Route::get('test','TestController@getApp');
});