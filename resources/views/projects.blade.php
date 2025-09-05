@extends('layouts.app')
@section('title', 'Projects')

@section('content')
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-semibold text-center mb-12">Our Projects</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @forelse($projects as $project)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        @if($project->photo)
                            <img src="{{ public_asset($project->photo) }}" alt="{{ $project->name }}" class="w-full h-56 object-cover">
                            @else
                            <div class="w-full h-56 bg-gray-200 flex items-center justify-center text-gray-500">
                                No Image Available
                            </div>
                        @endif

                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">{{ $project->name }}</h3>
                        </div>
                    </div>
                @empty
                    <p class="col-span-3 text-center text-gray-600">No active projects found.</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
