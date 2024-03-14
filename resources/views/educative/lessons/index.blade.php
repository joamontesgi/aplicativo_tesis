@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center my-4">Galería Educativa</h2>

    <div id="carouselEducative" class="carousel slide" data-interval="false">
        <ol class="carousel-indicators">
            @foreach ($imagesInfo as $index => $image)
                <li data-target="#carouselEducative" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>

        <div class="carousel-inner">
            @foreach ($imagesInfo as $index => $image)
                <div>
                    <h2 class="text-center">{{ $image['title'] }}</h2>
                    <p class="text-center">{{ $image['description'] }}</p>
                </div>
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <img src="{{ asset('images/educative/' . $image['filename']) }}" class="d-block w-100" alt="{{ $image['title'] }}">
                </div>
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#carouselEducative" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselEducative" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#carouselEducative').carousel({
            interval: false // Esto asegura que el carrusel no auto-inicie.
        });
    });
</script>
@endpush
