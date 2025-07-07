@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Editar Cultivos de Cafe</h1>

    <form action="{{ route('coffe.update', $coffe->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
             <label for="variety" class="form-label">Vriedad</label>
            <input type="text" id="variety" name="variety" class="form-control" value="{{ old('variety', $coffe->variety) }}" required>
        </div>

        <div class="mb-3">
            <label for="estimated_production" class="form-label">Produccion estimada</label>
            <input type="text" id="estimated_production" name="estimated_production" class="form-control" value="{{ old('estimated_production', $coffe->estimated_production) }}" required>
        </div>

        

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection