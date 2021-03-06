@extends('layouts.template')

@section('content')
<link rel="stylesheet" href="{{ asset('css/threesixty.css') }}">
	<div class="row fondo_olas">
		<div class="col-12 primero_header ">
			<div class="row no-gutters">
				<div class="col-12  wow bounceInUp">
					<div class="logo_juvenil_1">
						<img src="{{ asset('img/logo_junior.svg') }}" alt="">
					</div>
					
				</div>
				<div class="col-12 m-t-50 wow slideInRight">
					<div class="row justify-content-center align-items-center bloques_juvenil no-gutters">
						<div class="col-12 col-sm-6" id='juveniles_carru'>

							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
							    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
							  </ol>
							  <div class="carousel-inner" >
							    <div class="carousel-item active">
							      <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [800x400]" src="{{ asset('img/juvenil/carousel_juvenil_1.png') }}" data-holder-rendered="true">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [800x400]" src="{{ asset('img/juvenil/carousel_juvenil_2.png') }}" data-holder-rendered="true">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block w-100" data-src="holder.js/800x400?auto=yes&amp;bg=555&amp;fg=333&amp;text=Third slide" alt="Third slide [800x400]" src="{{ asset('img/juvenil/carousel_juvenil_3.png') }}" data-holder-rendered="true">
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

						</div>
						<div class="col-11 col-sm-5">
							<p class='textos_juvenil alineado_centro'>
								<span>
									Hay niños que destacan
								</span><br>
								de los demás, porque tienen una mamá que le gusta que se vean   bien.
							</p>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="circulo-timon">
						<div class="timon">
							<img src="{{ asset('img/juvenil/timon_juvenil.svg') }}" alt="">
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="fondo_detalles_nautica">
						<div class="wrap_detalles">
							<div class="row">
								<div class="col-12 wrap_coleccion_nautica">
									<div class="row align-items-center">
										<div class="col-12 col-sm-6 order-1 order-sm-2 wow slideInLeft">
											<div class="textos_juvenil">
												<p class='texto_coleccion_nautica'>
													Colección
												</p>
												<p class='texto_nautica'>
													<span>NÁUTICA</span>
												</p>
												<img class='vivorita imagen_vivorita' src="{{ asset('img/juvenil/vivorita.svg') }}" alt="">
												<p class='textos_juvenil descripcion_nautica'>
													Nuestras líneas  para Juniors son un clásico que nunca pasa de moda, y le damos un toque actual y atractivo para estos pequeños que poco a poco dejan de serlo.
												</p>
											</div>
										</div>
										<div class="col-12 col-sm-6 order-2 order-sm-1 wow slideInRight">
											<img class='imagen_seccion_juvenil_1' src="{{ asset('img/juvenil/nautica_blanco.png') }}" alt="">
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="row fondo_nube_juvenil">
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
								<div class="col-12 wrap_coleccion_nautica">
									<div class="row align-items-center">
										<div class="col-12 col-sm-6 wow slideInLeft">
											<div class="textos_juvenil p-l-20">
												<img  class='vivorita' src="{{ asset('img/juvenil/vivorita.svg') }}" alt="">
												<p class='m-t-30'>
													<span>IDEAL</span>
												</p>
												<p class='textos_juvenil_ideal'>
													para esas ocasiones especiales donde deben lucir como verdaderos príncipes y enorgullecer a la familia.
												</p>
											</div>

										</div>
										<div class="col-12 col-sm-6 wow slideInRight">
											<img class='imagen_seccion_juvenil_2' src="{{ asset('img/juvenil/nautica_cafe.png') }}" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row fondo_olitas alienado_centro">
		<div class="col-12 col-sm-7">
			<div class="wrap_cat_juvenil">
				<div class="texto_cat_baby alienado_derecha">
					<h1>
						Categorías <br>
						<span>
							JUVENIL
						</span>
						
					</h1>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row justify-content-center">

				@foreach ($juveniles as $juvenil)
				<div class="col-11 col-sm-5 wow zoomIn">
					<div class="wrap_imagen_catalogo">
						<a href=" {{ route('catalogo' , $juvenil->id) }} ">
							<img class='imagen_catalogo_juvenil' src="{{ asset( $juvenil->imagen ) }}" alt="">
						</a>
					</div>
					<div class="m-t-70 alienado_centro">
						<a class='titulo_juvenil_cata' href=" {{ route('catalogo' , $juvenil->id) }}"> {{ $juvenil->nombre }} </a>
					</div>
				</div>	
				@endforeach
				
			</div>
		</div>


	</div>

@endsection
@push('js360')
    <!-- flot charts scripts-->
    <script src="{{ asset('js/threesixty.js') }}"></script>
    <script src="{{ asset('js/360_juvenil.js') }}"></script>
@endpush