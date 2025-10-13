<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        Setting::truncate();

        // Seed new data
        Setting::create([
            'app_name' => 'Unique Grills Brochure',
            'email' => 'uniquegrills_58@yahoo.com',
            'whatsapp' => '8800495357',
            'gst' => '27AABFU0715H1ZF',
            'contact' => '+91 8800495357',
            'address' => 'D-328, MIDC, TTC Industrial Area, Behind Ibis Hotel, Turbhe, Navi Mumbai - 400705',
            'header_image' => "assets/front/images/header.png",
            // 'header_image' => NULL,
            'is_fresh' => 1,
        ]);
    }
}
