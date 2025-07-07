@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Detalles de los Cultivos</h2>

    <table class="table table-bordered">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Raza</th>
                <th>Produccion de huevos diara</th>
                <th>Produccion total de huevos en el mes</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $hen->id }}</td>
                <td>{{ $hen->breed }}</td>
                <td>{{ $hen->daily_egg_production }}</td>
                <td>{{ $hen->monthly_egg_total }}</td>
                
            </tr>
        </tbody>
    </table>
</div>
@endsection