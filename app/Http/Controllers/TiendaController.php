<?php

namespace App\Http\Controllers;

use App\Tienda;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - Mapa Tienda';
        $tiendas = Tienda::paginate(10);
        return view('tienda.index', compact('tiendas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Crear Mapa Tienda';
        return view('tienda.create', compact('title'));
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
            'nombre' => 'required|unique:cate|max:255',
            'latitud' => 'required',
            'longitud' => 'required',
            'direccion' => 'required'
        ]);
        $tienda = new Tienda();

        $tienda->nombre = $request->nombre;
        $tienda->Lat = $request->latitud;
        $tienda->Lng = $request->longitud;
        $tienda->telefono = $request->telefono;
        $tienda->direccion = $request->direccion;
        $tienda->save();
        return redirect('tienda');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $title = 'Tienda';

        if($request->ajax())
        {
            return URL::to('tienda/'.$id);
        }

        $tienda = Tienda::findOrfail($id);
        return view('tienda.show',compact('title','tienda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $title = 'Editar Mapa Tienda';
        if($request->ajax())
        {
            return URL::to('tienda/'. $id . '/edit');
        }
        
        $tienda = Tienda::findOrfail($id);
        return view('tienda.edit',compact('title','tienda'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $tienda = Tienda::findOrfail($id);

        $tienda->nombre = $request->nombre;
        $tienda->Lat = $request->latitud;
        $tienda->Lng = $request->longitud;
        $tienda->telefono = $request->telefono;
        $tienda->direccion = $request->direccion;
        $tienda->save();
        return redirect('tienda');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tienda = Tienda::find($id);
        $tienda->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
        //
    }
}
