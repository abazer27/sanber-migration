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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/wellcome', function () {
    return view('welcome');
});
Route::get('/cast','CastController@index');
Route::get('/cast/create','CastController@create');
Route::post('/cast','CastController@store');
Route::get('/cast/{case_id}','CastController@show');
Route::get('/cast/{case_id}/edit','CastController@edit');
Route::put('/cast/{case_id}','CastController@update');
Route::delete('/cast/{case_id}','CastController@destroy');