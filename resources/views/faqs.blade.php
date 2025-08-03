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
    <h1 class="text-center text-5xl font-bold mb-12">FAQ</h1>
    <div class="max-w-4xl mx-auto space-y-4">
        <div class="border border-gray-200 rounded-lg">
            <div class="bg-black text-white p-4 flex justify-between items-center cursor-pointer rounded-t-lg">
                <h3 class="font-medium">What are concrete wall panels?</h3>
                <span class="material-icons">remove</span>
            </div>
            <div class="p-4 bg-white rounded-b-lg">
                <p class="text-gray-600">Concrete wall panels are precast concrete elements used in construction for
                    interior and exterior walls. They offer durability, strength, and aesthetic appeal.</p>
            </div>
        </div>

        <details>
            <summary>What are concrete wall panels?</summary>
            <p>Concrete wall panels are precast concrete elements used in construction for interior and exterior walls. They
                offer durability, strength, and aesthetic appeal.</p>
        </details>

        <details>
            <summary>What are the advantages of using concrete wall panels?</summary>
            <p>Concrete wall panels offer several benefits, including fire resistance, noise reduction, thermal insulation,
                low maintenance, and design versatility.</p>
        </details>
        <details>
            <summary>Are concrete wall panels suitable for both residential and commercial projects?</summary>
            <p>Concrete wall panels offer several benefits, including fire resistance, noise reduction, thermal insulation,
                low maintenance, and design versatility.</p>
        </details>
    </div>
@endsection
