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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PagesController@index');
Route::get('/Home', 'PagesController@index');
Route::get('/Contact', 'PagesController@contact');
Route::get('/Gallery', 'PagesController@gallery');
Route::get('/News', 'PagesController@news' );
Route::get('/Login', 'PagesController@login');
Route::get('/Backend','PagesController@backend');
Route::get('Distributor','PagesController@find');
Route::get('Request','PagesController@request');