@extends('layouts.template')

@section('content')

	<div class="escondido">
		<div class="row m-t-70 m-b-70 justify-content-center">
			<div class="col-12">
				<div class="centro_kids">
					<div class="row justify-content-between">
						<div class="col-12 alienado_centro">
							<div class="row justify-content-center align-items-start">
								<div class="col-9">
									<div class="regresar p-t-20 p-b-20">
										<a href="{{ url(strtolower ( $subcategoria->cate->url ))}}">
											<i class="fas fa-angle-left"></i> Regresar
										</a>
									</div>
									
								</div>
							</div>
							<h1 class='titulo_generico_mini'> {{ $subcategoria->nombre }}  </h1>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-12 col-sm-8">
							<div class="row justify-content-between">
								@foreach ($productos as $producto)
									<div class="col-11 col-sm-5 ">
										<div class="wrap_catalogo_kids">
											<a href=" {{ route('detalle' , $producto->id) }} ">
												<img class='imagen_catalogo_kids' src="{{ asset( $producto->imagen ) }}" alt="">
											</a>
										</div>
										<div class="m-t-20 alienado_centro">
											<a class='titulo_kids_cata' href=" {{ route('detalle' , $producto->id) }}"> {{ $producto->nombre }} </a>
										</div>
									</div>	
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection