@extends('layouts.template')

@section('content')
<link rel="stylesheet" href="{{ asset('css/threesixty.css') }}">
<div class="escondido">
	<div class="row m-t-70 fondo_ciudad">
		<div class="col-12 fondo_lombris_cosmica">
			<div class="row">
				<div class="col-12">
					<div class="kids_bloque_1">
						<div class="row align-items-center">
							<div class="col-12 col-sm-12 col-md-6 alienado_centro wow bounceInUp">
								<img class='logo_kids_kids' src="{{ asset('img/logo_kids.svg') }}" alt="">
							</div>
							<div class="col-12 col-sm-12 col-md-6">
								<img class='im_zapato_kids_1 wow slideInRight' src="{{ asset('img/kids/kids_zapatito1.png') }}" alt="">
								<p class='texto_kids texto_kids_1 color_morado p-l-20 p-r-20 m-t-20'>
									Tus bebés ahora ya son grandes, andan de arriba para abajo, hasta van a la escuela y  se divierten a lo grande.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 m-t-50">
					<div class="centro_kids">
						<div class="row align-items-center">
							<div class="col-12 col-sm-6">
								<img class="im_zapato_kids_2 wow slideInLeft" src="{{ asset('img/kids/kids_zapatito2.png') }}" alt="">
							</div>
							<div class="col-12 col-sm-6 m-t-20 wow slideInRight">
								<div class="titulo_kids color_azul_kids alienado_centro ">
									<h2>LISTOS PARA LA <span>AVENTURA</span></h2>
								</div>
								<div class="texto_kids azul_fuerte texto_kids_2">
									<p >
										Nuestras líneas estan especialmente diseñadas para los niños más independientes, es esta etapa nuestro calzado cuenta con el
										<span>arco almendra marcado</span>, 
										así como <span>el forro y la plantilla de piel de cerdo</span> que reduce la humedad y mantiene saludables
										los pies de tu chiquitín.
									</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="centro_kids">
				<div class="row align-items-center">
					<div class="col-12 col-sm-6 order-2 order-sm-1 m-t-175-n wow slideInLeft zapatotecolum">
						<div class="titulo_kids color_verde_kids titulo_kids_2">
							<h2>DISEÑADOS PARA ELLOS</h2>
						</div>
						<div class="texto_kids rosa_fuerte m-t-20 texto_kids_3">
							<p>
								Ahora ellos tienen sus gustos y están formando su identidad, 
								por lo que nuestros diseños son llamativos y divertidos, para que sean felices con sus nuevos zapatos.
								
							</p>

						</div>
					</div>
					<div class="col-12 col-sm-6 order-1 order-sm-2 wow slideInRight">
						<img class='zapato_giante_kids wow zoomIn' src="{{ asset('img/kids/kids_zapatito3.png') }}" alt="">
					</div>
				</div>
				
			</div>
		</div>
		<div class="col-12">
			<div class="row m-t-250-n">
				<div class="col-12">
					<div class="centro_kids">
						<div class="row align-items-center">
							<div class="col-12 col-sm-6 wow slideInLeft">
								<img class='im_zapato_kids_4' src="{{ asset('img/kids/kids_zapatito4.png') }}" alt="">
							</div>
							<div class="col-12 col-sm-6 wow slideInRight">
								<div class="texto_kids color_morado_cafe  texto_kids_3">
									<p>
										Y como olvidar esas ocasiones especiales en que deben verse a la altura de <span>cualquier ceremonia.</span>
										
									</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-12">
					<div class="row fondo_nube">
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
					<div class="centro_kids">
						<div class="row align-items-center">
							<div class="col-12 col-sm-6">
								<div class="texto_kids texto_kids_3 color_naranja m-t-200-n wow slideInLeft">
									<p>
										Y para que le duren hasta que ya no lo queden, utilizamos los mejores materiales naturales y sintéticos.
										
									</p>
								</div>
							</div>
							<div class="col-12 col-sm-6 wow slideInRight">
								<img class="im_zapato_kids_5" src="{{ asset('img/kids/kids_zapatito5.png') }}" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>

<div class="row m-t-150-n align-items-center">
	<div class="col-12 col-sm-7">
		<div class="wrap_cat_kids">
			<div class="texto_cat_kids alienado_derecha">
				<h1>
					Categorías <br>
					<span>
						KIDS
					</span>
					
				</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-5">
		<div class="btn_catalogo_kids">
			CATÁLOGO
		</div>
	</div>
	<div class="col-12">
		<div class="centro_kids">
			<div class="row justify-content-center m-b-50">
				<div class="col-12 col-sm-8">
					<div class="row justify-content-between">
						@foreach ($kids as $kid)
							<div class="col-11 col-sm-5">
								<div class="wrap_catalogo_kids">
									<a href=" {{ route('catalogo' , $kid->id) }} ">
										<img class='imagen_catalogo_kids' src="{{ asset( $kid->imagen ) }}" alt="">
									</a>
								</div>
								<div class="m-t-20 alienado_centro">
									<a class='titulo_kids_cata' href=" {{ route('catalogo' , $kid->id) }}"> {{ $kid->nombre }} </a>
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
    <script src="{{ asset('js/360_kids.js') }}"></script>
@endpush