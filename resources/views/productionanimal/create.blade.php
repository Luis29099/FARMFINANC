@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Crear Producción Animal</h1>

    <form action="{{ route('animalproduction.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" id="type" name="type" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Cantidad</label>
            <input type="text" id="quantity" name="quantity" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="acquisition_date" class="form-label">Fecha De Adquisicion</label>
            <input type="text" id="acquisition_date" name="acquisition_date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Crear</button>
    </form>
</div>
@endsection