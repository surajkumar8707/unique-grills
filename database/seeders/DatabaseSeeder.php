<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            AdminSeeder::class,
            ContactSeeder::class,
            HomePageCarouselSeeder::class,
            SettingSeeder::class,
            SocialMediaLinkSeeder::class,
            GallerySeeder::class,
            CategoryProductSeeder::class,
            // CategoriesSeeder::class,
            // ProductSeeder::class,
        ]);
    }
}
