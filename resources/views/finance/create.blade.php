@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Crear Finanzas</h1>

    <form action="{{ route('finance.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="income" class="form-label">Ingresos</label>
            <input type="text" id="income" name="income" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="expense" class="form-label">Gastos</label>
            <input type="text" id="expense" name="expense" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="profit" class="form-label">Ganancias</label>
            <input type="text" id="profit" name="profit" class="form-control" required>
        </div>
        


        <button type="submit" class="btn btn-success">Crear</button>
    </form>
</div>