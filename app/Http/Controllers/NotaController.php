<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class NotaController extends Controller {
    public function index() {
        $notas = Nota::with('estudiante')->get();
        return view('notas.index', compact('notas'));
    }

    public function create() {
        $estudiantes = Estudiante::all();
        return view('notas.create', compact('estudiantes'));
    }

    public function store(Request $request) {
        $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',
            'asignatura' => 'required|string|max:255',
            'nota' => 'required|numeric|min:0|max:10',
        ]);

        Nota::create($request->all());
        return redirect()->route('notas.index')->with('success', 'Nota creada exitosamente.');
    }

    public function show(Nota $nota) {
        return view('notas.show', compact('nota'));
    }

    public function edit(Nota $nota) {
        $estudiantes = Estudiante::all();
        return view('notas.edit', compact('nota', 'estudiantes'));
    }

    public function update(Request $request, Nota $nota) {
        $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',
            'asignatura' => 'required|string|max:255',
            'nota' => 'required|numeric|min:0|max:10',
        ]);

        $nota->update($request->all());
        return redirect()->route('notas.index')->with('success', 'Nota actualizada.');
    }

    public function destroy(Nota $nota) {
        $nota->delete();
        return redirect()->route('notas.index')->with('success', 'Nota eliminada.');
    }
}
