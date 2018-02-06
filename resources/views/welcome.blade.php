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
@endsection
