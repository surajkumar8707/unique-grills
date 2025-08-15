@extends('layouts.app')
@section('title', 'Categories :: ' . getSettings()->app_name)
@section('content')
    <br><br><br><br><br><br><br><br>
    <div class="container">
        @if (isset($product))
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-5xl font-bold mb-6">{{ $product->name }}</h1>
                <p class="text-gray-600 leading-relaxed">
                    {{ $product->description ?? 'No description available for this category.' }}
                </p>
            </div>

            {{-- <div class="text-center max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
                @foreach ($category->products as $product)
                    <div class="bg-white rounded-lg shadow-lg_ p-6">
                        <img src="{{ public_asset($product->image) }}" alt="{{ $product->name }}"
                            class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
                        <a href="{{ route('show.products', [$category->slug, $product->slug]) }}"
                            class="text-gray-500 hover:underline">View Product</a>
                    </div>
                @endforeach
            </div> --}}
        @else
            <br><br><br><br><br><br><br><br>
            <h1 class="text-3xl font-bold text-center">Category Not Found</h1>
            <p class="text-center text-gray-600">The category you are looking for does not exist or has been removed.</p>
            <br><br><br><br><br>
        @endif

        @include('layouts.aesthetics_and_more')
    </div>
@endsection
