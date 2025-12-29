<header class="header">
    <div class="logo">
        <i class='bxr  bxs-ghost'></i>
        HelluArt's
    </div>
    <ul class="list list-header">
        <li class="list-item">
            <a class="link link-header" href="{{route('index')}}"><i class='bx  bx-home-alt'></i> Inicio</a>
        </li>
        <li class="list-item">
            <a class="link link-header" href="{{route('index')}}"><i class='bx  bx-grid-column-right'></i> FanArts</a>
        </li>
        <li class="list-item">
            <a class="link link-header" href="{{route('index')}}"><i class='bx  bx-brush-sparkles'></i> Subir arte</a>
        </li>
    </ul>


    <div class="profile-user">
        @if(!session()->has('user_id'))
        <div class="access-site">
            <i id="icon-main-user" class='access-site-icon access-site-icon-mobile bxr bx-apps'></i>
            <div class="login_or_register">
                <div class="access-page">
                    <a class="link link-iniciar-sesion" href="{{route('login')}}"> Iniciar sesión</a>
                    <a class="link link-stelar" href="{{route('register')}}">Registrarse</a>
                </div>
            </div>
        </div>
        @else
        <div class="access-site">
            <i id="icon-main-user" class='access-site-icon access-site-icon-mobile bxr bx-apps'></i>
             <div id="access-active" class="login_or_register access-active">
                <div class="access-page-active">
                    <p class="user_name_main">{{ Str::upper(Str::substr(session('public_name'), 0, 1)) }}</p>
                    <i class='bx  bx-chevron-up'></i> 
                </div>
            </div>
        </div>
        @endif
</header>
@if(!session()->has('user_id'))
<div id="modal-main-user" class="main-user">
    <div class="access-page">
        <a class="link link-iniciar-sesion" href="{{route('login')}}"> Iniciar sesión</a>
        <a class="link link-stelar" href="{{route('register')}}">Registrarse</a>
    </div>
</div>
@else
<div id="modal-main-user" class="main-user">
    <ul class="list list-dropdown">
        <li class="list-item">
            <p>Panel usuario</p>
            <small><i>{{session('public_name')}}</i></small>
        </li>
        <li class="list-item">
            <a href="" class="main-mobile">Ver FanArts<i class='icon-hidden bxr  bx-arrow-out-up-right-square'></i> </a>
            <a href="">Ser Artista<i class='icon-hidden bxr  bx-arrow-out-up-right-square'></i> </a>
            <a href="">Configuraciones <i class='icon-hidden bxr  bx-arrow-out-up-right-square'></i> </a>
        </li>
        <li class="list-item">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="text" value="Cerrar sesión">Cerrar sesión<i class='icon-hidden bxr  bx-arrow-out-right-square-half'></i></button>
            </form>
        </li>
    </ul>
</div>
@endif