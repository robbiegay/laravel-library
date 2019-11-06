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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/books', 'BookController@index');
Route::get('/books/create', 'BookController@create');
Route::get('/books/{id}', 'BookController@show');

Route::get('/user', 'UserController@show');
Route::get('/user/{id}', 'UserController@show');
Route::get('/user/{id}/edit', 'UserController@edit');
Route::put('user/{id}', 'UserController@update');
