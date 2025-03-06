@extends('layouts.layout')

@section('content')

<section class="bg-white mt-12">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-8 mb-4">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">
                Events
               </h2>
               <p class="font-body text-gray-500 sm:text-xl">Discover our latest and past events that showcase the best of AI innovations, industry breakthroughs, and collaborations.</p>
        </div>

        <!-- Event Tabs: Present, Past, and All Events -->
        <div class="mb-8">
            <div class="flex justify-center space-x-4">
                <button class="px-6 py-2 text-lg font-body text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 focus:outline-none" id="all-events-tab">All Events</button>
                <button class="px-6 py-2 text-lg font-body text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 focus:outline-none" id="present-tab">Present Events</button>
                <button class="px-6 py-2 text-lg font-body text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 focus:outline-none" id="past-tab">Past Events</button>
            </div>
        </div>

        <!-- All Events Section (Initial state: Show both present and past events) -->
        <div id="all-events">
            <div class="grid gap-8 lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 justify-items-center">
                <!-- Present Event Card 1 -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm present-event">
                    <img class="rounded-t-lg w-full" src="{{asset('storage/photos/event_3.jpg')}}" alt="Event Image" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold text-gray-900">AI Revolution in 2025</h5>
                        <p class="mb-3 font-normal text-gray-700">Join us as we explore the latest AI breakthroughs shaping the future of industries.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-body text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">
                            Learn More
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Past Event Card 1 -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm past-event">
                    <img class="rounded-t-lg w-full" src="{{asset('storage/photos/event_2.jpg')}}" alt="Event Image" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold text-gray-900">AI in Healthcare Summit</h5>
                        <p class="mb-3 font-normal text-gray-700">Exploring how AI is revolutionizing healthcare and improving patient outcomes.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-body text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">
                            Learn More
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Present Event Card 2 -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm present-event">
                    <img class="rounded-t-lg w-full" src="{{asset('storage/photos/event_1.jpg')}}" alt="Event Image" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold text-gray-900">Future of Digital Work</h5>
                        <p class="mb-3 font-normal text-gray-700">A discussion on how AI-driven automation is changing the work landscape.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-body text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">
                            Learn More
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Past Event Card 2 -->
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm past-event">
                    <img class="rounded-t-lg w-full" src="{{asset('storage/photos/event_4.jpg')}}" alt="Event Image" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold text-gray-900">Tech Innovations of 2023</h5>
                        <p class="mb-3 font-normal text-gray-700">A look back at the groundbreaking tech innovations from 2023.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-body text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">
                            Learn More
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@section('javascript')
<script>
    // Show all events by default
    let allEvents = document.getElementById("all-events");

    // Show present events only
    document.getElementById("present-tab").addEventListener("click", function() {
        let presentEvents = allEvents.querySelectorAll(".present-event");
        let pastEvents = allEvents.querySelectorAll(".past-event");

        presentEvents.forEach(event => event.classList.remove("hidden"));
        pastEvents.forEach(event => event.classList.add("hidden"));
    });

    // Show past events only
    document.getElementById("past-tab").addEventListener("click", function() {
        let presentEvents = allEvents.querySelectorAll(".present-event");
        let pastEvents = allEvents.querySelectorAll(".past-event");

        pastEvents.forEach(event => event.classList.remove("hidden"));
        presentEvents.forEach(event => event.classList.add("hidden"));
    });

    // Show all events (present + past)
    document.getElementById("all-events-tab").addEventListener("click", function() {
        let presentEvents = allEvents.querySelectorAll(".present-event");
        let pastEvents = allEvents.querySelectorAll(".past-event");

        presentEvents.forEach(event => event.classList.remove("hidden"));
        pastEvents.forEach(event => event.classList.remove("hidden"));
    });
</script>
@endsection

@endsection
