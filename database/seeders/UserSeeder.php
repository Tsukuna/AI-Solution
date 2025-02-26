<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'htet1234lu@gmail.com',
            'verification_token' => null,
            'is_verified' => true,
            'password' => Hash::make('john1234doe!'), // Replace with your password
            'role' => 'admin',  // Default to 'user'
            'otp' => null,
        ]);
    }
}
