@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Detalles del Ganado Vacuno</h2>

    <table class="table table-bordered">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Raza</th>
                <th>Peso Promedio</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $cattle->id }}</td>
                <td>{{ $cattle->breed }}</td>
                <td>{{ $cattle->average_weight }}</td>
                
            </tr>
        </tbody>
    </table>
</div>
@endsection