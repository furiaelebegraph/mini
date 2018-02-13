@extends('layouts.template')

@section('content')

	<div class="row fondo_olas">
		<div class="col-12 primero_header ">
			<div class="row ">
				<div class="col-12">
					<div class="logo_juvenil_1">
						<img src="../img/logo_junior.svg" alt="">
					</div>
					
				</div>
				<div class="col-12 m-t-50">
					<div class="row justify-content-center align-items-center bloques_juvenil">
						<div class="col-11 col-sm-5">

							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
							    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
							  </ol>
							  <div class="carousel-inner">
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
							<p class='textos_juvenil'>
								<span>
									Hay niños que destacan
								</span><br>
								de los demás, por que tienen una mamá que le gusta que se vean   bien.
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
									<div class="row">
										<div class="al_49 textos_juvenil">
											<p>
												Colección <br>
												<span>NAUTICA</span>
											</p>
											<img class='vivorita' src="{{ asset('img/juvenil/vivorita.svg') }}" alt="">
											<p class='textos_juvenil'>
												Nuestras líneas  para Juniors son un clásico que nunca pasa de moda, y le damos un toque actual y atractivo para estos pequeños que poco a poco dejan de serlo.
											</p>
										</div>
										<div class="al_49">
											<img src="{{ asset('img/juvenil/nautica_blanco.png') }}" alt="">
										</div>
									</div>
								</div>
								<div class="col-12 wrap_coleccion_nautica">
									<div class="row">
										<div class="textos_juvenil">
											<p>
												<span>IDEAL</span>
											</p>
											<img  class='vivorita' src="{{ asset('img/juvenil/vivorita.svg') }}" alt="">
											<p class='textos_juvenil'>
												para esas ocasiones especiales donde deben lucir como verdaderos príncipes y enorgullecer a la familia.
											</p>

										</div>
										<div class="">
											<img class='' src="{{ asset('img/juvenil/nautica_cafe.png') }}" alt="">
										</div>
									</div>
								</div>
								
							</div>
						
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12">
		</div>
	</div>

@endsection