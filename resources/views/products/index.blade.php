<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Products List</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4 shadow">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-end mb-4">
            <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Create New Product
            </a>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-300">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Unit
                            Value</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($products as $product)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->formatted_unit_value }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $product->category ? $product->category->name : 'No Category' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('products.show', $product->id) }}"
                                    class="text-blue-600 hover:text-blue-800">Details</a>
                                <a href="{{ route('products.edit', $product) }}"
                                    class="text-indigo-600 hover:text-indigo-800 ml-4">Edit</a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST"
                                    class="inline-block ml-4">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 whitespace-nowrap text-center text-gray-500">No products
                                found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4 flex justify-center">
            <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center space-x-1">
                {{-- Previous Page Link --}}
                @if ($products->onFirstPage())
                    <span class="px-4 py-2 bg-gray-200 text-gray-500 rounded-md">Anterior</span>
                @else
                    <a href="{{ $products->previousPageUrl() }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Anterior</a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($products->links()->elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <span class="px-4 py-2 bg-gray-200 text-gray-500 rounded-md">{{ $element }}</span>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $products->currentPage())
                                <span class="px-4 py-2 bg-blue-500 text-white rounded-md">{{ $page }}</span>
                            @else
                                <a href="{{ $url }}" class="px-4 py-2 bg-gray-200 text-gray-700 hover:bg-blue-500 hover:text-white rounded-md">{{ $page }}</a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($products->hasMorePages())
                    <a href="{{ $products->nextPageUrl() }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Siguiente</a>
                @else
                    <span class="px-4 py-2 bg-gray-200 text-gray-500 rounded-md">Siguiente</span>
                @endif
            </nav>
        </div>

    </div>
</x-app-layout>
