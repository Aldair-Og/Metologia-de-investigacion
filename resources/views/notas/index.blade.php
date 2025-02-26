@extends('adminlte::page')

@section('title', 'Lista de Notas')

@section('content_header')
    <h1>Lista de Notas</h1>
@stop

@section('content')
    <a href="{{ route('notas.create') }}" class="btn btn-primary mb-3">Agregar Nota</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Asignatura</th>
                <th>Nota</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notas as $nota)
                <tr>
                    <td>{{ $nota->estudiante->nombre }} {{ $nota->estudiante->apellido }}</td>
                    <td>{{ $nota->asignatura }}</td>
                    <td>{{ $nota->nota }}</td>
                    <td>
                        <a href="{{ route('notas.edit', $nota->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('notas.destroy', $nota->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar nota?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
