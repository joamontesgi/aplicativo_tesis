<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Inicio') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap 5.0.2 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        /* Estilos para el navbar */
        .navbar {
            background-color: rgba(59,61,61,255);
            border-bottom: 2px solid rgba(149, 180, 58, 1); /* Agrega un borde en la parte inferior del navbar */
        }

        /* Estilos para los enlaces del navbar */
        .navbar .navbar-nav .nav-link {
            background-color: rgba(149, 180, 58, 1);
            color: white;
            border-radius: 5px; /* Redondea ligeramente los bordes de los botones */
            margin-left: 10px; /* Agrega espacio entre los botones */
            padding: 8px 12px; /* Ajusta el espaciado interno de los botones */
        }

        /* Efecto de hover para los enlaces del navbar */
        .navbar .navbar-nav .nav-link:hover {
            background-color: rgba(120, 150, 40, 1); /* Cambia el color de fondo al hacer hover */
        }

        /* Estilo para el botón de cierre de sesión */
        .navbar .navbar-nav .dropdown-menu .dropdown-item:last-child {
            background-color: rgba(149, 180, 58, 1);
            color: white;
            border-radius: 5px;
        }

        /* Efecto de hover para el botón de cierre de sesión */
        .navbar .navbar-nav .dropdown-menu .dropdown-item:last-child:hover {
            background-color: rgba(120, 150, 40, 1);
        }
                /* Estilo para el texto del nombre del aplicativo, "Servicio" y "Resultados" */
        .navbar-brand,
        .navbar .navbar-brand.custom-nav-item {
            color: rgba(220,220,221,255) !important;/* Cambia el color del texto a blanco */
        }

        /* Estilo para el contenido principal */
        .content {
            background-color: rgba(220, 220, 221, 1);
            padding: 20px; /* Agrega relleno al contenido principal */
            border-radius: 10px; /* Redondea los bordes del contenido */
        }

        /* Estilo para los botones "Servicio" y "Resultados" en el navbar */
        .navbar .navbar-nav .custom-nav-item {
            background-color: rgba(149, 180, 58, 1);
            color: white;
            border-radius: 5px;
            margin-left: 10px;
            padding: 8px 12px;
        }

        /* Efecto de hover para los botones "Servicio" y "Resultados" */
        .navbar .navbar-nav .custom-nav-item:hover {
            background-color: rgba(120, 150, 40, 1);
        }
    </style>
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Inicio') }}
                </a>
                <a class="navbar-brand custom-nav-item" href="{{ route('home') }}">
                    Servicio
                </a>
                <a class="navbar-brand custom-nav-item" href="{{ route('results.index') }}">
                    Resultados
                </a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio de sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4 content">
            @yield('content')
        </main>
    </div>
    <div>
        @include('components.footer')
    </div>
    
</body>
</html>
