@extends('adminlte::page')

@section('title', 'Agregar Nota')

@section('content_header')
    <h1>Agregar Nota</h1>
@stop

@section('content')
    <form action="{{ route('notas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Estudiante:</label>
            <select name="estudiante_id" class="form-control">
                @foreach($estudiantes as $estudiante)
                    <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Asignatura:</label>
            <input type="text" name="asignatura" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Nota:</label>
            <input type="number" name="nota" class="form-control" min="0" max="10" step="0.1" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('notas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@stop
