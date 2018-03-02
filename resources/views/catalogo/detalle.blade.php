@extends('layouts.template')

@section('cssgaleria')
	<link type="text/css" rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}" /> 
@stop

@section('content')
	<div class="container">
		<div class='m-t-100'>
			<div class="row justify-content-center">
				<div class="col-9">
					<a href="{{ url()->previous() }}">Regresar</a>
				</div>
			</div>
		</div>
	</div>


    <div class="row justify-content-center m-t-100 m-b-100">
        <div class="col-12 col-md-7" id="slider">
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


                    <ul class="carousel-indicators list-inline m-t-60">
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
		<div class="col-12 col-md-4">
			<div class="row align-content-center">
				<div class="col-12">
					<h2 class="titulo">
						{{$producto->nombre}}
					</h2>
				</div>
				<div class="col-12">
					<h4 class="titulo">
						<a href="{{ url($producto->cate->url) }}">{{$producto->cate->nombre}}</a> / <a href="{{ url('catalogo/'.$producto->subcate->id ) }}">{{$producto->subcate->nombre}}</a> 
					</h4>
				</div>
				<div class="col-12 linea_gris_cat"></div>
				<div class="col-12 m-t-30">
					<h2 class='titulo_catalogo'>
						Descripcion
					</h2>
					
					<p class='color_gris'>
						{!!$producto->descripcion!!}
					</p>
				</div>
			</div>
		</div>
		<div class="col-12">
		</div>
    </div>

@endsection

	@push('jsgaleria')
    <!-- flot charts scripts-->
	    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
	@endpush