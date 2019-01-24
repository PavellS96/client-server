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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'PagesController@index');
//Route::get('/aboutme', 'PagesController@aboutme');
Route::get('/contacts', 'PagesController@contacts');

Route::resource('contacts', 'ContactsController');
Route::resource('aboutme', 'CommentsController');
