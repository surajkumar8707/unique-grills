<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = database_path('seeders/data/categories_and_products/catalog_product.json');
        $json = \Illuminate\Support\Facades\File::get($jsonPath);
        $catalog_product = json_decode($json, true);

        foreach ($catalog_product as $category) {
            \App\Models\Categories::create([
                'id' => $category['id'],
                'name' => $category['name'],
                'slug' => $category['slug'],
                'description' => $category['description'] ?? null,
                'is_active' => $category['is_active'] ?? null,
            ]);
            foreach ($category['product'] as $product) {
                $product = \App\Models\Product::create([
                    'category_id' => $category['id'],
                    'name' => $product['name'],
                    'slug' => \Str::slug($product['name']),
                    'description' => $product['description'] ?? null,
                    'usage' => $product['usage'] ?? null,
                    'minimum_quantity' => $product['minimum_quantity'] ?? 5,
                    'size' => $product['size'] ?? null,
                    'price' => $product['price'] ?? 0,
                    // 'image' => "assets/front/images/products/rcc_flower_pots.avif",
                    'image' => $product['image'],
                    'is_active' => $product['is_active'] ?? 1,
                    'stock' => $product['stock'] ?? 10,
                    // 'sku' => $product['sku'] ?? null,
                    'meta_title' => $product['name'] ?? null,
                    'meta_description' => $product['description'] ?? null,
                    'meta_keywords' => $product['name'] ?? null,
                    'meta_image' => $default_image ?? null,
                ]);
            }
        }
    }
}
