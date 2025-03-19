@extends('layouts.adminLayout')

@section('admin_content')

<div class="p-6 sm:ml-64 mt-14">

    <!-- Table Section -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-4 mt-2">
        @if (session('fail'))
            <div id="alert-3" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50" role="alert">
                <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-body">
                    {{ session('fail') }}
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        @endif

        <!-- Table -->
        <table id="user-table" class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Category</th>
                    <th scope="col" class="px-6 py-3">Rating</th>
                    <th scope="col" class="px-6 py-3">Feedback</th>
                    <th scope="col" class="px-6 py-3">Submitted Date</th>
                    <th scope="col" class="px-6 py-3">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($responses as $response)

                <tr class="bg-white border-b border-gray-200">
                    <td scope="row" class="px-6 py-4 font-body text-gray-900 whitespace-nowrap">
                        {{$loop->iteration}}
                    </td>
                    <td scope="row" class="px-6 py-4 font-body text-gray-900 whitespace-nowrap">
                        {{$response->full_name}}
                    </td>
                    <td class="px-6 py-4">{{$response->email}}</td>
                    <td class="px-6 py-4">{{$response->category}}</td>
                    <td class="px-6 py-4">{{$response->rating}}</td>
                    <td class="px-6 py-4">{{$response->feedback}}</td>
                    <td class="px-6 py-4">{{$response->created_at->format('Y-m-d')}}</td>
                    <td class="px-6 py-4">
                        <!-- Delete Button -->
                        <form action="{{route('feedback.destroy',$response->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-6 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach

                @if ($responses->isEmpty())
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center text-gray-500 font-body">Feedback Not Found</td>
                </tr>
                @endif

            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{$responses->links('pagination::tailwind')}}
    </div>




    <div class="flex flex-col sm:flex-row w-full justify-center sm:justify-end mt-4 space-y-2 sm:space-y-0 sm:space-x-2">
        <!-- List Button -->
        <a href="{{route('dashboard.index')}}" class="px-4 py-2 w-full sm:w-auto text-center text-white bg-primary-600 rounded-lg hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300">
            List
        </a>
        <!-- Export CSV Button -->
        <a href="{{ route('form.export') }}" class="px-4 py-2 w-full sm:w-auto text-center text-white bg-green-600 rounded-lg hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300">
            Export CSV
        </a>
    </div>

</div>

@endsection

@section('admin_js')

@endsection
