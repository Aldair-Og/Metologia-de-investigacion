@extends('adminlte::page')

@section('title', 'Crear Nuevo Docente')

@section('content_header')
    <h1>Crear Nuevo Docente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ingrese los datos del docente</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('docentes.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="cedula">Cédula:</label>
                    <input type="text" name="cedula" id="cedula" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input type="email" name="correo" id="correo" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="especialidad">Especialidad:</label>
                    <input type="text" name="especialidad" id="especialidad" class="form-control" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ route('docentes.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop
