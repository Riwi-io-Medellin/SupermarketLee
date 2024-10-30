<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Detalles de la Categoría</h1>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="px-8 py-6">

                <div class="mb-4">
                    <h2 class="text-2xl font-bold text-gray-700 mb-2">Nombre de la Categoría:</h2>
                    <p class="text-gray-600 text-lg">{{ $category->name }}</p>
                </div>


                <div class="mb-4">
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Descripción:</h3>
                    <p class="text-gray-600 text-lg">{{ $category->description ? $category->description : 'No tiene descripción' }}</p>
                </div>


                <div class="mb-4">
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Creada el:</h3>
                    <p class="text-gray-600 text-lg">{{ $category->created_at->format('d-m-Y H:i:s') }}</p>
                </div>


                <div class="mb-4">
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Última actualización:</h3>
                    <p class="text-gray-600 text-lg">{{ $category->updated_at->diffForHumans() }}</p>
                </div>


                <div class="flex justify-end mt-6">
                    <a href="{{ route('categories.index') }}"
                        class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mr-2">Volver a la lista</a>
                    <a href="{{ route('categories.edit', $category->id) }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Editar Categoría</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
