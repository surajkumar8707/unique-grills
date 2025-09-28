{{-- <header class="absolute top-0 left-0 w-full z-10 py-4 px-8 bg-white shadow">
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
            <a class="border border-gray-800 text-gray-800 px-4 py-2 rounded-full text-sm hover:bg-gray-800 hover:text-white transition"
                href="{{ route('front.contact') }}">Get In Touch</a>
        </div>
    </div>
</header> --}}


{{-- <header class="absolute top-0 left-0 w-full z-10 py-4 px-6 bg-white shadow"> --}}
<header class="fixed top-0 left-0 w-full z-50 py-4 px-6 bg-white shadow">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="text-2xl font-bold text-gray-800">
            @if (getSettings()->header_image)
                <img width="180" src="{{ public_asset(getSettings()->header_image) }}" alt="">
            @else
                <a href="#">{{ getSettings()->app_name }}</a>
            @endif
        </div>

        <!-- Desktop Nav -->
        <nav class="hidden md:flex items-center space-x-8 header-nav relative">
            <a href="{{ route('front.home') }}" class="hover:text-gray-600">HOME</a>
            <a href="{{ route('front.about') }}" class="hover:text-gray-600">ABOUT</a>

            <!-- PRODUCTS dropdown -->
            <div class="relative group">
                <a href="#" class="flex items-center text-gray-800 hover:text-gray-600">
                    PRODUCTS
                    <span class="material-icons text-sm ml-1">expand_more</span>
                </a>

                <div
                    class="absolute top-full left-0 mt-2 w-48 bg-black text-white shadow-lg opacity-0 invisible transform -translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200 z-20">
                    @foreach (getCategories() as $category)
                        <a href="{{ route('show.categories', $category->slug) }}"
                            class="block px-4 py-2 hover:bg-gray-800">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>

            <a href="{{ route('front.projects') }}" class="hover:text-gray-600">Projects</a>
        </nav>

        <!-- Contact Button -->
        <div class="hidden md:flex items-center space-x-4">
            <a class="border border-gray-800 text-gray-800 px-4 py-2 rounded-full text-sm hover:bg-gray-800 hover:text-white transition"
                href="{{ route('front.contact') }}">Get In Touch</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menu-toggle" class="md:hidden text-gray-800 focus:outline-none">
            <span class="material-icons text-3xl">menu</span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
        <nav class="flex flex-col space-y-2 px-6 py-4">
            <a href="{{ route('front.home') }}" class="block py-2 border-b hover:text-gray-600">HOME</a>
            <a href="{{ route('front.about') }}" class="block py-2 border-b hover:text-gray-600">ABOUT</a>

            <!-- Products Dropdown -->
            <div>
                <button class="w-full flex justify-between items-center py-2 border-b text-left text-gray-800"
                    onclick="document.getElementById('mobile-products').classList.toggle('hidden')">
                    PRODUCTS
                    <span class="material-icons text-sm">expand_more</span>
                </button>
                <div id="mobile-products" class="hidden pl-4">
                    @foreach (getCategories() as $category)
                        <a href="{{ route('show.categories', $category->slug) }}"
                            class="block py-2 hover:text-gray-600">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>

            <a href="{{ route('front.projects') }}" class="block py-2 border-b hover:text-gray-600">Projects</a>
            <a href="{{ route('front.contact') }}"
                class="block py-2 border border-gray-800 text-center rounded hover:bg-gray-800 hover:text-white transition">
                Get In Touch
            </a>
        </nav>
    </div>
</header>

<script>
    // Mobile toggle
    document.getElementById("menu-toggle").addEventListener("click", function () {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    });
</script>
