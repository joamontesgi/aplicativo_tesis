@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Servicio') }}</div>
                <h3 class="text-center">Por favor cargue un archivo .pcap para analizarlo (sugerimos realizar la captura usando TCPdump)</h3>
                <div class="card-body">
                    <img src="{{asset('images/proceso.svg')}}" alt="proceso" class="img-fluid">
                    <main class="d-flex align-items-center justify-content-center bg-light">
                        <label for="file" class="d-flex flex-column align-items-center justify-content-center border border-2 border-primary rounded-3 bg-white p-2 mx-auto" style="cursor: pointer; max-width: 24rem; border-style: dashed; margin: 1rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #0d6efd; width: 40px; height: 40px;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <h2 class="mb-1 fs-5 fw-medium text-secondary">Trama de Red</h2>
                            <p class="mb-3 text-secondary" style="max-width: 20rem; margin-top: 0;">Carga o arrastra & suelta tus archivos PCAP.</p>

                            <input id="file" name="file" type="file" class="d-none" accept=".pcap"/>
                        </label>
                    </main>

                    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::id() }}" required>
                    <div class="container mt-5 d-flex justify-content-center">
                        <button type="button" onclick="uploadPcap()" class="btn btn-primary">Enviar</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/postAPI.js')}}"></script>
@endsection
