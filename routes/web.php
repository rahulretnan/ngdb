<?php

use Illuminate\Support\Facades\Route;

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


Route::resource('/', 'HomeController');
Route::get('/web', 'HomeController@web');

Route::get('/rStatus', 'RoomController@changeStatus');
Route::get('/rtoggle', 'RoomController@changeToggle');

Route::get('/pOff', 'PowerController@offStatus');
Route::get('/pOn', 'PowerController@onStatus');


Route::get('/lStatus', 'LightController@changeStatus');
Route::get('/fnStatus', 'FanController@changeStatus');
Route::get('/frStatus', 'FridgeController@changeStatus');
Route::get('/acStatus', 'AcController@changeStatus');
Route::get('/wmStatus', 'WmController@changeStatus');
Route::get('/mtStatus', 'MotorController@changeStatus');

Route::get('/lbStatus', 'LightController@changebStatus');
Route::get('/fnbStatus', 'FanController@changebStatus');
Route::get('/frbStatus', 'FridgeController@changebStatus');
Route::get('/acbStatus', 'AcController@changebStatus');
Route::get('/wmbStatus', 'WmController@changebStatus');
Route::get('/mtbStatus', 'MotorController@changebStatus');
