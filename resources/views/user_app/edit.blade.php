@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Editar Usuario</h1>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('type', $user->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Gmail</label>
            <input type="text" name="email" id="emal" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="text" name="password" id="password" class="form-control" value="{{ old('password', $user->password) }}" required>
        </div>

        <div class="mb-3">
            <label for="birth_date" class="form-label">Fecha de Nacimiento</label>
            <input type="date" name="birth_date" id="birth_date" class="form-control" value="{{ old('brith_date', $user->birth_date) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection