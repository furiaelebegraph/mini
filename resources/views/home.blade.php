@extends('layouts.admin')

@section('contenido')
    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('/') }}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">My Dashboard</li>
        </ol>

        <!-- Icon Cards -->
        <div class="row">
          <div class="col-12 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">
                  {{$categorias->count()}} Categorias <br>
                </div>
              </div>
              <a href="{{url('categoria')}}" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Ver todas las Categorias</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
                <a href="{{route('categoria.create')}}" class="card-footer text-white clearfix small z-1">
                    <span class="float-left">NUEVA Categoria</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
          </div>
          <div class="col-12 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-list"></i>
                </div>
                <div class="mr-5">
                  {{$subcategorias->count()}} SubCategorias
                </div>
              </div>
              <a href="{{url('subcategoria')}}" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Ver todas las SubCategorias</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
                <a href="{{route('subcategoria.create')}}" class="card-footer text-white clearfix small z-1">
                    <span class="float-left">NUEVA SubCategoria</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
          </div>

          <div class="col-12 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-list"></i>
                </div>
                <div class="mr-5">
                  {{$tallas->count()}} Tallas
                </div>
              </div>
              <a href="{{url('talla')}}" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Ver todas las Tallas</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
                <a href="{{route('talla.create')}}" class="card-footer text-white clearfix small z-1">
                    <span class="float-left">NUEVA Talla</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
          </div>

          <div class="col-12 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-list"></i>
                </div>
                <div class="mr-5">
                  {{$colores->count()}} Colores
                </div>
              </div>
              <a href="{{url('color')}}" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Ver todas los Colores</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
                <a href="{{route('color.create')}}" class="card-footer text-white clearfix small z-1">
                    <span class="float-left">NUEVA Colores</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
          </div>
          <div class="col-12 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">
                  {{$productos->count()}} Productos
                </div>
              </div>
                <a href="{{url('producto')}}" class="card-footer text-white clearfix small z-1">
                    <span class="float-left">Ver todas los Productos</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
                <a href="{{route('producto.create')}}" class="card-footer text-white clearfix small z-1">
                    <span class="float-left">NUEVO Producto</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
          </div>
          <div class="col-12 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-list"></i>
                </div>
                <div class="mr-5">
                  {{$tiendas->count()}} Tiendas
                </div>
              </div>
              <a href="{{url('tienda')}}" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Ver todas las Tiendas</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
                <a href="{{route('tienda.create')}}" class="card-footer text-white clearfix small z-1">
                    <span class="float-left">NUEVA Tienda</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
          </div>
          <div class="col-12 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-list"></i>
                </div>
                <div class="mr-5">
                  {{$noticias->count()}} BLOG
                </div>
              </div>
              <a href="{{url('noticia')}}" class="card-footer text-white clearfix small z-1">
                <span class="float-left">Ver todas las Entradas</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
                <a href="{{route('noticia.create')}}" class="card-footer text-white clearfix small z-1">
                    <span class="float-left">NUEVA Entrada</span>
                    <span class="float-right">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </a>
            </div>
          </div>
        </div>


          <div class="col-lg-12">

            <!-- Card Columns Example Social Feed -->
            <div class="mb-0 mt-4">
              <i class="fa fa-newspaper-o"></i>
              Ultimos elementos creados</div>
            <hr class="mt-2">
            <div class="card-columns">

              <!-- Example Social Card -->
              <div class="card mb-3">
                
                @foreach($ultimoproductos as $ultimoproducto)
                    <a href="/producto/{!!$ultimoproducto->id!!}">
                        <img class="card-img-top img-fluid w-100"  src="{{$ultimoproducto->imagen}}" alt="">
                    </a>
                    <div class="card-body">
                      <h6 class="card-title mb-1">
                        <a href="/producto/{!!$ultimoproducto->id!!}">{{$ultimoproducto->nombre}}</a>
                      </h6>
                      <p class="card-text small">These waves are looking pretty good today!
                        <a href="#">#surfsup</a>
                      </p>
                    </div>
                    <hr class="my-0">
                    <div class="card-body py-2 small">
                      <a class="mr-3 d-inline-block" href="/producto/{!!$ultimoproducto->id!!}/edit">
                        <i class="fa fa-fw fa-edit"></i>
                        Editar
                      </a>
                      <a class="mr-3 d-inline-block" href="/producto/{!!$ultimoproducto->id!!}/delete">
                        <i class="fa fa-fw fa-times"></i>
                        Eliminar
                      </a>
                    </div>
                    <div class="card-footer small text-muted">
                      Creado {{$ultimoproducto->created_at->toFormattedDateString()}}
                    </div>
                @endforeach
              </div>

              <!-- Example Social Card -->
              <div class="card mb-3">


                @foreach($ultimacates as $ultimacate)
                    <a href="/categoria/{!!$ultimacate->id!!}">
                        <img class="card-img-top img-fluid w-100"  src="{{$ultimacate->imagen}}" alt="">
                    </a>
                    <div class="card-body">
                      <h6 class="card-title mb-1">
                        <a href="/categoria/{!!$ultimacate->id!!}">{{$ultimacate->nombre}}</a>
                      </h6>
                      <p class="card-text small">These waves are looking pretty good today!
                        <a href="#">#surfsup</a>
                      </p>
                    </div>
                    <hr class="my-0">
                    <div class="card-body py-2 small">
                      <a class="mr-3 d-inline-block" href="/categoria/{!!$ultimacate->id!!}/edit">
                        <i class="fa fa-fw fa-edit"></i>
                        Editar
                      </a>
                      <a class="mr-3 d-inline-block" href="/categoria/{!!$ultimacate->id!!}/delete">
                        <i class="fa fa-fw fa-times"></i>
                        Eliminar
                      </a>
                    </div>
                    <div class="card-footer small text-muted">
                      Creado {{$ultimacate->created_at->toFormattedDateString()}}
                    </div>
                @endforeach

              </div>

            </div>
            <!-- /Card Columns -->

          </div>
        </div>

        <!-- Example Tables Card -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Data Table Example
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" id="dataTable">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Subcategoria</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Subcategoria</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                </tfoot>
                <tbody>
                    @foreach($prosdustos as $prosdusto)
                    <tr>
                        <td>{{$prosdusto->nombre}}</td>
                        <td><img class="w-100" src="{{asset($prosdusto ->imagen)}}" alt=""></td>
                        <td>{{$prosdusto->subcate->nombre}}</td>
                        <td>
                          <a href="{{ route('producto.edit', $prosdusto->id) }}" class = 'viewEdit btn btn-primary btn-xs'><i class = 'material-icons'>edit</i>
                        </td>
                        <td>
                          <form action="{{ route('producto.destroy', ['id' => $prosdusto->id]) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div class="form-group">
                              <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                            </div>
                          </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
@endsection
