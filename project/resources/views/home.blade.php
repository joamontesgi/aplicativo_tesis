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
                    <input type="file" name="file" id="file" class="form-control" accept=".pcap">
                    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::id() }}" required>
                    <button onclick="uploadPcap()" class="btn btn-primary mt-4">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/postAPI.js')}}"></script>
@endsection
