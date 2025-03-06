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
            'feedback' => 'The service is excellent, and I love the design of the application!',
        ]);

        Response::create([
            'full_name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'category' => 'Bug Report',
            'rating' => 3,
            'feedback' => 'I encountered a bug while trying to submit the form. The page crashes when I click submit.',
        ]);

        Response::create([
            'full_name' => 'Emily Johnson',
            'email' => 'emilyjohnson@example.com',
            'category' => 'Feature Request',
            'rating' => 4,
            'feedback' => 'It would be great to have a dark mode feature in the app.',
        ]);
    }
}
