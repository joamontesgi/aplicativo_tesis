@extends('layouts.app')
@section('content')
<div class="container my-5">
    <h2 class="mb-4 text-center">Cambiar Rol de Usuario</h2>
    <div class="mb-3">
        <!-- Error Validator -->
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

        <form method="POST" action="/searchUser" class="mb-5">
            @csrf
            <div class="form-group">
                <label for="email" class="form-label">Correo electrónico del usuario:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Correo del usuario">
                <button type="submit" class="btn btn-primary mt-3">Buscar</button>
            </div>
        </form>

        @if (isset($user))
            <div class="alert alert-success">
                <ul>
                    <li>Usuario encontrado</li>
                </ul>
            </div>
            <form method="POST" action="/editUser">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <div class="form-group">
                    <!-- Nombre -->
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- Apellido -->
                    <div class="mb-3 row">
                        <label for="lastname" class="col-md-4 col-form-label text-md-end">Apellido</label>
                        <div class="col-md-6">
                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $user->lastname }}" required autocomplete="lastname" autofocus>
                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- Teléfono -->
                    <div class="mb-3 row">
                        <label for="phone" class="col-md-4 col-form-label text-md-end">Teléfono</label>
                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control" name="phone" value="{{ $user->phone }}" required autocomplete="phone" autofocus disabled>
                        </div>
                    </div>
                    <!-- Dirección -->
                    <div class="mb-3 row">
                        <label for="address" class="col-md-4 col-form-label text-md-end">Dirección</label>
                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $user->address }}" required autocomplete="address" autofocus>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- Fecha de nacimiento -->
                    <div class="mb-3 row">
                        <label for="birthdate" class="col-md-4 col-form-label text-md-end">Fecha de Nacimiento</label>
                        <div class="col-md-6">
                            <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ $user->birthdate }}" required autocomplete="birthdate" autofocus disabled>
                            @error('birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- Ciudad -->
                    <div class="mb-3 row">
                        <label for="city" class="col-md-4 col-form-label text-md-end">Ciudad</label>
                        <div class="col-md-6">
                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ $user->city }}" required autocomplete="city" autofocus>
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- Correo electrónico -->
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Correo Electrónico</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus disabled>
                        </div>
                    </div>
                    <!-- Rol -->
                    <div class="mb-3 row">
                        <label for="role" class="col-md-4 col-form-label text-md-end">Rol</label>
                        <div class="col-md-6">
                            <select id="role" class="form-select @error('role') is-invalid @enderror" name="role" required>
                                <option value="user" @if($user->role == 'user') selected @endif>Usuario</option>
                                <option value="admin" @if($user->role == 'admin') selected @endif>Administrador</option>
                            </select>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-4 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Cambiar</button>
                </div>
            </form>
        @endif
    </div>
</div>


<script src="https://cdn.plot.ly/plotly-2.16.1.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js'></script>

@endsection