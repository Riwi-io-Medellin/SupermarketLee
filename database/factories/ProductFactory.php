<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->words(2, true), // Nombre aleatorio con 2 palabras
            'description' => $this->faker->sentence(), // Descripción aleatoria
            'unit_value' => $this->faker->randomFloat(2, 1, 1000), // Valor unitario aleatorio entre 1 y 1000
            'category_id' => Category::inRandomOrder()->first()->id ?? null, // Asigna una categoría aleatoria si existe, o null
        ];
    }
}
