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
Route::get('/topscore', function () {
    return view('topscore');
});
Route::get('/download', function () {
    return view('download');
});
Route::get('login', function () {
    return "YALOG";
});
Route::get('register', function () {
    return "YAREG";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
