<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Mail;
use App\Mail\NuevoCorreoContacto;
use App\Mail\mensajeUsuario;
use App\Mail\EmaiSuscribirse;
use App\Cate;
use App\SubCate;
use App\Tienda;
use App\Ima;
use App\Produ;
use App\Suscripcion;

class WelcomeController extends Controller{
  
   public function index(){
    return view('welcome');
    
   }

    public function edit($id,Request $request){
    }



    public function enviarcontacto(Request $request){
        $rules = [
            'correo'        =>  'required|email',
            'nombre'        =>  'required|min:3',
            'mensaje'       =>  'required|min:3',
            'telefono'      =>  'required',
            'asunto'        =>  'required',
        ];
        $mensaje = [
            'required' => 'Este campo es necesario.'
        ];
        $this->validate($request, $rules, $mensaje);

        if($request->distribuidor){
          $distribuidor = 'Quiero ser distribuidor';
        }else{
          $distribuidor = ' ';
        }

        $data = [
              'nombre' => $request->nombre,
              'correo' => $request->correo,
              'mensaje' => $request->mensaje,
              'telefono' => $request->telefono,
              'asunto' => $request->asunto,
              'distribuidor' => $distribuidor
        ];
        Mail::to('hola@miniburbujas.mx')->send(new NuevoCorreoContacto($data));
        return redirect('/')->with('mensaje','Tu mesaje fue enviado, muchas gracias!');
    }

   public function update(){

   }



   public function suscribirse(Request $request){
        $rules = [
            'nombre'    => 'required|max:255',
            'correo'    => 'required|email',
            'edad' => 'required',
            'genero' => 'required'
        ];
        $mensaje = [
            'required' => 'Este campo es necesario.'
        ];
        if(empty($request->distribuidor)){
          $request->distribuidor = 'no';
        }

        if(empty($request->numdistribuidor)){
          $request->numdistribuidor = 'N/A';
        }
        if(empty($request->rfc)){
          $request->rfc = 'N/A';
        }

        $suscrip = new Suscripcion();
        $suscrip->genero = $request->genero;
        $suscrip->distribuidor = $request->distribuidor;
        $suscrip->numdistribuidor = $request->numdistribuidor;
        $suscrip->rfc = $request->rfc;
        $suscrip->nombre = $request->nombre;
        $suscrip->edad = $request->edad;
        $suscrip->correo = $request->correo;
        $this->validate($request, $rules, $mensaje);
      $data = [
              'genero' => $request->genero,
              'distribuidor' => $request->distribuidor,
              'numdistribuidor' => $request->numdistribuidor,
              'rfc' => $request->rfc,
              'nombre' => $request->nombre,
              'edad' => $request->edad,
              'correo' => $request->correo,
        ];
      Mail::to($suscrip->correo)->send(new mensajeUsuario($data));
      Mail::to('hola@miniburbujas.mx')->send(new EmaiSuscribirse($data));
      $suscrip->save();
      return redirect('/')->with('mensajeSuscrito','Muchas gracias por suscribirte a nuestro boletin');

   }

  public function contacto(){
    $tiendas = Tienda::all();
    return view('contacto', compact('tiendas'));
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
