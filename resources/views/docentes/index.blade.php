@extends('adminlte::page')

@section('title', 'Lista de Docentes')

@section('content_header')
    <h1>Lista de Docentes</h1>
@stop

@section('content')
    <a href="{{ route('docentes.create') }}" class="btn btn-primary">Agregar Docente</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
                <th>Correo</th>
                <th>Especialidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($docentes as $docente)
                <tr>
                    <td>{{ $docente->nombre }}</td>
                    <td>{{ $docente->apellido }}</td>
                    <td>{{ $docente->cedula }}</td>
                    <td>{{ $docente->correo }}</td>
                    <td>{{ $docente->especialidad }}</td>
                    <td>
                        <a href="{{ route('docentes.edit', $docente->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('docentes.destroy', $docente->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
