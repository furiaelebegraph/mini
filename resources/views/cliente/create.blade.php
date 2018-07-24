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
                            <form method = 'get' action = '{!!url("cliente")!!}'>
                                <button class = 'btn btn-danger'>Ver todos las clientees</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-md-8 col-centered">
                    <div class='titulo_seccion'>
                        Crear cliente
                    </div class='titulo_seccion'>
                </div>
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                <div class="col-xs-12 col-md-8 col-centered formularios">
                    <form method = 'POST' action = '{!!url("cliente")!!}' enctype="multipart/form-data">
                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                        <div class="form-group">
                            <label for="nombre">cliente</label>
                            <input id="nombre" name = "cliente" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input id="imagen" name = "img" type="file" class="form-control">
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