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
Route::get('/', 'PagesController@index')->name=('index');

Route::get('/studentlist', 'PagesController@studentlist');
Route::GET('/create','PagesController@create');
Route::post('/posts','PagesController@store');
Route::get('/delete/{id}','PagesController@destroy');
Route::get('/edit/{id}','PagesController@edit');
Route::post('/update','PagesController@update');
Route::GET('/exist','PagesController@exist');

Route::get('/courselist', 'PagesController@courselist');
Route::GET('/create_course','PagesController@create_course');
Route::post('/postcourse','PagesController@postcourse');
Route::get('/deletecourse/{id}','PagesController@deletecourse');
Route::get('/editcourse/{id}','PagesController@editcourse');
Route::post('/updatecourse','PagesController@updatecourse');

Route::get('/registerlist', 'PagesController@registerlist');
Route::get('/register','PagesController@register');
Route::post('/postregister','PagesController@postregister');


Route::get('/register_edit/{id}','PagesController@register_edit');
Route::get('/deleteregister/{id}','PagesController@deleteregister');


Route::get('/search', 'PagesController@search');
