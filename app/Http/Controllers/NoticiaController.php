<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;
use Image;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - noticia';
        $noticias = Noticia::orderBy('id', 'desc')->paginate(3);
        return view('noticia.index',compact('noticias','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Crear - Noticia';
        
        return view('noticia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request){
        $rules = [
            'titulo'        =>  'required|min:3',
            'cuerpo'        =>  'required|min:3',
            'imagen'       =>   'required|image'
        ];
        $mensaje = [
            'required' => 'Este campo es necesario.'
        ];
        $this->validate($request, $rules, $mensaje);
            $noticia = new Noticia();
            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $filename = time().'.'.$imagen->getClientOriginalExtension();
                $path = 'img/noticia/'.$filename;
                Image::make($imagen)->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($path);
                

                $noticia->imagen = '/img/noticia/'.$filename;
                
            }
                
        $noticia->titulo = $request->titulo;
                
        $noticia->cuerpo = $request->cuerpo;

        $noticia->save();

        return redirect('noticia')->with('mensaje', 'Se creo la noticia :)');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function noticia($id,Request $request)
    {
        $title = 'Show - Noticia';

        $noticia = Noticia::findOrfail($id);
        return view('noticia.detalle',compact('title','noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - Noticia';
        $noticia = Noticia::findOrfail($id);
        return view('noticia.edit',compact('title','noticia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $noticia = Noticia::findOrfail($id);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $filename = time().'.'.$imagen->getClientOriginalExtension();
            $path = 'img/noticia/'.$filename;
            Image::make($imagen)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($path);

            $noticia->imagen = '/img/noticia/'.$filename;

        }
                
        $noticia->titulo = $request->titulo;
                
        $noticia->subtitulo = $request->subtitulo;
                
        $noticia->cuerpo = $request->cuerpo;

        $noticia->save();

        return redirect('noticia');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticias = Noticia::findOrfail($id);
        $noticias->delete();
        return redirect('noticia')->with('mensaje', 'Noticia eliminada');
    }
    public function noticias(){
        $noticias = Noticia::orderBy('created_at', 'ASC')->paginate(3);
        return view('noticia.noticias', compact('noticias'));
    }
}
