<?php

namespace App\Http\Controllers;

use App\Banner;
use Image;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - banners';
        $banneres = Banner::paginate(10);
        return view('banner.index', compact('banneres', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Crear banner';
        return view('banner.create', compact('title'));
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
        $banner = new Banner();
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time().'.'.$imagen->getClientOriginalExtension();
            $path = 'img/banner/'.$filename;
            Image::make($imagen)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($path);
            

            $banner->imagen = '/img/banner/'.$filename;
            
        }

        $banner->nombre = $request->nombre;
        $banner->url = $request->url;
        $banner->save();
        return redirect('banner');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        $title = 'banner';

        if($request->ajax())
        {
            return URL::to('banner/'.$id);
        }

        $banner = Banner::findOrfail($id);
        return view('banner.show',compact('title','banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $title = 'Editar banner';
        if($request->ajax())
        {
            return URL::to('banner/'. $id . '/edit');
        }
        
        $banner = Banner::findOrfail($id);
        return view('banner.edit',compact('title','banner'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $banner = Banner::findOrfail($id);
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time().'.'.$imagen->getClientOriginalExtension();
            $path = 'img/banner/'.$filename;
            Image::make($imagen)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($path);
            

            $banner->imagen = '/img/banner/'.$filename;
            
        }

        $banner->nombre = $request->nombre;
        $banner->url = $request->url;
        $banner->save();
        return redirect('banner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $product = Banner::find($id);
        $product->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }
}
