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

Route::middleware('auth:api')->namespace('API')->name('api')->group(function(){


             // DETTAMI REST -> /movie/{id}
             // Route::get('/movies', 'MovieController@index');
             // Route::get('/movies/{id}', 'MovieController@show');
             // Route::post('/movies', 'MovieController@store');
             // Route::put('/movies/{id}', 'MovieController@update');
             // Route::delete('/movies/{id}', 'MovieController@destroy');


  Route::get('/index', 'MovieController@index');
  Route::get('/show/{id}', 'MovieController@show');
  Route::post('/store', 'MovieController@store');
  // Route::put('/update/{id}', 'MovieController@update'); //<-chiamata in post
                                                        //richiesto il _method PUT
                                                            //anche in Jquery
  Route::post('/update/{id}/', 'MovieController@update');
  Route::post('/delete/{id}', 'MovieController@destroy');
});
