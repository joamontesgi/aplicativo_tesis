@extends('layouts.app')
@section('content')
<style>
    .card-hover-transform {
        transition: transform .2s;
    }
    .card-hover-transform:hover {
        transform: scale(1.05);
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center"> 
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <a href="{{ route('admin.graficosGrap') }}" class="text-decoration-none">
                <div class="card shadow-lg rounded-2xl overflow-hidden card-hover-transform" style="background: linear-gradient(to right, #718096, #4a5568);">
                    <div class="text-center p-5">
                        <img src="{{ asset('/images/barra-grafica.png') }}" alt="Descripción" class="img-fluid" style="max-width: 144px; height: auto;">
                    </div>
                    <div class="card-body bg-dark bg-opacity-60 text-center">
                        <h1 class="card-title text-light">Gráficos Generales</h1>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4"> 
            <a href="{{ route('admin.userGraph') }}" class="text-decoration-none">
                <div class="card shadow-lg rounded-2xl overflow-hidden card-hover-transform" style="background: linear-gradient(to right, #718096, #4a5568);">
                    <div class="text-center p-5">
                        <img src="{{ asset('/images/hombre.png') }}" alt="Descripción" class="img-fluid" style="max-width: 144px; height: auto;">
                    </div>
                    <div class="card-body bg-dark bg-opacity-60 text-center">
                        <h1 class="card-title text-light">Gráficos Personal</h1> 
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<script src="https://cdn.plot.ly/plotly-2.16.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js'></script>

@endsection