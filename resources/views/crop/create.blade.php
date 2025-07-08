@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Crear Cultivo</h1>

    <form action="{{ route('crop.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="area" class="form-label">Area</label>
            <input type="text" id="area" name="area" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="sowing_date" class="form-label">Fecha de Plantacion</label>
            <input type="text" id="sowing_date" name="sowing_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="harvest_date" class="form-label">Fecha de Cosecha</label>
            <input type="text" id="harvest_date" name="harvest_date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Crear</button>
    </form>
</div>