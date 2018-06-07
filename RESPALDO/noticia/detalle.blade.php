@extends('layouts.template')
@section('content')

<div class="escondido">
    <div class="row">
        <div class="col-12 gusano_universal_blog m-t-100">
            <div class="centro_baby textos_blog">
                <div class="row">
                    <div class="col-12 m-t-20">
                        <img class='w-100' src="{{ asset('img/blog_mini.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class='alienado_centro m-t-20 m-b-30'>
                            <h1>{!!$noticia->titulo!!}</h1>
                        </div>
                    </div>
                    <div class="col-12 m-b-20">
                        <div class="row justify-content-around">
                            <div class="col alienado_centro">
                                <a id='regresar_blog' href="{{ asset('/noticias') }}">
                                    <i  class="fas fa-chevron-left"></i>REGRESAR
                                </a>
                            </div>
                            <div class="col alienado_centro">
                                <span>{{ $noticia->created_at->toFormattedDateString() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <img class='w-100' src="{!!url($noticia->imagen)!!}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 m-t-30 m-b-70 cuerpo_blog">
                        {!!$noticia->cuerpo!!}
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>



@endsection