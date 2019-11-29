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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('cards', 'CardController@index');
    Route::get('cards/{gameid}', 'CardController@game');
    Route::get('card/{id}', 'CardController@show');
    Route::post('gamecards', 'GamecardController@store');
    Route::get('games/{id}', 'GameController@show');
    Route::put('games/{id}', 'GameController@winner');
});


