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

// movies etc.
Route::get('/', 'MovieController@index3');

Route::get('/movies/detail/venom', 'MovieController@detail');


// world database
Route::get('/regions', 'RegionController@index');
Route::get('/regions/western-europe', 'RegionController@westernEurope');
