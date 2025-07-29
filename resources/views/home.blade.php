@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
    {{-- <section class="relative h-screen flex items-center justify-center text-white hero-section">
            <div class="absolute inset-0 bg-black opacity-30"></div>
            <div class="absolute left-4 top-1/2 transform -translate-y-1/2">
                <button class="text-white">
                    <span class="material-icons text-4xl">chevron_left</span>
                </button>
            </div>
            <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
                <button class="text-white">
                    <span class="material-icons text-4xl">chevron_right</span>
                </button>
            </div>
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <span class="w-2 h-2 bg-white rounded-full"></span>
                <span class="w-2 h-2 bg-white rounded-full opacity-50"></span>
                <span class="w-2 h-2 bg-white rounded-full opacity-50"></span>
                <span class="w-2 h-2 bg-white rounded-full opacity-50"></span>
            </div>
        </section> --}}
    <section class="py-24 bg-white">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center px-8">
            <div class="relative flex items-center justify-center">
                <div class="relative w-72 h-80 z-10">
                    <img alt="Interior with a brown sofa" class="rounded-3xl object-cover w-full h-full shadow-lg"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZslDBVSwFFO_avh_UNIbTyRzpOoUWXwiKbTO6wfGGhw4oaYmIJEK0OXVP2RVcAKN3cwHgWVNXFdoN_B_vFlL8rghB7LrB0epYrvtOOPLc6ta6Ghq2ved5Lpwng8IrZjYxWu9lsQ0jzgbWUGImb6hsj7DB3Buqj0eWnUjtfKV9pIokHTweEEEErb_wpvCqb6o0OaC8OFSsAVZ3hVu3G_M-hXpti3mElLgwtp9zQ1yh0Fg9Ha2Yj4cicB5HP3CV2Xtctn966ddPWYXR"
                        style="border-top-left-radius: 100px; border-top-right-radius: 100px;" />
                    <div class="absolute inset-0 bg-black bg-opacity-50 rounded-3xl flex flex-col items-center justify-center text-white p-4"
                        style="border-top-left-radius: 100px; border-top-right-radius: 100px;">
                        <h3 class="text-5xl font-bold">100+</h3>
                        <p class="text-center mt-2">PRODUCT &amp; VARIETY TO CHOOSE FROM</p>
                    </div>
                </div>
                <div class="absolute left-1/2 -bottom-20 w-64 h-80 z-20">
                    <img alt="Modern building exterior" class="rounded-3xl object-cover w-full h-full shadow-lg"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhJz1zlTIvTEMjXKFeb4dvTh_VnnutXgpCvXmwMDsyXmBh3YUsVzmk8C70St1eQfUe8mu-kl_W6woBusR7EMAZojqrUFnZu01QsUJuNca2RRqxWoxe_Wb0wvgGoeSvVRo4ArosvPwiw4FwWaeO9d5C-_OeCcNBmDOc84qXney4cAE-B6f-XMw6mmJNSt6JzfKJZHh5gClCle2Cf59HveP5muoBE-jxJJ_ZpqXcfTgqJ1FEUEv7i57rCyp1kXsgehBHjSYuK_JTELci"
                        style="border-bottom-right-radius: 100px;" />
                    <div class="absolute inset-0 bg-black bg-opacity-50 rounded-3xl flex flex-col items-center justify-center text-white p-4"
                        style="border-bottom-right-radius: 100px;">
                        <h3 class="text-5xl font-bold">100K</h3>
                        <p class="text-center mt-2 text-sm">SQ.FT. MANUFACTURING FACILITY WHICH IS INDIA'S BIGGEST
                        </p>
                    </div>
                </div>
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
    <section class="py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl font-semibold mb-2">OUR OFFERINGS</h2>
            <div class="w-16 h-px bg-gray-400 mx-auto mb-8"></div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <img alt="Wall Murals" class="w-full h-48 object-cover rounded-lg mb-4"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_x41FyACwCjGj4OJfI0PJokgeGcBF1ZHWsq4L59gS7ZYs9rSQ1hMgg-h8r09HVu-bhV6bLdWfDIh2raNQi1GVupWpQthd56XNWIdREMw-fkLSUtysfUqturCJ5nvVA1OGLMkewBah0twv44WtsSEGl1ThzpDxY1YEty6KYXq7iNMxsZoN0p-lTz64ebXpeBFwk6y0Lpzv9wlxRHHU2694jruY6jUXWaiYgP0cNzZjQjAtV9ycE7LGXQjYAmj9nwzfHDjOqjUaFJk" />
                    <h3 class="font-semibold">WALL MURALS</h3>
                </div>
                <div class="text-center">
                    <img alt="Brick Claddings" class="w-full h-48 object-cover rounded-lg mb-4"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0552E1Mog8d_kPDgjGnWzzx3yidyUlOkSdoo9nkuOIuy81s6XD9B72pneEcmr93IQb4Cn8IHb9xENvZJyTVg5gbbK0ss7xRrQnW9jCJnL4M53ANK8vtZDaAOiV3tR9n4HvMiMokZrv24sVlBIUKZv3yv6g4uZZg3gWoYc676Fmc5ZU4mq7G4rjAQfsmtbEExzQLpGg-XrbcCO3Y04G4Zdbbys4KzYnxZFzcHl5uhWrxYsEt8tpHCbGbEzfHgNnDq0SUpoRhg81p8" />
                    <h3 class="font-semibold">BRICK CLADDINGS</h3>
                </div>
                <div class="text-center">
                    <img alt="Wash Basins" class="w-full h-48 object-cover rounded-lg mb-4"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAYRz5wVc1R0xBJr_vZ6wsI2YtlopJSr512-R6QnbTSls3egUhHkymZcw8pqPH9p2TdBFY5HCuB5KCBIr6xrRnwSnB3MvkBzUrU2UlQXGal8BlF97p5N50KMqI6uj4QVqRkG_A6tBpSZgDfNoO15NvzfMsahK2nC6SK_vfbcPPqX-5CzExXkdMgg29iwybCqv6byrcY381MX0-AOMMaWayZDyNt6UMDxwuCS_br6B4qVb10Dw4POexuh-UdzSSMSBIuy3vvN994ofQ" />
                    <h3 class="font-semibold">WASH BASINS</h3>
                </div>
                <div class="text-center">
                    <img alt="Wall Panels" class="w-full h-48 object-cover rounded-lg mb-4"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqwAUgnEeVPGY4OaiirkIIFb3PbeDwF8DJ3lavthCfRIXJAUEhqVwnYtHXqVkikdEELovh5iKIQnsxU3eZJAuRmAvDUKFKpZzQJpREtTnrk2kjTdV63MckKfZ1rNF3v5N5LfFI2hIhGZ68Cll5PzDQFzHgfGBSOdsDNr4DVM9uT-rETKlTOcmGphUTgc4iPJOTAv2VRzA4FCNRbNfmDx-L22OCvzEnsidx5fU7e3EuXVTt3-d3gFYCn91FN-tD9qp7nMj48DIRKsQ" />
                    <h3 class="font-semibold">WALL PANELS</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl font-semibold mb-8">WHAT CLIENTS SAY ABOUT HEY CONCRETE?</h2>
            <div class="grid md:grid-cols-3 gap-8 text-left">
                <div class="bg-white p-6 rounded-lg shadow-md relative">
                    <span class="material-icons text-gray-300 text-5xl absolute top-4 left-4">format_quote</span>
                    <p class="mt-12 text-sm text-gray-600 leading-relaxed">
                        “I would like to appreciate the quality of the products and services offered by Hey
                        Concrete. The range of products and the flexibility to customize them is excellent.”
                    </p>
                    <p class="mt-4 font-semibold text-sm">Ashish Patel</p>
                    <p class="text-xs text-gray-500">Ahmedabad</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md relative">
                    <span class="material-icons text-gray-300 text-5xl absolute top-4 left-4">format_quote</span>
                    <p class="mt-12 text-sm text-gray-600 leading-relaxed">
                        “We are extremely happy with the products from Hey Concrete. The quality of products is
                        excellent and we love the raw and rustic feel that it gives to our space.”
                    </p>
                    <p class="mt-4 font-semibold text-sm">Hetal Shah</p>
                    <p class="text-xs text-gray-500">Mumbai</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md relative">
                    <span class="material-icons text-gray-300 text-5xl absolute top-4 left-4">format_quote</span>
                    <p class="mt-12 text-sm text-gray-600 leading-relaxed">
                        “Hey Concrete has a very good collection of products and the quality is amazing. We used
                        their brick claddings for our project and we are really happy with the outcome.”
                    </p>
                    <p class="mt-4 font-semibold text-sm">Rajesh Kumar</p>
                    <p class="text-xs text-gray-500">Delhi</p>
                </div>
            </div>
            <div class="flex justify-center mt-8 space-x-2">
                <span class="w-2 h-2 bg-gray-800 rounded-full"></span>
                <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
                <span class="w-2 h-2 bg-gray-400 rounded-full"></span>
            </div>
        </div>
    </section>
    <section class="py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl font-semibold mb-8">RECENT PROJECTS</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <img alt="Project 1: Modern House" class="w-full h-56 object-cover rounded-lg mb-4"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCxrjjgMubRpBtD_7GG3tKUFa4JkpiMon-kM4OCLH9peWeGkonsSXs3kRCSHaGQLOjwk5Gy8jUzfuXeNFMd7jUIByGaivChMn5wGQeTkJS6CCOlyVNMdF5BwFCbt-8NHO7SAV7wXFCcbYVAdFsldRN_aQR9l144JzrLFoyHFf4ow1XNlY6is445pj30qkuV6ahCv5pXdkPdenDx1VLJBnQwTnSxkKPVWn6YhwRsA7b5_uqad5AUjMBgk96udmrVJS355rqEoy9KkHg" />
                    <p class="text-sm font-medium">Laxmi Ornaments</p>
                </div>
                <div>
                    <img alt="Project 2: Interior design" class="w-full h-56 object-cover rounded-lg mb-4"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDILTmsw4vyoho1hOaZb7PNe7jNh8AOEpXDaw5HGrxxBCmuOrEe8ABV0ZtQyZhSFJa-Wx1fVg83svXRu1NAeNLg5Q3zm-Di2A5iDR79a96ydTZcOLdZTH13v6wgzOgwWvHyh0yWOrS586wbrkkv3xF1NuwC2a8m4eWNF3NFboR0y5dLXF-uf5myKBX4EQ70OGWHbIIaG1UZ0Sv47ET7BkBfEP0WpeSAJZstGXCQf9FBvNSUhcDUPK8BHnvoUk0aeYY0ts8lKcr5Md8" />
                    <p class="text-sm font-medium">B.K. Residence</p>
                </div>
                <div>
                    <img alt="Project 3: Commercial space" class="w-full h-56 object-cover rounded-lg mb-4"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0dLgDN9BrwWWT37mzDBnP9ZJ1y-DdPovvWzM_yHDQ1j_O0ei8XW_qDebaEXw0RmTJuLeI-QmN1f99UKP7jrYw8O0VCXdYhhKNXQxWrxVupcteNtcZHuNwff90mQewI8cYyBHT40g7zhPeoJjsXM2HEVXIQuht5ed7JUwcxBT893PdLChcTbOGAFlDvPn-f5WmVJhnvRRLiEo-aBSdGVgQcp0dHafer1TjcFxq_mqMOq7Khp0einQ_SinkkyMFU7Nfu25-GV9-Le0" />
                    <p class="text-sm font-medium">Pepsico Office</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-center items-center space-x-8">
                <img alt="Certification logo 1" class="h-16"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWJz9PHqDnHMiQFcA1-Aj8sY0e0jpjEvhushjEjmrikcvd-JEcIcXZ0BC8HpL2TJ-AxsMSy6Ydxj3PK0sz41ISpvi5E0K1AvV3k_7y4VEAXIjhlDQHVVDXRNd8FvHrVrU8Rs66DQbSFdCLaRfLdwoIPpwOlxzdmntoeA3mqzccoLGfJhB1C6D8r4KTarkmwX_E8RCU36pi0ff3VmU9UDFwrKg6HtwFSYT84brSr-Ba29JPSyfM9yGCXdHZDy2txbudNCrYgeb2ZbE" />
                <img alt="Certification logo 2" class="h-16"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOvXeLXHpBkwDdvQvaIbJOQqnbzTrshNWQjsZTRCE9m_5uBeKCAhK6JwWSioIdizUgFkGu46qWafz6pA8CqpUz3gAnLsuvpuT4wjbBPNcChWX0EipRwRha9uDZJtEN0PC5mSGPbw6zsUL61XhAllj7SIefvcIVsouW2YPafBjHOuISJfaXg0NKuqZjhdOnwY5gsj1F9MIaKVXTazf6Dk70R4okqkrdwh9loMkucs56W3z79ox7-jlSUYRvgIW5qCxhXFKHHcqEz6w" />
                <img alt="Certification logo 3" class="h-16"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_RkhoH_TMrMcuG2ZPDjvTN8M_FF3A6mEXypiZJibmvoYGU9e50XCS5hD7PVsHkEmpr6pv_iqi-HMoBz9wRF-mZPjVsQZtoJ87T_Ny5meXAadCoK4tcTnkNkZeasEVOb8o7215m69NdtJ1KSxMLsbmLrpfbwtc6T_Bb0_jhOPwm7rQ5d4x9WJs8whUbbfV9dSLkDKfDKrOFUBj5xdddMla0dJ1spkK87bp7AVNMTyydglTUga3wp2PNTSPjPM21iiyPOtiIb52YcY" />
                <img alt="Certification logo 4" class="h-16"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVTM7WScEPG_0YnE-0PzvmXRpwcs7g6SACO4B82kwl4yJi61jIWAXtGa0xOzsTphscUX8EjdkSRjiAFGRDR2QR3P5MwbB2VHhCsf4HS1_qvh5o7RLHZ_3vvQBWY5jNYTYwj3HpN7k9HIgOikriepYDrs9JMe_QYUh3Kflbnf1eGAoidW8Yul-SVySiPb5TvQX6pFgBSlxt_p7cV7MJbGg1b2VpOPA5bLWmRpQBu_croyTfwAQE7s8aq-yLJwEOK-ritRkjXu4aub4" />
                <img alt="Certification logo 5" class="h-16"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAI_qe81-sZ66cwWVUwK54xp6KgLsEMcHlP3QarOIR8f3n2eqVfOp43cwh2gEseHaKkH7A72kJYacK_rKj8Xw0SDWMar_8ZZZAoJsaZ65v9RmCS3qWUZrQoEXE0FlfEacfL-GCbU9aZOrSn3AMz76p5xn1KHjWAc9_NDgqsTwW8l0EWtI6ZBT6dwx34C32knLVFn3Zi977HWzu0SnjaKhFl6eYRK31al4apBV8OlN6D8rRsl3C0vcWHCpvHmSyuDzZTSMCVQ3NQfYE" />
                <img alt="Certification logo 6" class="h-16"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBSJTfMoCb7MyFnCAyCTkgHxTQFWBfaF1YDrLrh80YdRiwk1Yag5c2Z3s5oWVUC0mHAK35SnuqxQpVXn8MYy912exp8i7LUhiNcmoLtcT_FNGHC3mbeZw4nL5oEP-xMQhmeITmeiJiAD9Jtuu0JJaVNMqwcmsM64WlAPiacvSw7lRZZ_RKNE-6k5ClTyHk-PL5RdindxSPZHK4AEMqkNwIZGMwfMpfwXqvxOPVNXMrdZqnwHQ1W4vbnXSjE7ZvFpsmQyRzLRqO_Oc" />
                <img alt="Certification logo 7" class="h-16"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAntuguNUjs3AtW9LorFCqDZHWVVlQ4Dut145Wd6hgA3BvJaUGmSD9jI4whnYRSss13tMpGn4e5L2wQtWGdCv4hBVUoMug3QC_z6X2JlA1icYHzNSBv-Oi7WXmckx-FYYIZ1HDo3SmoyniimOxAQPa9X8H4DtKlWkDF-prX19DxRropHKTK3aIGUIsNg0lhZiC3cqyW3AbY-QKS-GjVj78Co0Ug15ER__QA8tCOsjHfqSrH5kR9nh_JSrjOCv6CSHO-mAe5yFUD6zM" />
            </div>
        </div>
    </section>
@endsection
