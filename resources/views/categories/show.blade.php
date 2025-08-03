@extends('layouts.app')
@section('title', 'Faqs Page :: ' . getSettings()->app_name)
@push('styles')
    <style>
        details {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 10px;
            padding: 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        summary {
            cursor: pointer;
            padding: 16px 20px;
            font-size: 16px;
            font-weight: 600;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.3s ease;
        }

        summary:hover {
            background-color: #f1f1f1;
        }

        details[open] summary {
            background-color: #000;
            color: #fff;
        }

        summary::-webkit-details-marker {
            display: none;
        }

        details>p {
            padding: 0 20px 16px 20px;
            font-size: 15px;
            color: #333;
            margin: 0;
            line-height: 1.6;
        }

        /* Add "+" and "−" indicators */
        summary::after {
            content: "+";
            font-size: 18px;
            transition: transform 0.3s ease;
        }

        details[open] summary::after {
            content: "−";
        }
    </style>
@endpush
@section('content')
    <br><br><br>
    <br><br><br>
    <h1 class="text-center text-5xl font-bold mb-12">{{ $category->name }}</h1>
    <div class="max-w-6xl mx-auto space-y-4">
        <div class="category-description">
            <p>
                {{ $category->description }}
            </p>
        </div>
        <div class="all-products">
            @foreach ($category->products as $product)
                <div class="w-16 h-px bg-gray-400 mx-auto mb-8"></div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        @if (isset($product) && $product->image)
                            {{-- <img alt="Wall Murals" class="w-full h-48 object-cover rounded-lg mb-4" src="{{ public_asset('storage/' . $product->image) }}" /> --}}
                            <img alt="Wall Murals" class="w-full h-48 object-cover rounded-lg mb-4" src="https://www.shutterstock.com/image-vector/no-image-available-icon-flat-260nw-1240855801.jpg" />
                        @endif
                        <h3 class="font-semibold">{{ $product->name }}</h3>
                    </div>
            @endforeach
        </div>
    </div>
@endsection
