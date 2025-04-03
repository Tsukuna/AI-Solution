<?php

namespace Database\Seeders;

use App\Models\Response;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Response::create([
            'full_name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'category' => 'General Feedback',
            'rating' => 5,
            'feedback' => 'I love the overall user experience and the intuitive interface of the app!',
        ]);

        Response::create([
            'full_name' => 'Sarah Lee',
            'email' => 'sarahlee@example.com',
            'category' => 'Billing Issue',
            'rating' => 2,
            'feedback' => 'I was charged incorrectly. Can you please check my invoice?',
        ]);

        Response::create([
            'full_name' => 'Michael Brown',
            'email' => 'michaelbrown@example.com',
            'category' => 'Customer Service',
            'rating' => 4,
            'feedback' => 'The customer service team was very helpful and polite, but the response time was a bit slow.',
        ]);

        Response::create([
            'full_name' => 'Sophie Green',
            'email' => 'sophiegreen@example.com',
            'category' => 'Technical Support',  
            'rating' => 3,
            'feedback' => 'The app keeps crashing when I try to upload my profile picture. Need a fix for this issue.',
        ]);

    }
}
