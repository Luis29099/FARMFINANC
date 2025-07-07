@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Ganado Vacuno</h1>

    <a href="{{ route('cattle.create') }}" class="btn btn-warning mb-3">Crear</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Raza</th>
                <th>Peso Promedio</th>
                {{-- <th>Uso</th> --}}
                <th>Detalles</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cattles as $cattle)
                <tr>
                    <td>{{ $cattle->id }}</td>
                    <td>{{ $cattle->breed }}</td>
                    <td>{{ $cattle->average_weight }}</td>
                    {{-- <td>{{ $cattle->use }}</td> --}}
                    <td><a href="{{ route('cattle.show', $cattle->id) }}" class="btn btn-info btn-sm">Ver</a></td>
                    <td><a href="{{ route('cattle.edit', $cattle->id) }}" class="btn btn-success btn-sm">Editar</a></td>
                    <td>
                        <form action="{{ route('cattle.destroy', $cattle->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar?')">
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