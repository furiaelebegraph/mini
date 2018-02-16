@extends('layouts.template')

@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active aniversario_landing">
      <div class="wrap_aniversario">
        
        <img src="{{ asset('img/25aniv.png') }}" alt="baby" class="primera_imagen_landing card__will-animate wow bounceIn">

        <div class="row card__subtitle card__will-animate">
          <div class="col-12 texto_header upperca alienado_centro py-5">
            <div data-wow-delay="0.5s" class="panel-heading textoBold azulverde wow zoomIn">Celebramos un año más </div>
            <div data-wow-delay="1s" class="naranja textoBold wow zoomIn">
              <span>de</span> vanguardia y calidad
            </div>
            <div data-wow-delay="1.5s" class="azulverde textoBold wow zoomIn">
              creando zapatos <span>de</span>
            </div>
            <div data-wow-delay="2s" class="amarillo textoBold wow zoomIn">
              moda para niños.
            </div>
          </div>
        </div>
        <img data-wow-delay="4s" src="{{ asset('img/logo_mini_g.png ') }}" alt="Nike 19" class='imagen_logo_landig'>

      </div>
    </div>
    <div class="carousel-item vercatalogo">
      <div class="wrap_vercatalogo">
        <a href="{{ url('catalogo') }}">
          <img data-wow-delay="0.5s" src="{{ asset('img/nino_coleccion.png') }}" alt="baby" class="primera_imagen_landing card__will-animate coleccion_1 wow slideInLeft">

          <div data-wow-delay="0.5s" class="card__subtitle card__will-animate coleccion_2 wow zoomIn">
            <img src="{{ asset('img/coleccion_primavera_icono.png') }}" alt="">
          </div>

          <div class="card__price card__will-animate">
          </div>
          <h1 class="card__title card__will-animate"></h1>
          <span class="card__subtitle card__will-animate"></span>

          <img data-wow-delay="0.5s" src="{{ asset('img/nina_coleccion.png') }}" alt="Nike 19" class="card__image card__will-animate coleccion_3 wow slideInRight">
          <span class="card__category card__will-animate no_mostrar"></span>
          <div class="card__wish-list card__wish-list--19 card__will-animate no_mostrar"></div>

        </a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div class="row">
      <div class="col-12 contenedor_2">
        <div class="alienado_centro texto_cont_2">
          <p>COMO NADIE.</p>
          <p><span>CONOCEMOS</span></p>
          <p> A LA PERFECCIÓN</p>
          <p><span>LO QUE NECESITAN</span></p> 
          <p><span>LOS PIES</span></p>
          <p>DE TUS PEQUEÑINES</p>
        </div>
        <div class="">
          <div class="lista_landing">
            <div class="">
              RESISTENCIA
            </div> 
            <div class="">
              COMODIDAD
            </div>
            <div class="">
              SUAVIDAD
            </div>
            <div class="">
              DISEÑO
            </div>
          </div>
          <div class="imagen_lading wow zoomIn">
            <img src="{{ asset('img/Miniburbujas_Kids2_Marlin.png') }}" alt="">
          </div>
        </div>
        <div class="alienado_centro texto_cont_3">
          <div class="alienado_derecha">
            <p>NUESTRO OBJETIVO ES EL </p>
            <p> <span>DESARROLLO Y LA SALUD</span> </p>
            <p> <span>DEL PIE DE TU NIÑO</span> </p>
            <p>EN TODAS LAS ETAPAS DE SU </p>
            <p> <span>CRECIMIENTO.</span></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="texto_cont_4 alienado_centro">
            <p> APROVECHAMOS  </p>
            <p> <span>NUESTRA GRAN EXPERIENCIA</span> Y </p>
            <p> <span>AMPLIO CONOCIMIENTO</span>  </p>
            <p> EN LOS MATERIALES,  </p>
            <p> EN EL <span>PROCESO DE FABRICACIÓN</span></p> 
            <p> DEL CALZADO </p>
            <p> Y <span> LA ANATOMÍA DEL</span> </p>
            <p> <span>PIÉ TU PEQUEÑO</span> </p>
        </div>
        <div data-wow-duration='2s' class="wrap_huarache wow infinite pulse">
          <div data-wow-duration='2s' data-wow-delay="0.2s" delay class="huarache_landing wow infinite pulse">
            <img src="{{ asset('img/huarache.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="row justify-content-center texto_cont_5">
          <div class="col-6">
            <img src="{{ asset('img/icono_piel.svg') }}" alt="">
            <div class="">
              <p>PARA LLEVARTE</p>
              <p>UN PRODUCTO</p>
              <p> <span>HECHO DE PIEL</span> </p>
            </div>
          </div>
          <div class="col-6">
            <img src="{{ asset('img/icono_talon.svg') }}" alt="">
            <div class="">
              <p>CON UN <span>BULLON</span></p>
              <p> <span>ACOJINADO</span>A LA</p>
              <p>ALTURA DE LOS </p>
              <p>TOBILLOS.</p>
            </div>
          </div>
          <div class="w-100 p-b-30"></div>
          <div class="col-6">
            <img src="{{ asset('img/icono_arco.svg') }}" alt="">
            <div class="">
              <p>CON UNA </p>
              <p><span>PLANTILLA</span> </p>
              <p><span>Y ARCO</span> </p>
              <p><span>ACOJINADOS</span></p>
            </div>
            
          </div>
          <div class="col-6">
            <img src="{{ asset('img/icono_talon_2.svg') }}" alt="">
            <div class="">
              <p>UNA <span>SUELA CON</span> </p>
              <p> <span>COLETA</span>  PARA DAR</p>
              <p>ESTABILIDAD A </p>
              <p>ESOS PRIMEROS </p>
              <p>PASOS DE TU BEBE.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
