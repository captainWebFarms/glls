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
Route::get('/About', 'PagesController@about');
Route::get('/Products', 'PagesController@product');
//Route::get('/Gallery', 'PagesController@gallery');
Route::get('/gallery', 'GalleriesController@index');
Route::get('/News', 'PagesController@news' );
Route::get('/Find', 'PagesController@find' );
Route::get('/Login', 'PagesController@login');
Route::get('/Contact', 'PagesController@contact');

Route::get('/Backend','PagesController@backend');
Route::get('/Request','PagesController@request');
Route::get('/gallery/fetchCategoryImages/{id}','GalleriesController@fetchCategoryImages');
Route::get('/logout', function (){
    Auth::logout();
});




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
