<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Somos la empresa lider en calzado infantil. Tenemos el mejor surtido en zapatos escolares, zapatitos de bebe y zapatos de moda para niños">
    <meta name="robots" content="index,follow">
    <meta name="keywords" content="empresa lider en calzado infantil, venta de calzado infantil de piel, zapatos infantiles, zapatos de moda para niños, zapatos comodos para niños, zapatos resistentes para niños, zapatitos de bebe, zapatos escolares, venta de zapatos antiderrapantes para niños, zapatos para niños primeros pasos">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/helpers.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/general.css') }}"  rel="stylesheet">
</head>
<body>

	<nav class="navbar-default navbar-static-top navegador_movil ">
		<div class="row align-items-center">
			<div class="col-4">
				<div class="hamburguesita">
					<div id="nav-icon" class='nav-iconos'>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="logo_header">
					<a href="{{ url('/') }}">
						<img src="{{ asset('img/logo_mini.png') }}" alt="">
					</a>
				</div>
			</div>
			<div class="col-4">
				<div class="sociales_header">
					<div class="icono_social">
						<a href="https://www.facebook.com/">
							<img src="{{ asset('img/ico_face.svg') }}" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</nav>
	@yield('content')

	<div class="row">
		<div class="col-12">
			<div class="footer">
				<div class="acerca_footer">
					<a href="{{ url('acerca') }}">ACERCA DE NOSOTROS</a>
				</div>
				<div class="nuestro_productos_footer">
					<div class="">NUESTROS PRODUCTOS</div>
					<div class="iconos_productos_fotoer">
						<div class="icono_footer">
							<a href="{{ url('baby') }}"></a>
							<img src="{{ asset('img/') }}" alt="">
						</div>
						<div class="icono_footer">
							<a href="{{ url('1eros') }}"></a>
							<img src="{{ asset('img/') }}" alt="">
						</div>
						<div class="icono_footer">
							<a href="{{ url('kids') }}"></a>
							<img src="{{ asset('img/') }}" alt="">
						</div>
						<div class="icono_footer">
							<a href="{{ url('junior') }}"></a>
							<img src="{{ asset('img/') }}" alt="">
						</div>
					</div>
				</div>
				<div class="contacto_footer">
					<p>contacto</p>
					<a href="tel:+524777717373" class="Blondie">
					    T. ( 477 ) 7717373
					</a>
					<div>
						correo electrónico:
						info@miniburbujas.mx
					</div>
				</div>
				<div class="redes_sociales_footer">
					<div>
						<a href="">
							<img src="{{ asset('img/') }}" alt="">
						</a>
					</div>
					<div>
						<a href="">
							<img src="{{ asset('img/') }}" alt="">
						</a>
					</div>
					<div>
						<a href="">
							<img src="{{ asset('img/') }}" alt="">
						</a>
					</div>
					<div>
						<a href="">
							<img src="{{ asset('img/') }}" alt="">
						</a>
					</div>
				</div>
				<div class="footer_institucional">
					<div class="marca">
						Miniburbujas®
					</div>
					<div class="aviso_privacidad">
						<a href="{{ url('terminosycondiciones') }}">Términos y condiciones</a>|
						<a href="{{ url('aviso_de_privacidad') }}">Aviso de privacidad</a>
					</div>
					<div class="derechos">
						2018 Miniburbujas, Todos los derechos reservados.
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Scripts -->
        <script src="{{ asset('js/anime.js') }}"></script>
        <script src="{{ asset('js/general.js') }}"></script>
</body>
</html>
        
