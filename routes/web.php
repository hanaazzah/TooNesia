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

Route::get('/', 'PortalController@index')->name('portal.index');
Route::get('/details/{id}', 'PortalController@detail')->name('portal.details');
Route::get('/views', 'PortalController@view')->name('portal.view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Kategori
Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/add', 'CategoryController@add')->name('categories.add');
Route::post('/categories/add', 'CategoryController@store')->name('categories.store');
Route::get('/categories/update/{id}', 'CategoryController@edit')->name('categories.edit');
Route::patch('/categories/update/{id}', 'CategoryController@update')->name('categories.update');
Route::delete('/categories/delete/{id}', 'CategoryController@delete')->name('categories.delete');

//Komik
Route::get('/comics', 'ComicController@index')->name('comics.index');
Route::get('/comics/add', 'ComicController@add')->name('comics.add');
Route::post('/comics/add', 'ComicController@store')->name('comics.store');
Route::get('/comics/update/{id}', 'ComicController@edit')->name('comics.edit');
Route::patch('/comics/update/{id}', 'ComicController@update')->name('comics.update');
Route::delete('/comics/delete/{id}', 'ComicController@delete')->name('comics.delete');

//Seasons
Route::get('/seasons/{id}', 'SeasonController@index')->name('seasons.index');
Route::get('/seasons/add/{id}', 'SeasonController@add')->name('seasons.add');
Route::post('/seasons/add/{id}', 'SeasonController@store')->name('seasons.store');
Route::get('/seasons/update/{id}', 'SeasonController@edit')->name('seasons.edit');
Route::patch('/seasons/update/{id}', 'SeasonController@update')->name('seasons.update');
Route::delete('/seasons/delete/{uri}/{id}', 'SeasonController@delete')->name('seasons.delete');
