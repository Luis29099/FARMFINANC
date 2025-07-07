@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Detalles del Aguacate</h2>

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
                <td>{{ $avocado->id }}</td>
                <td>{{ $avocado->variety }}</td>
                <td>{{ $avocado->estimated_production }}</td>
                
            </tr>
        </tbody>
    </table>
</div>
@endsection