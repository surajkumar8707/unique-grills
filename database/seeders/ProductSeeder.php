<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Product::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $data = [
            'RCC Products' => [
                ['name' => 'Grills', 'price' => 500.00, 'stock' => 100],
                ['name' => 'Baluster', 'price' => 300.00, 'stock' => 150],
            ],
            'GRC Products' => [
                ['name' => 'Pillar Column', 'price' => 1200.00, 'stock' => 80],
                ['name' => 'Capital', 'price' => 700.00, 'stock' => 60],
            ],
            'Precast Construction' => [
                ['name' => 'Beam', 'price' => 1500.00, 'stock' => 90],
                ['name' => 'Wall', 'price' => 2000.00, 'stock' => 75],
            ],
        ];

        foreach ($data as $categoryName => $products) {
            $category = Categories::where('name', $categoryName)->first();

            if (!$category) {
                continue; // Skip if category doesn't exist
            }

            foreach ($products as $item) {
                Product::create([
                    'name' => $item['name'],
                    'slug' => Str::slug($item['name']),
                    'description' => $item['name'] . ' description goes here.',
                    'price' => $item['price'],
                    'stock' => $item['stock'],
                    'sku' => strtoupper(Str::random(8)),
                    'is_active' => true,
                    'category_id' => $category->id,
                    // 'image' => 'images/products/default.png',
                    'image' => 'assets/front/images/image_not_available.jpg',
                    'meta_title' => $item['name'] . ' | Concrete Products',
                    'meta_description' => 'High quality ' . $item['name'] . ' at competitive prices.',
                    'meta_keywords' => strtolower($item['name']) . ', concrete, construction',
                    'meta_image' => 'images/products/meta_default.png',
                ]);
            }
        }
    }
}
