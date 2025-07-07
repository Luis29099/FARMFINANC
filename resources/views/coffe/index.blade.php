@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Cafe</h1>

    <a href="{{ route('coffe.create') }}" class="btn btn-warning mb-3">Crear</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Variedad</th>
                <th>Produccion estimada</th>
                <th>Detalles</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coffes as $coffe)
                <tr>
                    <td>{{ $coffe->id }}</td>
                    <td>{{ $coffe->variety }}</td>
                    <td>{{ $coffe->estimated_production }}</td>
                   
                    <td><a href="{{ route('coffe.show', $coffe->id) }}" class="btn btn-info btn-sm">Ver</a></td>
                    <td><a href="{{ route('coffe.edit', $coffe->id) }}" class="btn btn-success btn-sm">Editar</a></td>
                    <td>
                        <form action="{{ route('coffe.destroy', $coffe->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar?')">
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