<header class="header_artes">
    <ul class="list list-header">
        <li class="list-item">
            <a class="link" href="{{route('artes')}}">FanArts</a>
        </li>
    </ul>
    <div class="logo">
        <i class='bxr  bxs-ghost'></i>
        HelluArt's
    </div>

    <div class="profile-user">
        @if(!session()->has('user_id'))
        <div class="dropdown">
            <i class='dropdown-icon dropdown-icon-mobile bxr bx-apps'></i>
            <div class="dropdown-animation dropdown-animation-access">
                <div class="access-page">
                    <a class="link text-white border-white" href="{{route('login')}}"> Iniciar sesión</a>
                    <a class="link link-stelar" href="{{route('register')}}">Registrarse</a>
                </div>
            </div>
        </div>

        @else
        <div class="dropdown">
            {{session('real_name')}}
            <i class='dropdown-icon bxr  bx-chevron-down'></i>
            <div class="dropdown-animation">
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
        </div>
        @endif

    </div>
</header>