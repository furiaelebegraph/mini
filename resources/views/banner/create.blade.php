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
        <section class="contenedor">
            <section class="row row-centered">
                <div class="col-md-8 col-xs-12 col-centered">
                    <div class="row">
                        <div class="col-xs-6 col-centered">
                            <form  method = 'get' action = '{{url("/home")}}'>
                                <button class="button-two" type = 'submit'><span class="texto_blanco">DASHBOARD</span></button>
                            </form>
                        </div>
                        <div class="col-xs-6 col-centered">
                            <form method = 'get' action = '{!!url("banner")!!}'>
                                <button class = 'btn btn-danger'>Ver todos las banneres</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-md-8 col-centered">
                    <div class='titulo_seccion'>
                        Crear Banner
                    </div class='titulo_seccion'>
                </div>
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                <div class="col-xs-12 col-md-8 col-centered formularios">
                    <form method = 'POST' action = '{!!url("banner")!!}' enctype="multipart/form-data">
                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                        <div class="form-group">
                            <label for="nombre">Nombre del Banner</label>
                            <input id="nombre" name = "nombre" type="text" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="url">URL Banner</label>
                            <input id="url" name = "url" type="text" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="imagen">Imagen Banner</label>
                            <input id="imagen" name = "imagen" type="file" class="form-control" value=""> 
                        </div>
                        <div class="sub-main_crear">
                          <button class="button-two_crear" type = 'submit'><span class="texto_blanco">Crear</span></button>
                        </div>
                    </form>
                </div>

            </section>  
        </section>
    </div>
</div>
@endsection