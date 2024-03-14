@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Título de la Imagen</h2>
    <div class="carousel-item {{ $active ?? false ? 'active' : '' }}">
        <img src="{{ asset('images/educative/DifCNN-DNN.png') }}" class="d-block w-100" alt="Descripción de la imagen 1">
    </div>

    <!-- Cualquier otra información o descripción aquí -->
    <div class="navigation">
        <!-- Enlaces a otras imágenes -->
        <a href="{{ url('educative/lessons/dnn') }}" class="btn btn-primary">Siguiente</a>
        <!-- Añadir un enlace al anterior si lo deseas -->
    </div>
</div>
@endsection