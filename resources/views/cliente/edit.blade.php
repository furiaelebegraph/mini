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
          <div class="col-12 mb-12">
                    <h1>
                        Editar cliente
                    </h1>
                    <form method = 'get' action = '{!!url("cliente")!!}'>
                        <button class = 'btn btn-danger'>Ver clientes</button>
                    </form>
                    <br>
                    <form method = 'POST' action = '{!! url("cliente")!!}/{!!$cliente->
                        id!!}/update' enctype="multipart/form-data"> 
                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                        <div class="form-group">
                            <label for="nombre">cliente</label>
                            <input id="nombre" name = "cliente" type="text" class="form-control" value="{!!$cliente->cliente!!}">
                        </div>
                        <div class="form-group">
                            <label for="imagen">imagen</label>
                            <img src="{!! asset($cliente->img)!!}" alt="">
                            <input id="imagen" name = "img" type="file" class="form-control" value="{!!$cliente->img!!}"> 
                        </div>
                        <button class = 'btn btn-primary' type ='submit'>Update</button>
                    </form>
            </div>
        </div>
    </div>
@endsection