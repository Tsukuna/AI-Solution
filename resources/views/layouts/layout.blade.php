<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AI Solution</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('storage/photos/logo.png') }}">

    <!-- Scripts and Styles -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
    @yield('styles')
<body class="flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav  id="navbar"  class="bg-white border-gray-200 fixed top-0 left-0 w-full z-50 transition-all duration-300">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="{{route('home')}}" class="flex items-center space-x-2 rtl:space-x-reverse">
        <img src="{{ asset('storage/photos/logo.png') }}" class="h-16 w-16" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap">AI Solution</span>
    </a>
    <div class="flex md:order-2">
        <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 rounded-lg text-sm p-2.5 me-1">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
        <span class="sr-only">Search</span>
        </button>
        <div class="relative hidden md:block">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
            <span class="sr-only">Search icon</span>
        </div>
        <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-purple-700 focus:border-purple-700" placeholder="Search...">
        </div>
        <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-search" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
    </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
        <div class="relative mt-3 md:hidden">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
            </div>
            <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search...">
        </div>
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-body border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
            <li class="group">
            <a href="{{route('about')}}"
            class="block font-medium py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-purple-700 md:p-0 md:dark:hover:text-purple-500 md:dark:hover:bg-transparent relative"
            >
                About Us
                <span
                    class="absolute left-0 bottom-0 w-0 h-[2px] bg-purple-700 transition-all duration-300 group-hover:w-full"
                ></span>
            </a>
        </li>
        <li class="group relative">
            <button
                id="dropdownNavbarLink"
                data-dropdown-toggle="dropdownNavbar"
                class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-700 md:p-0 md:w-auto font-medium md:dark:hover:text-purple-500 md:dark:hover:bg-transparent relative"
            >
                Business
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                <!-- Line Under LI -->
                <span
                    class="absolute left-0 bottom-0 w-0 h-[2px] bg-purple-700 transition-all duration-300 group-hover:w-full"
                ></span>
            </button>
            <!-- Dropdown menu -->
            <div
                id="dropdownNavbar"
                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 group-hover:block absolute top-full left-0"
            >
                <ul class="py-2 text-sm text-gray-700">
                    <li>
                        <a href="{{route('industry')}}" class="block px-4 py-2 hover:bg-purple-100">Industrial Solutions</a>
                    </li>
                    <li>
                        <a href="{{route('event')}}" class="block px-4 py-2 hover:bg-purple-100">Events</a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="group relative">
            <button
                id="dropdownNavbarLink"
                data-dropdown-toggle="dropdownNavbar2"
                class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-purple-700 md:p-0 md:w-auto md:dark:hover:text-purple-500 md:dark:hover:bg-transparent relative font-medium"
            >
                Insights
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                <!-- Line Under LI -->
                <span
                    class="absolute left-0 bottom-0 w-0 h-[2px] bg-purple-700 transition-all duration-300 group-hover:w-full"
                ></span>
            </button>
            <!-- Dropdown menu -->
            <div
                id="dropdownNavbar2"
                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 group-hover:block absolute top-full left-0"
            >
                <ul class="py-2 text-sm text-gray-700">
                    <li>
                        <a href="{{route('blog')}}" class="block px-4 py-2 hover:bg-purple-100">Blog</a>
                    </li>

                    <li>
                        <a href="{{route('feedback')}}" class="block px-4 py-2 hover:bg-purple-100">Review & Feedback</a>
                    </li>
                </ul>
            </div>
        </li>

            <li class="group">
            <a href="{{route('contact.index')}}"
                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-purple-700 md:p-0 md:dark:hover:text-purple-500 relative font-medium"
            >
                Contact
                <span
                    class="absolute left-0 bottom-0 w-0 h-[2px] bg-purple-700 transition-all duration-300 group-hover:w-full"
                ></span>
            </a>
        </li>

        </ul>
        </div>
    </div>
    </nav>

    <div class="flex-grow">
        @yield('content')
    </div>


    <!-- Footer -->
<footer class="p-4 bg-gray-100 sm:p-6">
        <div class="mx-auto max-w-screen-xl">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="{{route('about')}}" class="flex items-center space-x-2 rtl:space-x-reverse">
                        <img src="{{ asset('storage/photos/logo.png') }}" class="h-16 w-16" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap">AI Solution</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-medium text-gray-900 uppercase">Navigation</h2>
                        <ul class="text-gray-600">
                            <li class="mb-4">
                                <a href="{{route('feedback')}}" class="hover:underline font-normal">Feedback</a>
                            </li>
                            <li>
                                <a href="{{route('contact.index')}}" class="hover:underline font-normal">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm text-gray-900 uppercase font-medium">Company</h2>
                        <ul class="text-gray-600">
                            <li class="mb-4">
                                <a href="{{route('about')}}" class="hover:underline font-normal">About Us</a>
                            </li>
                            <li>
                                <a href="{{route('industry')}}" class="hover:underline font-normal">Solutions</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-medium text-gray-900 uppercase">Legal</h2>
                        <ul class="text-gray-600">
                            <li class="mb-4">
                                <a href="#" class="hover:underline font-normal">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline font-normal">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center font-medium">© 2025 AI Solution. All Rights Reserved.</span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <!-- Facebook Icon -->
                    <a href="#" class="text-gray-500 hover:text-blue-600">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                        </svg>
                        <span class="sr-only">Facebook</span>
                    </a>

                    <!-- Twitter Icon -->
                    <a href="#" class="text-gray-500 hover:text-blue-400">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743A11.65 11.65 0 013 4.792a4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                        <span class="sr-only">Twitter</span>
                    </a>

                    <!-- LinkedIn Icon -->
                    <a href="#" class="text-gray-500 hover:text-blue-700">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.23 0H1.77C.79 0 0 .77 0 1.72v20.56C0 23.23.79 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.72V1.72C24 .77 23.21 0 22.23 0zM7.06 20.45H3.56V9h3.5v11.45zM5.31 7.76c-1.14 0-2.06-.92-2.06-2.06s.92-2.06 2.06-2.06c1.14 0 2.06.92 2.06 2.06s-.92 2.06-2.06 2.06zM20.45 20.45h-3.5v-5.6c0-1.34-.03-3.07-1.87-3.07-1.87 0-2.16 1.46-2.16 2.97v5.7h-3.5V9h3.36v1.57h.05c.47-.89 1.62-1.87 3.33-1.87 3.56 0 4.22 2.34 4.22 5.39v6.36z"/>
                        </svg>
                        <span class="sr-only">LinkedIn</span>
                    </a>
                </div>

            </div>
        </div>
</footer>

    <div>
        @yield('javascript')
    </div>




<script>
    document.addEventListener("DOMContentLoaded", function() {
        var navbar = document.getElementById("navbar");
        window.addEventListener("scroll", function() {
            if (window.scrollY > 50) {
                navbar.classList.add("shadow-sm", "bg-opacity-90", "backdrop-blur-md");
            } else {
                navbar.classList.remove("shadow-lg", "bg-opacity-90", "backdrop-blur-md");
            }
        });
    });
</script>

</body>
</html>





