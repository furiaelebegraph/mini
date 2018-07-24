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
                        Editar banner
                    </h1>
                    <form method = 'get' action = '{!!url("banner")!!}'>
                        <button class = 'btn btn-danger'>Ver banneres</button>
                    </form>
                    <br>
                    <form method = 'POST' action = '{!! url("banner")!!}/{!!$banner->
                        id!!}/update' enctype="multipart/form-data"> 
                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                        <div class="form-group">
                            <label for="nombre">Nombre del Banner</label>
                            <input id="nombre" name = "nombre" type="text" class="form-control" value="{!!$banner->nombre!!}">
                        </div>
                        <div class="form-group">
                            <label for="url">URL Banner</label>
                            <input id="url" name = "url" type="text" class="form-control" value="{!!$banner->url!!}">
                        </div>
                        <div class="form-group">
                            <label for="imagen">Imagen Banner</label>
                            <img src="{!! asset($banner->imagen)!!}" alt="">
                            <input id="imagen" name = "imagen" type="file" class="form-control" value="{!!$banner->imagen!!}"> 
                        </div>
                        <button class = 'btn btn-primary' type ='submit'>Update</button>
                    </form>
            </div>
        </div>
    </div>
@endsection