<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Categories::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $categories = [
            [
                'name' => 'RCC Products',
                'slug' => 'rcc-products',
                'description' => 'Welcome to our comprehensive range of Reinforced Cement Concrete (RCC) products. We specialize in durable, versatile, and high-performance precast concrete solutions for a wide array of construction and landscaping needs. Our products are designed for superior strength, longevity, and ease of installation, offering excellent value for your projects.'
            ],
            ['name' => 'GRC Products', 'slug' => 'grc-products', 'description' => 'GRC is a high-performance composite material made from a mix of cement, aggregate, water, chemical admixtures, and high-strength alkali-resistant (AR) glass fibres. The inclusion of glass fibres gives GRC its remarkable flexural and tensile strength, allowing for the creation of lightweight, thin, and intricate designs.'],
            ['name' => 'Precast Construction', 'slug' => 'precast-construction', 'description' => 'Welcome to the future of construction. Our precast concrete solutions offer a revolutionary approach to building, delivering unparalleled efficiency, quality, and sustainability. Gone are the days of lengthy on-site concrete pouring and curing. With precast, building components are manufactured in a controlled factory environment, then transported and assembled on-site, dramatically accelerating project timelines and enhancing overall structural integrity.'],
        ];

        foreach ($categories as $category) {
            Categories::create($category);
        }
    }
}
