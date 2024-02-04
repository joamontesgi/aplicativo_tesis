<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Sobre nosotros</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link">Home</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Inicio de sesión</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Registro</a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
    </div>
</nav>
<style>
    /* Estilos para el navbar */
    .custom-navbar {
        background-color: rgba(59, 61, 61, 1);
        border-bottom: 2px solid rgba(149, 180, 58, 1);
    }

    /* Estilos para los botones en el navbar */
    .custom-navbar .navbar-nav .nav-link {
        background-color: rgba(149, 180, 58, 1);
        color: white;
        border-radius: 5px; /* Redondea ligeramente los bordes de los botones */
        margin-left: 10px; /* Agrega margen izquierdo entre los botones */
        padding: 10px 15px; /* Agrega relleno interno a los botones */
    }

    /* Efecto de hover para los botones */
    .custom-navbar .navbar-nav .nav-link:hover {
        background-color: rgba(120, 150, 40, 1) !important; /* Cambia el color de fondo al hacer hover */
        
    }
</style>