<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtenemos todas las categorías
        $categories = Category::all();
        // Pasamos las categorías a la vista 'categories.index'
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Verifica si el usuario está autenticado y es administrador
        if (!Auth::check() || Auth::user()->role_id != 1) { // 1 corresponde al rol de 'admin'
            return redirect()->route('categories.index')->with('error', 'No tienes permiso para acceder a esta sección.');
        }
        // Retornamos la vista para crear una nueva categoría
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $validatedData = $request->validated();

        Category::create($validatedData);

        return redirect()->route('categories.index')->with('success', 'Categoría creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Obtenemos la categoría por ID
        $category = Category::findOrFail($id);
        // Mostramos la vista de detalles con la categoría específica
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Verifica si el usuario está autenticado y es administrador
        if (!Auth::check() || Auth::user()->role_id != 1) { // 1 corresponde al rol de 'admin'
            return redirect()->route('categories.index')->with('error', 'No tienes permiso para acceder a esta sección.');
        }

        // Obtenemos la categoría por ID
        $category = Category::findOrFail($id);
        // Retornamos la vista para editar la categoría
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        $validatedData = $request->validated();

        $category = Category::findOrFail($id);
        $category->update($validatedData);

        return redirect()->route('categories.index')->with('success', 'Categoría actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Verifica si el usuario está autenticado y es administrador
        if (!Auth::check() || Auth::user()->role_id != 1) { // 1 corresponde al rol de 'admin'
            return redirect()->route('categories.index')->with('error', 'No tienes permiso para acceder a esta sección.');
        }
        // Buscamos la categoría por ID y la eliminamos
        $category = Category::findOrFail($id);
        $category->delete();

        // Redirigimos a la lista de categorías con un mensaje de éxito
        return redirect()->route('categories.index')->with('success', 'Categoría eliminada con éxito.');
    }
}
