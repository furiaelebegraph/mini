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
          <div class="col-12 mb-12">
                <h1>
                    Editar Talla
                </h1>
                <form method = 'get' action = '{!!url("talla")!!}'>
                    <button class = 'btn btn-danger'>Ver Talla</button>
                </form>
                <br>
                <form method = 'POST' action = '{!! url("talla")!!}/{!!$talla->
                    id!!}/update'> 
                    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                    <div class="form-group">
                        <label for="numero">Nombre</label>
                        <input id="numero" name = "numero" type="text" class="form-control" value="{!!$talla->numero!!}"> 
                    </div>
                    <div class="form-group">
                        <label for="orden">Orden</label>
                        <input id="orden" name = "orden" type="text" class="form-control" value="{!!$talla->orden!!}">
                    </div>
                    <button class = 'btn btn-primary' type ='submit'>Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection