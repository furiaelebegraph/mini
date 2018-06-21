<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Somos la empresa lider en calzado infantil. Tenemos el mejor surtido en zapatos escolares, zapatitos de bebe y zapatos de moda para niños">
    <meta name="robots" content="index,follow">
    <meta name="keywords" content="empresa lider en calzado infantil, venta de calzado infantil de piel, zapatos infantiles, zapatos de moda para niños, zapatos comodos para niños, zapatos resistentes para niños, zapatitos de bebe, zapatos escolares, venta de zapatos antiderrapantes para niños, zapatos para niños primeros pasos">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Miniburbujas') }}</title>

    <!-- Styles -->
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

    <link href="{{ asset('css/threesixty.css')}}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/helpers.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}"  rel="stylesheet">
    @yield('cssgaleria')
    <link href="{{ asset('css/general.css') }}"  rel="stylesheet">
</head>
<body>

	<div id="navegacion_miniburbuajas">
		<div class="cambio_fondo fondo_change">
			<div>
				
			</div>
		</div>
			<div class="row justify-content-center align-items-center opciones_submenu">
				<div class="col-12 alienado_centro">
					<div class="cerrar_navega"> CERRAR </div>
					
				</div>
				<div class="col-12">
					<div class="centro_baby">
						<div class="row justify-content-center align-items-center">
							<div class="col-7 col-sm-5 baby_navega margen_menu alienado_centro">
								<div>
									<a href="{{ url('baby') }}">
										<img class='icono_navegacion_menu' src="{{ asset('img/logo_baby_footer.svg') }}" alt="">
									</a>
								</div>
							</div>
							<div class="col-7 col-sm-5 primeros_navega margen_menu alienado_centro">
								<div>
									<a href="{{ url('primeros') }}">
										<img class='icono_navegacion_menu' src="{{ asset('img/logo_1eros_footer.svg') }}" alt="">
									</a>
								</div>
							</div>
							<div class="col-7 col-sm-5 kids_navega margen_menu alienado_centro">
								<div>
									<a href="{{ url('kids') }}">
										<img class='icono_navegacion_menu' src="{{ asset('img/logo_kids_footer.svg') }}" alt="">
									</a>
								</div>
							</div>

							<div class="col-7 col-sm-5 juvenil_navega margen_menu alienado_centro">
								<div> 
									<a href="{{ url('juvenil') }}">
										<img class='icono_navegacion_menu' src="{{ asset('img/logo_junior_footer.svg') }}" alt="">
									</a>
								</div>
							</div>

							<div class="col-7 col-sm-5 alienado_centro">
								<div> <a href="{{ url('acerca') }}"><img class="icono_navegacion_menu" src="{{ asset('img/logo_blanco_mini.svg') }}" alt=""></a></div>
							</div>
							<div class="col-7 col-sm-5 alienado_centro">
								<div> <a href="{{ url('noticias') }}"><img class="icono_navegacion_menu" src="{{ asset('img/logo_blog.png') }}" alt=""></a></div>
							</div>
							<div class="col-7 col-sm-5">
								<div class="contacto_link"> <a href="{{ url('contacto') }}">CONTACTO</a></div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
	</div>
	<nav class="navbar-default navbar-static-top navegador_movil ">
		<div class="row align-items-center m-t-10">
			<div class="col-2 col-md-4 align-self-center">
				<div class="hamburguesita">
					<div id="nav-icon" class='nav-iconos'>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
			<div class="col-5 col-md-4 alienado_centro align-self-center">
				<div class="d-flex justify-content-center align-items-center">			
					<div class="logo_veinticinco icono_veinticinco">
						<a href="{{ route('acerca')}}">
							<img src="http://elebeweb.com/test/mini/img/25aniv2.png" alt="">
						</a>
					</div>
					<div class="logo_header alienado_centro">
						<a href="{{ url('/') }}">
							<img src="{{ asset('img/logo_mini.png') }}" alt="">
						</a>
					</div>
					
				</div>
			</div>
			<div class="col-4 alienado_centro align-self-center">
				<div class="d-flex justify-content-center">
					<div class="sociales_header">
						<div class="icono_social">
							<a target='_blank' href="https://www.facebook.com/miniburbujas/">
								<img src="{{ asset('img/ico_face.svg') }}" alt="">
							</a>
						</div>
					</div>
					<div class="sociales_header">
						<div class="icono_social">
							<a target='_blank' href="https://www.instagram.com/miniburbujas/">
								<img src="{{ asset('img/ico_instagram.svg') }}" alt="">
							</a>
						</div>
					</div>
					<div class="sociales_header">
						<div class="icono_social">
							<a target='_blank' href="https://www.youtube.com/channel/UCkVpFMUB7vrmaJ1TxlPEmZQ">
								<img src="{{ asset('img/ico_youtube.svg') }}" alt="">
							</a>
						</div>
					</div>
					<div class="sociales_header">
						<div class="icono_social">
							<a target='_blank' href="https://twitter.com/MiniBurbujas">
								<img src="{{ asset('img/ico_twitter_2.svg') }}" alt="">
							</a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</nav>

	@yield('content')

	<div class="row acerca_footer">
		<div class="col-12">
			<div class="footer alienado_centro">
				<div class="acerca_footer">
					<a href="{{ url('acerca') }}">ACERCA DE NOSOTROS</a>
				</div>
				<div class="nuestro_productos_footer">
					<div class="texto_bold">NUESTROS PRODUCTOS</div>
					<div class="iconos_productos_fotoer">
						<div class="icono_footer">
							<a href="{{ url('baby') }}">
								<img src="{{ asset('img/logo_baby_footer.svg') }}" alt="">
							</a>
						</div>
						<div class="icono_footer">
							<a href="{{ url('primeros') }}">
								<img src="{{ asset('img/logo_1eros_footer.svg') }}" alt="">
							</a>
						</div>
						<div class="icono_footer">
							<a href="{{ url('kids') }}">
								<img src="{{ asset('img/logo_kids_footer.svg') }}" alt="">
							</a>
						</div>
						<div class="icono_footer">
							<a href="{{ url('juvenil') }}">
								<img src="{{ asset('img/logo_junior_footer.svg') }}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="contacto_footer m-b-10">
					<p class='texto_bold'> <a class="contacto_footer_link" href="{{ url('contacto') }} ">CONTACTO</a> </p>
					<a href="tel:+524777717373" class="texto_bold">
					    T. ( 477 ) 7717373
					</a>
					<div class='texto_bold'>
						correo electrónico: <br>
						hola@miniburbujas.mx
					</div>
				</div>
				<div class="contacto_fondo">
					<a href="{{ url('catalogo') }}">
						CATÁLOGO
					</a> 
				</div>
				<div class="redes_sociales_footer m-b-10">

					<div>
						<a href="https://www.facebook.com/miniburbujas/">
							<img src="{{ asset('img/icono_face_landing.svg') }}" alt="">
						</a>
					</div>
					<div>
						<a href="https://www.instagram.com/miniburbujas/">
							<img src="{{ asset('img/ico_instagram_blanco.svg') }}" alt="">
						</a>
					</div>
					<div>
						<a href="https://www.youtube.com/channel/UCkVpFMUB7vrmaJ1TxlPEmZQ">
							<img src="{{ asset('img/ico_youtube_blanco.svg') }}" alt="">
						</a>
					</div>
					<div>
						<a href="https://twitter.com/MiniBurbujas">
							<img src="{{ asset('img/icono_twitter.svg') }}" alt="">
						</a>
					</div>
				</div>
				<div class="footer_institucional p-b-50">
					<div class="marca texto_bold">
						Mini Burbujas®
					</div>
					<div class="aviso_privacidad">
						<a href="{{ url('aviso-privacidad') }}">Aviso de privacidad</a>
					</div>
					<div class="derechos texto_bold">
						2018 Mini Burbujas, Todos los derechos reservados.
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Scripts -->
		<script src="{{ asset('js/jquery.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="{{ asset('js/anime.js') }}"></script>
         <script src="{{ asset('js/wow.min.js') }} "></script>
         @stack('jsgaleria')
         @stack('js360')
        <script src="{{ asset('js/general.js') }}"></script>
</body>
</html>
        
