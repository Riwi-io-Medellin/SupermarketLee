@extends('layouts.personal')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-6">Product Details</h1>

    <!-- Detalles del producto -->
    <div class="bg-white shadow-md rounded p-6">
        <h2 class="text-xl font-bold mb-4">{{ $product->name }}</h2>

        <div class="mb-4">
            <strong>Description:</strong> 
            <p>{{ $product->description ?: 'No description available.' }}</p>
        </div>

        <div class="mb-4">
            <strong>Unit Value:</strong> 
            <p>{{ $product->formatted_unit_value }}</p>
        </div>

        <div class="mb-4">
            <strong>Category:</strong> 
            <p>{{ $product->category ? $product->category->name : 'No category assigned.' }}</p>
        </div>

        <!-- Botones de acciones -->
        <div class="mt-6">
            <a href="{{ route('products.edit', $product) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                Edit Product
            </a>
            <a href="{{ route('products.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Back to Products
            </a>
        </div>
    </div>
</div>
@endsection
