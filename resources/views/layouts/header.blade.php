<header class="absolute top-0 left-0 w-full z-10 py-4 px-8 bg-white shadow">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-2xl font-bold text-gray-800">
            @if (getSettings()->header_image)
                <img width="350" src="{{ public_asset(getSettings()->header_image) }}" alt="">
            @else
                <a href="#">{{ getSettings()->app_name }}</a>
            @endif
        </div>

        <nav class="hidden md:flex items-center space-x-8 header-nav relative">
            <a href="{{ route('front.home') }}">HOME</a>
            <a href="{{ route('front.about') }}">ABOUT</a>

            <!-- PRODUCTS dropdown -->
            <div class="relative group">
                <a href="#" class="flex items-center text-gray-800 hover:text-gray-600">
                    PRODUCTS
                    <span class="material-icons text-sm ml-1">expand_more</span>
                </a>

                <div class="absolute top-full left-0 mt-2 w-48 bg-black text-white shadow-lg opacity-0 invisible transform -translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200 z-20">
                    @foreach (getCategories() as $category)
                        <a href="{{ route('show.categories', $category->slug) }}" class="block px-4 py-2 hover:bg-gray-800">
                            {{ $category->name }}
                        </a>

                    @endforeach
                </div>
            </div>


            <a href="{{ route('front.projects') }}">Projects</a>
        </nav>

        <div class="flex items-center space-x-4">
            {{-- <span class="material-icons text-gray-800 cursor-pointer">search</span>
            <span class="material-icons text-gray-800 cursor-pointer">person_outline</span> --}}
            <a class="border border-gray-800 text-gray-800 px-4 py-2 rounded-full text-sm hover:bg-gray-800 hover:text-white transition"
                href="{{ route('front.contact') }}">Get In Touch</a>
        </div>
    </div>
</header>
