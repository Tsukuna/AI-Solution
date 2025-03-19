@extends('layouts.layout')

@section('content')
<div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8 mt-20">

    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-lg">

        <div class="text-center p-6">
            @if (session('success'))
          <div id="alert-3" class="flex items-center p-4 mb-4 text-purple-800 rounded-lg bg-purple-50" role="alert">
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
            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3" alt="Feedback Banner" class="w-full h-48 object-cover rounded-lg hover:opacity-90 transition-opacity duration-300">
            <h1 class="mt-6 text-3xl font-bold text-gray-900">Share Your Feedback</h1>
            <p class="mt-2 text-gray-600">Help us improve by sharing your thoughts</p>
        </div>

        <form class="space-y-6 p-8" id="feedbackForm" action="{{route('feedback.store')}}" method="POST">
            @csrf
            <div>
                <label class="block text-sm font-body text-gray-700">Full Name</label>
                <input type="text" name="full_name" minlength="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="John Doe">
                @error('full_name')
                <p class="mt-2 text-sm text-red-600 flex items-center">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    {{ $message }}
                </p>
            @enderror
            </div>

            <div>
                <label class="block text-sm font-body text-gray-700">Email Address</label>
                <input type="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="you@example.com">
                @error('email')
                <p class="mt-2 text-sm text-red-600 flex items-center">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    {{ $message }}
                </p>
            @enderror
            </div>

            <div>
                <label class="block text-sm font-body text-gray-700">Category</label>
                <select name="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    <option>General Feedback</option>
                    <option>Billing Issue</option>
                    <option>Customer Service</option>
                    <option>Technical Support</option>
                </select>
                @error('category')
                <p class="mt-2 text-sm text-red-600 flex items-center">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    {{ $message }}
                </p>
            @enderror
            </div>


                <div>
                    <label class="block mb-2 text-sm font-body text-gray-900">Rating</label>
                    <select name="rating"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="1">1 out of 5 - Very Poor</option>
                        <option value="2">2 out of 5 - Poor</option>
                        <option value="3">3 out of 5 - Average</option>
                        <option value="4">4 out of 5 - Good</option>
                        <option value="5">5 out of 5 - Excellent</option>
                      </select>
                      @error('rating')
                      <p class="mt-2 text-sm text-red-600 flex items-center">
                          <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                          </svg>
                          {{ $message }}
                      </p>
                  @enderror
                </div>

            <div>
                <label class="block text-sm font-body text-gray-700">Your Feedback</label>
                <textarea name="feedback"  maxlength="500" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Please share your detailed feedback here..."></textarea>
                @error('feedback')
                <p class="mt-2 text-sm text-red-600 flex items-center">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    {{ $message }}
                </p>
            @enderror
            </div>

            <div>
                <button type="submit"
                    class="w-full py-3 px-5 text-sm font-body text-white bg-primary-600 rounded-lg shadow-lg hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-300">
                    Submit Feedback
                </button>
            </div>
        </form>
    </div>

      <!-- Overall Feedback Section -->
      <div class="max-w-3xl mx-auto bg-white mt-12 rounded-xl shadow-lg p-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Other Reviews</h2>

        <!-- Static Feedback Cards -->
        <div class="space-y-6">

         @foreach ($responses as $response)
         <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
            <h3 class="font-bold text-lg text-gray-900">{{$response->full_name}} <span class="text-sm text-gray-500">({{$response->category}})</span></h3>
            <div class="text-gray-700 mt-2">
                <p class="mb-2"><strong>Rating:</strong> {{$response->rating}}/5</p>
                <p class="mb-2"><strong>Email:</strong> {{$response->email}}</p>
                <p><strong>Feedback:</strong> {{$response->feedback}}</p>
            </div>
        </div>
         @endforeach


        </div>
    </div>
</div>

<!-- Chatbox Button & Modal -->
<div class="fixed bottom-6 right-6 z-50">
    <!-- Chat Button -->
    <button id="chat-toggle" class="w-16 h-16 bg-primary-700 text-white rounded-full shadow-lg flex items-center justify-center hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 transition">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6M21 12c0 4.418-4.03 8-9 8a9.874 9.874 0 0 1-4-.856l-5 2 1.26-3.78A8.95 8.95 0 0 1 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
        </svg>
    </button>

    <!-- Chatbox Container (Initially Hidden) -->
    <div id="chat-container" class="hidden fixed bottom-20 right-6 w-80 h-[500px] bg-white rounded-lg shadow-lg border border-gray-300">
        <div class="flex justify-between items-center bg-primary-700 text-white px-4 py-3 rounded-t-lg">
            <h2 class="text-lg font-semibold">Chat with AI</h2>
            <button id="chat-close" class="text-white hover:text-gray-300">
                ✖
            </button>
        </div>
        <div class="w-full h-[450px]">
            <iframe
            src="https://www.chatbase.co/chatbot-iframe/TpGRvL1jk4yfDogoRCxH-"
            width="100%"
            style="height: 100%; border: none"
            class="rounded-b-lg"
            ></iframe>
        </div>
    </div>
</div>

@endsection


@section('javascript')
<!-- JavaScript for Chatbox Toggle -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const chatToggle = document.getElementById("chat-toggle");
        const chatContainer = document.getElementById("chat-container");
        const chatClose = document.getElementById("chat-close");

        chatToggle.addEventListener("click", function () {
            chatContainer.classList.toggle("hidden");
        });

        chatClose.addEventListener("click", function () {
            chatContainer.classList.add("hidden");
        });
    });
    </script>
@endsection
