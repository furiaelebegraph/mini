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
                    <div class="col-xs-12 col-centered">
                        <div class="row">
                            <div class="col-xs-6 col-centered">
                                <form  method = 'get' action = '{{url("/home")}}'>
                                    <button class="button-two" type = 'submit'><span class="texto_blanco">ADMIN</span></button>
                                </form>
                            </div>
                            <div class="col-xs-6 col-centered">
                                <form class = 'col s3' method = 'get' action = '{!!url("imagen")!!}/create'>
                                    <div class="sub-main">
                                      <button class="button-two" type = 'submit'><span class="texto_blanco">Crear nuevo Imagen</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                      <div class="col-md-12 col-centered">
                        <div class="table-responsive">
                            <table class='table table-striped' cellpadding="10">
                                <thead>
                                    <tr>
                                        <td>Imagen</td>
                                        <td>Imagen</td>
                                        <td>Orden</td>
                                        <td>BORRAR</td>
                                        <td>EDITAR</td>
                                        <td>INFO</td>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($imagenes as $imagen) 
                                    <tr>
                                        <td>{!!$imagen->nombre!!}</td>
                                        <td>
                                            {{$imagen->produ->nombre}}
                                        </td>
                                        <td>
                                            {{$imagen->subcate->nombre}}
                                        </td>
                                        <td> <img class='al_100' src="{!!$imagen->imagen!!}" alt=""> 
                                        </td>
                                        <td>
                                            {{$imagen->orden}}
                                        </td>
                                        <td>
                                            <form action="{{ route('imagen.destroy', ['id' => $imagen->id]) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('imagen.edit', $imagen->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/imagen/{!!$imagen->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                                        </td>
                                        <td>
                                            <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/imagen/{!!$imagen->id!!}'><i class = 'material-icons'>info</i></a>
                                        </td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>    
                        </div>    
                    </div>
                    {!! $imagenes->links() !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection