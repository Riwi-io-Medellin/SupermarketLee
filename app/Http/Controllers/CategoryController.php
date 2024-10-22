<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "ese metodo se encarga de mostrar el formulario de crear";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "este metodo se encarga de guardar la informacion en la base de datos";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "aca vamos a mostrar un elemento puntual de la base de datos";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "se encarga de buscar los datos de un elemento y luego los coloca el un formulario para su posterio actualizacion";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "este metodo se encarga de actualizar los datos en la base de datos";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "este metodo se encarga de eliminar un elemento de la base de datos";
    }
}
