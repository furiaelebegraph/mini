@extends('layouts.template')

@section('content')


<div class="escondido">
	<div class="row">
		<div class="col-12 fondo_nube">
			<div class="centro_baby m-t-80">
				<div class="row m-t-70 ">
					<div class="col-12 alienado_centro">
						<img class="logo_baby"  src="{{ asset('img/logo_baby.svg') }}" alt="">
					</div>
					<div class="col-12 fondo_hojas">
						<div class="row">
							<div class="col-12 col-md-6 order-2 order-sm-1 ">
								<div class="zapatito_baby_1">
									<img src="{{ asset('img//baby/zapatito_baby_1.png') }}" alt="">
								</div>
							</div>
							<div class="col-12 col-md-6 order-1 order-sm-2 ">
								<div class="wrap_texto_1">
									<div class="titulo_baby_1">
										<p data-texto='HERMOSOS'>HERMOSOS</p>
										<p data-texto='MODA'><span data-texto='Y A LA'>Y A LA </span>  MODA</p>
									</div>
									<div class="texto_baby_1">
										<div class="texto_baby">
											<p>
												Para los más pequeños
												de la casa lo escencial es
												<span> la comodidad y permitir el 
												desarrollo 
												de su pie,</span>
												pero tambíen 
												verse hermosos
												y a la moda.

											</p>
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
	<div class="row">
		<div class="col-12">
			<div class="centro_baby">
				<div class="row align-items-center">
					<div class="col-12 col-sm-6">
						<div class="row">
							<div class="col-12 col-sm-6">
								<div class="titulo_baby_2">
									<p>CÓ</p>
									<p>MO</p>
									<p>DO</p>
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="texto_baby_2">
									<p>
										Utilizamos pieles tamboreadas muy suaves ideales para estar en contacto con el recién llegado.
									</p>
									<p>
										Forro y plantilla 
			natural de cerdo que permiten la transpiración del pie y disminuyen la humedad.
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6">
						<div class="fondo_pescaito">
							<img src="{{ asset('img/baby/zapatito_baby_2.png') }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="centro_baby">
				<div class="row align-items-center">
					<div class="col-12 col-sm-6">
						<div class="fondo_solishito">
							<img src="{{ asset('img/baby/zapatito_baby_3.png') }}" alt="">
						</div>
					</div>
					<div class="col-12 col-sm-6">
						<div class="texto_baby_3">
							<p>
								Materiales como
								piel y el TR ultraligero fueron seleccionados para asegurar una suela super cómoda.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-sm-6">
			<img src="{{ asset('img/baby/zapatito_baby_4.png') }}" alt="">
		</div>
		<div class="col-12 col-sm-6">
			<div class="">
				<p>DISEÑO</p>
				<p>ESPECTACULAR</p>
			</div>
		</div>
	</div>
</div>


@endsection