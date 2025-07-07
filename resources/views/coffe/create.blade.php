@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Crear Cultivos de Cafe</h1>

    <form action="{{ route('coffe.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="variety" class="form-label">Variedad</label>
            <input type="text" id="variety" name="variety" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="estimated_production" class="form-label">Produccion estimada</label>
            <input type="text" id="estimated_production" name="estimated_production" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-success">Crear</button>
    </form>
</div>