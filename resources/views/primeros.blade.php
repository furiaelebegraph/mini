@extends('layouts.template')

@section('content')

<link rel="stylesheet" href="{{ asset('css/threesixty.css') }}">
<div class="escondido">
	<div class="row gusano_cosmico_pri">
		<div class="col-12">
			<div class="centro_primeros m-t-100">
				<div class="row">
					<div class="col-12 wow zoomIn">
						<div class="logo_primeros">
							<img src="{{ asset('img/logo_pasos.svg') }}" alt="">
						</div>
					</div>
					<div class="col-12 flexeado">
						<div class="escalera_1 wow slideInUp">
							<img src="{{ asset('img/primeros/escalera_1.svg') }}" alt="">
						</div>
						<div class="wrap_texto_pasos_1">
							<div class="row">
								<div class="col-12 col-md-6 order-2 order-md-1 wow slideInLeft">
									<div class="texto_pasos_1">
										<p>
											Cuando tu bebé comienza a 
											caminar se abre un mundo 
											nuevo para explorar, en esta 
											importante etapa necesita de 
											un <span> calzado que le de 
											conﬁanza</span> y a su vez 
											ayude al <span> correcto 
											desarrollo del pie.</span>
										</p>
									</div>
								</div>
								<div class="col-12 col-md-6 order-1 order-md-2 wow slideInRight">
									<div class="titulo_pasos_1">
										<p><span>UN </span>MUNDO</p>
										<p>NUEVO PARA</p>
										<p>EXPLORAR</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="row">
							<div class="col-12 col-md-6 order-2 order-md-1">
								<div class="wrap_nuvecita">
									<div class="img_nubecita wow bounceIn"> 
										<img src="{{ asset('img/primeros/nubecita_pri.svg') }}" alt="">
									</div>
									<div class="titulo_pasos_2">
										<p class=' wow slideInLeft'>SÚPER</p>
										<p class=' wow slideInLeft'>cómodos</p>
										<p class=' wow slideInLeft'>GRAN DISEÑO</p>
										<p class=' wow slideInLeft'>Y RESISTENCIA</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 order-1 order-md-2 wow bounceIn">
								<img src="{{ asset('img/primeros/zapato_1_primeros.png') }}" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row m-t-350">
		<div class="col-12">
			<div class="centro_primeros">
				<div class="row align-items-center">
					<div class="col-11 col-md-4 order-2 order-md-1 wow fadeInUp">
						<div class="texto_pasos_1">
							<p>
								En esta edad tus campeones 
								tiene gran actividad, por eso 
								seleccionamos <span>materiales 
								de piel como napa y 
								charoles</span> además de 
								algunos sintéticos, 

							</p>
						</div>
					</div>
					<div class="col-11 col-md-5 order-1 order-md-2 wow fadeInUp">
						<img class='zapatito_primero_2' src="{{ asset('img/primeros/zapato_2_primeros.png') }}" alt="">
					</div>
				</div>
			</div>
		</div>	
	</div>
	<div class="row">
		<div class="col-12">
			<div class="centro_primeros">
				<div class="row align-items-end">
					<div class="col-12 col-md-5 order-2 order-md-1 wow fadeInLeft">
						<div class="wrap_zapatito_3">
							<img class='zapatito_primeros_3' src="{{ asset('img/primeros/zapato_3_primeros.png') }}" alt="">
						</div>
					</div>
					<div class="col-12 col-md-7 order-1 order-md-2 wow fadeInRight">
						<div class="wrap_todo_resiste escritorio">
							<img src="{{ asset('img/primeros/todo_resiste_pri_12.svg') }}" alt="">
						</div>
						<div class="wrap_todo_resiste mobiles">
							<img src="{{ asset('img/primeros/todo_resiste_pri_1.svg') }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row m-t-60">
		<div class="col-12">
			<div class="centro_primeros">
				<div class="row align-content-center">
					<div class="col-12 col-sm-6 flexeado wow fadeInRight">
						<div class="texto_primeros_3">
							<p>
								Nuestra experiencia en el calzado de 
								bebés, nos ha llevado a implementar 
								tecnología que brinde una total 
								comodidad y seguridad:
							</p>
						</div>
					</div>
					<div class="col-12 col-md-6 wow fadeInLeft">
						<div class="row">
							<div class="col-10 flexeado">
								<div class="icono_listado"><img src="{{ asset('img/primeros/iconito_1_miniburgujas.svg') }}" alt=""></div>
								<p class="detalle_listado">
									Suelas de TR de alta 
									ﬂexibilidad que brindan 
									confort.
								</p>
							</div>
							<div class="col-10 flexeado">
								<div class="icono_listado"><img src="{{ asset('img/primeros/iconito_2_miniburgujas.svg') }}" alt=""></div>
								<p class="detalle_listado">
									Punta de la suela 
									elevada le da mayor 
									resistencia a la abrasión.
								</p>
							</div>
							<div class="col-10 flexeado">
								<div class="icono_listado"><img src="{{ asset('img/primeros/iconito_3_miniburgujas.svg') }}" alt=""></div>
								<p class="detalle_listado">
									Soporte del talón dá 
									mayor seguridad en sus 
									primeros pasos.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="row fondo_nube">
				<div class="col-12">
					<div class="centro_360">
						<div class="threesixty shapatito_baby">
							<div class="spinner">
								<span>0%</span>
							</div>
							<ol class="threesixty_images"></ol>
						</div>
						<div class="icono_360">
							<img src="{{ asset('img/360_icono.png') }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="centro_primeros">
				<div class="row align-content-center">
					<div class="col-12 col-md-6">
						<img class='zapatito_primeros_4' src="{{ asset('img/primeros/zapato_4_primeros.png') }}" alt="">
					</div>
					<div class="col-12 col-md-6">
						<div class="texto_primeros_4">
							<p>
								A partir de esta etapa el
							</p>
							<p>
								<span>zapato cuenta con arco 
							</p>
							<p>
								<span>almendra marcado</span>
							</p>
							<p>
								que, junto al 
							</p>
							<p>
								<span>
									forro y la plantilla 
								</span>
							</p>
							<p>
								<span>
									de piel de cerdo
								</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row m-t-80 align-items-center">
	<div class="col-12 col-sm-7">
		<div class="wrap_cat_baby">
			<div class="texto_cat_baby alienado_derecha">
				<h1>
					Categorías <br>
					<span>
						PRIMEROS PASOS
					</span>
					
				</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-5">
		<div class="btn_catalogo_baby">
			CATÁLOGO
		</div>
	</div>
	<div class="col-12">
		<div class="centro_baby">
			<div class="row justify-content-center m-b-50">
				<div class="col-12 col-sm-8">
					<div class="row justify-content-between">

						@foreach ($primeros as $primer)
							<div class="col-11 col-sm-5">
								<div class="wrap_catalogo_primeros">
									<a href=" {{ route('catalogo' , $primer->id) }} ">
										<img class='imagen_catalogo_kids' src="{{ asset( $primer->imagen ) }}" alt="">
									</a>
								</div>
								<div class="m-t-20 alienado_centro">
									<a class='titulo_baby_cata' href=" {{ route('catalogo' , $primer->id) }}"> {{ $primer->nombre }} </a>
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
    <script src="{{ asset('js/360.js') }}"></script>
@endpush