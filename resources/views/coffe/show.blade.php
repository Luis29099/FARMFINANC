{{-- @extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Detalles del Cafe</h2>

    <table class="table table-bordered">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Variedad</th>
                <th>Produccion estimada</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $coffe->id }}</td>
                <td>{{ $coffe->variety }}</td>
                <td>{{ $coffe->estimated_production }}</td>
                
            </tr>
        </tbody>
    </table>
</div>
@endsection --}}
@extends('layouts.app')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="card" style="width: 22rem;">
        <img src="https://i.pinimg.com/736x/76/ba/9d/76ba9d7f368379e839faa110653a0c2c.jpg" class="card-img-top" alt="Imagen de Cafe">
        
        <div class="card-body">
            <h5 class="card-title">Caffe #{{ $coffe->id }}</h5>
            <p class="card-text">
                <strong>Ingresos:</strong> ${{ $coffe->variety }}<br>
                <strong>Gastos:</strong> ${{ $coffe->estimated_production }}<br>
                
                

            </p>

            <a href="{{ route('coffe.index') }}" class="btn btn-secondary">Volver a la lista</a>
            <a href="{{ route('coffe.edit', $coffe->id) }}" class="btn btn-primary">Editar</a>
        </div>
    </div>
</div>
@endsection