@extends('layouts.template')

@section('content')

<link rel="stylesheet" href="{{ asset('css/threesixty.css') }}">

<div class="escondido">
    <div class="fondo_momentos">
        <div class="row">
            <div class="col-12">
                <div class="momentos_bloque_1 col-12 centro_momentos">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 alienado_centro wow bounceInUp">
                            <img class="momentosLogo" src="{{ asset('img/momentos/momentos.svg') }}">
                        </div>
                        <div class="centro_momentos primeracolumna">
                            <div class=" row">
                                <div class="Fondo_zapato1 col-lg-8 col-sm-12 col-md-8">
                                    <div id="carouselExampleIndicators" class="carousel slidemomentos slide" data-ride="carousel">
                                      <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                      </ol>
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" src="{{ asset('img/momentos/ZapatoFondo.png') }}" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="{{ asset('img/momentos/ZapatoFondo.png') }}" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="{{ asset('img/momentos/ZapatoFondo.png') }}" alt="Third slide">
                                        </div>
                                      </div>
                                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                    </div>
                                    <div class="florecita"></div>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-md-4 textomomentos1derecha">
                                    <img class="chispitas" src="{{ asset('img/momentos/chispitas.svg') }}">
                                        <p class='textoMomentos1 p-l-20 p-r-20'>
                                            Lo más importante de la vida no son las cosas,
                                            <strong class="textoMomentos1S">son esos pequeños momentos,</strong>
                                            emociones y recuerdos que te llevas en tu corazón.
                                        </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="momentos_bloque_2 centro_momentos">
        <img class='estrella wow slideInLeft' src="{{ asset('img/momentos/estrella.svg') }}" alt="">
        <img class='corazon wow slideInRight' src="{{ asset('img/momentos/corazon.svg') }}" alt="">
        <div class="col-12">
            <div class="row momentosnuves fondo_nube">
                <div class="col-12">
                    <div class="centro_360 m-b-100 m-t-100">
                        <div class="threesixty shapatito_baby">
                            <div class="spinner">
                                <span>0%</span>
                            </div>
                            <ol class="threesixty_images"></ol>
                        </div>
                        <div class="icono_360 m-t-20">
                            <img src="{{ asset('img/360_icono.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="degragado">
        <div class="momentos_bloque_3 col-12 centro_momentos">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="alienado_centro wow">
                        <div>
                            <img class="especial slideInLeft" src="{{ asset('img/momentos/especial.svg') }}">
                        </div>
                        <div>
                            <strong class="texto_especial_big">El amor</strong>
                            <p class="texto_especial ">
                                dura para siempre,<br>
                                comienza antes<br>
                                de nacer y se vive<br>
                                en momentos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="zapatoespecial col-lg-8 col-sm-12 col-md-8">
                    <img class="zapatoEspiral slideInRight" src="{{ asset('img/momentos/zapatoEspiral.png') }}">
                </div>
                
            </div>
        </div>

        <div class="momentos_bloque_4 centro_momentos">
            <div class="row align-items-center">
                <div class="fondoZapatofinal">
                    <img class="zapatosfinal slideInLeft" src="{{ asset('img/momentos/zapatosfinal.png') }}">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fondocategorias">
    <div class="row align-items-center">
        <div class="col-12 col-sm-7">
            <div class="wrap_cat_momentos">
                <div class="texto_cat_kids alienado_derecha">
                    <h1>
                        Categorías <br>
                        <span>
                            MOMENTOS
                        </span>
                        
                    </h1>
                </div>
            </div>
        </div>
        <div id="seccion_catalogo_return" class="col-12">
            <div class="centro_momentos">
                <div class="row justify-content-center m-b-50">
                    <div class="col-12 col-sm-8">
                        <div class="row justify-content-between">
                            @foreach ($momentos as $momento)
                                <div class="col-11 col-sm-5">
                                    <div class="wrap_catalogo_momentos">
                                        <a href=" {{ route('catalogo' , $momento->id) }} ">
                                            <img class='imagen_catalogo_momentos' src="{{ asset( $momento->imagen ) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="m-t-20 alienado_centro">
                                        <a class='titulo_momentos_cata' href=" {{ route('catalogo' , $momento->id) }}"> {{ $momento->nombre }} </a>
                                    </div>
                                </div>  
                            @endforeach
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>


@endsection
@push('js360')
    <!-- flot charts scripts-->
    <script src="{{ asset('js/threesixty.js') }}"></script>
    <script src="{{ asset('js/360_juvenil.js') }}"></script>
@endpush