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
                    <div class="col-xs-12 col-centered">
                        <div class="row">
                            <div class="col-xs-6 col-centered">
                                <form  method = 'get' action = '{{url("/home")}}'>
                                    <button class="button-two" type = 'submit'><span class="texto_blanco">ADMIN</span></button>
                                </form>
                            </div>
                            <div class="col-xs-6 col-centered">
                                <form class = 'col s3' method = 'get' action = '{!!url("noticia")!!}/create'>
                                    <div class="sub-main">
                                      <button class="button-two" type = 'submit'><span class="texto_blanco">Crear Nueva Blog</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @if (Session::has('mensaje'))
                       <div class="col-10 col-md-8 alert alert-info alineado_centro">{{ Session::get('mensaje') }}</div>
                    @endif
                      <div class="col-md-12 col-centered">
                        <div class="table-responsive">
                            <table class='table table-striped' cellpadding="10">
                                <thead>
                                    <tr>
                                        <td>TITULO</td>
                                        <td>SUBTITULO</td>
                                        <td>IMAGEN</td>
                                        <td>BORRAR</td>
                                        <td>EDITAR</td>
                                        <td>INFO</td>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($noticias as $noticia) 
                                    <tr>
                                        <td>
                                            {!!$noticia->titulo!!}
                                        </td>
                                        <td>{{substr(strip_tags($noticia->cuerpo),0,50)}}{{strlen(strip_tags($noticia->cuerpo)) > 50 ? "...":""}}
                                        </td>
                                        <td>
                                            <img class='largo_imagenes' src="{{url($noticia->imagen)}}" alt="">
                                        </td>
                                        <td>
                                            <form action="{{ route('noticia.destroy', ['id' => $noticia->id]) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('noticia.edit', $noticia->id) }}" class = 'viewEdit noticia btn-primary btn-xs' data-link = '/noticia/{!!$noticia->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                                        </td>
                                        <td>
                                            <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/noticia/{!!$noticia->id!!}'><i class = 'material-icons'>info</i></a>
                                        </td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>    
                        </div>    
                    </div>
                    {!! $noticias->links() !!}
                </div>

            </div>
    </div>
</div>
@endsection