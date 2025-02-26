<!-- resources/views/estudiantes/show.blade.php -->

@extends('adminlte::page')

@section('title', 'Detalles del Estudiante')

@section('content_header')
    <h1>Detalles del Estudiante</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Cédula:</strong> {{ $estudiante->cedula }}</p>
            <p><strong>Correo:</strong> {{ $estudiante->correo }}</p>
            <p><strong>Edad:</strong> {{ $estudiante->edad }}</p>
            <p><strong>Carrera:</strong> {{ $estudiante->carrera }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('estudiantes.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>
@stop
