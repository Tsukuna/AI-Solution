@extends('layouts.adminLayout')

@section('admin_content')

<div class="p-6 sm:ml-64 mt-14">
    <!-- User Details Section -->
    <div class="max-w-7xl mx-auto bg-white rounded-lg shadow-md p-8">

        <!-- User Info Header -->
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center">
                <div class="ml-4">
                    <h2 class="text-3xl font-bold text-gray-900">{{ $user->name }}</h2>
                    <p class="text-sm text-gray-500">{{ $user->job_title }} at {{ $user->company }}</p>
                </div>
            </div>
        </div>

        <!-- User Info Table -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
            <!-- Basic Information -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Detail</h3>
                <ul class="space-y-4 text-gray-600">
                    <li><strong>Email:</strong> {{ $user->email }}</li>
                    <li><strong>Phone:</strong> {{ $user->phone }}</li>
                    <li><strong>Country:</strong> {{ $user->country }}</li>
                    <li><strong>Job Title:</strong> {{ $user->job_title }}</li>
                    <li><strong>Company:</strong> {{ $user->company }}</li>
                </ul>
            </div>

            <!-- Job Details -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Job Details</h3>
                <p class="text-gray-600">{{ $user->job_detail }}</p>
            </div>
        </div>

        <!-- Actions Section -->
        <div class="mt-8 flex justify-end">
            <a href="{{route('dashboard.index')}}" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 mr-4">Back</a>
            <form action="{{route('contact.destroy',$user->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Delete</button>
            </form>
        </div>
    </div>
</div>

@endsection
