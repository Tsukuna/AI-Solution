@extends('layouts.layout')

@section('content')

<section class="bg-white mt-24">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
    <div class="bg-white rounded-lg shadow-lg border border-gray-300 p-6 lg:p-10">

          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">
            Contact Us
          </h2>
          <p class="mb-8 lg:mb-16 font-body text-center text-gray-500 sm:text-xl">
            "Have questions about our innovative AI-powered solutions? Need assistance with our services or want to discuss your project requirements? Our team is here to help."
          </p>

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


          <form action="{{route('contact.store')}}" class="space-y-6" method="POST">
            @csrf
            <div>
              <label for="name" class="block mb-2 text-sm font-body text-gray-900">
                Name
              </label>
              <input
                type="text"
                value="{{ old('name') }}"
                id="name"
                name="name"
                class="block w-full p-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
              />
              @error('name')
                  <p class="mt-2 text-sm text-red-600 flex items-center">
                      <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                      </svg>
                      {{ $message }}
                  </p>
              @enderror
            </div>
            <div>
                <label for="email-address-icon" class="block mb-2 text-sm font-body text-gray-900">Email</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                      <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                      </svg>
                    </div>
                    <input
                        type="text"
                        value="{{old('email')}}"
                        name="email"
                        id="email-address-icon"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 " placeholder="name@gmail.com">
                  </div>
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
              <label for="phone" class="block mb-2 text-sm font-body text-gray-900">
                Phone Number
              </label>
              <input
                type="text"
                value="{{old('phone')}}"
                name="phone"
                id="phone"
                class="block w-full p-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
              />
              @error('phone')
              <p class="mt-2 text-sm text-red-600 flex items-center">
                  <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  {{ $message }}
              </p>
              @enderror
            </div>
            <div>
              <label for="company" class="block mb-2 text-sm font-body text-gray-900">
                Company Name
              </label>
              <input
                type="text"
                value="{{old('company')}}"
                name="company"
                id="company"
                class="block w-full p-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
              />
              @error('company')
              <p class="mt-2 text-sm text-red-600 flex items-center">
                  <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  {{ $message }}
              </p>
              @enderror
            </div>
            <div>
              <label for="country" class="block mb-2 text-sm font-body text-gray-900">
                Country
              </label>
              <select
                id="country" name="country"
                class="block w-full p-3 text-sm text-gray-700 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
              >
              <option>Please Select</option>
               @foreach ($countries as $country)
               <option value="{{$country}}">{{$country}}</option>
               @endforeach
              </select>
              @error('country')
              <p class="mt-2 text-sm text-red-600 flex items-center">
                  <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  {{ $message }}
              </p>
              @enderror
            </div>
            <div>
              <label for="job-title" class="block mb-2 text-sm font-body text-gray-900">
                Job Title
              </label>
              <input
                type="text"
                value="{{old('job_title')}}"
                name="job_title"
                id="job-title"
                class="block w-full p-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
              />
              @error('job_title')
              <p class="mt-2 text-sm text-red-600 flex items-center">
                  <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  {{ $message }}
              </p>
              @enderror
            </div>
            <div>
              <label for="details" class="block mb-2 text-sm font-body text-gray-900">
                Job Details
              </label>
              <textarea
                id="details"
                rows="6"
                name="job_detail"
                class="block w-full p-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                placeholder="Provide details about your job..."
              >{{old('job_detail')}}</textarea>
              @error('job_detail')
              <p class="mt-2 text-sm text-red-600 flex items-center">
                  <svg class="flex-shrink-0 inline w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                  </svg>
                  {{ $message }}
              </p>
              @enderror
            </div>
            <button
            type="submit"
            class="py-3 px-5 text-sm font-body text-white bg-primary-600 rounded-lg shadow-lg hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-300"
          >
            Send Message
          </button>
          </form>
    </div>
      </div>

</section>

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
