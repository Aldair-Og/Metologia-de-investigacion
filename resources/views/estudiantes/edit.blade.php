@extends('adminlte::page')

@section('title', 'Editar Estudiante')

@section('content_header')
    <h1>Editar Estudiante</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Modificar datos del estudiante</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" value="{{ $estudiante->nombre }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" id="apellido" value="{{ $estudiante->apellido }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="cedula">Cédula:</label>
                    <input type="text" name="cedula" id="cedula" value="{{ $estudiante->cedula }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input type="email" name="correo" id="correo" value="{{ $estudiante->correo }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="edad">Edad:</label>
                    <input type="number" name="edad" id="edad" value="{{ $estudiante->edad }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="carrera">Carrera:</label>
                    <input type="text" name="carrera" id="carrera" value="{{ $estudiante->carrera }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop
