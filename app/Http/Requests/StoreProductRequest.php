<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:products,name', // El nombre debe ser único en la tabla products
            'description' => 'nullable|string', // Descripción opcional
            'unit_value' => 'required|numeric', // Valor unitario obligatorio y numérico
            'category_id' => 'nullable|exists:categories,id', // La categoría debe existir o ser null
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The product name is required.',
            'name.unique' => 'The product name must be unique.',
            'unit_value.required' => 'The unit value is required.',
            'unit_value.numeric' => 'The unit value must be a numeric value.',
            'category_id.exists' => 'The selected category is invalid.',
        ];
    }
}
