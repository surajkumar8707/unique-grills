@extends('layouts.app')
@section('title', 'Product Details :: ' . getSettings()->app_name)
@section('content')
    <br><br><br><br><br><br><br><br>
    <div class="container">
        @if (isset($product))
            <section class="container mx-auto px-4 py-12 flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 relative">
                    {{-- <button
                        class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 p-2 rounded-full z-10">
                        <span class="material-icons">chevron_left</span>
                    </button> --}}
                    <img alt="{{ $product->name }}" class="w-full rounded-lg" src="{{ public_asset($product->image) }}"/>
                    {{-- <button
                        class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 p-2 rounded-full z-10">
                        <span class="material-icons">chevron_right</span>
                    </button> --}}
                    {{-- <div class="flex space-x-2 mt-4">
                        <img alt="Dining area detail" class="w-1/5 rounded-md cursor-pointer border-2 border-gray-800"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCeymhQCp4Oot3XB6hYPL0wtu9jsyZp3EpmEpxSMQG3XzF8SaxzTFyipepgPu1MlJ-kfU8eYwvjvE12nFlle2_l6ukoUMcMsGrNPDIr-WIVa4S6NPJ8CxjZr7yOu9XKVspxUC0wmnmR_ENfe5KZ_e8_RraJadGlfTzuMwjnnSdNGgOx3xO4hMB0dKy9VcJc9Ip_cI2BLj6txcCknusZ6WeuiH2L6Dm0ikcRcgtrm3aj7f-kZwHHcRSyq-gxonlPZ5XKvSFR1FgW4g" />
                        <img alt="Kitchen counter with concrete finish" class="w-1/5 rounded-md cursor-pointer"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnIZGIiIuSdbvK0P3-GsYj37jR0wW00UuEAoSXBQE95fZnDPKEhT6gWXmHwjq5LrAUJ1ZjCh5Un7B5sZ3LVKuuKIxjn4r8nkS4HzQT6MPAZAAw1j3O-YuZ-Fsjm1SSAQngpqFDI_ZABC1uSOpDMA22etyu7Y42q61OTMkCln1jhF03yXJPvEPdqenfpidVvsyRM5QLPIjr12F1uVX1cDlNQP3IetauDV7oU4lNLgGRFWU-fD6G3jCmrsqOnCea6CnL09E8jvagGQ" />
                        <img alt="Living space with blue accent cabinet" class="w-1/5 rounded-md cursor-pointer"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZ4qu7w_An39ajW2nu0b08qjFpl0rAW9kUiHXSqC12WGsCxj1SDCWZss5_ZTIp0g1oMpUBTcTG0MQh_NoKvHsUhWK3sr3BEIH9o4F1E815hCn2LUWadJ4vsgctDlTe674_f0rDeBuJT_dNNwQ9I_C0aLL1vrQLorXOLu0G6Tplj30pSMD84aQpljFqLxklTQ82g9_WEAPufbr1TX0x5SnbfsiqmBTPJCvLfafVNkX0ujprPaa35StDwJCDlcq21wfudLSqOVh-uQ" />
                        <img alt="Close-up of wall texture" class="w-1/5 rounded-md cursor-pointer"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAN6Lo41BGXBWPXbtJV4tS_RloyyRYImmZ2b2MqrSOOaCYq4ff0KmqsiLzvwCSfbbm2BiZSMDrK2EJybUvKiLQ9mSBaXMEncXQH43XVDSYjKVAyvYk_dauz487k4OUuGpSJTGloV-9TN8vZZGPcHLjKtl2lJLYQ76OaCwKpTiR5VlrsO67UBpj8u50jvX6QNeFGArlIG5oJ7uK_8Ism2sJZDmVQrvc-cvXToTHnmK7306vg9DF18j7Rv7A4BoLLrATZ8r-SaglTuQ" />
                    </div> --}}
                </div>
                <div class="md:w-1/2 md:pl-16 mt-8 md:mt-0">
                    {{-- <p class="text-gray-500 text-sm">Serenity to Serendipity</p> --}}
                    <h2 class="text-4xl font-bold mt-2">{{ $product->name }}</h2>
                    {{-- <button class="bg-gray-800 text-white px-6 py-3 rounded-md mt-6 flex items-center">
                        ENQUIRE NOW <span class="material-icons text-xl ml-2">arrow_forward</span>
                    </button> --}}
                    <a href="#enquiry-form" class="bg-gray-800 text-white px-6 py-3 rounded-md mt-6 flex_ items-center hover:bg-gray-900 transition">
                        ENQUIRE NOW <span class="material-icons text-xl ml-2">arrow_forward</span>
                    </a>
                    <p class="text-gray-600 mt-6 leading-relaxed">
                        {{ $product->name }}
                    </p>
                </div>
            </section>
            <section class="bg-gray-50 py-20">
                <div class="container mx-auto px-4 text-center">
                    <h2 class="text-3xl font-bold">AVAILABLE TEXTURES</h2>
                    <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-12 relative items-start">
                        <div class="flex flex-col items-center">
                            <div class="bg-white p-4 rounded-lg shadow-lg">
                                <img alt="Plain type concrete texture" class="w-64 h-64 object-cover rounded-md"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBSFnR2Bl06mBy6Qu8kH59S5iZdLFCo4ysDj-YV61hmmz6ElV8P0IQjqfX3F3gePtFqWvHpTNzAzOeWKGR2v6Y7_i7IalxxjxgqEyH9P2I4SWFtJZ632lPtF16RVQGRKB-YAMmflmrF1HsC4kYytdQAni8XGuJO6RRRP0Rs8w307a2AChJIk4HKY_rQmrDdyITqIOJgMgJX6nDPjJ57aA-Q40D1ts87iqq9Gz7EAJAjMfmmCCbMdaWnKSEMEQohL0uM2qM8d94KlA" />
                            </div>
                            <h3 class="text-xl font-semibold mt-6">Plain Type</h3>
                            <p class="text-gray-600 mt-2 text-sm max-w-xs">Smooth, solid and fine, plain concrete surfaces
                                feature small inclusions and color fine lines.</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="bg-white p-4 rounded-lg shadow-lg">
                                <img alt="Porous type concrete texture" class="w-64 h-64 object-cover rounded-md"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAN6Lo41BGXBWPXbtJV4tS_RloyyRYImmZ2b2MqrSOOaCYq4ff0KmqsiLzvwCSfbbm2BiZSMDrK2EJybUvKiLQ9mSBaXMEncXQH43XVDSYjKVAyvYk_dauz487k4OUuGpSJTGloV-9TN8vZZGPcHLjKtl2lJLYQ76OaCwKpTiR5VlrsO67UBpj8u50jvX6QNeFGArlIG5oJ7uK_8Ism2sJZDmVQrvc-cvXToTHnmK7306vg9DF18j7Rv7A4BoLLrATZ8r-SaglTuQ" />
                            </div>
                            <h3 class="text-xl font-semibold mt-6">Porous Type</h3>
                            <p class="text-gray-600 mt-2 text-sm max-w-xs">Intriguing and sought-after, porous is a fine
                                natural concrete surface with an even balance of porosity.</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="bg-white p-4 rounded-lg shadow-lg">
                                <img alt="Natural type concrete texture" class="w-64 h-64 object-cover rounded-md"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBaMo44RTAJ3m-2N-VE478WxOzS-2ENQ4_EfuBjEDSqvRfOFGmssXIszURB_CQafFai8xsp8eQSbP4jpLZ1N7IalT6zBmK2P4rDnRj3tzJ4WgVREaFbBKB7i51JNG-y4SJXnKNnzBcVZQTIBMwtYEQSzgKgT1IQZoObRNOnrC63X9OnYSromXuUrnqOjTfKqrHIPhMyc7rrYOq1Tc4UbqQpjF__-07jPVi97xPSkaHkD4xFYByoIgx-I6cYzM2TZUrsI6Hg-yMUUA" />
                            </div>
                            <h3 class="text-xl font-semibold mt-6">Natural</h3>
                            <p class="text-gray-600 mt-2 text-sm max-w-xs">Natural texture offers an authentic, organic
                                surface with consistent texture and natural variations.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20">
                <div class="container mx-auto px-4 text-center">
                    <h2 class="text-3xl font-bold">DIMENSIONS</h2>
                    <div class="mt-12 flex justify-center">
                        <img alt="Dimension specifications for wall panels" class="max-w-full h-auto"
                            src="https://heyconcrete.com/wp-content/uploads/2024/07/serene-panels-dimensions.webp" />
                    </div>
                </div>
            </section>

            @include('layouts.aesthetics_and_more')

            <section id="enquiry-form" class="py-20">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center mb-8">PRODUCT ENQUIRY FORM</h2>

                    <form action="{{ route('front.enquiry.store') }}" method="POST"
                        class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md space-y-6">
                        @csrf

                        {{-- Name --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">First Name <span
                                        class="text-red-500">*</span></label>
                                <input type="text" name="first_name" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-gray-800 focus:border-gray-800"
                                    placeholder="First Name">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Last Name</label>
                                <input type="text" name="last_name"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-gray-800 focus:border-gray-800"
                                    placeholder="Last Name">
                            </div>
                        </div>

                        {{-- Email --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-gray-800 focus:border-gray-800"
                                placeholder="Enter your email">
                        </div>

                        {{-- Phone --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Phone <span
                                    class="text-red-500">*</span></label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">+91</span>
                                <input type="text" name="phone" required
                                    class="flex-1 min-w-0 block w-full px-3 py-2 rounded-none rounded-r-md border-gray-300 shadow-sm focus:ring-gray-800 focus:border-gray-800"
                                    placeholder="Enter your phone number">
                            </div>
                        </div>

                        {{-- Address --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">City <span
                                        class="text-red-500">*</span></label>
                                <input type="text" name="city" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-gray-800 focus:border-gray-800"
                                    placeholder="Enter your city">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Country</label>
                                <select name="country" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-gray-800 focus:border-gray-800">
                                    <option value="">-Select-</option>
                                    @forelse ($countries as $country)
                                        <option value="{{ $country->name }}">{{ $country->name }}</option>
                                    @empty
                                        
                                    @endforelse
                                </select>
                            </div>
                        </div>

                        {{-- Message --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Your Message</label>
                            <textarea name="message" rows="4"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-gray-800 focus:border-gray-800"
                                placeholder="Write your enquiry..."></textarea>
                        </div>

                        {{-- Hidden product reference --}}
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="category_id" value="{{ $category->id }}">

                        {{-- Submit --}}
                        <div class="text-center">
                            <button type="submit"
                                class="w-full md:w-auto bg-gray-800 text-white px-8 py-3 rounded-md font-medium hover:bg-gray-900 transition">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </section>
        @else
            <br><br><br><br><br><br><br><br>
            <h1 class="text-3xl font-bold text-center">Product Not Found</h1>
            <p class="text-center text-gray-600">The Product you are looking for does not exist or has been removed.</p>
            <br><br><br><br><br>
        @endif
    </div>
@endsection
