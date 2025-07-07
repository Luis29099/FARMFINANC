@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Cultivos</h1>

    <a href="{{ route('crop.create') }}" class="btn btn-warning mb-3">Crear</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Area</th>
                <th>Fecha de Plantacion</th>
                <th>Fecha de Cosecha</th>
                <th>Detalles</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($crops as $crop)
                <tr>
                    <td>{{ $crop->id }}</td>
                    <td>{{ $crop->name }}</td>
                    <td>{{ $crop->area }}</td>
                    <td>{{ $crop->sowing_date }}</td>
                    <td>{{ $crop->harvest_date }}</td>
                    <td><a href="{{ route('crop.show', $crop->id) }}" class="btn btn-info btn-sm">Ver</a></td>
                    <td><a href="{{ route('crop.edit', $crop->id) }}" class="btn btn-success btn-sm">Editar</a></td>
                    <td>
                        <form action="{{ route('crop.destroy', $crop->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection