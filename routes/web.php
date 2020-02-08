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


Auth::routes(); 

Route::get('/', 'HomeController@index')->name('home');
Route::resource('/contacts', 'ContactController');
Route::get('/contact','ContactController@index')->name('contact.index');
Route::get('/AddContact', 'ContactController@create')->name('contact.create');
Route::post('/AddContact', 'ContactController@create')->name('contact.create');
Route::post('/CreateContact', 'ContactController@store')->name('contact.store');
Route::delete('/DeleteContact', 'ContactController@destroy')->name('contact.destroy');
Route::get('/ModifyContact', 'ContactController@edit')->name('contact.modify');