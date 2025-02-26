@extends('adminlte::page')

@section('title', 'Editar Docente')

@section('content_header')
    <h1>Editar Docente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Modificar datos del docente</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('docentes.update', $docente->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" value="{{ $docente->nombre }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" id="apellido" value="{{ $docente->apellido }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="cedula">Cédula:</label>
                    <input type="text" name="cedula" id="cedula" value="{{ $docente->cedula }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input type="email" name="correo" id="correo" value="{{ $docente->correo }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="especialidad">Especialidad:</label>
                    <input type="text" name="especialidad" id="especialidad" value="{{ $docente->especialidad }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <a href="{{ route('docentes.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop
