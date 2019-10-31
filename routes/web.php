<?php

Route::get('/', function () {
    return view('welcome');
});


/*
|
Laravel Storage
|
*/


Auth::routes();

Route::get('/home', 'ImageController@index')->name('home');

Route::post('/image', 'ImageController@store');
/*
|
Laravel Redis
|
*/

use Illuminate\Support\Facades\Redis;

Route::get('/redis', function () {
    $redis = app()->make('redis');
    // $redis->set("key1", "TEST");
    return $redis->get("key1");
});