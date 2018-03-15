<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;
use Image;
class ColorController extends Controller
{
    public function index()
    {
        $title = 'Index - colors';
        $colores = Color::paginate(10);
        return view('color.index', compact('colores', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Crear color';
        return view('color.create', compact('title'));
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
            'nombre' => 'required|max:255',
            'imagen' => 'required | image | max:2000',
        ]);
        $color = new Color();
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time().'.'.$imagen->getClientOriginalExtension();
            $path = public_path('img/color/' . $filename);
            Image::make($imagen)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($path);
            

            $color->imagen = '/img/color/'.$filename;
            
        }

        $color->nombre = $request->nombre;
        $color->save();
        return redirect('color');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Color  $Color
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $title = 'color';

        if($request->ajax())
        {
            return URL::to('color/'.$id);
        }

        $color = Color::findOrfail($id);
        return view('color.show',compact('title','color'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Color  $Color
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $title = 'Editar color';
        if($request->ajax())
        {
            return URL::to('color/'. $id . '/edit');
        }
        
        $color = Color::findOrfail($id);
        return view('color.edit',compact('title','color'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Color  $Color
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $color = Color::findOrfail($id);
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time().'.'.$imagen->getClientOriginalExtension();
            $path = public_path('img/color/' . $filename);
            Image::make($imagen)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($path);
            

            $color->imagen = '/img/color/'.$filename;
            
        }

        $color->nombre = $request->nombre;
        $color->save();
        return redirect('color');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Color  $Color
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Color::find($id);
        $product->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
        //
    }
}
