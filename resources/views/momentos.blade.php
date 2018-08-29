@extends('layouts.template')

@section('content')

<link rel="stylesheet" href="{{ asset('css/threesixty.css') }}">

<div class="escondido">
    <div class="fondo_momentos">
        <div class="row">
            <div class="col-12">
                <div class="momentos_bloque_1">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 alienado_centro wow bounceInUp">
                            <img class="momentosLogo" src="{{ asset('img/momentos/momentos.svg') }}">
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 centro_momentos">
                            <div class="Fondo_zapato1 row">
                                <div class="florecita">
                                    <img class='zapato1 wow slideInRight' src="{{ asset('img/momentos/ZapatoFondo.png') }}" alt="">
                                </div>
                                <div class="col textomomentos1derecha">
                                    <img class="chispitas" src="{{ asset('img/momentos/chispitas.svg') }}">
                                        <p class='textoMomentos1 p-l-20 p-r-20'>
                                            Lo más importante de la vida no son las cosas,
                                            <strong class="textoMomentos1S">son esos pequeños momentos,</strong>
                                            emociones y recuerdos que te llevas en tu corazón.
                                        </p>
                                    <img class="bolitas" src="{{ asset('img/momentos/bolitas.svg') }}">
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
                    <div class="texto_especial alienado_centro wow">
                        <div>
                            <img class="especial slideInLeft" src="{{ asset('img/momentos/especial.svg') }}">
                        </div>
                        <div>
                            <strong class="texto_especial_big">El amor</strong>
                            <p>
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
    <div id="seccion_catalogo_return" class="col-12">
        <div class="centro_momentos">
            <div class="row justify-content-center m-b-50">
                <div class="col-12 col-sm-8">
                    <div class="row justify-content-between">
                        @foreach ($momentos as $momento)
                            <div class="col-11 col-sm-5">
                                <div class="wrap_catalogo_momentos">
                                    <a href=" {{ route('catalogo' , $momento->id) }} ">
                                        <img class='imagen_catalogo_kids' src="{{ asset( $momento->imagen ) }}" alt="">
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

@endsection
@push('js360')
    <!-- flot charts scripts-->
    <script src="{{ asset('js/threesixty.js') }}"></script>
    <script src="{{ asset('js/360_juvenil.js') }}"></script>
@endpush