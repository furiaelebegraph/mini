@extends('layouts.template')

@section('cssgaleria')
	<link type="text/css" rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}" /> 
@stop

@section('content')
	<div class="container">
		<div class='m-t-100'>
			<div class="row">
				<div class="col-12">
					{{ Breadcrumbs::render('lolcat', $producto->subcate->id) }}
				</div>
			</div>
		</div>
	</div>


    <div class="row">
        <div class="col-lg-8 " id="slider">
                <div id="myCarousel" class="carousel slide">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                    	@foreach($producto->ima as $key=>$imagenes)
							<a data-fancybox="gallery" class='item carousel-item' data-slide-number="{{$key}}" href="{{asset($imagenes->imagen)}}">
								<img src="{{asset($imagenes->imagen)}}" alt="">
							</a>
						@endforeach

                        <a class="carousel-control left pt-3" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                        <a class="carousel-control right pt-3" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>

                    </div>
                    <!-- main slider carousel nav controls -->


                    <ul class="carousel-indicators list-inline">
                    	@foreach($producto->ima as $key=>$imagenes)
							<li class='list-inline-item'  data-slide-to="{{$key}}" data-target="#myCarousel" ">
								<a id="carousel-selector-{{$key}}" class="selected" data-slide-to="{{$key}}" data-target="#myCarousel">
	                                <img src="{{asset($imagenes->imagen)}}" class="img-fluid">
	                            </a>
							</li>
						@endforeach
                    </ul>
            </div>
        </div>
		<div class="col-4">
			<h2 class="titulo">
				{{$producto->nombre}}
			</h2>
			<div class="margen_30"></div>
			<div class="linea_gris_cat"></div>
		</div>
		<div class="col-12">
				<h2 class='titulo_catalogo'>Descripcion</h2>
				
				<p class='color_gris'>
					{!!$producto->descripcion!!}
				</p>
		</div>
    </div>



	<div class="container ">
		<div class="columns is-tablet is-centered is-gapless">
			<div class="column margen_30 is-8 is-flex">
				<div  >
				</div>
			</div>
		</div>
		<hr>
		<div class="columns is-centered is-four-fifths ">
			<div class="column margen_30">
				<h2 class='titulo_catalogo'>Descripcion</h2>
				
				<p class='color_gris'>
					{!!$producto->descripcion!!}
				</p>
			</div>
		</div>
	</div>
	<div class="container ">
		<div class="columns margen_30 is-centered">
			<div class="column is-6">
				<img class='al_100' src="{{asset('img/fondo_polamar_osos.jpg')}}" alt="">
			</div>
		</div>
	</div>
        <div class="container">
            <div class="columns margen_30 is-centered">
                <div class="column is-5 has-text-centered">
                    <hr>
                    <img class='logo_footer' src="{{asset('img/logo_polman_blanco.png')}}" alt="">
                </div>
            </div>
        </div>
@endsection

	@section('jsgaleria')
    <!-- flot charts scripts-->
	    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
	@stop