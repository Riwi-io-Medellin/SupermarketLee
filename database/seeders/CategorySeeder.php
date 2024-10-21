<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'tecnologia',
                'description' => 'productos y servicios relacionados con la tecnología',
            ],
            [
                'name' => 'hogar',
                'description' => 'productos para el hogar y la decoración',
            ],
            [
                'name' => 'moda',
                'description' => 'ropa, accesorios y tendencias de moda',
            ],
            [
                'name' => 'alimentacion',
                'description' => 'comida, bebidas y productos alimenticios',
            ],
            [
                'name' => 'deportes',
                'description' => 'equipos, ropa y productos deportivos',
            ]
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(['name' => $category['name']], ['description' => $category['description']]);
        }
    }
}
