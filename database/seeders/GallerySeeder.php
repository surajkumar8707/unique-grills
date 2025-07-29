<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::truncate();

        $default_galleries = array(
            [
                'title' => 'Mountain Trekking Adventure',
                'image' => "assets/front/images/gallery/trek_1.jpg",
                'status' => true,
                'type' => 'trekking',
            ],
            [
                'title' => 'Wildlife Safari Tour',
                'image' => "assets/front/images/gallery/safari_1.jpg",
                'status' => true,
                'type' => 'safari',
            ],
            [
                'title' => 'Beach Holiday Escape',
                'image' => "assets/front/images/gallery/beach_1.jpg",
                'status' => true,
                'type' => 'beach',
            ],
            [
                'title' => 'Jungle Trekking Expedition',
                'image' => "assets/front/images/gallery/jungle_1.jpg",
                'status' => true,
                'type' => 'trekking',
            ],
        );

        if (count($default_galleries) > 0) {
            foreach ($default_galleries as $gallery) {
                Gallery::create($gallery);
            }
        }
    }
}
