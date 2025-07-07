@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Crear Usuario</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Gmail</label>
            <input type="text" id="emai" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Cantidad</label>
            <input type="text" id="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="birth_date" class="form-label">Cantidad</label>
            <input type="date" id="birth_date" name="birth_date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Crear</button>
    </form>
</div>
@endsection