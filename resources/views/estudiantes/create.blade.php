@extends('adminlte::page')

@section('title', 'Crear Estudiante')

@section('content_header')
    <h1>Crear Estudiante</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Ingrese los datos del estudiante</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('estudiantes.store') }}" method="POST">
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
                    <label for="edad">Edad:</label>
                    <input type="number" name="edad" id="edad" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="carrera">Carrera:</label>
                    <input type="text" name="carrera" id="carrera" class="form-control" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@stop
