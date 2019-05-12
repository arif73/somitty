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
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/dashboard', 'HomeController@index');

Route::resource('user' ,'UserController');
Route::get('change-status/{id}', 'UserController@change_status');
Route::post('change-pass', 'UserController@change_pass');