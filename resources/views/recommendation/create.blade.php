@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Crear Recomendaciones</h1>

    <form action="{{ route('recommendation.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="text" class="form-label">Tipo</label>
            <input type="text" id="text" name="text" class="form-control" required>
        </div>

        

        <button type="submit" class="btn btn-success">Crear</button>
    </form>
</div>
@endsection