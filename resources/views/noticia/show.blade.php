@extends('layouts.admin')
@section('contenido')

<section class="content">
    <h1>
        Mostrar Noticia
    </h1>
    <br>
    <div class="row">
        <div class="col-xs-6 col-centered">
            <form  method = 'get' action = '{{url("/admincnec/dashboard")}}'>
                <button class="button-two" type = 'submit'><span class="texto_blanco">ADMIN DASHBOARD</span></button>
            </form>
        </div>
        <div class="col-xs-6 col-centered">
            <form method = 'get' action = '{!!url("noticia")!!}'>
                <button class = 'btn btn-primary'>Noticia index</button>
            </form>
        </div>  
    </div>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>titulo : </i></b>
                </td>
                <td>{!!$noticia->titulo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>subtitulo : </i></b>
                </td>
                <td>{!!$noticia->subtitulo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>cuerpo : </i></b>
                </td>
                <td>{!!$noticia->cuerpo!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection