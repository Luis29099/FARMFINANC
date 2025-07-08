@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Detalles de Producción Animal</h2>

    <table class="table table-bordered">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Cantidad</th>
                <th>Fecha De Adquisicion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $animalproduction->id }}</td>
                <td>{{ $animalproduction->type }}</td>
                <td>{{ $animalproduction->quantity }}</td>
                <td>{{ $animalproduction->acquisition_date }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection