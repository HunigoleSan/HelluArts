<header class="header">
    <nav class="nav">
        <h1 class="nav-title">HelluArt's</h1>
        <div class="dropdown">
            <i class='dropdown-icon bxr bx-apps'></i>
            <div class="dropdown-animation">
                <!-- <ul class="nav-list">
                        <li class="item-list"></li>
                        <li class="item-list"></li>
                        <li class="item-list"></li>
                    </ul> -->
                <div class="access-page">
                    @if(!session()->has('user_id'))
                        <a class="link text-white border-white" href="{{route('login')}}">
                            Iniciar sesión
                        </a>
                        <a class="link link-stelar" href="{{route('register')}}">Registrarse</a>
                    @else
                        <p class="link link-stelar">{{session('public_name')}}</p>
                        
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button class="link text-white border-white" type="submit">Cerrar sesión</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>