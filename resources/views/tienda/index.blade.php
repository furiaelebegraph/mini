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
                <div class="col-md-12 col-xs-12 col-centered">
                    <div class="col-xs-12 col-centered">
                        <div class="row">
                            <div class="col-xs-6 col-centered">
                                <form  method = 'get' action = '{{url("/home")}}'>
                                    <button class="button-two" type = 'submit'><span class="texto_blanco">ADMIN</span></button>
                                </form>
                            </div>
                            <div class="col-xs-6 col-centered">
                                <form class = 'col s3' method = 'get' action = '{!!url("tienda")!!}/create'>
                                    <div class="sub-main">
                                      <button class="button-two" type = 'submit'><span class="texto_blanco">Crear nuevo tienda</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">                            
                            <table class="table table-striped">

                                <thead>
                                    <tr>
                                        <td>tienda</td>
                                        <td>Coordenada 1</td>
                                        <td>Coordenada 2</td>
                                        <td>Descripcion</td>
                                        <td>BORRAR</td>
                                        <td>EDITAR</td>
                                        <td>INFO</td>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($tiendas as $tienda) 
                                    <tr>
                                        <td> 
                                            {{$tienda->nombre}}
                                        </td>
                                        <td>
                                            {{$tienda->Lat}}
                                        </td>
                                        <td>
                                            {{$tienda->Lng}}
                                        </td>
                                        <td> 
                                            {!!$tienda->direccion!!}
                                        </td>
                                        <td>
                                            <form action="{{ route('tienda.destroy', ['id' => $tienda->id]) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                                </div>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('tienda.edit', $tienda->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/tienda/{!!$tienda->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                                        </td>
                                        <td>
                                            <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/tienda/{!!$tienda->id!!}'><i class = 'material-icons'>info</i></a>
                                        </td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {!! $tiendas->links() !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection