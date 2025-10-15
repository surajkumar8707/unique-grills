@extends('layouts.app')
@section('title', 'Categories :: ' . getSettings()->app_name)
@section('content')
    @php
        $background_image = "";
        if ($category->slug == "rcc-products") {
            $background_image = public_asset("assets/front/images/products/background_image/rcc.jpg");
        } elseif ($category->slug == "grc-products") {
            $background_image = public_asset('assets/front/images/products/background_image/grc.jpg');
        } elseif ($category->slug == "precast-construction") {
            $background_image = public_asset('assets/front/images/products/background_image/precast_construction.jpg');
        } elseif ($category->slug == "interior") {
            $background_image = public_asset('assets/front/images/products/background_image/interior.jpg');
        }
    @endphp

    <br><br><br><br><br><br><br><br>
    <div class="container">
        @if (isset($category))
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-5xl font-bold mb-6">{{ $category->slug }} {{ $category->name }}</h1>
                <p class="text-gray-600 leading-relaxed">
                    {{ $category->description ?? 'No description available for this category.' }}
                </p>
            </div>

            {{-- Product List with Background Image --}}
            <div class="relative bg-cover bg-center bg-no-repeat py-12 px-4 mt-8"
                 style="background-image: url('{{ $background_image }}')">
                {{-- Optional: Dark overlay if needed for contrast --}}
                {{-- <div class="absolute inset-0 bg-black/40"></div> --}}

                <div class="bg-white/80 backdrop-blur-sm rounded-lg p-6 relative z-10 max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    @foreach ($category->products as $product)
                        <div class="bg-white rounded-lg shadow-lg p-6">
                            <img src="{{ public_asset($product->image) }}" alt="{{ $product->name }}"
                                 class="w-full h-48 object-cover rounded-t-lg mb-4">
                            <h2 class="text-xl font-semibold mb-2">{{ $product->name }}</h2>
                            <a href="{{ route('show.products', [$category->slug, $product->slug]) }}"
                               class="text-gray-500 hover:underline">View Product</a>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <br><br><br><br><br><br><br><br>
            <h1 class="text-3xl font-bold text-center">Category Not Found</h1>
            <p class="text-center text-gray-600">The category you are looking for does not exist or has been removed.</p>
            <br><br><br><br><br>
        @endif

        @include('layouts.aesthetics_and_more')
    </div>
@endsection
