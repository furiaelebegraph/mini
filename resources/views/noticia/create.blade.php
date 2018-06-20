@extends('layouts.admin')
    
@section('contenido')
    <div class="content-wrapper">
        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
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
                            <form method = 'get' action = '{!!url("noticia")!!}'>
                                <button class = 'btn btn-danger'>Ver todos las Noticias</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xs-12 col-md-8 col-centered">
                    <div class='titulo_seccion'>
                        Crear Producto
                    </div class='titulo_seccion'>
                </div>

                @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                <div class="col-xs-12 col-md-8 col-centered formularios">
                    <form method = 'POST' action = '{!!url("noticia")!!}' enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <meta name="_token" content="{!! csrf_token() !!}">
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input id="titulo" name = "titulo" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Noticia</label>
                            <textarea  id="cuerpo" name = "cuerpo" type="text" class="form-control""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input id="imagen" name = "imagen" type="file" class="form-control">
                        </div>
                        <div class="sub-main_crear">
                          <button class="button-two_crear" type = 'submit'><span class="texto_blanco">Crear</span></button>
                        </div>
                    </form>
                </div>


    
   
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
    <script>
      $('#cuerpo').summernote({
        placeholder: '...',
        tabsize: 2,
        height: 100
      });
    </script>




        </div>
    </div>
@endsection


