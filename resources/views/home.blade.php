@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
    <section class="py-24 bg-white">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center px-8">
            <!-- LEFT CONTENT -->
            <div class="text-center md:text-left">
                <h1 class="text-3xl md:text-5xl font-bold leading-tight text-gray-800">
                    Shaping the future with Precast excellance
                </h1>
                <p class="mt-4 text-gray-600 text-base md:text-lg">
                    Just when you thought concrete is all about grey, static, ponderous, one-dimensional...
                </p>
                <a href="{{ route('front.about') }}"
                    class="mt-6 inline-block bg-gray-800 text-white px-6 py-3 rounded-full hover:bg-gray-700 transition">
                    Learn More
                </a>
            </div>

            <!-- RIGHT IMAGE -->
            <div class="flex justify-center md:justify-end">
                <img src="{{ public_asset('assets/front/images/home.jpg') }}" alt="Hero"
                    class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg object-contain rounded-xl shadow-lg">
            </div>

            <div class="text-brown-700">
                <h2 class="text-4xl font-semibold mb-6">EXPOSED CONCRETE AT YOUR CONVENIENCE.</h2>
                <p class="mb-4 text-sm leading-relaxed">
                    Just when you thought concrete is all about grey, static, ponderous, one-dimensional, and bold,
                    we added a soul to it.
                </p>
                <p class="mb-4 text-sm leading-relaxed">
                    Born out of excitement, HeyConcrete explores the uncharted fresh possibilities that lie hidden
                    within this versatile product. But we are not here to question the time tested values and
                    notions; we tried to reinvent concrete as an art + science material that balances artistry and
                    functionality, innovation and timeless design. HeyConcrete is an ode to the spirit of
                    architecture, to the ever-new and ever-growing global love of all things raw. The "HEY" in our
                    name is a conscious choice representing our free-spiritedly pleasing quality, our ingenious vow
                    to always pioneer on our course.
                </p>
                <a class="font-semibold tracking-widest text-sm text-brown-700 border-b-2 border-brown-700 pb-1"
                    href="{{ route('front.about') }}">READ OUR STORY</a>
            </div>
        </div>
    </section>

    @if (count($categories) > 0)
        <section class="py-16">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-2xl font-semibold mb-2">OUR OFFERINGS</h2>
                <div class="w-16 h-px bg-gray-400 mx-auto mb-8"></div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                    @foreach ($categories as $category)
                        <a href="{{ route('show.categories', $category->slug) }}">
                            <div class="border text-center goto_category_page"
                                href="{{ route('show.categories', $category->slug) }}">
                                <img alt="{{ $category->name }}" class="w-full h-48 object-cover rounded-lg mb-4"
                                    src="{{ public_asset($category->photo) }}" />
                                <h3 class="font-semibold">{{ $category->name }}</h3>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if (count($client_feedbacks) > 0)
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-2xl font-semibold mb-8">WHAT CLIENTS SAY ABOUT {{ getSettings()->app_name }}?</h2>
                <div class="grid md:grid-cols-3 gap-8 text-left">
                    @foreach ($client_feedbacks as $key => $client_feedback)
                        <div class="bg-white p-6 rounded-lg shadow-md relative">
                            <span class="material-icons text-gray-300 text-5xl absolute top-4 left-4">format_quote</span>
                            <p class="mt-12 text-sm text-gray-600 leading-relaxed">
                                “{{ $client_feedback->comment }}”
                            </p>
                            <p class="mt-4 font-semibold text-sm">{{ $client_feedback->name }}</p>
                            <p class="text-xs text-gray-500">{{ $client_feedback->location }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="flex justify-center mt-8 space-x-2">
                    @foreach ($client_feedbacks as $key => $client_feedback)
                        @if ($loop->first)
                            <span class="w-2 h-2 bg-gray-800 rounded-full"></span>
                        @else
                            <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if (count($projects) > 0)
        <section class="py-16">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-2xl font-semibold mb-8">RECENT PROJECTS</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach ($projects as $key => $project)
                        <div>
                            <img alt="{{ $project->name }}" class="w-full h-56 object-cover rounded-lg mb-4"
                                src="{{ public_asset($project->photo) }}" />
                            <p class="text-sm font-medium">{{ $project->name }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center items-center gap-8">
                <img alt="Certification logo 1" class="h-20 object-contain"
                    src="{{ public_asset('assets/front/images/iso/iso1.jpg') }}">
                <img alt="Certification logo 2" class="h-20 object-contain"
                    src="{{ public_asset('assets/front/images/iso/iso2.jpg') }}">
                <img alt="Certification logo 3" class="h-20 object-contain"
                    src="{{ public_asset('assets/front/images/iso/iso3.jpg') }}">
                <img alt="Certification logo 4" class="h-20 object-contain"
                    src="{{ public_asset('assets/front/images/iso/iso4.jpg') }}">
                <img alt="Certification logo 5" class="h-20 object-contain"
                    src="{{ public_asset('assets/front/images/iso/iso5.jpg') }}">
            </div>
        </div>

    </section>

@endsection
