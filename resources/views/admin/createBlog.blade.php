@extends('layouts.adminLayout')

@section('admin_content')

<div class="p-6 sm:ml-64 mt-14">

    <!-- Blog Creation Section -->
    <div class="flex flex-col sm:flex-row justify-between items-center pb-4 space-y-4 sm:space-y-0">
        <h2 class="text-xl font-semibold text-gray-900">Create Blog Post</h2>
    </div>

    @if (session('success'))
    <div id="alert-3" class="w-1/2 flex items-center p-4 mb-4 text-purple-800 rounded-lg bg-purple-50" role="alert">
        <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div class="ms-3 text-sm font-body">
            {{ session('success') }}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-purple-50 text-purple-500 rounded-lg focus:ring-2 focus:ring-purple-400 p-1.5 hover:bg-purple-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
  @endif

    <!-- Form Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

        <!-- Left Column (Form) -->
        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-md">
            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Title Input -->
                <div class="mb-4">
                    <label for="title" class="block text-sm font-body text-gray-700">Title</label>
                    <input type="text" name="title" id="title" class="w-full p-3 mt-2 text-sm border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500" placeholder="Enter blog title">
                    @error('title')
                    <p class="mt-2 text-sm text-red-600 flex items-center">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        {{ $message }}
                    </p>
                @enderror
                </div>

                <!-- Content Input -->
                <div class="mb-4">
                    <label for="content" class="block text-sm font-body text-gray-700">Content</label>
                    <textarea name="content" id="content" rows="5" class="w-full p-3 mt-2 text-sm border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500" placeholder="Enter blog content"></textarea>
                    @error('content')
                    <p class="mt-2 text-sm text-red-600 flex items-center">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        {{ $message }}
                    </p>
                @enderror
                </div>

                <!-- Image Upload -->
                <div class="mb-4">
                    <label for="image" class="block text-sm font-body text-gray-700">Upload Image</label>
                    <input type="file" name="image" id="image" accept="image/*" class="w-full p-3 mt-2 text-sm border border-gray-300 rounded-lg">
                    @error('image')
                    <p class="mt-2 text-sm text-red-600 flex items-center">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        {{ $message }}
                    </p>
                @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="px-6 py-3 text-white bg-primary-600 rounded-lg hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300">Create Post</button>
                </div>
            </form>
        </div>

        <!-- Right Column (Image Preview) -->
        <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-md flex justify-center items-center">
            <div class="w-full h-full flex flex-col items-center justify-center">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Image Preview</h3>
                <img id="imagePreview" src="#" alt="Image Preview" class="hidden w-full h-auto rounded-lg">
            </div>
        </div>
    </div>
</div>




@endsection

@section('admin_js')
<script>
    // Image Preview Script
    document.getElementById('image').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.src = e.target.result;
            imagePreview.classList.remove('hidden');
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection
