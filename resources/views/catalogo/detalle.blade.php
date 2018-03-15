@extends('layouts.template')

@section('cssgaleria')
	<link type="text/css" rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}" /> 
@stop

@section('content')
	<div class="container">
		<div class='m-t-100'>
			<div class="row justify-content-center">
				<div class="col-9 ">
					<div class="regresar p-t-20 p-b-20">
						<a href="{{ url()->previous() }}">
							<i class="fas fa-caret-left"></i> Regresar
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


    <div class="row justify-content-center m-t-20 m-b-100">
        <div class="col-12 col-md-7" id="slider">
                <div id="myCarousel" class="carousel slide">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                    	@foreach($producto->ima as $key=>$imagenes)
							<a data-fancybox="gallery" class='item carousel-item' data-slide-number="{{$key}}" href="{{asset($imagenes->imagen)}}">
								<img class='w-100' src="{{asset($imagenes->imagen)}}" alt="">
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
		<div class="col-8 col-md-4 margen_top_producto">
			<div class="row align-content-center">
				<div class="col-12 m-b-30">
					<img class='logo_detalle_producto' src=" {{ asset($producto->cate->imagen) }}" alt=""> 
				</div>
				<div class="col-12">
					<h2 class="nombre_producto">
						{{$producto->nombre}}
					</h2>
				</div>
				<div class="col-12 m-t-40">
					<h4 class="titulo nombres_categorias_producto">
						<a href="{{ url($producto->cate->url) }}">{{$producto->cate->nombre}}</a> / <a href="{{ url('catalogo/'.$producto->subcate->id ) }}">{{$producto->subcate->nombre}}</a> 
					</h4>
				</div>
				<div class="col-12 m-t-30">
					<h2 class='titulo_catalogo'>
						Color
					</h2>
					
					<div class='color_gris detalle_color'>
						@if ($producto->color()->count() > 0)
							<p>{!!$producto->color->nombre!!}</p>
							
							<img class='w-100' src="{{ asset($producto->color->imagen) }}" alt="">
						@else
							<p class='m-t-10 m-b-10'>No hay colores para mostrar.</p>
						@endif
					</div>
				</div>
				<div class="col-12 linea_gris_cat"></div>
				<div class="col-12 m-t-30">
					<h2 class='titulo_catalogo'>
						Tallas
					</h2>
					@if ($producto->talla()->count() > 0)
						<ul class='row no-gutters justify-content-start align-items-center'>
							@foreach ($producto->talla as $numeros)
								<li class='col-10 col-sm-5 tallas_detalle'>{{ $numeros->numero }}</li>
							@endforeach
						</ul>
					@else
						<p class='m-t-10 m-b-10'>No hay tallas para mostrar.</p>
					@endif
				</div>
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
    </div>

@endsection

	@push('jsgaleria')
    <!-- flot charts scripts-->
	    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
	@endpush