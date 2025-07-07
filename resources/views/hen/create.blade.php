@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Crear lista de Gallinas</h1>

    <form action="{{ route('hen.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="breed" class="form-label">Raza</label>
            <input type="text" id="breed" name="breed" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="daily_egg_production" class="form-label">Produccion diaria de huevos</label>
            <input type="text" id="daily_egg_production" name="daily_egg_production" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="monthly_egg_total" class="form-label">Huevos totales en el mes</label>
            <input type="text" id="monthly_egg_total" name="monthly_egg_total" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-success">Crear</button>
    </form>
</div>