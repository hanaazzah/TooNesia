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
Route::get('/details', 'PortalController@detail')->name('portal.details');
Route::get('/views', 'PortalController@view')->name('portal.view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/add', 'CategoryController@add')->name('categories.add');
Route::post('/categories/add', 'CategoryController@store')->name('categories.store');
Route::get('/categories/update/{id}', 'CategoryController@edit')->name('categories.edit');
Route::patch('/categories/update/{id}', 'CategoryController@update')->name('categories.update');
Route::delete('/categories/delete/{id}', 'CategoryController@delete')->name('categories.delete');
