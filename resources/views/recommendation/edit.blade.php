@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Editar Recomendaciones</h1>

    <form action="{{ route('recommendation.update', $recommendation->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="text" class="form-label">Tipo</label>
            <input type="text" name="text" id="text" class="form-control" value="{{ old('text', $recommendation->text) }}" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Tipo</label>
            <input type="text" name="date" id="date" class="form-control" value="{{ old('date', $recommendation->date) }}" required>
        </div>

        

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection