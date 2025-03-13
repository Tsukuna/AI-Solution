<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '1234567890',
            'company' => 'ABC Corp',
            'country' => 'Canada',
            'job_title' => 'Software Developer',
            'job_detail' => 'Developing web applications',
            'status' => 'Pending',
            'created_at' => Carbon::createFromFormat('Y-m-d', '2025-03-12'),
        ]);

        Contact::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'phone' => '2345678901',
            'company' => 'XYZ Ltd.',
            'country' => 'United Kingdom',
            'job_title' => 'Project Manager',
            'job_detail' => 'Managing software projects',
            'status' => 'In Progress',
            'created_at' => Carbon::createFromFormat('Y-m-d', '2025-03-10'),
        ]);

        Contact::create([
            'name' => 'Emily Johnson',
            'email' => 'emily.johnson@example.com',
            'phone' => '3456789012',
            'company' => 'Global Tech',
            'country' => 'Canada',
            'job_title' => 'UI/UX Designer',
            'job_detail' => 'Designing user interfaces',
            'status' => 'Pending',
            'created_at' => Carbon::createFromFormat('Y-m-d', '2025-03-05'),
        ]);

        Contact::create([
            'name' => 'Michael Brown',
            'email' => 'michael.brown@example.com',
            'phone' => '4567890123',
            'company' => 'Tech Solutions',
            'country' => 'Australia',
            'job_title' => 'Systems Analyst',
            'job_detail' => 'Analyzing IT systems',
            'status' => 'Resolved',
            'created_at' => Carbon::createFromFormat('Y-m-d', '2025-03-15'),
        ]);

        Contact::create([
            'name' => 'Sarah Lee',
            'email' => 'sarah.lee@example.com',
            'phone' => '5678901234',
            'company' => 'Innovative Systems',
            'country' => 'India',
            'job_title' => 'Business Analyst',
            'job_detail' => 'Gathering business requirements',
            'status' => 'Follow Up',
            'created_at' => Carbon::createFromFormat('Y-m-d', '2025-03-01'),
        ]);
    }
}
