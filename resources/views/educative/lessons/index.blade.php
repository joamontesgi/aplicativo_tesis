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
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="carousel-text-below">
                        <h5>{{ $image['title'] }}</h5>
                        <p class="bg-secondary text-white p-3 rounded-lg">{{ $image['description'] }}</p>
                    </div>
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
    <!-- Botón para iniciar el test, inicialmente oculto -->
    <div class="text-center mt-4">
        <button id="startTestBtn" class="btn btn-primary" style="display:none;">Iniciar Test</button>
    </div>
</div>
@endsection

@push('styles')
<style>
    .carousel-item {
        position: relative;
    }

    .carousel-text-below {
        position: relative;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        text-align: center;
        padding: 10px;
    }
</style>
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#carouselEducative').carousel({
            interval: false
        });

        var totalItems = $('.carousel-item').length;
        var lastIndex = totalItems - 1;

        $('#carouselEducative').on('slid.bs.carousel', function () {
            var currentIndex = $('div.active').index();
            if(currentIndex === lastIndex){
                $('#startTestBtn').show();
            }
        });

        $('#startTestBtn').click(function(){
            window.location.href = '/test'; // Asegúrate de ajustar esta URL a la ruta de tu test
        });
    });
</script>
@endpush
