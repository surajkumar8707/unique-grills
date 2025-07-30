<footer class="bg-gray-800 text-white pt-20 pb-6">
    <div class="container mx-auto px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
            <div>
                <h3 class="text-xl font-semibold mb-4 tracking-wider">SPECIALIZED CONCRETE FOR INTERIOR DESIGN AND
                    FACADE</h3>
            </div>
            <div>
                <h4 class="font-semibold mb-4 text-gray-400">COLLECTIONS</h4>
                {{-- <ul class="space-y-2 text-sm">
                    <li><a class="hover:underline" href="#">Brick Panels</a></li>
                    <li><a class="hover:underline" href="#">Brick Claddings</a></li>
                    <li><a class="hover:underline" href="#">Stone Panels</a></li>
                    <li><a class="hover:underline" href="#">Breeze Blocks</a></li>
                    <li><a class="hover:underline" href="#">Wood Panels</a></li>
                </ul> --}}
                <ul class="space-y-2 text-sm mt-6">
                    {{-- <li><a class="hover:underline" href="#">Projects</a></li>
                    <li><a class="hover:underline" href="#">Dealers</a></li>
                    <li><a class="hover:underline" href="#">Careers with us</a></li> --}}
                    <li><a class="hover:underline" href="{{ route('front.privacy.policy') }}">Privacy Policy</a></li>
                    <li> <a class="hover:underline" href="{{ route('front.terms.condition') }}">Terms of Use</a></li>
                    <li> <a class="hover:underline" href="{{ route('front.shipping.policy') }}">Shipping Policy</a></li>
                    <li> <a class="hover:underline" href="{{ route('front.refund.and.cancellation.policy') }}">Refund
                            &amp; Cancellation Policy</a></li>  
                    <li><a class="hover:underline" href="{{ route('front.faqs') }}">FAQs</a></li>
                    <li><a class="hover:underline" href="{{ route('front.contact') }}">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4 text-gray-400">GET IN TOUCH</h4>
                <p class="text-sm mb-4"><a href="tel:{{ $settings->contact }}">{{ $settings->contact }}</a></p>
                <p class="text-sm mb-4">Need help or have a question?<br /><a
                        href="mailto:{{ $settings->email }}">{{ $settings->email }}</a></p>
                <p class="text-sm mb-4">{{ $settings->address }}</p>
                <h4 class="font-semibold mb-2 text-gray-400">Office Hours</h4>
                <p class="text-sm">Mon - Sat: 9:00 - 19:00</p>
                <h4 class="font-semibold mt-6 mb-2 text-gray-400">TRUSTED BY</h4>
                <p class="text-sm">IGBC GreenPro Certified</p>
            </div>
            <div>
                <h4 class="font-semibold mb-4 text-gray-400">SIGN UP TO STAY UP TO DATE</h4>
                <form class="flex items-center border-b border-gray-500 py-2 mb-4">
                    <input class="bg-transparent border-none w-full text-white placeholder-gray-400 focus:outline-none"
                        placeholder="Your email address" type="email" />
                    <button type="submit">
                        <span class="material-icons text-white">arrow_forward</span>
                    </button>
                </form>
                <p class="text-xs text-gray-400 mb-6">Your email is safe with us. We never spam and you can
                    unsubscribe anytime.</p>
                <h4 class="font-semibold mb-4 text-gray-400">FOLLOW US</h4>
                <div class="flex space-x-3 mb-6">
                    <a class="border border-white rounded-full p-2 hover:bg-white hover:text-gray-800 transition"
                        href="#"><img alt="facebook icon" class="filter invert-0 hover:invert"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBpPsqkWtsScajDKGX4TrugpXNsK_fYYdYQc9kPaX-jy6fRp4vT8B77cp80FtFH0E_jbA8B7e_BHG_CFzHLSx_N5Q2sqvDcOyyyz9QJxSQm6dzjp4JZZlEdMk-GqZyu86cqHhabqvPMHSEvlUqzveDMtVtw2iQRgI432asWm8LGi6ywrMqYcZP91vhhu0DCKsaY4itIZtQ4I3JACsycaIVFL9qywwwlMX866dkN2bXESdIufYtWc4BPp2SM6dHAUoA7PGXfQygGxSgj" /></a>
                    <a class="border border-white rounded-full p-2 hover:bg-white hover:text-gray-800 transition"
                        href="#"><img alt="instagram icon" class="filter invert-0 hover:invert"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCed-YCF2N2-_eC5JM-Bsy8p3wD2TvpFT9bM-ZKXeZGCkkg0QO0ZJygXt3hgi72sTQQcP2PvZbFWiop5m5IPqkEkkIlGTAV485rDKPpl_xBcZF0yV4BmbHVDEeisfyq94_v_7B_5ZQNPfkeQP_Pq0G3YYHVZ0PLbjd3vO97Qo_z6-m5gvrF3YnigCMfLfcXJLxCb8uAxEG4aSWN06n-Q2oisUhxpbIC__rLiWn5m6HYTFqynR_eWn8BhgbTdxWQhs1oLRGQ4cvDAnKT" /></a>
                    <a class="border border-white rounded-full p-2 hover:bg-white hover:text-gray-800 transition"
                        href="#"><img alt="pinterest icon" class="filter invert-0 hover:invert"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBc3GQtbliWRR2KJeCY4LbCFuh1zBkOz_OR5cWlziCNSnSE_1Co1twdmTun16xHJWOvzkwmRqR8v1ClJC7KaPtCoIou4GI9oDOuCSDa1jQQuAG5ZRKBxy_yf8kRoatrw0KatwWEWvLRS90zGckx9J-RWVbQxBb92FcAfi55V5mvofMtpnygusWFFj0k8qXmIaeqOOuyoYL0ESGYBvAWAXyZ6iZSAZKjwkiQl_q46z2OYN-6j4em1292cVIKlMj-ah5a3aaNfBe-yJTL" /></a>
                    <a class="border border-white rounded-full p-2 hover:bg-white hover:text-gray-800 transition"
                        href="#"><img alt="linkedin icon" class="filter invert-0 hover:invert"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJ_uvjPwqhZzuqspXHZ2VRxMsjMWFrnXlBdSer4chjc1sTV20LX7VvkbEgYs4HPoczUHco-QlpamqbCayrP-R24kPUw3aSBpfrFPxQUdReqkSR5orrgioqJ8oVticFU4bFiy6o7gXioCuXRsnywFcI8zuREA1JNLDzDwEsitqGGtYNJBQwOKi53j2xOxaVjpUI4VMwE376WZEu0kEDJ02dtprQ3NX_bR4FxIdGVwi2XuZsC9RP7msz9CcdZffdHODTCWN5CKRlgEv5" /></a>
                </div>
                <a class="inline-block border border-white px-6 py-3 text-sm font-semibold hover:bg-white hover:text-gray-800 transition"
                    href="#">DOWNLOAD CATALOGUES</a>
            </div>
        </div>
        <div class="border-t border-gray-700 pt-6 mt-6 flex justify-between items-center text-xs text-gray-400">
            <p>© 2023 - {{ $settings->app_name }} is a Brand of Wall Cladd Solutions Private Limited | Designed by
                Concrete
                Studio.</p>
            <div class="flex space-x-4">
                <a class="hover:underline" href="{{ route('front.privacy.policy') }}">Privacy Policy</a>
                <a class="hover:underline" href="{{ route('front.terms.condition') }}">Terms of Use</a>
                <a class="hover:underline" href="{{ route('front.shipping.policy') }}">Shipping Policy</a>
                <a class="hover:underline" href="{{ route('front.refund.and.cancellation.policy') }}">Refund &amp;
                    Cancellation Policy</a>
            </div>
        </div>
    </div>
</footer>
