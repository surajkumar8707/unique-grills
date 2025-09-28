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
<header class="fixed top-0 left-0 w-full z-50 bg-white shadow">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <!-- Logo -->
        <div class="text-2xl font-bold text-gray-800">
            @if (getSettings()->header_image)
                <img width="200" src="{{ public_asset(getSettings()->header_image) }}" alt="Logo">
            @else
                <a href="#">{{ getSettings()->app_name }}</a>
            @endif
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-8 header-nav relative">
            <a href="{{ route('front.home') }}" class="hover:text-gray-600">HOME</a>
            <a href="{{ route('front.about') }}" class="hover:text-gray-600">ABOUT</a>

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

            <a href="{{ route('front.projects') }}" class="hover:text-gray-600">Projects</a>
            <a class="border border-gray-800 text-gray-800 px-4 py-2 rounded-full text-sm hover:bg-gray-800 hover:text-white transition"
               href="{{ route('front.contact') }}">Get In Touch</a>
        </nav>

        <!-- Mobile Hamburger -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                <span class="material-icons text-3xl">menu</span>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="hidden flex-col space-y-4 bg-white shadow-md px-6 py-4 md:hidden">
        <a href="{{ route('front.home') }}" class="block hover:text-gray-600">HOME</a>
        <a href="{{ route('front.about') }}" class="block hover:text-gray-600">ABOUT</a>

        <!-- PRODUCTS dropdown (mobile) -->
        <div>
            <span class="block font-semibold text-gray-800">PRODUCTS</span>
            <div class="pl-4">
                @foreach (getCategories() as $category)
                    <a href="{{ route('show.categories', $category->slug) }}" class="block py-1 hover:text-gray-600">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>

        <a href="{{ route('front.projects') }}" class="block hover:text-gray-600">Projects</a>
        <a class="border border-gray-800 text-gray-800 px-4 py-2 rounded-full text-sm hover:bg-gray-800 hover:text-white transition inline-block"
           href="{{ route('front.contact') }}">Get In Touch</a>
    </nav>
</header>

<!-- JS Toggle Script -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggle = document.getElementById("menu-toggle");
        const menu = document.getElementById("mobile-menu");

        toggle.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    });
</script>
