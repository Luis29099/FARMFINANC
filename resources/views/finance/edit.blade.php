@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Editar Finanzas</h1>

    <form action="{{ route('finance.update', $finance->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
             <label for="income" class="form-label">Ingresos</label>
            <input type="text" id="income" name="income" class="form-control" value="{{ old('income', $finance->income) }}" required>
        </div>

        <div class="mb-3">
            <label for="expense" class="form-label">Gastos</label>
            <input type="text" id="expense" name="expense" class="form-control" value="{{ old('expense', $finance->expense) }}" required>
        </div>

         <div class="mb-3">
             <label for="profit" class="form-label">Ganancias</label>
            <input type="text" id="profit" name="profit" class="form-control" value="{{ old('profit', $finance->profit) }}" required>
        </div>
         <div class="mb-3">
             <label for="date" class="form-label">Fecha</label>
            <input type="text" id="date" name="date" class="form-control" value="{{ old('date', $finance->date) }}" required>
        </div>
        <a href="{{ route('finance.index') }}" class="btn btn-secondary">Volver a la lista</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection

