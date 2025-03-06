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
@endsection
