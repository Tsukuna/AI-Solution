@extends('layouts.layout')

@section('content')

<section class="bg-white mt-12">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-8 mb-4">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">
               Our Blogs
              </h2>
            <p class="font-body text-gray-500 sm:text-xl">At AI-Solution, we share valuable insights on how AI-driven innovations are transforming industries and improving the digital employee experience</p>
        </div>


        <!-- Search Bar -->
        <div class="mb-8 max-w-screen-md mx-auto">
            <form action="{{route('blog.search')}}" enctype="multipart/form-data" method="GET" class="flex items-center max-w-md mx-auto space-x-2">
                @csrf
                <label for="default-search" class="mb-2 text-sm font-body text-gray-900 sr-only">Search</label>
                <input
                    type="search"
                    id="default-search"
                    name="query"
                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500"
                    placeholder="Search by article name or relevant..."
                    required
                />
                <button
                    type="submit"
                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-body rounded-lg text-sm px-4 py-2"
                >
                    Search
                </button>
            </form>
        </div>

        {{-- Blog Section --}}
        <div class="flex justify-center">
            <div class="grid gap-8 lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 justify-items-center">


                @foreach ($blogs as $blog)
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('storage/blogImage/'. $blog->image) }}" alt="AI Assistant" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$blog->title}}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">{{$blog->content}}</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-body text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
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
