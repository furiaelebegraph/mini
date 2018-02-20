<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Mail;
use App\Mail\CorreoContactoAfiliado;
use App\Cate;
use App\SubCate;
use App\Ima;
use App\Produ;

class WelcomeController extends Controller{
  
   public function index(){
   	return view('welcome');
   	
   }

    public function edit($id,Request $request){
    }



    public function enviarcontacto(Request $request){
        $this->validate($request,[
            'correo'        =>  'required|email|min:5',
            'nombre'        =>  'required|min:3',
            'mensaje'       =>  'required|min:3',
            'telefono'      =>  'required',
            'asunto'        =>  'required',
        ]);
        $data = [
              'nombre' => $request->nombre,
              'correo' => $request->correo,
              'mensaje' => $request->mensaje,
              'telefono' => $request->telefono,
              'asunto' => $request->asunto
        ];
        Mail::to('desarrolloempresarial@cnecgto.org')->send(new NuevoCorreoContacto($data));
        return redirect('/');
    }

   public function update(){

   }

   public function enviarCorreoAfiliado(Request $request){
      $this->validate($request,[
         'mensaje'   => 'required| min:5',
         'email'     => 'required| email',
         'nombre'    => 'required| min:5'
      ]);
      Mail::to($request->emailemp)->send(new CorreoContactoAfiliado());
      return redirect('afiliados/detalle_afiliado');

   }

   public function sitioJuvenil(){
    $juveniles = SubCate::obtenerSubCategoria(4);
    return view('juvenil', compact('juveniles'));
   }
   public function sitioKids(){
    $kids = SubCate::obtenerSubCategoria(1);
      return view('kids', compact('kids'));
   }
   public function sitioBaby(){
    $babies = SubCate::obtenerSubCategoria(3);
      return view('baby', compact('babies'));
   }
   public function sitioPrimeros(){
    $primeros = SubCate::obtenerSubCategoria(2);
      return view( 'primeros', compact('primeros') );
   }
}
