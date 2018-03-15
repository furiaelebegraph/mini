<?php

namespace App\Http\Controllers;

use App\Talla;
use App\Produ;
use Illuminate\Http\Request;

class TallaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - tallas';
        $tallas = Talla::orderBy('orden', 'asc')->paginate(10);
        return view('talla.index', compact('tallas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Crear Talla';
        $productos = Produ::all();
        return view('talla.create', compact('title', 'productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'numero' => 'required|max:255'
        ]);
        $talla = new Talla();
        $talla->numero = $request->numero;
        $talla->orden = $request->orden;
        $talla->save();
        return redirect('talla');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Talla  $Talla
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('talla/'.$id);
        }


        $talla = Talla::findOrfail($id);
        return view('talla.show',compact('talla'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Talla  $Talla
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $talla = Talla::findOrfail($id);
        $produ = Produ::all();
        return view('talla.edit',compact('talla', 'produ'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Talla  $Talla
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $talla = Talla::findOrFail($id);
        $talla->numero = $request->numero;
        $talla->orden = $request->orden;
        $talla->save();
        return redirect('talla');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Talla  $Talla
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $talla = Talla::findOrFail($id);
        $talla->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
        //
    }
}
