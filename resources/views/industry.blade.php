@extends('layouts.layout')

@section('content')
<section class="bg-white mt-24">
    <div class="text-center py-8">
        <h1 class="text-5xl font-extrabold text-gray-900">Industrial Solutions with AI</h1>
        <p class="mt-4 text-xl text-gray-500">Innovating the future of industries with AI-powered solutions to enhance the digital employee experience and drive innovation.</p>
    </div>
</section>

{{-- <span class="text-center py-8">
    <h2 class="text-5xl font-extrabold text-gray-900">Industries We Serve</h2>
</span> --}}

<!-- First Section -->
<section class="bg-white">
    <div class="flex flex-col md:grid md:grid-cols-2 gap-8 py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 sm:py-16 lg:px-6">
        <img class="w-full" src="{{asset('storage/photos/industry_2.jpg')}}" alt="AI-driven dashboard image">
        <div class="mt-4 md:mt-0 py-0 md:py-20">
            <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900">Transforming Industries with AI Tools</h2>
            <p class="mb-6 font-body text-gray-500 md:text-lg">AI-Solution empowers industries by leveraging cutting-edge AI tools that improve processes, enhance productivity, and create value for businesses worldwide.</p>
            <button type="button" class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-body rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                View Case Study
            </button>
        </div>
    </div>
</section>

<!-- Second Section -->
<section class="bg-white">
    <div class="flex flex-col-reverse md:grid md:grid-cols-2 gap-8 py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 sm:py-16 lg:px-6">
        <div class="mt-4 md:mt-0 py-0 md:py-20">
            <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900">Revolutionizing the Digital Employee Experience</h2>
            <p class="mb-6 font-body text-gray-500 md:text-lg">Our AI-powered virtual assistant is designed to streamline workplace processes, making tasks easier and enabling employees to focus on more important work.</p>
            <button type="button" class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-body rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                View Case Study
            </button>
        </div>
        <img class="w-full" src="{{asset('storage/photos/industry_3.jpg')}}" alt="AI-enhanced workflow image">
    </div>
</section>

<span class="text-center py-8">
    <h2 class="text-5xl font-extrabold text-gray-900">Our Technology</h2>
</span>

<!-- Third Section -->
<section class="bg-white">
    <div class="flex flex-col md:grid md:grid-cols-2 gap-8 py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 sm:py-16 lg:px-6">
        <img class="w-full" src="{{asset('storage/photos/industry_4.jpg')}}" alt="AI-driven technology image">
        <div class="mt-4 md:mt-0 py-0 md:py-20">
            <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900">Innovative AI Solutions for Better Tomorrow</h2>
            <p class="mb-6 font-body text-gray-500 md:text-lg">At AI-Solution, we integrate cutting-edge AI technology to create scalable solutions that optimize the digital workplace and support global innovation.</p>
            <button type="button" class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-body rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                View Case Study
            </button>
        </div>
    </div>
</section>

<!-- Fourth Section -->
<section class="bg-white">
    <div class="flex flex-col-reverse md:grid md:grid-cols-2 gap-8 py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 sm:py-16 lg:px-6">
        <div class="mt-4 md:mt-0 py-0 md:py-10">
            <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900">Empowering Global Impact with AI</h2>
            <p class="mb-6 font-body text-gray-500 md:text-lg">We are committed to transforming businesses globally, with AI solutions designed to support employees at work and make the digital workplace more efficient and human-centric.</p>
            <button type="button" class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-body rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                View Case Study
            </button>
        </div>
        <img class="w-full" src="{{asset('storage/photos/industry_1.jpg')}}" alt="AI-driven workplace solutions image">
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
