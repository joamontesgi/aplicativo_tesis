@extends('layouts.app')
@section('content')
<div class="container my-5">
    <h2 class="mb-4 text-center">Busca Test del Usuario</h2>
    <div class="mb-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (isset($error_found))
            <div class="alert alert-danger">
                <ul>
                    <li>{{ $error_found }}</li>
                </ul>
            </div>
        @endif

        @if (isset($succes_message))
            <div class="alert alert-success">
                <ul>
                    <li>{{ $succes_message }}</li>
                </ul>
            </div>
        @endif
        
        <form method="POST" action="/searchUserGrap" class="mb-5">
            @csrf
            <div class="form-group">
                <label for="email" class="form-label">Correo electrónico del usuario:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Correo del usuario" required>
                <button type="submit" class="btn btn-primary mt-3">Buscar</button>
            </div>
        </form>
    </div>
</div>


<script src="https://cdn.plot.ly/plotly-2.16.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js'></script>

@endsection