<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Produ;
use App\SubCate;
use App\Tienda;
use App\Talla;
use App\Color;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Cate::all();
        $productos = Produ::all();
        $subcategorias = SubCate::all();
        $tiendas = Tienda::all();
        $tallas = Talla::all();
        $colores = Color::all();

        $prosdustos = Produ::orderBy('created_at','desc')->take(5)->get();
        $ultimoproductos = Produ::orderBy('created_at','desc')->take(1)->get();
        $ultimacates = Cate::orderBy('created_at','desc')->take(1)->get();
        return view('home', compact('categorias','colores', 'tallas' ,'productos','subcategorias', 'prosdustos', 'ultimoproductos', 'ultimacates', 'tiendas'));
    }

    public function layoutAdmin(){
        $categorias = Cate::all();
        $productos = Produ::all();
        $subcategorias = SubCate::all();
        $tiendas = Tienda::all();
        $tallas = Talla::all();
        $colores = Color::all();
        return view('layouts.admin', compact('categorias','colores', 'tallas', 'tiendas' ,'productos','subcategorias'));     
    }
    public function logout() {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }
}
