@extends('layouts.admin')
@section('contenido')
    <div class="content-wrapper">

      <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li class='alert alert-danger'>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @if(Session::has('info'))
            <div class="alert alert-info">
                {{ Session::get('info') }}
            </div>
        @endif
        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">My Dashboard</li>
        </ol>

        <!-- Icon Cards -->
        <div class="row">
          <div class="col-12 mb-12">
                    <h1>
                        Editar Tienda
                    </h1>
                    <form method = 'get' action = '{!!url("tienda")!!}'>
                        <button class = 'btn btn-danger'>Ver Categorias</button>
                    </form>
                    <br>
                    <form method = 'POST' action = '{!! url("tienda")!!}/{!!$tienda->
                        id!!}/update'> 
                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input id="nombre" name = "nombre" type="text" value='{{$tienda->nombre}}' class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="latitud">Coordenada 1</label>
                            <input id="latitud" name = "latitud" type="text" value='{{$tienda->Lat}}' class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="longitud">Coordenada 2</label>
                            <input id="longitud" name = "longitud" type="text" value='{{$tienda->Lng}}' class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input id="telefono" name = "telefono" type="text" value='{{$tienda->telefono}}' class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="direccion">Descripcion</label>
                            <input  id="direccion" name = "direccion" type="text" class="form-control"  value='{!!$tienda->direccion!!}'>
                        </div>
                        <button class = 'btn btn-primary' type ='submit'>Update</button>
                    </form>

            </div>
        </div>
    </div>
@endsection