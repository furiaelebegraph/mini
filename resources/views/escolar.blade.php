@extends('layouts.template')

@section('content')

<link rel="stylesheet" href="{{ asset('css/threesixty.css') }}">


<div class="row no-gutters justify-content-center align-items-center fondo_azul_exolcar">
    <div class="col-12">
        <div class="width_escolar m-t-100">
            <div class="row no-gutters">
                <div class="col-12 alineado_centro">
                    <img src="{{ asset('img/escolar/cabecera_escolar.svg') }}" alt="">
                    <img class="eescolar_1" src="{{ asset('img/escolar/escolar_logo.png') }}" alt="miniburbujas">
                </div>
            </div>
            <div class="row no-gutters fondo_azul_2 margent-top--30">
                <div class="col-12 fondo_reticula">
                    <div class="row justify-content-end ">
                        <div class="col-12">
                            <div class="row justify-content-end fondo123">
                                <div class="col-12 col-sm-6 alineado_centro left_escolar_1 m-t--200">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                      <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                      </ol>
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" src="{{ asset('img/escolar/zapato_escolar_1.png') }}" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="{{ asset('img/escolar/zapato_escolar_1.png') }}" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="{{ asset('img/escolar/zapato_escolar_1.png') }}" alt="Third slide">
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


                                    <img src="{{ asset('img/escolar/texto_escolar.svg') }}" alt="miniburbujas">
                                    <p>Nuestra experiencia en calzado, nos ha llevado a implementar tecnología que brinde una total comodidad y seguridad:</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 m-t-30">
                            <div class="row fondo_nube_escolar">
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
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <div class="col-12 col-sm-6 zapatiito_3_escolar">
                                    <img src="{{ asset('img/escolar/zapato_escolar_2.png') }}" alt="zapato escolar minniburbujas 1">
                                    
                                </div>
                                <div class="col-12 col-sm-6">
                                    <img src="{{ asset('img/escolar/texto_seguro.svg') }}" alt="calzado seguro miniburbujas">
                                    <p class="texto_1_escolar">
                                        Lorem ipsum dolor sit amet, sagittis purus consequat 
                                    </p>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>


            </div>

        </div>
    </div> 
</div>    
<div class="width_escolar">
    <div class="row no-gutters justify-content-center">
        <div class="col-12">
            <div class="row no-gutters justify-content-center">
                <div class="col-12 p-b--30">
                    <img src="{{ asset('img/escolar/footer_escolar.svg') }}" alt="">
                    <div class="escolar_3">
                        <img src="{{ asset('img/escolar/zapato_escolar_3.png') }}" alt="">
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
    <script src="{{ asset('js/360_escolar.js') }}"></script>
@endpush