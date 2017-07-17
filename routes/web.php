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
Route::get('/home', 'HomeController@index');
Route::get('/Contact', 'ContactsController@index');
//Route::get('/About', 'AboutsController@index');
//Route::get('/Commercial', 'CommercialsController@index');
Route::get('/Gallary', 'GallerysController@index');
Route::get('/Investments', 'InvestmentsController@index');
//Route::post('/Contact', 'ContactsController@mail' );