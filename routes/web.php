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

Route::get('/juvenil', 'WelcomeController@sitioJuvenil');

Route::get('/kids', 'WelcomeController@sitioKids');

Route::get('/baby', 'WelcomeController@sitioBaby');

Route::get('/primeros', 'WelcomeController@sitioPrimeros');

Route::get('/', 'WelcomeController@index')->name('inicio');

Route::group(['prefix' => 'adminis'], function(){
	Auth::routes();
});

Route::group(['middleware'=> 'auth'],function(){
  Route::resource('categoria','cateController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('categoria/{id}/update','cateController@update');
  Route::delete('categoria/{id}/delete','cateController@destroy')->name('categoria.destroy');
  Route::get('categoria/{id}/deleteMsg','cateController@DeleteMsg');
});

Route::group(['middleware'=> 'auth'],function(){
  Route::resource('subcategoria','subCateController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('subcategoria/{id}/update','subCateController@update');
  Route::delete('subcategoria/{id}/delete','subCateController@destroy')->name('subcategoria.destroy');
  Route::get('subcategoria/{id}/deleteMsg','subCateController@DeleteMsg');
});

Route::group(['middleware'=> 'auth'],function(){
  Route::resource('producto','produController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('producto/{id}/update','produController@update');
  Route::delete('producto/{id}/delete','produController@destroy')->name('producto.destroy');
  Route::get('producto/{id}/deleteMsg','produController@DeleteMsg');
});

Route::group(['middleware'=> 'auth'],function(){
  Route::resource('imagen','imaController', ['only' => ['store', 'index', 'edit']]);
  Route::post('imagen/cargarGale', 'imaController@cargarGaleria');
  Route::get('imagen/create/{id}', 'imaController@create');
  Route::post('imagen/{id}/update','imaController@update');
  Route::delete('imagen/{id}/delete','imaController@destroy')->name('ima.destroy');
  Route::get('imagen/{id}/deleteMsg','imaController@DeleteMsg');
});

Route::get('/catalogo/{id}', 'catalogoController@index' )->name('catalogo');

Route::get('/detalle/{id}', 'catalogoController@detalle')->name('detalle');

Route::get('/logout', 'HomeController@logout');

Route::post('enviar_correo', 'WelcomeController@enviarCorreo');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ajaxSucate/{id}', 'ProduController@ajaxSucate');

Route::get('/ajaxProdu/{id}', 'ProduController@ajaxProdu');

Route::get('/ajaxIma/{id}', 'ProduController@ajaxIma');
