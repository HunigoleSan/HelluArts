<!DOCTYPE html>
<html lang="es-pe">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/var.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">

    <title>Regístrate</title>
    <link href='https://cdn.boxicons.com/3.0.6/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body class="body body-register">
    <main>
        <section class="login register">
            <form class="login-form" action="{{route('register')}}" method="post">
                @csrf
                <div class="login-header">
                    <i class='bx  bxs-ghost'></i>
                    <h1 class="login-title">
                        HelluArt's
                    </h1>
                </div>
                <div class="login-welcome">
                    <h2 class="login-subtitle">Regístrate</h2>
                    <p class="login-description">
                        Regístrate para compartir tus ideas y mostrarlas al mundo de HelluArt’s.
                    </p>
                </div>
                <div class="controls ">
                    <div class="control">
                        <label for="">nombre</label>
                        <input class="input input-pink" type="text" name="nombre" placeholder="Ingrese su nombre">
                        @error('nombre')
                            <small class="response-error">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="control">
                        <label for="">Nombre de usuario</label>
                        <input class="input input-pink" type="text" name="nombre_usuario" placeholder="Ingrese su nombre de usuario">
                        @error('nombre')
                            <small class="response-error">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="control">
                        <label for="">Correo</label>
                        <input class="input input-pink" type="text" name="correo" placeholder="Ingrese su correo">
                        @error('correo')
                            <small class="response-error">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="control">
                        <label for="">Contraseña</label>
                        <input class="input input-pink" type="password" name="contrasenia" placeholder="Ingrese su contraseña">
                        @error('contrasenia')
                            <small class="response-error">{{$message}}</small>
                        @enderror
                    </div>
                    <input class="input input-submit" type="submit" value="Regístrate">
                    <div class="not-account">
                        ¿Tienes una cuenta?
                        <a href="{{route('login')}}">Accede aquí</a>
                    </div>

                </div>
                <div class="other-account">
                    <div class="line bg-wine-500"></div>
                    O regístrate con
                    <div class="line bg-wine-700"></div>
                </div>
                <div class="container-links">
                    <div class="link-effect-backdrop">
                        <a class="link link-hover-animation" href="">
                            <svg
                                class="bxl-google-svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.283 10.356H11.956V13.807H16.748C16.302 16 14.435 17.26 11.956 17.26C11.2623 17.2612 10.5753 17.1254 9.9342 16.8605C9.29312 16.5955 8.71065 16.2066 8.2202 15.7161C7.72975 15.2255 7.34097 14.643 7.07615 14.0019C6.81134 13.3607 6.6757 12.6736 6.67701 11.98C6.67583 11.2864 6.81156 10.5994 7.07644 9.95839C7.34131 9.31737 7.73012 8.73495 8.22055 8.24451C8.71099 7.75408 9.29341 7.36527 9.93443 7.1004C10.5754 6.83552 11.2624 6.69979 11.956 6.70097C13.215 6.70097 14.353 7.14797 15.246 7.87897L17.846 5.27997C16.262 3.89897 14.231 3.04697 11.956 3.04697C10.7818 3.04354 9.61854 3.27228 8.53306 3.72004C7.44759 4.1678 6.46135 4.82575 5.63107 5.65603C4.80079 6.48631 4.14284 7.47255 3.69508 8.55802C3.24732 9.6435 3.01858 10.8068 3.02201 11.981C3.01845 13.1552 3.2471 14.3185 3.69481 15.4041C4.14253 16.4896 4.80046 17.4759 5.63077 18.3062C6.46108 19.1365 7.44737 19.7945 8.53291 20.2422C9.61844 20.6899 10.7818 20.9185 11.956 20.915C16.423 20.915 20.485 17.666 20.485 11.981C20.485 11.453 20.404 10.884 20.283 10.356Z"
                                    fill="#2C132F" />
                            </svg>
                            Google
                        </a>
                        <div class="link link-backdrop-google" href="">
                            <svg class="bxl-google-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.283 10.356H11.956V13.807H16.748C16.302 16 14.435 17.26 11.956 17.26C11.2623 17.2612 10.5753 17.1254 9.9342 16.8605C9.29312 16.5955 8.71065 16.2066 8.2202 15.7161C7.72975 15.2255 7.34097 14.643 7.07615 14.0019C6.81134 13.3607 6.6757 12.6736 6.67701 11.98C6.67583 11.2864 6.81156 10.5994 7.07644 9.95839C7.34131 9.31737 7.73012 8.73495 8.22055 8.24451C8.71099 7.75408 9.29341 7.36527 9.93443 7.1004C10.5754 6.83552 11.2624 6.69979 11.956 6.70097C13.215 6.70097 14.353 7.14797 15.246 7.87897L17.846 5.27997C16.262 3.89897 14.231 3.04697 11.956 3.04697C10.7818 3.04354 9.61854 3.27228 8.53306 3.72004C7.44759 4.1678 6.46135 4.82575 5.63107 5.65603C4.80079 6.48631 4.14284 7.47255 3.69508 8.55802C3.24732 9.6435 3.01858 10.8068 3.02201 11.981C3.01845 13.1552 3.2471 14.3185 3.69481 15.4041C4.14253 16.4896 4.80046 17.4759 5.63077 18.3062C6.46108 19.1365 7.44737 19.7945 8.53291 20.2422C9.61844 20.6899 10.7818 20.9185 11.956 20.915C16.423 20.915 20.485 17.666 20.485 11.981C20.485 11.453 20.404 10.884 20.283 10.356Z"
                                    fill="#2C132F" />
                            </svg>
                            Google
                        </div>
                    </div>
                    <a class="link link-facebook" href="">
                        <svg class="bxl-facebook-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.397 20.997V12.801H16.162L16.573 9.59199H13.397V7.54799C13.397 6.62199 13.655 5.98799 14.984 5.98799H16.668V3.12699C15.8486 3.03918 15.025 2.99678 14.201 2.99999C11.757 2.99999 10.079 4.49199 10.079 7.23099V9.58599H7.332V12.795H10.085V20.997H13.397Z"
                                fill="black" />
                        </svg>
                        Facebook
                    </a>
                </div>
            </form>
            <picture class="picture picture-register">
                <img src="{{asset('images/web/registrarse-700.webp')}}" alt="">
            </picture>
        </section>
    </main>
</body>

</html>