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
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 col-centered">
                                    <form  method = 'get' action = '{{url("/home")}}'>
                                        <button class="btn btn-primary" type = 'submit'><span class="texto_blanco">DASHBOARD</span></button>
                                    </form>
                                </div>
                                <div class="col-6 col-centered">
                                    <form class = 'col s3' method = 'get' action = '{!!url("subcategoria")!!}/create'>
                                        <div class="sub-main">
                                          <button class="btn btn-danger" type = 'submit'><span class="texto_blanco">Crear Nueva Sub Categoria</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class='table table-striped'>
                                    <thead>
                                        <tr>
                                            <td>Subacategorias</td>
                                            <td>categoria</td>
                                            <td>Imagen</td>
                                            <td>Orden</td>
                                            <td>BORRAR</td>
                                            <td>EDITAR</td>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($subcategorias as $subcategoria) 
                                        <tr>
                                            <td>{!!$subcategoria->nombre!!}</td>
                                            <td>
                                                {{$subcategoria->cate->nombre}}
                                            </td>
                                            <td> <img class='w-100' src="{!!$subcategoria->imagen!!}" alt=""> 
                                            </td>
                                            <td>
                                                {{$subcategoria->orden}}
                                            </td>
                                            <td>
                                                <form action="{{ route('subcategoria.destroy', ['id' => $subcategoria->id]) }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                                    </div>
                                                </form>
                                            </td>
                                            <td>
                                                <a href="{{ route('subcategoria.edit', $subcategoria->id) }}" class = 'viewEdit btn btn-primary btn-xs' data-link = '/subcategoria/{!!$subcategoria->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                                            </td>
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                </table>    
                            </div>    
                        </div>
                        {!! $subcategorias->links() !!}
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection