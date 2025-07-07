@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Crear Ganado Vacuno</h1>

    <form action="{{ route('cattle.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="breed" class="form-label">Raza</label>
            <input type="text" id="breed" name="breed" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="average_weight" class="form-label">Peso Promedio</label>
            <input type="text" id="average_weight" name="average_weight" class="form-control" required>
        </div>

        {{-- <div class="mb-3">
            <label for="use" class="form-label">Uso</label>
            <input type="text" id="use" name="use" class="form-control" required>
        </div> --}}

        <button type="submit" class="btn btn-success">Crear</button>
    </form>
</div>