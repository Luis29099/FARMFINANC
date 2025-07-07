@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Producciones Animales</h1>

    <a href="{{ route('animalproduction.create') }}" class="btn btn-warning mb-3">Crear</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Cantidad</th>
                <th>Detalles</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($animalproductions as $animalproduction)
                <tr>
                    <td>{{ $animalproduction->id }}</td>
                    <td>{{ $animalproduction->type }}</td>
                    <td>{{ $animalproduction->quantity }}</td>
                    <td><a href="{{ route('animalproduction.show', $animalproduction->id) }}" class="btn btn-info btn-sm">Ver</a></td>
                    <td><a href="{{ route('animalproduction.edit', $animalproduction->id) }}" class="btn btn-success btn-sm">Editar</a></td>
                    <td>
                        <form action="{{ route('animalproduction.destroy', $animalproduction->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar?')">
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