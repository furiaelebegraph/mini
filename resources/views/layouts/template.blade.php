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

    <!-- Scripts -->
        <script src="{{ asset('js/anime.js') }}"></script>
        <script src="{{ asset('js/general.js') }}"></script>
</body>
</html>
        
