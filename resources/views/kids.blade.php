@extends('layouts.template')

@section('content')
	<div class="row m-t-70 fondo_ciudad">
		<div class="col-12 fondo_lombris_cosmica">
			<div class="row">
				<div class="col-12">
					<div class="kids_bloque_1">
						<div class="row">
							<div class="col-12 col-sm-6 alienado_centro">
								<img class='logo_kids_kids' src="{{ asset('img/logo_kids.svg') }}" alt="">
							</div>
							<div class="col-12 col-sm-6">
								<img src="{{ asset('img/kids/kids_zapatito1.png') }}" alt="">
								<p>
									Tus bebés ahora ya son grandes, andan de arriba para abajo, hasta van a la escuela y  se divierten a lo grande.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="col-12 col-sm-6">
							<img src="{{ asset('img/kids/kids_zapatito2.png') }}" alt="">
						</div>
						<div class="col-12 col-sm-6">
							<div class="titulo_kids color_azul_kids">
								<h2>Listos para la aventura</h2>
							</div>
							<div class="texto_kids azul_fuerte">
								<p>
									
		Nuestras líneas estan especialmente diseñadas para los niños más independientes,es esta etapa nuestro calzado cuenta con el
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
	<div class="row">
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-6">
					<div class="titulo_kids color_verde">
						<h2>Diseñados para ellos</h2>
					</div>
					<div class="texto_kids rosa_fuerte">
						Ahora ellos tienen sus gustos y están formando su identidad, 
por lo que nuestros diseños son llamativos y divertidos, para que sean felices con sus nuevos zapatos.

					</div>
				</div>
				<div class="col-12 col-sm-6">
					<img class='zapato_giante_kids' src="{{ asset('img/kids/kids_zapatito3.png') }}" alt="">
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-6">
					<img src="{{ asset('img/kids/kids_zapatito4.png') }}" alt="">
				</div>
				<div class="col-12 col-sm-6">
					<div class="texto_kids.color_naranja">
						Y para que le duren hasta que ya no lo queden, utilizamos los mejores materiales naturales y sintéticos.
					</div>
				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-12 col-sm-6">
					<div class="texto_kids color_morado">
						Y como olvidar esas ocasiones especiales en que deben verse a la altura de <span>cualquier ceremonia.</span>
					</div>
				</div>
				<div class="col-12 col-sm-6">
					<img src="{{ asset('img/kids/kids_zapatito5.png') }}" alt="">
				</div>
			</div>
		</div>
	</div>


@endsection