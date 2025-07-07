{{-- @extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Detalles de las Finanzas</h2>

    <table class="table table-bordered">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Ingresos</th>
                <th>Gastos</th>
                <th>Ganancias</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $finance->id }}</td>
                <td>{{ $finance->income }}</td>
                <td>{{ $finance->expense }}</td>
                <td>{{ $finance->profit }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection --}}
@extends('layouts.app')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="card" style="width: 22rem;">
        <img src="https://i.pinimg.com/736x/42/b7/e3/42b7e3e204ad93f3e39e7bd37b0bfb1f.jpg" class="card-img-top" alt="Imagen de Finanzas">
        
        <div class="card-body">
            <h5 class="card-title">Finanza #{{ $finance->id }}</h5>
            <p class="card-text">
                <strong>Ingresos:</strong> ${{ $finance->income }}<br>
                <strong>Gastos:</strong> ${{ $finance->expense }}<br>
                <strong>Ganancias:</strong> ${{ $finance->profit }}
                

            </p>

            <a href="{{ route('finance.index') }}" class="btn btn-secondary">Volver a la lista</a>
            <a href="{{ route('finance.edit', $finance->id) }}" class="btn btn-primary">Editar</a>
        </div>
    </div>
</div>
@endsection
