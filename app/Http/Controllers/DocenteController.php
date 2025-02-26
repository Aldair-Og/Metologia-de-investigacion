<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    // Mostrar todos los docentes
    public function index()
    {
        $docentes = Docente::all();
        return view('docentes.index', compact('docentes'));
    }

    // Mostrar el formulario de creación
    public function create()
    {
        return view('docentes.create');
    }

    // Guardar un nuevo docente
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required|unique:docentes',
            'correo' => 'required|email|unique:docentes',
            'especialidad' => 'required',
        ]);

        Docente::create($request->all());

        return redirect()->route('docentes.index')
            ->with('success', 'Docente creado exitosamente.');
    }

    // Mostrar el formulario de edición
    public function edit($id)
    {
        $docente = Docente::findOrFail($id);
        return view('docentes.edit', compact('docente'));
    }

    // Actualizar docente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required|unique:docentes,cedula,' . $id,
            'correo' => 'required|email|unique:docentes,correo,' . $id,
            'especialidad' => 'required',
        ]);

        $docente = Docente::findOrFail($id);
        $docente->update($request->all());

        return redirect()->route('docentes.index')
            ->with('success', 'Docente actualizado exitosamente.');
    }

    // Eliminar docente
    public function destroy($id)
    {
        $docente = Docente::findOrFail($id);
        $docente->delete();

        return redirect()->route('docentes.index')
            ->with('success', 'Docente eliminado exitosamente.');
    }
}
