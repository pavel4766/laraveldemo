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



Route::get('/login', function () {
    return view('login');
});


Route::post('/update', 'UserController@update');


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



Auth::routes();

Route::get('/user', 'UserController@index')->name('user');


