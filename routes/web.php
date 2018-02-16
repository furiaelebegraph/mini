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


Route::get('/catalogo', function () {
    return view('catalogo');
});

Route::get('/juvenil', function () {
    return view('juvenil');
});

Route::get('/kids', function () {
    return view('kids');
});

Route::get('/baby', function () {
    return view('baby');
});

Route::get('/primeros', function () {
    return view('primeros');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
