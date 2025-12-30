@extends('web.layouts.app')

@push('styles')
<link rel="stylesheet" href="{{asset('css/artes.css')}}">
@endpush
@section('content')
<section class="artes">
    <div class="container-circles-vectors">
        <div class="container-circle">
            <div class="circle-big"></div>

            <div class="circle-small"></div>
        </div>
        <div class="container-vector">
            <svg class="vector" width="670" height="206" viewBox="0 0 670 206" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M386 0L0 196.5L84 205.5L386 91.5L669.5 105L386 0Z" fill="#9747FF" />
            </svg>

            <svg class="vector" width="659" height="186" viewBox="0 0 659 186" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M166.5 0C329.167 61 612.2 43.5 659 85.5L414 186L315 106.5L0 186L166.5 0Z"
                    fill="#992F87" />
            </svg>
        </div>
        <div class="container-circle container-circle-right">
            <div class="circle-big circle-big-right"></div>
            <div class="circle-small circle-small-right"></div>
        </div>
    </div>
    <h1 class="artes-title">
        Nuestras mejores categorías
    </h1>
    <section class="artes-categories">
        @if($data['getCategorias']->isEmpty())
        <p>la lista esta vacia</p>
        @else
        @foreach($data['getCategorias'] as $cat)
        <x-categorias :data="$cat"></x-categorias>

        @endforeach
        @endif
    </section>
    <section class="artes_result">
        <section class="artes_generales">
            <p class="form-title">Artes Generales</p>
            <form class="form-search" action="" method="post">
                @csrf

                <div class="control-search-icon">
                    <i class='bx  bx-search-big'></i> 
                    <input class="control" type="search" name="buscar_arte" id="buscar_arte" placeholder="Buscar por nombre">

                </div>
                <input class="button bg-purple" type="submit" value="Buscar">
            </form>
        </section>
        <section class="galeria">
            <article class="item"><img src="{{asset('images/arts/blitzo-5.jpg')}}"></article>
            <article class="item"><img src="{{asset('images/arts/loona-5.jpg')}}"></article>
            <article class="item"><img src="{{asset('images/arts/moxxie-1.jpg')}}"></article>
            <article class="item"><img src="{{asset('images/arts/stolas-5.jpg')}}"></article>
            <article class="item"><img src="{{asset('images/arts/moxxie-2.jpg')}}"></article>
            <article class="item"><img src="{{asset('images/arts/moxxie-1.jpg')}}"></article>
            <article class="item"><img src="{{asset('images/arts/stolas-5.jpg')}}"></article>
            <article class="item"><img src="{{asset('images/arts/moxxie-2.jpg')}}"></article>
            <article class="item"><img src="{{asset('images/arts/loona-5.jpg')}}"></article>
            <article class="item"><img src="{{asset('images/arts/moxxie-1.jpg')}}"></article>
        </section>
    </section>
   


</section>
@endsection

@push('scripts')
<script src="{{asset('js/events/vector_scrolls.js')}}"></script>
@endpush