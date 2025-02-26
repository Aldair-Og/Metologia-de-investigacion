<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    // Mostrar todos los estudiantes
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    // Mostrar el formulario para crear un nuevo estudiante
    public function create()
    {
        return view('estudiantes.create');
    }

    // Guardar un nuevo estudiante
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required|unique:estudiantes',
            'correo' => 'required|email|unique:estudiantes',
            'edad' => 'required|integer',
            'carrera' => 'required',
        ]);

        // Crear el estudiante
        Estudiante::create($request->all());

        // Redirigir con mensaje
        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante creado exitosamente.');
    }

    // Mostrar el formulario para editar un estudiante
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        return view('estudiantes.edit', compact('estudiante'));
    }

    // Actualizar un estudiante
    public function update(Request $request, $id)
    {
        // Validar los datos
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required|unique:estudiantes,cedula,' . $id,
            'correo' => 'required|email|unique:estudiantes,correo,' . $id,
            'edad' => 'required|integer',
            'carrera' => 'required',
        ]);

        // Encontrar y actualizar el estudiante
        $estudiante = Estudiante::find($id);
        $estudiante->update($request->all());

        // Redirigir con mensaje
        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante actualizado exitosamente.');
    }

    // Eliminar un estudiante
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();

        return redirect()->route('estudiantes.index')
            ->with('success', 'Estudiante eliminado exitosamente.');
    }

    public function show($id)
    {
        // Buscar el estudiante por su ID
        $estudiante = Estudiante::findOrFail($id);

        // Retornar la vista con los detalles del estudiante
        return view('estudiantes.show', compact('estudiante'));
    }
}


