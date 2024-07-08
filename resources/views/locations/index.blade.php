@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <!-- Perbesar dan pusatkan judul -->
    <h1 class="text-4xl font-bold text-center mb-8">Locations</h1>
    
    <!-- Tombol untuk menambahkan lokasi baru -->
    <a href="{{ route('locations.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Add New Location</a>
    
    <!-- Tabel dengan styling Tailwind CSS -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <!-- Styling untuk header tabel -->
                    <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-200 text-left text-sm leading-4 font-semibold text-gray-700 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-200 text-left text-sm leading-4 font-semibold text-gray-700 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-200 text-left text-sm leading-4 font-semibold text-gray-700 uppercase tracking-wider">Latitude</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-200 text-left text-sm leading-4 font-semibold text-gray-700 uppercase tracking-wider">Longitude</th>
                    <th class="px-6 py-3 border-b-2 border-gray-300 bg-gray-200 text-left text-sm leading-4 font-semibold text-gray-700 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($locations as $location)
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-700">{{ $location->id }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-700">{{ $location->location_name }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-700">{{ $location->latitude }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-700">{{ $location->longitude }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-700">
                        <a href="{{ route('locations.show', $location->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded inline-block mr-2">View</a>
                        <a href="{{ route('locations.edit', $location->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded inline-block mr-2">Edit</a>
                        <form action="{{ route('locations.destroy', $location->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
