@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Detalles de Producción Animal</h2>

    <table class="table table-bordered">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Gmail</th>
                <th>Contraseña</th>
                <th>Fecha de Nacimiento</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->birth_date }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection