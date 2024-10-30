<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Detalles del Producto</h1>

        <div class="bg-white shadow-md rounded-lg overflow-hidden p-8">
            <!-- Nombre del producto -->
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $product->name }}</h2>
            </div>

            <!-- Descripción del producto -->
            <div class="mb-4">
                <strong class="block text-gray-700 mb-2">Descripción:</strong>
                <p class="text-gray-600">{{ $product->description ?: 'No hay descripción disponible.' }}</p>
            </div>

            <!-- Valor unitario -->
            <div class="mb-4">
                <strong class="block text-gray-700 mb-2">Valor Unitario:</strong>
                <p class="text-gray-600">${{ $product->formatted_unit_value }}</p>
            </div>

            <!-- Categoría -->
            <div class="mb-4">
                <strong class="block text-gray-700 mb-2">Categoría:</strong>
                <p class="text-gray-600">{{ $product->category ? $product->category->name : 'Sin categoría asignada.' }}</p>
            </div>

            <!-- Creación y última actualización -->
            <div class="mb-4">
                <strong class="block text-gray-700 mb-2">Creado en:</strong>
                <p class="text-gray-600">{{ $product->created_at->format('d/m/Y H:i') }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700 mb-2">Última actualización:</strong>
                <p class="text-gray-600">{{ $product->updated_at->format('d/m/Y H:i') }}</p>
            </div>

            <!-- Botones de acción -->
            <div class="flex justify-end mt-6">
                <a href="{{ route('products.edit', $product->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 mr-2">
                    Editar Producto
                </a>
                <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Volver a Productos
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
