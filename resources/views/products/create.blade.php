<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Crear Nuevo Producto</h1>

        <!-- Mostrar errores de validación si existen -->
        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario para crear un nuevo producto -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <form action="{{ route('products.store') }}" method="POST" class="px-8 py-8">
                @csrf

                <!-- Nombre del producto -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Nombre del Producto:</label>
                    <input type="text" name="name" id="name"
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                           value="{{ old('name') }}" placeholder="Escribe el nombre del producto" required>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Descripción del producto -->
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-bold mb-2">Descripción:</label>
                    <textarea name="description" id="description"
                              class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                              rows="4" placeholder="Escribe una descripción">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Valor unitario -->
                <div class="mb-4">
                    <label for="unit_value" class="block text-gray-700 font-bold mb-2">Valor Unitario:</label>
                    <input type="number" name="unit_value" id="unit_value" step="0.01"
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                           value="{{ old('unit_value') }}" placeholder="Escribe el valor unitario" required>
                    @error('unit_value')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Categoría del producto -->
                <div class="mb-6">
                    <label for="category_id" class="block text-gray-700 font-bold mb-2">Categoría:</label>
                    <select name="category_id" id="category_id"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500">
                        <option value="">Seleccionar Categoría</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Botones de acción -->
                <div class="flex justify-end">
                    <a href="{{ route('products.index') }}"
                       class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mr-2">Cancelar</a>
                    <button type="submit"
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Crear Producto</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
