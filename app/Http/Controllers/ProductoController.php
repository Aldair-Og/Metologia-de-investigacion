<?php

// app/Http/Controllers/ProductoController.php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Mostrar todos los productos
    public function index()
    {
        // Obtener todos los productos
        $productos = Producto::all();
        
        // Pasar los productos a la vista
        return view('productos.index', compact('productos'));
    }

    // Mostrar el formulario para crear un nuevo producto
    public function create()
    {
        return view('productos.create');
    }

    // Guardar un nuevo producto
    public function store(Request $request)
    {
        // Validación de los campos del formulario
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'descripcion' => 'required',
        ]);

        // Crear el producto usando los datos validados
        Producto::create($request->all());

        // Redirigir al listado de productos con un mensaje de éxito
        return redirect()->route('productos.index')
            ->with('success', 'Producto creado exitosamente.');
    }

    // Mostrar el formulario para editar un producto
    public function edit($id)
    {
        // Buscar el producto por su ID
        $producto = Producto::findOrFail($id);

        // Pasar el producto a la vista de edición
        return view('productos.edit', compact('producto'));
    }

    // Actualizar un producto
    public function update(Request $request, $id)
    {
        // Validación de los campos del formulario
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'descripcion' => 'required',
        ]);

        // Buscar el producto por su ID
        $producto = Producto::findOrFail($id);

        // Actualizar el producto con los nuevos datos
        $producto->update($request->all());

        // Redirigir al listado de productos con un mensaje de éxito
        return redirect()->route('productos.index')
            ->with('success', 'Producto actualizado exitosamente.');
    }

    // Eliminar un producto
    public function destroy($id)
    {
        // Buscar el producto por su ID
        $producto = Producto::findOrFail($id);

        // Eliminar el producto
        $producto->delete();

        // Redirigir al listado de productos con un mensaje de éxito
        return redirect()->route('productos.index')
            ->with('success', 'Producto eliminado exitosamente.');
    }
}
