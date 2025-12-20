@extends('web.layouts.app')

@push('styles')
<link rel="stylesheet" href="{{asset('css/presentation.css')}}">
@endpush

@section('content')
<section class="section section_presentation">
    <picture class="picture picture-mobile">
        <img class="presentation_img" src="{{asset('images/web/presentation.png')}}" alt="Loona">
        <img class="img_pattern" src="{{asset('images/web/presentation_pattern.png')}}" alt="Loona Pattern Name">
    </picture>
    <section class="presentation">
        <section class="presentation_column presentation_column_context">
            <section class="presentation_content_title">
                <h2 class="presentation_title">El mundo de <span class="text-border">Helluva Boss</span> en arte</h2> 
            </section>
            <p class="presentation_description">
            Un espacio para que los fans compartan su fan art y se inspiren mutuamente. 
            </p>
            <div class="d-flex g-1">
                <a class="link link-stelar" href="{{route('register')}}">¡Crea tu cuenta!</a>
                <a class="link border-white text-white text-center" href="{{route('artes')}}">Ver FanArts</a>

            </div>
        </section>
        <div class="presentation_column">
            <picture class="picture">
                <img class="presentation_img" src="{{asset('images/web/presentation.png')}}" alt="Loona">
                <img class="img_pattern" src="{{asset('images/web/presentation_pattern.png')}}" alt="Loona Pattern Name">
            </picture>
        </div>
    </section>
</section>

<!-- <div>
    <div id="categorias" class="categorias">
        @if($data['getCategorias']->isEmpty())
                {{var_dump($data['getCategorias'])}}
        @else
            @foreach($data['getCategorias'] as $cat)
                <x-categorias :data="$cat"> </x-categorias>
            @endforeach
        @endif
    </div>
</div> -->


@endsection
