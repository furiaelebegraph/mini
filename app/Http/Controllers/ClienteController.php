<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Image;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::paginate(5);
        return view('cliente.index', compact("clientes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $title = 'Crear cliente';
        return view('cliente.create', compact("title"));
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
            'cliente' => 'required|max:255',
            'img' => 'required | image | max:2000',
        ]);
        $cliente = new Cliente();
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $filename = time().'.'.$img->getClientOriginalExtension();
            $path = 'img/cliente/'.$filename;
            Image::make($img)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($path);
            

            $cliente->img = '/img/cliente/'.$filename;
            
        }

        $cliente->cliente = $request->cliente;
        $cliente->save();
        return redirect('cliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $title = 'cliente';

        if($request->ajax())
        {
            return URL::to('cliente/'.$id);
        }

        $color = Cliente::findOrfail($id);
        return view('cliente.show',compact('title','cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $cliente = Cliente::findOrfail($id);
        return view('cliente.edit',compact("cliente"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Cliente $cliente)
    {
        $cliente = Cliente::findOrfail($id);
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $filename = time().'.'.$img->getClientOriginalExtension();
            $path = 'img/cliente/'.$filename;
            Image::make($img)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($path);
            

            $cliente->img = '/img/cliente/'.$filename;
            
        }

        $cliente->cliente = $request->cliente;
        $cliente->save();
        return redirect('cliente')->with('info', $cliente -> cliente.' Fue actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return back()->with('info', 'Fue eliminado exitosamente');
    }
}
