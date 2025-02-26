@extends('layouts.layout');

@section('content')
<div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8 mt-24">
    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-lg">
        <div class="text-center p-6">
            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3" alt="Feedback Banner" class="w-full h-48 object-cover rounded-lg hover:opacity-90 transition-opacity duration-300">
            <h1 class="mt-6 text-3xl font-bold text-gray-900">Share Your Feedback</h1>
            <p class="mt-2 text-gray-600">Help us improve by sharing your thoughts</p>
        </div>

        <form class="space-y-6 p-8" id="feedbackForm">
            <div>
                <label class="block text-sm font-body text-gray-700">Full Name</label>
                <input type="text" required minlength="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="John Doe">
            </div>

            <div>
                <label class="block text-sm font-body text-gray-700">Email Address</label>
                <input type="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="you@example.com">
            </div>

            <div>
                <label class="block text-sm font-body text-gray-700">Category</label>
                <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    <option>General Feedback</option>
                    <option>Bug Report</option>
                    <option>Feature Request</option>
                    <option>Other</option>
                </select>
            </div>

            <div class="flex items-center justify-between">
                <label class="text-sm font-body text-gray-700">Rating</label>
                <div class="flex gap-x-3 mt-1"> <!-- Adjust gap-x-* for spacing -->
                    @for ($i = 1; $i <= 5; $i++)
                        <button type="button" class="text-2xl text-gray-400 hover:text-yellow-400 focus:outline-none"
                            onclick="setRating({{ $i }})" onmouseover="previewRating({{ $i }})"
                            onmouseleave="resetRating()"
                            data-value="{{ $i }}">★</button>
                    @endfor
                </div>
                <input type="hidden" id="rating-value" name="rating" value="0">
            </div>
            <div>
                <label class="block text-sm font-body text-gray-700">Your Feedback</label>
                <textarea required maxlength="500" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Please share your detailed feedback here..."></textarea>
                <p class="mt-2 text-sm text-gray-500 text-right"><span id="charCount">0</span>/500</p>
            </div>

            <div>
                <button type="submit"
                    class="w-full py-3 px-5 text-sm font-body text-white bg-primary-600 rounded-lg shadow-lg hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-300">
                    Submit Feedback
                </button>
            </div>
        </form>
    </div>
</div>


@endsection


@section('javascript')
<script>
    let selectedRating = 0; // Holds the user's selected rating

    function setRating(rating) {
        selectedRating = rating;
        document.getElementById('rating-value').value = rating;
        updateStars(rating);
    }

    function previewRating(rating) {
        updateStars(rating);
    }

    function resetRating() {
        updateStars(selectedRating);
    }

    function updateStars(rating) {
        document.querySelectorAll('button[data-value]').forEach(button => {
            if (parseInt(button.getAttribute('data-value')) <= rating) {
                button.classList.add('text-yellow-400'); // Filled star
                button.classList.remove('text-gray-400'); // Remove empty star color
            } else {
                button.classList.add('text-gray-400'); // Empty star
                button.classList.remove('text-yellow-400'); // Remove filled star color
            }
        });
    }
</script>
@endsection
