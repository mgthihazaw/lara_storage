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
use Illuminate\Support\Facades\URL;

Route::get('/redis', function () {
    // $redis = app()->make('redis');
    // // $redis->set("key1", "TEST");
    // return $redis->get("key1");


    return URL::temporarySignedRoute(
        'unsubscribe',
        now()->addSeconds(30),
        ['user' => '1']
    );
});

use Illuminate\Http\Request;

Route::get('/unsubscribe/{user}', function (Request $request) {
    if (!$request->hasValidSignature()) {
        abort(401);
    }
    return "Thihazaw";
    // ...
})->name('unsubscribe');