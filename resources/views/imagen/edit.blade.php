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
        <section class="contenedor">
            <section class="row row-centered">
                <div class="col-md-8 col-xs-12 col-centered">
                    <div class="row">
                        <div class="col-xs-6 col-centered">
                            <form  method = 'get' action = '{{url("/home")}}'>
                                <button class="button-two" type = 'submit'><span class="texto_blanco">DASHBOARD</span></button>
                            </form>
                        </div>
                        <div class="col-xs-6 col-centered">
                            <form method = 'get' action = '{!!url("imagen")!!}'>
                                <button class = 'btn btn-danger'>Ver todos las Imagenes</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
                    <div class="col-xs-12 col-md-8 col-centered">
                        <div class='titulo_seccion'>
                            Crear Album
                        </div class='titulo_seccion'>
                    </div>
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                    <div class="col-xs-12 col-md-8 col-centered formularios">
                        <form method = 'POST' action = '{!! url("imagen")!!}/{!!$imagen->
                            id!!}/update'> 
                            <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                            <input type = 'hidden' name = 'id_producto' value="{!!$imagen->produ_id!!}">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" name = "nombre" type="text" class="form-control" value="{!!$imagen->nombre!!}"> 
                            </div>
                            <div class="form-group">
                                <label for="imagen">imagen</label>
                                <img class="ancho_imagen_adminis" src="{!! asset($imagen->imagen)!!}" alt="">
                                <input id="imagen" name = "imagen" type="file" class="form-control" value="{!!$imagen->imagen!!}"> 
                            </div>
                            <div class="form-group">
                                <label for="orden">Orden</label>
                                <input id="orden" name = "orden" type="text" class="form-control" value="{!!$imagen->orden!!}"> 
                            </div>
                            <div class="form-group">
                                <label for="orden">Activo</label>
                                <select class="form-control"  name="activo">
                                    <option selected="selected" value="{{$imagen->activo}}">{{$imagen->activo}}</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <button class = 'btn btn-primary' type ='submit'>Update</button>
                        </form>
 </div>

            </section>  
        </section>
    </div>
</div>
@endsection