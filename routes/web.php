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
Route::get('login', function () {
    return view('login');
});
Route::get('ver', function () {
    return view('ver');
});

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('Proto', function () {
    return view('Proto');
});
Route::match(['get','post'],'/login', 'Controller@form');
Route::match(['get','post'],'/ver', 'Controller@ver');
Route::match(['get','post'],'/Proto', 'Controller@proto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
