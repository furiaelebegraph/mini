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
                        <div class="col-12 col-centered">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-6">
                                    <form  method = 'get' action = '{{url("/home")}}'>
                                        <button class="button-two" type = 'submit'><span class="texto_blanco">ADMIN</span></button>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <form class = 'col s3' method = 'get' action = '{!!url("categoria")!!}/create'>
                                        <div class="sub-main">
                                          <button class="button-two" type = 'submit'><span class="texto_blanco">Crear Nueva Categoria</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class='table table-striped'>
                                    <thead>
                                        <tr>
                                            <td>Categoria</td>
                                            <td>Subacategorias</td>
                                            <td>Imagen</td>
                                            <td>Orden</td>
                                            <td>BORRAR</td>
                                            <td>EDITAR</td>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($categorias as $categoria) 
                                        <tr>
                                            <td>{!!$categoria->nombre!!}</td>
                                            <td>
                                                @foreach($categoria->subcate as $subcategoria)
                                                    <div>
                                                        <div>{{$subcategoria->nombre}}</div>
                                                    </div>
                                                @endforeach
                                            </td>
                                            <td> 
                                                <img class='w-100' src="{!!$categoria->imagen!!}" alt=""> 
                                            </td>
                                            <td>
                                                {{$categoria->orden}}
                                            </td>
                                            <td>
                                                <form action="{{ route('categoria.destroy', ['id' => $categoria->id]) }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td>
                                                <a href="{{ route('categoria.edit', $categoria->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/categoria/{!!$categoria->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                                            </td>
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                </table>    
                            </div>    
                        </div>
                        {!! $categorias->links() !!}
                    </div>
                </div>

            </div>
    </div>
</div>
</section>
@endsection