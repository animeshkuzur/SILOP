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
Route::post('/emergencyUnlock',['as'=>'emergencyUnlock','uses'=>'AuthController@emergencyUnlock']);
Route::post('/emergencyLock',['as'=>'emergencyLock','uses'=>'AuthController@emergencyLock']);


//Debug Routes
Route::get('/unlock',['as'=>'unlock','uses'=>'RoomController@unlock']);
Route::get('/lock',['as'=>'lock','uses'=>'RoomController@lock']);
Route::get('/test',['as'=>'test','uses'=>'PageController@test']);


// Admin Routes
Route::get('/admin',['as'=>'admin','uses'=>'PageController@admin']);
Route::get('/admin/login',['as'=>'adminLogin','uses'=>'AuthController@adminLogin']);
Route::post('/admin/login',['midleware'=>'admin.filter','as'=>'adminLoginAuth','uses'=>'AuthController@adminLoginAuth']);
Route::get('/admin/dashboard',['midleware'=>'admin.filter','as'=>'adminDashboard','uses'=>'PageController@adminDashboard']);
Route::post('/admin/report',['midleware'=>'admin.filter','as'=>'report','uses'=>'ReportController@report']);
Route::get('/admin/report/{room_no}/{id}',['midleware'=>'admin.filter','as'=>'report-page','uses'=>'ReportController@report_page']);
Route::get('/admin/report/map',['midleware'=>'admin.filter','as'=>'report-map','uses'=>'ReportController@report_map']);


//Common API Routes
Route::get('/getstatus',['as'=>'getstatus','uses'=>'ApiController@getstatus']);