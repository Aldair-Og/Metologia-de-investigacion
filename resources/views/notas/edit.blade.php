@extends('adminlte::page')

@section('title', 'Editar Nota')

@section('content_header')
    <h1>Editar Nota</h1>
@stop

@section('content')
    <form action="{{ route('notas.update', $nota->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Estudiante:</label>
            <select name="estudiante_id" class="form-control">
                @foreach($estudiantes as $estudiante)
                    <option value="{{ $estudiante->id }}" {{ $nota->estudiante_id == $estudiante->id ? 'selected' : '' }}>
                        {{ $estudiante->nombre }} {{ $estudiante->apellido }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Asignatura:</label>
            <input type="text" name="asignatura" class="form-control" value="{{ $nota->asignatura }}" required>
        </div>

        <div class="form-group">
            <label>Nota:</label>
            <input type="number" name="nota" class="form-control" value="{{ $nota->nota }}" min="0" max="10" step="0.1" required>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('notas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@stop
