@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Recomendaciones</h1>

    <a href="{{ route('recommendation.create') }}" class="btn btn-warning mb-3">Crear</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Recomendacion</th>
                <th>Fecha</th>
                <th>Detalles</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recommendations as $recommendation)
                <tr>
                    <td>{{ $recommendation->id }}</td>
                    <td>{{ $recommendation->text }}</td>
                    <td>{{ $recommendation->date }}</td>
                    <td><a href="{{ route('recommendation.show', $recommendation->id) }}" class="btn btn-info btn-sm">Ver</a></td>
                    <td><a href="{{ route('recommendation.edit', $recommendation->id) }}" class="btn btn-success btn-sm">Editar</a></td>
                    <td>
                        <form action="{{ route('recommendation.destroy', $recommendation->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar?')">
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