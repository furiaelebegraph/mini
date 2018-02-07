@extends('layouts.template')

@section('content')
    <!-- slides -->
    <div class="cosa">
        <div class="wrapper">
                  <!-- 25aniv -->
                    <div class="card card--mini25 carta_ancho">
                        <div class="card__header card__header--mini25">
                        <!-- <div class="card__watermark" data-watermark=""></div> -->

                            <img src="{{ asset('img/25aniv.png') }}" alt="baby" class="card__logo card__will-animate">

                            <div class="row card__subtitle card__will-animate">
                              <div class="col-12 texto_header upperca alienado_centro py-5">
                                  <div class="panel-heading textoBold azulverde">Celebramos un año más </div>
                                  <div class="naranja textoBold">
                                      <span>de</span> vanguardia y calidad
                                  </div>
                                  <div class="azulverde textoBold">
                                      creando zapatos <span>de</span>
                                  </div>
                                  <div class="amarillo textoBold">
                                      moda para niños.
                                  </div>
                              </div>
                            </div>

                            <span class="card__price card__will-animate"></span>
                            <h1 class="card__title card__will-animate"></h1>
                            <span class="card__subtitle card__will-animate"></span>

                            <img src="{{ asset('img/logo_mini_g.png ') }}" alt="Nike 19" class="card__image card__will-animate logo_mini_landing">
                            <span class="card__category card__will-animate no_mostrar"></span>
                            <div class="card__wish-list card__wish-list--19 card__will-animate no_mostrar"></div>


                        </div>
                    </div>

                 <!-- Coleccion Primavera Verano -->
                    <div class="card card--temporada carta_ancho">
                        <div class="card__header card__header--mini25">
                        <!-- <div class="card__watermark" data-watermark=""></div> -->

                            <img src="{{ asset('img/nino_coleccion.png') }}" alt="baby" class="card__logo card__will-animate coleccion_1">

                            <div class="card__subtitle card__will-animate coleccion_2">
                              <img src="{{ asset('img/coleccion_primavera_icono.png') }}" alt="">
                            </div>

                            <div class="card__price card__will-animate">
                            </div>
                            <h1 class="card__title card__will-animate"></h1>
                            <span class="card__subtitle card__will-animate"></span>

                            <img src="{{ asset('img/nina_coleccion.png') }}" alt="Nike 19" class="card__image card__will-animate coleccion_3">
                            <span class="card__category card__will-animate no_mostrar"></span>
                            <div class="card__wish-list card__wish-list--19 card__will-animate no_mostrar"></div>


                        </div>
                    </div> 
                  <!-- Nike 19 -->
                    <div class="card card--19 carta_ancho">
                        <div class="card__header card__header--19">
                        <!-- <div class="card__watermark" data-watermark=""></div> -->

                            <img src="img/logo_baby.svg" alt="baby" class="card__logo card__will-animate">

                            <span class="card__price card__will-animate"></span>

                            <h1 class="card__title card__will-animate"></h1>
                            <span class="card__subtitle card__will-animate"></span>

                            <img src="img/zapato_baby.png" alt="Nike 19" class="card__image card__will-animate">
                            <span class="card__category card__will-animate">CONOCIENDO EL CAMINO</span>
                            <div class="card__wish-list card__wish-list--19 card__will-animate">Visitar categoría</div>


                        </div>
                    </div> 
                  <!-- Nike Solstice -->
                  <div class="card card--solstice carta_ancho">
                    <div class="card__header card__header--pasos">

                      <img src="img/logo_pasos.svg" alt="junior" class="card__logo card__will-animate">

                      <span class="card__price card__will-animate"></span>

                      <h1 class="card__title card__will-animate"></h1>
                      <span class="card__subtitle card__will-animate"></span>

                      <img src="img/zapato_pasos.png" alt="Nike Solstice" class="card__image card__will-animate">
                      <span class="card__category card__will-animate">UN CALZADO CON ESTILO</span>
                      <div class="card__wish-list card__wish-list--solstice card__will-animate">Visitar categoría</div>

                    </div>
                  </div>

                  <!-- Nike Huarache -->
                    <div class="card card--huarache carta_ancho">
                        <div class="card__header card__header--kids">

                          <img src="img/logo_kids.svg" alt="junior" class="card__logo card__will-animate" >

                          <span class="card__price card__will-animate"></span>

                          <h1 class="card__title card__will-animate"></h1>
                          <span class="card__subtitle card__will-animate"></span>

                          <img src="img/zapato_kids.png" alt="Nike Huarache" class="card__image card__will-animate">
                          <span class="card__category card__will-animate">LISTOS PARA LA AVENTURA</span>
                          <div class="card__wish-list card__wish-list--solstice card__will-animate">Visitar categoría</div>
                        </div>
                    </div>
                  <!-- Nike Solstice -->
                  <div class="card card--solstice carta_ancho">
                    <div class="card__header card__header--solstice">

                      <img src="img/logo_junior.svg" alt="junior" class="card__logo card__will-animate">

                      <span class="card__price card__will-animate"></span>

                      <h1 class="card__title card__will-animate"></h1>
                      <span class="card__subtitle card__will-animate"></span>

                      <img src="img/zapato_junior.png" alt="Nike Solstice" class="card__image card__will-animate">
                      <span class="card__category card__will-animate">CRECE EN GRANDE</span>
                      <div class="card__wish-list card__wish-list--solstice card__will-animate">Visitar categoría</div>


                    </div>
                  </div>
        </div>
            <div class="cards-placeholder">
              <div class="cards-placeholder__item"></div>
              <div class="cards-placeholder__item"></div>
              <div class="cards-placeholder__item"></div>
              <div class="cards-placeholder__item"></div>
              <div class="cards-placeholder__item"></div>
              <div class="cards-placeholder__item"></div>
            </div>
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
          <div class="imagen_lading">
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
        <div class="">
            APROVECHAMOS 
            NUESTRA GRAN EXPERIENCIA Y
            AMPLIO CONOCIMIENTO 
            EN LOS MATERIALES, 
            EN EL PROCESO DE FABRICACIÓN DEL CALZADO 
            Y  LA ANATOMÍA DEL
            PIÉ TU PEQUEÑO
          </div>
          <div class="">
            <img src="{{ asset('img/') }}" alt="">
            <div class="canvas"></div>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-6">
            <img src="{{ asset('img/') }}" alt="">
            <div class="">
              PARA LLEVARTE UN PRODUCTO HECHO DE PIEL
            </div>
          </div>
          <div class="col-6">
            <img src="{{ asset('img/') }}" alt="">
            <div class="">
              CON UN BULLON ACOJINADO A LA ALTURA DE LOS TOBILLOS.
            </div>
          </div>
          <div class="col-6">
            <img src="{{ asset('img/') }}" alt="">
            <div class="">
              CON UNA PLANTILLA Y ARCO ACOJINADOS
            </div>
            
          </div>
          <div class="col-6">
            <img src="{{ asset('img/') }}" alt="">
            <div class="">
              UNA SUELA CON COLETA PARA DAR ESTABILIDAD A ESOS PRIMEROS PASOS DE TU BEBE.
            </div>
            
          </div>
        </div>
      </div>
    </div>
@endsection
