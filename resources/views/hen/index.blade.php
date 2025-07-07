@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Gallinas</h1>

    <a href="{{ route('hen.create') }}" class="btn btn-warning mb-3">Crear</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Raza</th>
                <th>Produccion de huevos diarias</th>
                <th>Produccion total de huevos en el mes</th>
                <th>Detalles</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hens as $hen)
                <tr>
                    <td>{{ $hen->id }}</td>
                    <td>{{ $hen->breed }}</td>
                    <td>{{ $hen->daily_egg_production }}</td>
                    <td>{{ $hen->monthly_egg_total }}</td>
                    
                    <td><a href="{{ route('hen.show', $hen->id) }}" class="btn btn-info btn-sm">Ver</a></td>
                    <td><a href="{{ route('hen.edit', $hen->id) }}" class="btn btn-success btn-sm">Editar</a></td>
                    <td>
                        <form action="{{ route('hen.destroy', $hen->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar?')">
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