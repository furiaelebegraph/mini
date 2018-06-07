@extends('layouts.template')
@section('content')

<div class="escondido">
    <div class="row">
        <div class="col-12 gusano_universal_blog  m-t-100">
            <div class="centro_baby">
                <div class="row">
                    <div class="col-12 m-t-20  m-b-30 wow zoomIn">
                        <img class='w-100' src="{{ asset('img/blog_mini.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @foreach($noticias as $noticia) 
                        <div data-wow-delay:"0.5" class="row justify-content-center m-b-30 wow slideInLeft">
                            <div class="col-11 col-md-6">
                                <img class='w-100' src="{{asset($noticia->imagen)}}" alt="">
                            </div>
                            <div class="col-11 col-md-6 textos_noticias">
                                <div class="row">
                                    <div class="col-12">
                                        <h2>{{$noticia->titulo}}</h2>
                                        <span>{{ $noticia->created_at->toFormattedDateString() }}</span>
                                    </div>
                                    <div class="col-12">
                                        <p>{{substr(strip_tags($noticia->cuerpo),0,100)}}{{strlen(strip_tags($noticia->cuerpo)) > 100 ? "...":""}}</p>
                                        <a href="detalle/{{$noticia->id}}">Ver mas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach 
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 m-t-30 m-b-20 alienado_centro">
                        {{ $noticias->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection