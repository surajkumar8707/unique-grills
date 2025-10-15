@extends('layouts.app')
@section('title', 'About Page :: ' . getSettings()->app_name)
@section('content')
    <br><br><br>
    <section class="relative h-screen bg-cover bg-center" style="background-image: url('image-1715690317589.png');">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            {{-- <img alt="{{ getSettings()->app_name }} Large Logo" class="w-1/3" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFPNLmcW3lfyvLcQVm7mwMoBpaVKEdUr9dFG3Er4SObQweOIbfRXUzpfOM6R5s6Gn7-KL1CuRjXHiqXPGbZofnQUO8YF4xktEaEWUJ50CBGogyNHKcBuog36hcJ8NkYXU9W3OpsDZtgI50JHZyxOZAlm282WozX_ojn4f6yGJhwsTiVI-BsWCRsR1KRmXcBncmBtZHOqoyhducOOL8DBHdmfmjdPV5RPXbtUJsC_XWzqTNd2CbM8eKygIBwaOK0DHq-kyXaYsfOXA" /> --}}
            <img alt="{{ getSettings()->app_name }} Large Logo" class="w-1/3" src="{{ public_asset('assets/front/images/about_us.jpeg') }}" />
        </div>
    </section>
    <section class="py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-semibold mb-4">About Us</h2>
            <p class="max-w-4xl mx-auto text-gray-600">{{ getSettings()->app_name }} has been a trusted leader in the
                Reinforced Cement
                Concrete (RCC) product industry since its establishment in 1958. For over six decades, the unwavering
                support of our clients has been instrumental in our sustained presence and continuous evolution within this
                industry, driving us to develop newer materials and products. Our unwavering dedication to quality is
                underscored by our adherence to SO 9001:2015 and IS standards ensuring that every product we deliver not
                only meets but often exceeds industry benchmarks for durability, performance, and environmental
                responsibility. Our mission at {{ getSettings()->app_name }} is to be the cornerstone of robust and
                sustainable construction
                by consistently providing superior quality Reinforced Cement Concrete (RCC) products. We are dedicated to
                empowering our clients with innovative, durable, and reliable precast concrete solutions that not only meet
                but exceed their project requirements and industry standards.</p>
            {{-- <div class="flex justify-center items-center space-x-8 mt-12">
                <img alt="Certification Seal 1" class="h-24"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4lFgc1BG_Wp9s8NwYzbh4awJne3eURziZ_kCzmKjk66gprVBzh_zONP_qO5U9omAgu4I6lRNVUTL0bw7hy5bmIutbGbaD07kG2fo7HQTxszocshEy_rzYVUtVNFSZwP6httVkppi1_HWVafYaRcNzzosTZ8_JyVEXDJto9RPaIAtqsDSE_WK0HAmVW9VhUnCyCs6aLDE5GVO8qxjXqkJ6zqIzWIKVnsLzcfDZIHvo7cVG6_9sMvirSSvWgPj5wTv_PG8XyD5Bt9c" />
                <img alt="Certification Seal 2" class="h-24"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjIr90JPIrDWGiLLA4or_PX9NpIgkq4AGDjRZ6wCD89wieqh2srrVmmmAo5riW1valwzMOExtywad1hz6ZbOws5Midrn4UEPkqiN3fVWweyw6IDHFFYjWLBaaooIqdN1bUsvaPeupcpAwPBpCb_aFmCWK1fWwh5VwiJQxK6mgD6ht0OoQuwbNhH8FL0M3BnUkXq59EVCaa9JReh0WNamAyqEEGuqHTmd1syfhX7rovstCHzgpgkif_1chbUL1FxFNWGrvMQBng6pY" />
                <img alt="Certification Seal 3" class="h-24"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlXBPijKf7yUnymPYJSOvXzYkR2yMjYLBRWUFH0Ju1SkjtYqiL_GdUts-VDiPCy6FesNG9xkRaEN8iA39aN-5FZKRhGo_lT74pNWjB_oGRR1922dbvwc3lhdRZEvTYkVjBzKc2-xENl7QWUzw6-A0aWzaemDWo_DCLvVdm7hdr_txyNl_b3J83LFBQryF44WQmBgTLLzgnMVrnMEjgNZMLMGXKv0riVPIglWPkXr4vAWooBQcdBYES1Sclh9I3MhdEfDkpXyTjc8E" />
                <img alt="Certification Seal 4" class="h-24"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCS-CPDT5YAwyATUMvcsOz65wAKzqYosEfGGWMsHAhyVFszEinOvQFNphY36WjMQ4K03xnKdBRyBTjVpxisCvGaFFALTUPg9VN9g_-4ZxKrFag7dlN4UPqabdCTvwNC8iJMOORNJyMhmk-a8I7CFEZrI4gV_WmOWc7_KPK8S24se5HMMzBTwFz32I55VkwwC62uLNi8jXvhLsvvCBV6T1EYze9FRztr6jL5SPYXu7aV96jFrf3YUQYcqmtuG92OreQNqmQVShn-e3M" />
                <img alt="Certification Seal 5" class="h-24"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4qE4QZT9U-gsEWaz337cWwbJV-e8ycqY7WlCN2q-KrvWhm8cS49lyqrFyrjyrTjryMB7ek0kMmIM0A2oC4M_2lhLD2PcnJZAS-qp3z1XMlWkx6LKF6D1vltlJdQUsVaXvZSfLU9HY64z5WY_YGd5wF4g2z7JQW7TVrzMNxeBBXJx1nOGTLsXPzDIECGc0ORGFOx4NfpYX3kQooExyGzIQFWBGKe6NRsjX5KhkprQGOn9SEtWvjLga_pTy1fTv7Qrn2hI1FLtDZKc" />
                <img alt="Certification Seal 6" class="h-24"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZq3v_-jvqy28-NnqIu_8UH4X09_gD-23XyMOkKRnpv6K4DyX1u8GCDK6YW7hCWPCzjJdBOCD4nKI0TUdlr3gs5mFALGXyVFJyu0Cyj4aV3sgoep0jTXAWUtEwQefQFhzUFBPgwZeITW4wgJw-rAT9TZuzmFJJ87tCAthbA1VxiaLCHFPXEMi3kAAtTP4ZPHk_aAqP3BEutAtk3z09nNrGGyc_wJ4UOV_Eab6vdsHbB2vc4Do4aQP8nwsfjrcq03u5VIpbnG6VMtM" />
                <img alt="Certification Seal 7" class="h-24"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwsUUtdgJB0mVIsGFiYqvORBROSGr2al29F4M02DFWLjErLjcYkUDZy5jfzWtVLspzgYu2OfR74bbZWtMJLQluA0r_RKhH7UFoXT-rZw9ulDRg9mAzDuMNJE6rD_ZtiDNBDdw9t8o5mpEcd6pXTEEdKf2qShsiKYvtlew73zG6Hvz8i2UNT-jnieer31LHYRIhCbBSE6uA7ZOE0zpNMXU5Qi5YkYRlSNEO6k-tTyidLfc_0WroR9WHvwfTCt--3aPLfSd1sSjzLsA" />
            </div>
            <div class="flex justify-center mt-8 space-x-2">
                <span class="h-2 w-2 bg-gray-400 rounded-full"></span>
                <span class="h-2 w-2 bg-gray-900 rounded-full"></span>
                <span class="h-2 w-2 bg-gray-400 rounded-full"></span>
            </div> --}}
        </div>
    </section>
    {{-- <section class="relative">
        <img alt="Modern bathroom with concrete sinks" class="w-full h-auto"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFnAJoB1941D0IUe67aTaYJFkB_uisCc-GrhL58RCdMnJeJw3PAFHGu7iZl2OJbKj5DJD3L9U7cyMHiTOE0Aotag1LbjLcaTIXjfBtvOZTm9GRvK0-vm675bRg7_z3bvJCZ-3-BjmmfW0eIg2gMUGSv9Pzzzag1brklav_Q8dZfL6ImQXlVITdrqi0oEjUKGqz-rWcB7o7ZH_QGGFigTDGNEgYLBctsWpu-0txEXVK70KWct7uy80MKUpVr2ip2iT5T9LY7kb0w1M" />
        <div class="absolute inset-0 flex items-center justify-center">
            <button class="bg-black bg-opacity-50 rounded-full p-6">
                <svg class="h-12 w-12 text-white" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                        fill-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </section> --}}
    <section class="py-24 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <img alt="{{ getSettings()->app_name }} factory building" class="rounded-lg shadow-lg w-full"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0osgLkdaVzq3VT3IjbgNGa9CZLlq6voLzt1DwE8NPgacA311ydw2ClmxviceXUhaeQikMDBsWfFzF9jbOe0Mabmgdh_1TIABJFYICO9ugksNx6Fywz3-em0CIfKkgELq8i5TO18GIWc37LmkAAJoZMGLONhOCGE2sLqbLOLqA5CvU0wVvujOnJvkJZ574ueAz1GwDJ17R3IlpEJLx4N2SdjBuIjAAARn-r7MO7uTZeR7scbB4_K-L-T56Iv6v5cTJv0dPwmFBYZk" />
                </div>
                <div>
                    <h2 class="text-3xl font-semibold mb-4">Services</h2>
                    <p class="text-gray-600 mb-4">
                        At {{ getSettings()->app_name }}, we offer more than just high-quality precast products; we provide
                        integrated
                        services to guide your project from initial concept to successful completion. Our expertise begins
                        with design and engineering support, where we collaborate with your team for optimal precast
                        solutions, offering conceptualization, detailed architectural & structural design, and value
                        engineering. The core of our offering lies in our state-of-the-art manufacturing, where we
                        meticulously produce standard and customized RCC and GRC elements in a controlled factory
                        environment, using standardized materials ensuring precise dimensional accuracy and rigorous quality
                        control through every step. Once manufactured, our dedicated logistics team ensures efficient and
                        just-in-time delivery of products to your site. While installation is expertly handled by our
                        trusted partner network, we remain committed to offering comprehensive project management support,
                        providing technical assistance and seamless coordination to ensure your precast project runs
                        smoothly.
                    </p>
                    <p class="text-gray-600">We're here to change your perception about concrete by creating a grey
                        revolution and evolve with you.</p>
                </div>
            </div>
            <div class="grid md:grid-cols-2 gap-16 items-center mt-24">
                <div>
                    <p class="text-gray-600 mb-6">Our team of skilled craftsmen and designers work together to
                        create innovative solutions that will elevate any project. Join us on our journey as we
                        continue to push the boundaries of design and create through the power of concrete. We're
                        here to change the world through smart design.</p>
                    <a href="{{ route('front.contact') }}"
                        class="bg-gray-800 text-white px-8 py-3 rounded-full font-semibold hover:bg-gray-900">CONTACT US</a>
                </div>
                <div>
                    <img alt="Craftsman working on a concrete slab" class="rounded-lg shadow-lg w-full"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8XqlBsXpxcEWBmGlRTqyFiF_ME4k0j14ZOHgDVjUssRHwcLv8GL9HNRqQk1c6utoDrOw_ACX7-fpUArl9ZUhVTo94BUgEtCRX66D94RT4pd11mmA-SwVW2ArZ-QJlCqqlQdsSpMQgDC8jeqDVwMOtemh01udu35IRLTB2-uxN3X4fveiAP_sa5s4D6PXq4hpE5F6N6u87qBOibTOTZYrx8oWUlrdYfErEHNMC7RULOFW-DfCakjq_ZF5_PYOokgiFAKdDosoNwg0" />
                </div>
            </div>
        </div>
    </section>

    @if (count($client_feedbacks) > 0)
        <section class="py-24 bg-gray-50">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-semibold mb-2">WHAT CLIENTS SAY ABOUT {{ getSettings()->app_name }}?</h2>
                <p class="text-gray-600 mb-12">Discover what our valued clients have to say about their experience with
                    {{ getSettings()->app_name }}.</p>
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach ($client_feedbacks as $key => $client_feedback)
                        <div class="bg-white p-8 rounded-lg shadow-md text-left">
                            <div class="text-6xl text-gray-300 font-serif mb-4">“</div>
                            <p class="text-gray-600 mb-6">{{ $client_feedback->comment }}</p>
                            <p class="font-semibold">{{ $client_feedback->name }}</p>
                            <p class="text-sm text-gray-500">{{ $client_feedback->location }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="flex justify-center mt-8 space-x-2">
                    @foreach ($client_feedbacks as $key => $client_feedback)
                        @if ($loop->first)
                            <span class="h-2 w-2 bg-gray-900 rounded-full"></span>
                        @else
                            <span class="h-2 w-2 bg-gray-400 rounded-full"></span>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
