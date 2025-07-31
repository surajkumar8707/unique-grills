<!-- Top Bar -->
{{-- <div class="top-bar d-flex justify-content-center align-items-center text-white py-2">
    <div class="d-flex align-items-center">
        <a class="text-light" href="tel:{{ $settings->contact }}"><i class="fas fa-phone-alt mr-2"></i> CALL:
            +91-{{ $settings->contact }}</a>
        <span class="mx-3">|</span>
        @if ($social->facebook_show)
            <a class="text-white mr-3" href="{{ $social->facebook }}" target="_blank" aria-label="Facebook"><i
                    class="fab fa-facebook-f"></i></a>
        @endif
        @if ($social->instagram_show)
            <a class="text-white mr-3" href="{{ $social->instagram }}" target="_blank" aria-label="Instagram"><i
                    class="fa-instagram fab"></i></a>
        @endif

        @if ($social->linkedin_show)
            <a class="text-white mr-3" href="{{ $social->linkedin }}" target="_blank" aria-label="Linkedin">
                <i class="fab fa-linkedin"></i>
            </a>
        @endif

        @if ($social->youTube_show)
            <a class="text-white mr-3" href="{{ $social->youTube }}" target="_blank" aria-label="Youtube"><i
                    class="fab fa-youtube"></i></a>
        @endif
    </div>
</div>


<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('front.home') }}">
            @if (isset($settings->header_image) and !empty($settings->header_image))
                <img loading="{{ $settings->app_name }}" src="{{ public_asset($settings->header_image) }}"
                    alt="{{ $settings->app_name }}" alt="logo" height="40" class="mr-2">
            @else
                <span class="header-logo">{{ $settings->app_name }}</span>
            @endif
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navMenu">
            <ul class="navbar-nav text-center">
                <li class="nav-item px-2"><a class="nav-link @isActiveRoute('front.home')"
                        href="{{ route('front.home') }}">Home</a></li>
                <li class="nav-item px-2"><a class="nav-link @isActiveRoute('front.about')" href="{{ route('front.about') }}">About
                        Us</a></li>
                <li class="nav-item px-2"><a class="nav-link @isActiveRoute('front.gallery')"
                        href="{{ route('front.gallery') }}">Gallery</a></li>
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Treks</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('front.kedarnath') }}">Kedarnath Trek</a>
                        <a class="dropdown-item" href="{{ route('front.tungnath.chandrashila') }}">Tungnath-Chandrashila
                            Trek</a>
                        <a class="dropdown-item" href="{{ route('front.nag.tibba') }}">Nag Tibba Trek</a>
                        <a class="dropdown-item" href="{{ route('front.valley.of.flowers') }}">Valley of Flowers Trek</a>
                    </div>
                </li>
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Trips</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('front.harsil.valley') }}">Harsil Valley Trip</a>
                        <a class="dropdown-item" href="{{ route('front.chardham.yatra') }}">Chardham Yatra</a>
                    </div>
                </li>

                <li class="nav-item px-2"><a class="nav-link @isActiveRoute('front.contact')"
                        href="{{ route('front.contact') }}">Contact us</a></li>
            </ul>
        </div>

        <div class="d-none d-lg-block">
            <a class="btn call-now-btn ml-3" href="#">Call Now</a>
        </div>
    </div>
</nav> --}}

<header class="absolute top-0 left-0 w-full z-10 py-4 px-8">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-2xl font-bold text-gray-800">
            @if (getSettings()->header_image)
            <img width="350" src="{{public_asset(getSettings()->header_image)}}" alt="">
            @else
                <a href="#">{{ getSettings()->app_name }}</a>
            @endif
        </div>
        <nav class="hidden md:flex items-center space-x-8 header-nav">
            <a href="{{ route('front.home') }}">HOME</a>
            <a href="{{ route('front.about') }}">ABOUT</a>
            <a class="flex items-center" href="#">PRODUCTS <span
                    class="material-icons text-sm">expand_more</span></a>
            <a class="flex items-center" href="#">SHOP <span class="material-icons text-sm">expand_more</span></a>
            <a href="#">DEALERS</a>
        </nav>
        <div class="flex items-center space-x-4">
            <span class="material-icons text-gray-800 cursor-pointer">search</span>
            <span class="material-icons text-gray-800 cursor-pointer">person_outline</span>
            <a class="border border-gray-800 text-gray-800 px-4 py-2 rounded-full text-sm hover:bg-gray-800 hover:text-white transition"
                href="{{ route('front.contact') }}">Get In Touch</a>
        </div>
    </div>
</header>
