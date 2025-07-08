@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Editar Cultivo</h1>

    <form action="{{ route('crop.update', $crop->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
             <label for="name" class="form-label">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $crop->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="area" class="form-label">Area</label>
            <input type="text" id="area" name="area" class="form-control" value="{{ old('area', $crop->area) }}" required>
        </div>

         <div class="mb-3">
              <label for="sowing_date" class="form-label">Fecha de Plantacion</label>
            <input type="text" id="sowing_date" name="sowing_date" class="form-control" value="{{ old('sowing_date', $crop->sowing_date) }}" required>
        </div>

        <div class="mb-3">
              <label for="harvest_date" class="form-label">Fecha de Plantacion</label>
            <input type="text" id="harvest_date" name="harvest_date" class="form-control" value="{{ old('harvest_date', $crop->harvest_date) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection