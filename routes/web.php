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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',['as'=>'index','uses'=>'PageController@index']);
Route::get('/login',['as'=>'login','uses'=>'AuthController@login']);
Route::post('/login',['as'=>'loginAuth','uses'=>'AuthController@loginAuth']);
Route::get('/dashboard',['as'=>'dashboard','uses'=>'PageController@dashboard']);
Route::get('/logout',['as' => 'logout', 'uses' => 'AuthController@logout']);

Route::post('/requestAuth',['as'=>'requestAuth','uses'=>'AuthController@requestAuth']);

Route::get('/unlock',['as'=>'unlock','uses'=>'RoomController@unlock']);