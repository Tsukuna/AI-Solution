@extends('layouts.adminLayout')

@section('admin_content')

<div class="p-6 sm:ml-64 mt-14">

     <!-- Search Bar Section -->
     <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 pb-4">

        <!-- Job Title Search -->
        <div class="relative w-full">
            <form action="{{route('job_title.search')}}" method="GET">
                @csrf
                <input
                    type="text"
                    name="job_title"
                    id="search-input"
                    placeholder="Search By Job Title..."
                    class="w-full p-3 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500"
                />
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
            </form>
        </div>

        <!-- Date Search -->
        <div class="relative w-full">
            <input
                type="date"
                name="date"
                id="date-input"
                class="w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500"
            />
        </div>

        <!-- Country Search -->
        <div class="relative w-full">
            <form action="{{route('country.search')}}" method="GET">
                @csrf
                <input
                    type="text"
                    name="country"
                    id="search-input"
                    placeholder="Search By Country..."
                    class="w-full p-3 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500"
                />
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
            </form>
        </div>

    </div>

    <!-- Inquiry Stats Section -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
        <!-- Inquiries Today -->
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
            <h3 class="text-lg font-semibold text-gray-900">Inquiries Today</h3>
            <p class="text-2xl font-bold text-blue-600">25</p>
        </div>

        <!-- Inquiries This Week -->
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
            <h3 class="text-lg font-semibold text-gray-900">Inquiries This Week</h3>
            <p class="text-2xl font-bold text-green-600">120</p>
        </div>

        <!-- Inquiries This Month -->
        <div class="bg-white p-4 rounded-lg shadow-md text-center">
            <h3 class="text-lg font-semibold text-gray-900">Inquiries This Month</h3>
            <p class="text-2xl font-bold text-yellow-600">450</p>
        </div>
    </div>

    <!-- Table Section -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-4">
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
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Company</th>
                    <th scope="col" class="px-6 py-3">Country</th>
                    <th scope="col" class="px-6 py-3">Job Title</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="bg-white border-b border-gray-200">
                    <th scope="row" class="px-6 py-4 font-body text-gray-900 whitespace-nowrap">
                        {{$user->name}}
                    </th>
                    <td class="px-6 py-4">{{$user->company}}</td>
                    <td class="px-6 py-4">{{$user->country}}</td>
                    <td class="px-6 py-4">{{$user->job_title}}</td>
                    <td class="px-6 py-4">
                        <!-- Conditional Status Display -->
                        @if ($user->status == 'In Progress')
                            <span class="px-3 py-1 text-sm font-body text-white bg-blue-600 rounded-lg">In Progress</span>
                        @elseif ($user->status == 'Follow Up')
                            <span class="px-3 py-1 text-sm font-body text-white bg-green-600 rounded-lg">Followed Up</span>
                        @elseif ($user->status == 'Resolve')
                            <span class="px-3 py-1 text-sm font-body text-white bg-yellow-600 rounded-lg">Resolved</span>
                        @else
                            <span class="px-3 py-1 text-sm font-body text-white bg-gray-600 rounded-lg">Pending</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <!-- Detail Button -->
                        <a  href="{{route('contact.show',$user->id)}}" class="px-3 py-1 text-sm font-body text-white bg-primary-600 rounded-lg hover:bg-primary-700 focus:ring-2 focus:outline-none focus:ring-primary-300">
                            Detail
                        </a>
                    </td>
                </tr>
                @endforeach

                @if ($users->isEmpty())
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center text-gray-500 font-body">Inquiry Not Found</td>
                </tr>
                @endif
            </tbody>
        </table>
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
