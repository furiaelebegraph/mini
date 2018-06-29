@extends('layouts.admin')
@section('contenido')
    <div class="content-wrapper">
        <div class="container-fluid">

            @if(Session::has('info'))
                <div class="alert alert-info">
                    {{ Session::get('info') }}
                </div>
            @endif
            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{url('/home')}}">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">My Dashboard</li>
            </ol>

        <!-- Icon Cards -->
            <div class="row">
                <div class="col-md-8 col-xs-12 col-centered">
                    <div class="row">
                        <div class="col-xs-6 col-centered">
                            <form  method = 'get' action = '{{url("/home")}}'>
                                <button class="button-two" type = 'submit'><span class="texto_blanco">DASHBOARD</span></button>
                            </form>
                        </div>
                        <div class="col-xs-6 col-centered">
                            <form method = 'get' action = '{!!url("tienda")!!}'>
                                <button class = 'btn btn-danger'>Ver todos los mapas</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-md-8 col-centered">
                    <div class='titulo_seccion'>
                        Crear Mapa tienda
                    </div class='titulo_seccion'>
                </div>

                @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                <div class="col-xs-12 col-md-8 col-centered formularios">
                    <form method = 'POST' action = '{!!url("tienda")!!}' enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <meta name="_token" content="{!! csrf_token() !!}">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input id="nombre" name = "nombre" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="latitud">Coordenada 1</label>
                            <input id="latitud" name = "latitud" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="longitud">Coordenada 2</label>
                            <input id="longitud" name = "longitud" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input id="telefono" name = "telefono" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <input  id="direccion" name = "direccion" type="text" class="form-control">
                        </div>
                        <div class="sub-main_crear">
                          <button class="button-two_crear" type = 'submit'><span class="texto_blanco">Crear</span></button>
                        </div>
                    </form>
                </div>

        </div>
    </div>
<script>


    $(document).ready(function() {
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
        })

        $('#photos').on('change', function(e){
            var cosa = e.target.value;
            console.log(cosa);
        });


        $('#cate').append(' Please choose one');
        $('#cate').on('change',function(e){
            var potato = e.target.value;
            console.log(potato);
            $.get('/ajaxSucate/'+ potato+'', function(data){

                $('#subcate').empty();
                $('#subcate').append('<option>Elije una opcion </option>');
                console.log(data);
                $.each(data, function(index, subcateObj){
                    $('#subcate').append('<option value="'+ subcateObj.id+'">'+ subcateObj.nombre +'</option>');
                });
            });
        });
    });
</script>
@endsection
