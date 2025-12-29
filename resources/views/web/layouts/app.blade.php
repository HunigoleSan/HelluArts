<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/var.css')}}">
    <link rel="stylesheet" href="{{asset('css/hunigolesan.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack('styles')
    <title>@yield('title','HelluArt\'s')</title>
    <link href='https://cdn.boxicons.com/3.0.6/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body class="body">
    
    <main class="main">
        
        <!-- <aside class="announcement">
            🎨 ¡Sé artista! Sube tus creaciones y comparte tu talento.
        </aside> -->
        @include('web.layouts.header_web')
        
        @if(request()->is('/') || request()->routeIs('index'))
            @include('web.layouts.banner')
        @endif
        @yield('content')

    </main>

    <!-- <div id="galerias" class="galerias">

    </div> -->

    <!-- @include('web.layouts.footer') -->

</body>
<script src="{{asset('js/modals/main_user.js')}}" type="module"></script>


</html>