<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Types of DDoS</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap 5.0.2 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        /* Estilos para el navbar */
        .navbar {
            background-color: rgba(59,61,61,255);
            border-bottom: 2px solid rgba(149, 180, 58, 1);
        }

        /* Estilos para los enlaces del navbar, incluyendo 'Servicio' y 'Resultados' */
        .navbar .nav-link, .navbar .navbar-brand.custom-nav-item {
            background-color: rgba(149, 180, 58, 1);
            color: white !important;
            border-radius: 5px;
            margin-left: 10px;
            padding: 8px 12px;
        }

        /* Efecto de hover para los enlaces del navbar, incluyendo 'Servicio' y 'Resultados' */
        .navbar .nav-link:hover, .navbar .navbar-brand.custom-nav-item:hover {
            background-color: rgba(120, 150, 40, 1);
        }

        /* Estilo para el botón de cierre de sesión */
        .navbar .navbar-nav .dropdown-menu .dropdown-item {
            background-color: rgba(149, 180, 58, 1);
            color: white;
            border-radius: 5px;
        }

        /* Efecto de hover para el botón de cierre de sesión */
        .navbar .navbar-nav .dropdown-menu .dropdown-item:hover {
            background-color: rgba(120, 150, 40, 1);
        }

        .navbar-brand,
        .navbar .navbar-brand.custom-nav-item {
            color: rgba(220,220,221,255) !important;
        }

        .content {
            background-color: rgba(220, 220, 221, 1);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <div class="navbar-brand">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('/images/LogoGaiaCuadrado.png') }}" height="50" alt="Logo GAIA" loading="lazy" style="max-height: 50px; width: auto;">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a href="{{ url('/lessons') }}" class="nav-link">Módulo educativo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-nav-item" href="{{ route('home') }}">Servicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-nav-item" href="{{ route('results.index') }}">Resultados</a>
                        </li>
                        @auth
                            @if (auth()->user()->role == 'admin')
                                <li class="nav-item">
                                    <a class="nav-link custom-nav-item" href="{{ route('admin.indexGraph') }}">Resultados Administrador</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link custom-nav-item" href="{{ route('admin.index') }}">Editar Usuario</a>
                                </li>
                            @endif
                        @endauth
                    </ul>

                    <ul class="navbar-nav ms-auto">

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
    <div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        @stack('scripts')
    </div>
</body>
</html>
