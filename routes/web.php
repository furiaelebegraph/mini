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

Route::get('/detalle', 'ArticleController@detalleBlog');

Route::get('/escolar', 'WelcomeController@sitioEscolar');
Route::get('/momentos', 'WelcomeController@sitioMomentos');

Route::get('/contacto', 'WelcomeController@contacto')->name('contacto');

Route::get('/acerca', function () {
    return view('acerca');
})->name('acerca');

Route::get('/aviso-privacidad', function () {
    return view('aviso-privacidad');
})->name('aviso-privacidad');


Route::post('suscribirse', 'WelcomeController@suscribirse');

Route::post('enviar_correo', 'WelcomeController@enviarcontacto');

Route::get('/', 'WelcomeController@index')->name('inicio');

Route::group(['prefix' => 'adminis'], function(){
  Auth::routes();
});


Route::group(['middleware'=> 'auth'],function(){
  Route::resource('banner','BannerController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('banner/{id}/update','BannerController@update');
  Route::delete('banner/{id}/delete','BannerController@destroy')->name('banner.destroy');
  Route::get('banner/{id}/deleteMsg','BannerController@DeleteMsg');
});
Route::group(['middleware'=> 'auth'],function(){
  Route::resource('categoria','cateController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('categoria/{id}/update','cateController@update');
  Route::delete('categoria/{id}/delete','cateController@destroy')->name('categoria.destroy');
  Route::get('categoria/{id}/deleteMsg','cateController@DeleteMsg');
});

Route::group(['middleware'=> 'auth'],function(){
  Route::resource('subcategoria','SubCateController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('subcategoria/{id}/update','SubCateController@update');
  Route::delete('subcategoria/{id}/delete','SubCateController@destroy')->name('subcategoria.destroy');
  Route::get('subcategoria/{id}/deleteMsg','SubCateController@DeleteMsg');
});

Route::group(['middleware'=> 'auth'],function(){
  Route::resource('talla','TallaController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('talla/{id}/update','TallaController@update');
  Route::delete('talla/{id}/delete','TallaController@destroy')->name('talla.destroy');
  Route::get('talla/{id}/deleteMsg','TallaController@DeleteMsg');
});

Route::group(['middleware'=> 'auth'],function(){
  Route::resource('color','ColorController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('color/{id}/update','ColorController@update');
  Route::delete('color/{id}/delete','ColorController@destroy')->name('color.destroy');
  Route::get('color/{id}/deleteMsg','ColorController@DeleteMsg');
});


Route::group(['middleware'=> 'auth'],function(){
  Route::resource('tienda','TiendaController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('tienda/{id}/update','TiendaController@update');
  Route::delete('tienda/{id}/delete','TiendaController@destroy')->name('tienda.destroy');
  Route::get('tienda/{id}/deleteMsg','TiendaController@DeleteMsg');
});

Route::group(['middleware'=> 'auth'],function(){
  Route::resource('producto','ProduController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('producto/{id}/update','ProduController@update');
  Route::delete('producto/{id}/delete','ProduController@destroy')->name('producto.destroy');
  Route::get('producto/{id}/deleteMsg','ProduController@DeleteMsg');
});

Route::group(['middleware'=> 'auth'],function(){
  Route::resource('cliente','ClienteController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('cliente/{id}/update','ClienteController@update');
  Route::delete('cliente/{id}/delete','ClienteController@destroy')->name('cliente.destroy');
  Route::get('cliente/{id}/deleteMsg','ClienteController@DeleteMsg');
});

Route::group(['middleware'=> 'auth'],function(){
  Route::resource('imagen','ImaController', ['only' => ['store', 'index']]);
  Route::post('imagen/cargarGale', 'ImaController@cargarGaleria');
  Route::get('imagen/create/{id}', 'ImaController@create');
  Route::get('imagen/{id}/edit','ImaController@edit')->name('imagen.edit');
  Route::post('imagen/{id}/update','ImaController@update');
  Route::delete('imagen/{id}/delete','ImaController@destroy')->name('imagen.destroy');
  Route::get('imagen/{id}/deleteMsg','ImaController@DeleteMsg');
});

//article Routes
Route::group(['middleware'=> 'auth'],function(){
  Route::resource('noticia','NoticiaController', ['only' => ['create', 'store', 'index', 'edit']]);
  Route::post('noticia/{id}/update','NoticiaController@update');
  Route::delete('noticia/{id}','NoticiaController@destroy')->name('noticia.destroy');
  Route::get('noticia/{id}/deleteMsg','NoticiaController@DeleteMsg');
});

Route::get('subcategoria/{id}', 'catalogoController@index')->name('subcategoria');

Route::get('/proximamente', function () {
    return view('proximamente');
})->name('proximamente');

Route::get('/catalogo/{id}', 'catalogoController@index' )->name('catalogo');

Route::get('/detalleproducto/{id}', 'catalogoController@detalleSubcate')->name('detalleproducto');

Route::get('/logout', 'HomeController@logout');

Route::get('noticias', 'NoticiaController@noticias')->name('noticias');

Route::get('detalle/{id}', 'NoticiaController@noticia');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ajaxSucate/{id}', 'ProduController@ajaxSucate');

Route::get('/ajaxProdu/{id}', 'ProduController@ajaxProdu');

Route::get('/ajaxIma/{id}', 'ProduController@ajaxIma');


