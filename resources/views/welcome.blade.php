@extends('layouts.template')

@section('content')
@if (session('mensajeSuscrito'))
  <div class="row eeexito">
    <div class="col-12 alienado_centro">
        <div class="alert alert-success">
            {{ session('mensajeSuscrito') }}
        </div>
    </div>
  </div>
@endif
@if (session('mensaje'))
  <div class="row eeexito">
    <div class="col-12 alienado_centro">
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    </div>
  </div>
@endif
<div id="carouselExampleIndicators" class="carousel slide carusel_landing" data-ride="carousel">
  <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    @foreach($banners as $key=>$contador)
      <li data-target="#carouselExampleIndicators" data-slide-to="{{$key+1}}"></li>
      
    @endforeach
  </ol>
  <div class="carousel-inner altura_80 aniversario_landing">
    <div class="carousel-item active">
      <div class="wrap_aniversario">
        
        <img src="{{ asset('img/25aniv.png') }}" alt="baby" class="primera_imagen_landing card__will-animate wow bounceIn">

        <div class="row card__subtitle card__will-animate">
          <div class="col-12 texto_header upperca alienado_centro py-5">
            <div data-wow-delay="0.5s" class="panel-heading textoBold azulverde wow zoomIn">Celebramos un año más </div>
            <div data-wow-delay="1s" class="naranja textoBold wow zoomIn">
              <span>de</span> vanguardia y calidad,
            </div>
            <div data-wow-delay="1.5s" class="azulverde textoBold wow zoomIn">
              creando zapatos <span>de</span>
            </div>
            <div data-wow-delay="2s" class="amarillo textoBold wow zoomIn">
              moda para niños.
            </div>
          </div>
        </div>
        

      </div>
    </div>
    @foreach($banners as $banner)
    <div class="carousel-item">
      <div class="d-flex h-100 align-items-center justify-content-center">
        <a href="{{$banner->url}}">
          <img alt="{{$banner->nombre}}" data-wow-delay="0.3s"  class="d-block wow fadeIn" src="{{asset($banner->imagen) }}" alt="First slide">
        </a>
        
      </div>
    </div>
    @endforeach
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

    <div class="row">
      <div class="col-12 contenedor_2">
        <div class="alienado_centro texto_cont_2">
          <p>COMO NADIE</p>
          <p><span>CONOCEMOS</span></p>
          <p> A LA PERFECCIÓN</p>
          <p><span>LO QUE NECESITAN</span></p> 
          <p><span>LOS PIES</span></p>
          <p>DE TUS PEQUEÑINES</p>
        </div>
        <div class="">
          <div class="lista_landing" id="accordion">
            <div class="collapse_lista">
              <div id="headingResistencia">
                <button class='titulo_collapse'  data-toggle="collapse" data-target="#collapseResistencia" aria-expanded="false" aria-controls="collapseResistencia">
                  RESISTENTES Y SUAVES
                </button>
              </div>
              <div id="collapseResistencia" class="collapse" aria-labelledby="headingResistencia" data-parent="#accordion">
                <div class="card-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="texto_cont_dropdown">
                          <p>La piel además de permitirnos ofrecerte un producto suave, es mucho más resistente y dura más que lo sintético. Límpialos, lústralos y…  <span> otra vez como nuevos!</span> </p>          
                        </div>


                      </div>
                      <div class="col-12 col-sm-6">
                        
                      </div>
                    </div>
                </div>
              </div>
            </div> 
            <div class="collapse_lista">
              <div id='headingComodidad'>
                <button class='titulo_collapse'  data-toggle="collapse" data-target="#collapseComodidad" aria-expanded="false" aria-controls="collapseComodidad">
                  COMODIDAD
                </button> 
              </div>
              <div id="collapseComodidad" class="collapse" aria-labelledby="headingComodidad" data-parent="#accordion">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="texto_cont_dropdown">
                          <p>Con suelas que amortiguan el impacto al andar y pieles que logran mantener secos los piecitos de tus pequeños.</p>
                          
                        </div>
                      </div>
                      <div class="col-12 col-sm-6">
                        
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="collapse_lista">
              <div id='headingSuavidad'>
                <button class='titulo_collapse'  data-toggle="collapse" data-target="#collapseSuavidad" aria-expanded="false" aria-controls="collapseSuavidad">
                  MODA
                </button> 
              </div>
              <div id="collapseSuavidad" class="collapse" aria-labelledby="headingSuavidad" data-parent="#accordion">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12 ">
                        <div class="texto_cont_dropdown">
                          <p>Sabemos que tú quieres lo mejor para tu niño y niña, es por eso que te ofrecemos una amplia gama de colores y modelos para sus primeros pasos.</p>
                          
                        </div>
                      </div>
                      <div class="col-12 col-sm-6">
                        
                      </div>
                    </div>
                  </div>
              </div>
              
            </div>
          </div>
          <div class="imagen_lading wow zoomIn escritorio">
            <img class='imagen_landing_tenis' src="{{ asset('img/Miniburbujas_Kids2_Marlin.png') }}" alt="">
          </div>
        </div>
        <div class="alienado_centro texto_cont_3">
          <div class=alienado_centro">
            <p>NUESTRO OBJETIVO ES EL CONTRIBUIR</p>
            <p> <span>AL DESARROLLO Y LA SALUD</span> </p>
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
            <p> <span>PIE DE TU PEQUEÑO.</span> </p>
        </div>
        <div data-wow-duration='2s' class="wrap_huarache wow infinite pulse">
          <div data-wow-duration='2s' data-wow-delay="0.2s" delay class="huarache_landing wow infinite pulse">
            <img src="{{ asset('img/kids-cheroke-nina1.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-9 m-t-70 m-b-40">
        <div class="row justify-content-center texto_cont_5">
          <div class="col-6 col-sm-3">
            <img  src="{{ asset('img/icono_arcoiris.svg') }}" alt="">
            <div class="">
              <p>UN GRAN</p>
              <p>Y ATRACTIVO</p>
              <p> <span>COLORIDO.</span> </p>
            </div>
          </div>
          <div class="col-6 col-sm-3">
            <img src="{{ asset('img/icono_accesorios.svg') }}" alt="">
            <div class="">
              <p><span>ACCESORIOS Y </span></p>
              <p> <span>APLICACIONES</span></p>
              <p>QUE DAN UN</p>
              <p>GRAN ESTILO.</p>
            </div>
          </div>
          <div class="col-6 col-sm-3">
            <img src="{{ asset('img/icono_estilos.svg') }}" alt="">
            <div class="">
              <p>AMPLIA</p>
              <p><span>VARIEDAD DE</span> </p>
              <p><span>LÍNEAS</span> </p>
              <p><span>Y MODELOS.</span></p>
            </div>
            
          </div>
          <div class="col-6 col-sm-3">
            <img src="{{ asset('img/icono_talon_2.svg') }}" alt="">
            <div class="">
              <p><span>ATENCIÓN AL </span> </p>
              <p> <span>DETALLE</span></p>
              <p> <span>Y UNA ALTA</span></p>
              <p> <span>CALIDAD</span>  EN LA </p>
              <p>MANUFACTURA.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center m-b-70">
      <div class="col-12">
        <div class="centro_sus">
          <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-6">
              <div class="wrap_imagen_suscribirse">
                <div class="img_nubesita_sus">
                  <img src="{{ asset('img/nubesita_viajera_suscribirse.png') }}" alt="">
                </div>
                <div class="img_zapatito_sus">
                  <img class='w-100' src="{{ asset('img/zapatito_suscribirse.png') }}" alt="">
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="row justify-content-center align-items-center">
                <div class="col-12 suscribirse_texto abrir_wrap_suscrip">
                  <p>Suscríbete a nuestro</p>
                  <h2>BOLETÍN</h2>
                  <img src="{{ asset('img/flechita_abajo') }}" alt="">
                  <div class="flechita_abrir alienado_centro">
                    <i id='iconito_abrir' class="fas fa-chevron-circle-down wow infinite pulse"></i>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center mostrar_wrap_formulario">
            <div class="col-11 col-lg-12 centrado">
              <form action="{{ url('suscribirse') }}" method="post">

                <div class="form-row">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">

                  <div class="form-group col-11 col-md-6">
                    <input type="text" name='nombre' class="form-control" id="exampleInputText" aria-describedby="nombreHelp" placeholder="Nombre">
                    @if ($errors->has('nombre')) <p class="help-block">{{ $errors->first('nombre') }}</p> @endif
                  </div>
                  <div class="form-group col-11 col-md-6">
                    <input type="email" name='correo' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                    @if ($errors->has('correo')) <p class="help-block">{{ $errors->first('correo') }}</p> @endif
                  </div>
                  <div class="form-group col-11 col-md-6">
                    <input type="text" name='edad' class="form-control" id="exampleInputText" aria-describedby="edadHelp" placeholder="Edad">
                    @if ($errors->has('edad')) <p class="help-block">{{ $errors->first('edad') }}</p> @endif
                  </div>
                  <div class="form-group col-11 col-md-6">
                    <input type="text" name='genero' class="form-control" id="exampleInputEmail1" aria-describedby="generoHelp" placeholder="Género">
                    @if ($errors->has('genero')) <p class="help-block">{{ $errors->first('genero') }}</p> @endif
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <div class="col-12 m-t-20 m-b-20">
                        <div class="d-flex align-items-center">
                          <p class='eres_distribuidor p-r-10'>¿Eres Distribuidor? </p><input class='' id='distribuidor' type="radio" name="distribuidor" value="si">
                        </div>
                      </div>
                      <div class="col-12 mostrar_suscripcion">
                        <div class="row">
                          <div class="form-group col-11 col-md-6">
                            <input type="text" name='rfc' class="form-control" id="exampleInputText" aria-describedby="edadHelp" placeholder="RFC">
                            @if ($errors->has('rfc')) <p class="help-block">{{ $errors->first('rfc') }}</p> @endif
                          </div>
                          <div class="form-group col-11 col-md-6">
                            <input type="text" name='numdistribuidor' class="form-control" id="exampleInputEmail1" aria-describedby="generoHelp" placeholder="No. Distribuidor">
                            @if ($errors->has('numdistribuidor')) <p class="help-block">{{ $errors->first('numdistribuidor') }}</p> @endif
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="form-group col-12 alineado_centro">
                    <button type="submit" class="btn_submit_mini texto_bold centrado">ENVIAR</button>
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row m-t-100 m-b-50 justify-content-center align-items-center">
      <div class="col-11 col-sm-10 col-md-8 col-lg-6 suscribirse_texto ">
        <p>Nuestros clientes</p>

          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              @foreach($clientes as $cliente)
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset($cliente->img) }}" alt="First slide">
              </div>
              @endforeach
            </div>
              <ol class="carousel-indicators" id="carouselClientes">
                @foreach($clientes as $key=>$contador)
                  <li data-target="#carouselExampleSlidesOnly" data-slide-to="{{$key}}"></li>
                  
                @endforeach
              </ol>
          </div>

      </div>
    </div>
@endsection
