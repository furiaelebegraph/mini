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
          <div class="col-12 mb-12">
                    <h1>
                        Editar Noticia
                    </h1>
                    <form method = 'get' action = '{!!url("noticia")!!}'>
                        <button class = 'btn btn-danger'>Ver Todas las Noticias</button>
                    </form>
                    <br>
                    <form method = 'POST' action = "{!! url('noticia')!!}/{!!$noticia->id!!}/update" enctype="multipart/form-data">
                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                        <div class="form-group">
                            <label for="titulo">Titulo Noticia</label>
                            <input id="titulo" name = "titulo" type="text" class="form-control" value="{!!$noticia->titulo!!}">
                        </div>
                        <div class="form-group">
                            <label for="imagen"Imagen</label>
                            <img src="{{asset($noticia->imagen)}}" alt="">
                            <input id="imagen" name = "imagen" type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="empresa">Cuerpo</label>
                            <textarea id="cuerpo" name = "cuerpo" type="text" class="form-control" >{!!$noticia->cuerpo!!}</textarea>
                        </div>
                        <div class="sub-main_crear">
                          <button class="button-two_crear" type = 'submit'><span class="texto_blanco">Actualizar</span></button>
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
        height: 500
      });
    </script>
        </div>
    </div>

@endsection