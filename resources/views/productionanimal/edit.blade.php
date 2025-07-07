@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Editar Producción Animal</h1>

    <form action="{{ route('animalproduction.update', $animalproduction->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" name="type" id="type" class="form-control" value="{{ old('type', $animalproduction->type) }}" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Cantidad</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ old('quantity', $animalproduction->quantity) }}" required>
        </div>

        <a href="{{ route('finance.index') }}" class="btn btn-secondary">Volver a la lista</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection