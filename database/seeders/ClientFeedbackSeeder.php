<?php

namespace Database\Seeders;

use App\Models\ClientFeedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientFeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feedbacks = [
            [
                'name' => "John",
                'location' => "America",
                'comment' => "Test Comment",
            ],
        ];

        foreach($feedbacks as $key => $feedback){
            ClientFeedback::create($feedback);
        }
    }
}
