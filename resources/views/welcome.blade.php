<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* Estilo para el body */
        body {
            background-color: rgba(220, 220, 221, 1);
            margin: 0; /* Elimina el margen predeterminado del cuerpo */
            padding: 0; /* Elimina el relleno predeterminado del cuerpo */
        }

        /* Estilo para el contenedor del contenido */
        .content-container {
            margin-top: 20px; /* Agrega margen superior al contenido */
            padding: 20px; /* Agrega relleno al contenido */
        }
    </style>
</head>
<body class="antialiased">
    <div>
        @include('components.navbar')
    </div>
    
    <div class="container-fluid content-container text-center">
        <h2>Servicio en la Nube para la Detección de Ataques de DDoS (Denegación de Servicios Distribuida) Basado en Aprendizaje de Máquina</h2>
        <h5 class="mt-4">Convocatoria conjunta Universidad Nacional de Colombia - Universidad de Caldas</h5>
        <img src="{{asset('/images/unal.png') }}" alt="" style="width: 100px; height: 100px;">
        <img src="{{asset('/images/uCaldas.png') }}" alt="" style="width: 100px; height: 100px;">
    </div>
    <div>
        @include('components.footer')
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
