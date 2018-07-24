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
                <div class="col-12 col-centered">
                    <div class="row justify-content-center align-items-center">
                        
                            <div class="col-6 col-centered">
                                <form  method = 'get' action = '{{url("/home")}}'>
                                    <button class="button-two" type = 'submit'><span class="texto_blanco">ADMIN</span></button>
                                </form>
                            </div>
                            <div class="col-6 col-centered">
                                <form class = 'col s3' method = 'get' action = '{!!url("cliente")!!}/create'>
                                    <div class="sub-main">
                                      <button class="button-two" type = 'submit'><span class="texto_blanco">Crear Nuevo Cliente</span></button>
                                    </div>
                                </form>
                            </div>
             
                    </div>
                      <div class="col-md-12 col-centered">
                        <div class="table-responsive">
                            <table class='table table-striped' cellpadding="10">
                                <thead>
                                    <tr>
                                        <td>nombre</td>
                                        <td>Imagen</td>
                                        <td>BORRAR</td>
                                        <td>EDITAR</td>
                                        <td>INFO</td>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($clientes as $cliente) 
                                    <tr>
                                        <td>{!!$cliente->cliente!!}</td>
                                        <td> <img class='al_100' src="{{asset($cliente->img) }}" alt=""> 
                                        </td>
                                        <td>
                                            <form action="{{ route('cliente.destroy', ['id' => $cliente->id]) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('cliente.edit', $cliente->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/cliente/{!!$cliente->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                                        </td>
                                        <td>
                                            <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/cliente/{!!$cliente->id!!}'><i class = 'material-icons'>info</i></a>
                                        </td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>    
                        </div>    
                    </div>
                    {!! $clientes->links() !!}
                </div>

            </div>
    </div>
</div>
</section>
@endsection