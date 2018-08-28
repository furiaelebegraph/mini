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
                                <form class = 'col s3' method = 'get' action = '{!!url("banner")!!}/create'>
                                    <div class="sub-main">
                                      <button class="button-two" type = 'submit'><span class="texto_blanco">Crear Nuevo Banner</span></button>
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
                                        <td>banner</td>
                                        <td>Imagen</td>
                                        <td>URL</td>
                                        <td>BORRAR</td>
                                        <td>EDITAR</td>
                                        <td>INFO</td>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($banneres as $banner) 
                                    <tr>
                                        <td>{!!$banner->nombre!!}</td>
                                        <td> <img class='al_100' src="{{asset($banner->imagen) }}" alt=""> 
                                        <td> <a target='_blank' href="{{$banner->url}}" class="btn btn-primary"> LINK </a>  
                                        </td>
                                        <td>
                                            <form action="{{ route('banner.destroy', ['id' => $banner->id]) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('banner.edit', $banner->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/banner/{!!$banner->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                                        </td>
                                        <td>
                                            <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/banner/{!!$banner->id!!}'><i class = 'material-icons'>info</i></a>
                                        </td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>    
                        </div>    
                    </div>
                    {!! $banneres->links() !!}
                </div>

            </div>
    </div>
</div>
</section>
@endsection