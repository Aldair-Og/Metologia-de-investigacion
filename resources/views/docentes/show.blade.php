@extends('adminlte::page')

@section('title', 'Detalles del Docente')

@section('content_header')
    <h1>Detalles del Docente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">{{ $docente->nombre }} {{ $docente->apellido }}</h3>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item"><strong>Cédula:</strong> {{ $docente->cedula }}</li>
                <li class="list-group-item"><strong>Correo:</strong> {{ $docente->correo }}</li>
                <li class="list-group-item"><strong>Especialidad:</strong> {{ $docente->especialidad }}</li>
            </ul>
        </div>
        <div class="card-footer">
            <a href="{{ route('docentes.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Volver</a>
            <a href="{{ route('docentes.edit', $docente->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
            <form action="{{ route('docentes.destroy', $docente->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este docente?')">
                    <i class="fas fa-trash"></i> Eliminar
                </button>
            </form>
        </div>
    </div>
@stop
