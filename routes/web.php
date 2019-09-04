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


Route::get('/', 'DisplayController@displayHomePage');
Route::get('/v1', 'DisplayController@displayVersion1');
Route::get('/v2', 'DisplayController@displayVersion2');
Route::get('/portfolio', 'DisplayController@displayPortfolio');
Route::get('/checkout', 'DisplayController@displayCheckOut');
Route::get('/test', 'DisplayController@displayTest');
Route::get('/pricing', 'DisplayController@displayPricing');
Route::get('/homepage1', 'DisplayController@displayHomePage1');
Route::get('/homepage2', 'DisplayController@displayHomePage2');
Route::get('/admin', 'AdminController@displayAdmin');