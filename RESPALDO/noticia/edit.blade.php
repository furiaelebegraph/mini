@extends('layouts.admin')
    <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea',plugins: "lists" });</script>
@section('contenido')

    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url("/home")}}">Dashboard</a>
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
                            <label for="empresa">Subtitulo</label>
                            <input id="subtitulo" name = "subtitulo" type="text" class="form-control" value="{!!$noticia->subtitulo!!}">
                        </div>
                        <div class="form-group">
                            <label for="empresa">Cuerpo</label>
                            <textarea id="subtitulo" name = "cuerpo" type="text" class="form-control" >{!!$noticia->cuerpo!!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="imagen"Imagen</label>
                            <img src="{{asset($noticia->imagen)}}" alt="">
                            <input id="imagen" name = "imagen" type="file" class="form-control">
                        </div>
                        <div class="sub-main_crear">
                          <button class="button-two_crear" type = 'submit'><span class="texto_blanco">Actualizar</span></button>
                        </div>
                    </form>
            </div>
        </div>
    </div>


@endsection