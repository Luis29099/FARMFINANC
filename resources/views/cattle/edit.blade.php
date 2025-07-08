@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Editar Ganado Vacuno</h1>

    <form action="{{ route('cattle.update', $cattle->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
             <label for="breed" class="form-label">Ingresos</label>
            <input type="text" id="breed" name="breed" class="form-control" value="{{ old('breed', $cattle->breed) }}" required>
        </div>

        <div class="mb-3">
            <label for="average_weight" class="form-label">Gastos</label>
            <input type="text" id="average_weight" name="average_weight" class="form-control" value="{{ old('average_weight', $cattle->average_weight) }}" required>
        </div>

         <div class="mb-3">
             <label for="use_milk_meat" class="form-label">Ganancias</label>
            <input type="text" id="use_milk_meat" name="use_milk_meat" class="form-control" value="{{ old('use_milk_meat', $cattle->use_milk_meat) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection