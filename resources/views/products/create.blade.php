@extends('layouts.personal')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-6">Create New Product</h1>

    <!-- Mostrar errores de validación si existen -->
    @if($errors->any())
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulario para crear un nuevo producto -->
    <form action="{{ route('products.store') }}" method="POST" class="bg-white shadow-md rounded p-6">
        @csrf

        <!-- Nombre del producto -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Product Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}"
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                   required>
        </div>

        <!-- Descripción del producto -->
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
            <textarea name="description" id="description" rows="4"
                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description') }}</textarea>
        </div>

        <!-- Valor unitario -->
        <div class="mb-4">
            <label for="unit_value" class="block text-gray-700 font-bold mb-2">Unit Value</label>
            <input type="number" name="unit_value" id="unit_value" step="0.01" value="{{ old('unit_value') }}"
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                   required>
        </div>

        <!-- Categoría del producto -->
        <div class="mb-4">
            <label for="category_id" class="block text-gray-700 font-bold mb-2">Category</label>
            <select name="category_id" id="category_id"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="">No Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Botón para crear -->
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Create Product
            </button>
            <a href="{{ route('products.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
