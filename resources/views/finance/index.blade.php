@extends('layouts.app')

@section('content')
<div class="container bg-secondary text-white p-4 rounded">
    <h1 class="mb-4">Lista de Finanzas</h1>

    <a href="{{ route('finance.create') }}" class="btn btn-success mb-3">Crear</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Ingresos</th>
                <th>Gastos</th>
                <th>Ganancias</th>
                <th>Fecha</th>
                <th>Detalles</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($finances as $finance)
                <tr>
                    <td>{{ $finance->id }}</td>
                    <td>{{ $finance->income }}</td>
                    <td>{{ $finance->expense }}</td>
                    <td>{{ $finance->profit }}</td>
                    <td>{{ $finance->date }}</td>
                    <td><a href="{{ route('finance.show', $finance->id) }}" class="btn btn-info btn-sm">Ver</a></td>
                    <td><a href="{{ route('finance.edit', $finance->id) }}" class="btn btn-success btn-sm">Editar</a></td>
                    <td>
                        <form action="{{ route('finance.destroy', $finance->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar?')">
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