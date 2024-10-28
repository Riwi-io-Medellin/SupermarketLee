@extends('layouts.personal')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-6">Products List</h1>

    <!-- Mensaje de éxito si existe -->
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Botón para crear un nuevo producto -->
    <div class="mb-6">
        <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create New Product
        </a>
    </div>

    <!-- Tabla de productos -->
    <div class="bg-white shadow-md rounded my-6">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-200 font-bold text-left">Name</th>
                    <th class="py-2 px-4 bg-gray-200 font-bold text-left">Description</th>
                    <th class="py-2 px-4 bg-gray-200 font-bold text-left">Unit Value</th>
                    <th class="py-2 px-4 bg-gray-200 font-bold text-left">Category</th>
                    <th class="py-2 px-4 bg-gray-200 font-bold text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td class="border px-4 py-2">{{ $product->name }}</td>
                        <td class="border px-4 py-2">{{ $product->description }}</td>
                        <td class="border px-4 py-2">{{ $product->formatted_unit_value }}</td>
                        <td class="border px-4 py-2">
                            {{ $product->category ? $product->category->name : 'No Category' }}
                        </td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('products.edit', $product) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">
                                Edit
                            </a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded"
                                    onclick="return confirm('Are you sure you want to delete this product?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="border px-4 py-2 text-center">No products found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
