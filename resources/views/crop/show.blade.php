@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Detalles de los Cultivos</h2>

    <table class="table table-bordered">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Area</th>
                <th>Fecha de Plantacion</th>
                <th>Fecha de Cosecha</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $crop->id }}</td>
                <td>{{ $crop->name }}</td>
                <td>{{ $crop->area }}</td>
                <td>{{ $crop->sowing_date }}</td>
                <td>{{ $crop->harvest_date }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection