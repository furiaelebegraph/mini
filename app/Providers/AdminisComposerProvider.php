<?php

namespace App\Providers;
use App\Cate;
use App\SubCate;
use App\Produ;
use App\Tienda;
use App\Talla;
use App\Color;
use Illuminate\Support\ServiceProvider;

class AdminisComposerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.admin', function($view){
            $view->with('categorias', Cate::all());
        });
        view()->composer('layouts.admin', function($view){
            $view->with('subcategorias', SubCate::all());
        });
        view()->composer('layouts.admin', function($view){
            $view->with('productos', Produ::all());
        });
        view()->composer('layouts.admin', function($view){
            $view->with('tallas', Talla::all());
        });
        view()->composer('layouts.admin', function($view){
            $view->with('colores', Color::all());
        });
        view()->composer('layouts.admin', function($view){
            $view->with('tiendas', Tienda::all());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
