@extends('layouts.template')

@section('content')
	
<style>
    #map {
        height: 500px;
        width: 100%;
      }
    .nombre_tienda_contacto{
        font-size: 18px;
    }
</style>

	<div class="row m-t-200">
		<div class="col-12">
			<div class="centro_baby">
				<div class="row justify-content-center align-items-center">
                    <div class="col-10 alienado_centro m-b-30">
                        <h1 class='titulo_generico_mini'>CONTACTO</h1>
                    </div>
                    <div class="col-10 alienado_centro m-b-30">
                      <p>¿Te interesa vender nuestros producto?, déjanos tus datos para contactarte.</p>
                    </div>
					<div class="col-10">

						<form action="{{ url('enviar_correo') }}" method="post">

                                <div class="form-row">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group col-11 col-md-6">
                                        <input type="text" name='nombre' class="form-control" id="exampleInputText" aria-describedby="nombreHelp" placeholder="Nombre">
                                        @if ($errors->has('nombre')) <p class="help-block">{{ $errors->first('nombre') }}</p> @endif
                                    </div>
                                    <div class="form-group col-11 col-md-6">
                                        <input type="email" name='correo' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                                        @if ($errors->has('correo')) <p class="help-block">{{ $errors->first('correo') }}</p> @endif
                                    </div>
                                    <div class="form-group col-11 col-md-6">
                                        <input type="text" name='asunto' class="form-control" id="exampleInputText" aria-describedby="companiaHelp" placeholder="Asunto">
                                        @if ($errors->has('asunto')) <p class="help-block">{{ $errors->first('asunto') }}</p> @endif
                                    </div>
                                    <div class="form-group col-11 col-md-6">
                                        <input type="text" name='telefono' class="form-control" id="exampleInputEmail1" aria-describedby="telefonoHelp" placeholder="Teléfono">
                                        @if ($errors->has('telefono')) <p class="help-block">{{ $errors->first('telefono') }}</p> @endif
                                    </div>
                                    <div class="form-group col-11 col-md-12">
                                        <textarea class="form-control" name='mensaje' id="exampleTextarea" rows="3" placeholder="Mensaje"></textarea>
                                        @if ($errors->has('mensaje')) <p class="help-block">{{ $errors->first('mensaje') }}</p> @endif
                                    </div>                                    
                                    <div class="form-group col-11 col-md-12">
                                        <input type="checkbox" id="subscribeNews" name="distribuidor" value="distribuidor">
                                        <label for="subscribeNews">Quiero ser distribuidor.</label>
                                       
                                    </div>
                                    <div class="form-group col-12 alineado_centro">
                                        <button type="submit" class="btn_submit_mini texto_bold centrado">ENVIAR</button>
                                    </div>

                                </div>
						</form>
						
					</div>
				</div>
			</div>
            <div class="row m-t-50">

                <div class="col-12">
                    <div id="map"></div>
                </div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-11 col-sm-4">
                            <div class="titulo_tienda"></div>
                            <div class="direccion_tienda"></div>
                            <div class="telefono"></div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>

 <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: new google.maps.LatLng(21.132455, -101.681463),
          mapTypeId: 'roadmap'
        });

        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var icons = {
          parking: {
            icon: iconBase + 'parking_lot_maps.png'
          },
          library: {
            icon: iconBase + 'library_maps.png'
          },
          info: {
            icon: 'http://elebeweb.com/info-i_maps.png'
          }
        };
        var features = [
        @foreach ($tiendas as $tienda)

           {
            position: new google.maps.LatLng({{$tienda->Lat}}, {{$tienda->Lng}}),
            type: 'info',
            contentString : '<h3 class="nombre_tienda_contacto">{{$tienda->nombre}}</h3>'+"<p> {!! strip_tags($tienda->direccion) !!} </p>"+"<p> {!! strip_tags($tienda->telefono) !!} </p>",
            title: "{!!$tienda->nombre!!}"
          },
        @endforeach
          
        ];

        // Create markers.
        features.forEach(function(feature) {

            var infowindow = new google.maps.InfoWindow({
              content: '<div style="width: 200px;">'+ feature.contentString+'</div>'
            });

          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            title: feature.title,
            map: map
          });


          marker.addListener('click', function() {
              infowindow.open(map, marker);
            });
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqVyEX6rstAjjJho9mTlvTVm6z_StPOSI&callback=initMap">
    </script>
@endsection