@extends('layouts.personal')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Editar Categoría</h1>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <form action="{{ route('categories.update', $category->id) }}" method="POST" class="px-8 py-8">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Nombre de la Categoría:</label>
                    <input type="text" name="name" id="name"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        value="{{ old('name', $category->name) }}" required>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="block text-gray-700 font-bold mb-2">Descripción:</label>
                    <textarea name="description" id="description"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                        rows="4">{{ old('description', $category->description) }}</textarea>
                    @error('description')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('categories.index') }}"
                        class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mr-2">Cancelar</a>
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Actualizar Categoría</button>
                </div>
            </form>
        </div>
    </div>
@endsection

