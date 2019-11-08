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
Route::get('/books/api', 'BookController@apiCreate');
Route::post('/books/api', 'BookController@apiStore');
Route::get('/books/create', 'BookController@create');
Route::post('/books/create', 'BookController@store');
Route::get('/books/{id}', 'BookController@show');
Route::get('/books/{id}/edit', 'BookController@edit');
Route::post('/books/{id}/edit', 'BookController@update');
Route::get('/books/{id}/delete', 'BookController@destroy');



Route::get('/users', 'UserController@index');
// create and store handled by auth
Route::get('/users/{id}', 'UserController@show');
Route::get('/users/{id}/edit', 'UserController@edit');
// Route::put('users/{id}', 'UserController@update');
Route::post('/users/{id}/edit', 'UserController@update');
Route::get('/users/{id}/delete', 'UserController@destroy');



Route::get('/checkout', 'CheckoutController@index');
Route::get('/checkout/out', 'CheckoutController@create');
Route::post('/checkout/out', 'CheckoutController@store');
Route::get('/checkout/in', 'CheckoutController@edit');
Route::post('/checkout/in', 'CheckoutController@destroy');




