@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Detalles</h2>

    <table class="table table-bordered">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Texto</th>
                <th>Fecha </th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $recommendation->id }}</td>
                <td>{{ $recommendation->text }}</td>
                <td>{{ $recommendation->date }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection