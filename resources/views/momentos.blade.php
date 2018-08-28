@extends('layouts.template')

@section('content')

<link rel="stylesheet" href="{{ asset('css/threesixty.css') }}">


<div class="row no-gutters justify-content-center align-items-center fondo_momentos">
    <div class="col-12">
        <div class="width_escolar fondo_escolar">
            <div class="row no-gutters">
                <div class="col-12">
                    
                </div>
            </div>
        </div>
    </div> 
</div>    



@endsection
@push('js360')
    <!-- flot charts scripts-->
    <script src="{{ asset('js/threesixty.js') }}"></script>
    <script src="{{ asset('js/360_juvenil.js') }}"></script>
@endpush