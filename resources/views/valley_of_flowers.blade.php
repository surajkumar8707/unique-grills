@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Valley Of Flowers')
@section('meta_description',
    'Valley of Flowers Trek - A Spiritual Journey to the Abode of Lord Shiva. Explore the
    breathtaking beauty of the Valley of Flowers with our comprehensive trekking guide. Book your adventure now!')
    @push('styles')
        <style>
            .info-icon {
                width: 30px;
                margin-right: 10px;
            }

            .info-box {
                display: flex;
                align-items: start;
                margin-bottom: 20px;
            }

            .info-label {
                font-weight: bold;
                text-transform: uppercase;
                font-size: 0.9rem;
            }

            .info-value {
                font-size: 1rem;
            }

            .trek-fee-box {
                background-color: #fff9e6;
                border: 1px solid #f1c40f;
                padding: 20px;
                border-radius: 5px;
                font-family: Arial, sans-serif;
            }

            .trek-fee-box h5 {
                font-weight: bold;
                color: #000;
            }

            .trek-fee-amount {
                font-size: 28px;
                color: #000;
                font-weight: bold;
            }

            .small-text {
                font-size: 14px;
                color: #333;
            }

            .trek-list li {
                font-size: 14px;
            }

            .form-select {
                margin-bottom: 10px;
            }

            .highlight-text {
                color: #cc0000;
                font-weight: bold;
            }

            .highlightedSnippet_highlightedSnippet__6a_7z {
                display: flex;
                align-items: center;
                justify-content: flex-start;
                gap: .5em;
                width: 100%;
                border-top: 2px solid #fc0;
                border-bottom: 2px solid #fc0;
                background: rgba(255, 204, 0, .2);
                padding: .25rem;
                color: #000;
                font-family: Franklin Gothic Book, Arial Narrow, Arial, sans-serif;
                font-size: 16px;
                line-height: 20px;
                margin-bottom: 1rem;
            }
        </style>
    @endpush
@section('content')

    <div id="heroCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ public_asset('assets/front/images/slider/valley_of_flowers/valley_of_flowers_1.jpg') }}"
                    class="d-block w-100" alt="SKY" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Valley of Flowers</h1>
                    <p class="lead">A Legendary Trail the World Wants to Trek</p>
                </div>

            </div>
            <div class="carousel-item active">
                <img src="{{ public_asset('assets/front/images/slider/valley_of_flowers/valley_of_flowers_2.jpeg') }}"
                    class="d-block w-100" alt="Lake" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Valley of Flowers</h1>
                    <p class="lead">A Legendary Trail the World Wants to Trek</p>
                </div>

            </div>
            <div class="carousel-item">
                <img src="{{ public_asset('assets/front/images/slider/valley_of_flowers/valley_of_flowers_3.jpg') }}"
                    class="d-block w-100" alt="LANDCAPE" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Valley of Flowers</h1>
                    <p class="lead">A Legendary Trail the World Wants to Trek</p>
                </div>

            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%);"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(100%);"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">

            <!-- TREK DIFFICULTY -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aEkeh7NJEFaPX2TQ_difficultyicon_moderate.png?w=100&q=50&org_if_sml=1"
                        class="info-icon" alt="Trek Difficulty">
                    <div>
                        <div class="info-label">Trek Difficulty</div>
                        <div class="info-value">Moderate</div>
                    </div>
                </div>
            </div>

            <!-- TREK DURATION -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/4902f37f-15b9-4b5d-ace9-ad71d477a4e9_Trek_duration_icon.png?w=100&q=50&org_if_sml=1"
                        class="info-icon" alt="Trek Duration">
                    <div>
                        <div class="info-label">Trek Duration</div>
                        <div class="info-value">6 days</div>
                    </div>
                </div>
            </div>

            <!-- HIGHEST ALTITUDE -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/c67b49bd-854f-4450-a803-a24db9f283fd_Highest_altitude_icon.png?w=100&q=50&org_if_sml=1"
                        class="info-icon" alt="Highest Altitude">
                    <div>
                        <div class="info-label">Highest Altitude</div>
                        <div class="info-value">14,107 ft</div>
                    </div>
                </div>
            </div>

            <!-- TOTAL TREK DISTANCE -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/ZwPatrVsGrYSwcis_trekdistance_icon.png?w=100&q=50&org_if_sml=1"
                        class="info-icon" alt="Trek Distance">
                    <div>
                        <div class="info-label">Total Trek Distance</div>
                        <div class="info-value">34 kms</div>
                    </div>
                </div>
            </div>

            <!-- BASECAMP -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/07baea47-6aea-47fb-80e1-c79f051d7596_How_to_reach_the_basecamp.png?w=100&q=50&org_if_sml=1"
                        class="info-icon" alt="Basecamp">
                    <div>
                        <div class="info-label">Basecamp</div>
                        <div class="info-value">Karchi</div>
                    </div>
                </div>
            </div>

            <!-- ACCOMMODATION TYPE -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/ZwPatbVsGrYSwcir_tent_icon.png?w=100&q=50&org_if_sml=1"
                        class="info-icon" alt="Accommodation">
                    <div>
                        <div class="info-label">Accommodation Type</div>
                        <div class="info-value">Gender-specific homestay/lodge</div>
                    </div>
                </div>
            </div>

            <!-- PICKUP DETAILS -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/Z_ZYHHdAxsiBwews_PickupTime_icon.png?w=100&q=50&org_if_sml=1"
                        class="info-icon" alt="Pickup">
                    <div>
                        <div class="info-label">Pickup Details</div>
                        <div class="info-value">
                            <a href="#">Live free hostel, Rishikesh</a> at 5.30 AM
                        </div>
                    </div>
                </div>
            </div>

            <!-- DROPOFF DETAILS -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/Z_ZYG3dAxsiBwewr_DropOffTime_icon.png?w=100&q=50&org_if_sml=1"
                        class="info-icon" alt="Dropoff">
                    <div>
                        <div class="info-label">Dropoff Details</div>
                        <div class="info-value">
                            <a href="#">Live free hostel, Rishikesh</a> at 6.00 PM
                        </div>
                    </div>
                </div>
            </div>

            <!-- CLOAKROOM -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/Z-5jYHdAxsiBwREN_Cloakroom_Icon_New.png?w=100&q=50&org_if_sml=1"
                        class="info-icon" alt="Cloakroom">
                    <div>
                        <div class="info-label">Cloakroom</div>
                        <div class="info-value">
                            <a href="#">Available</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SUITABLE FOR -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/cefde51a-92aa-4cc0-a80b-cd7f98c51d5e_Age+Icon+.png?w=100&q=50&org_if_sml=1"
                        class="info-icon" alt="Suitable for">
                    <div>
                        <div class="info-label">Suitable for</div>
                        <div class="info-value">
                            <a href="#">11 to 62 years</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- REGION -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aCwyiCdWJ-7kSVBz_RegionIconColoured_ResizedFinal.png?w=100&q=50&org_if_sml=1"
                        class="info-icon" alt="Region">
                    <div>
                        <div class="info-label">Region</div>
                        <div class="info-value">Uttarakhand</div>
                    </div>
                </div>
            </div>

            <!-- OFFLOADING -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/Z-4my3dAxsiBwQLj_OffloadingIcon.png?w=100&q=50&org_if_sml=1"
                        class="info-icon" alt="Offloading">
                    <div>
                        <div class="info-label">Offloading</div>
                        <div class="info-value">
                            <a href="#">Available</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row mt-sm-4 mt-2 mmt-1 m-p-t-1 justify-content-between">
            <section class="col-12 col-lg-8 col-md-12">
                <div class="my-0 mmt-0 m-p-t-2">
                    <div>
                        <h2 class="p-text-1 mt-3 mb-2"><b>A Legendary Trail the World Wants to Trek in</b></h2>
                        <div class="TrekOverview_intro_mobile__5AOPL p-text-4">
                            <div
                                class="TrekOverview_readMoreParagraph__HfnqG TrekOverview_readMoreParagraphExpanded__KZK2O">
                                <p>The Valley of Flowers trek is one of the most well-known treks in India. Even if you’re
                                    not into trekking, chances are you’ve heard of it. Trekkers from around the world visit
                                    the valley– especially during monsoon, when wildflowers of every colour burst into
                                    bloom. Some of these flowers are so rare, you won’t see them growing like this anywhere
                                    else in the world.</p>
                            </div>
                            <div
                                class="TrekOverview_readMoreParagraph__HfnqG TrekOverview_readMoreParagraphExpanded__KZK2O">
                                <p>But at Indiahikes, we feel the valley deserves much more credit than just for its
                                    flowers. Even without the blooms, the valley is pure magic. It’s nestled deep between
                                    tall mountains, with the Pushpavati River flowing right through it. The trail winds
                                    alongside this river, leading you to a stunning viewpoint of a glacier at the far end.
                                    You can dip your feet in icy streams and just soak in the silence. In monsoon, you see
                                    bursts of colours at every step. The flowers look perfectly manicured. Yet it’s all
                                    natural.</p>
                            </div>
                            <div
                                class="TrekOverview_readMoreParagraph__HfnqG TrekOverview_readMoreParagraphExpanded__KZK2O">
                                <div data-oembed="https://www.youtube.com/watch?v=aljJo0o6Kg4" data-oembed-type="video"
                                    data-oembed-provider="YouTube"><iframe width="100%" height="400"
                                        src="https://www.youtube.com/embed/aljJo0o6Kg4?feature=oembed&amp;enablejsapi=1&amp;origin=https%3A%2F%2Findiahikes.com"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""
                                        title="Valley Of Flowers | A Legendary Trail the World Wants to Trek in | By Nagasai Anudeep| Indiahikes"
                                        data-gtm-yt-inspected-8739884_61="true" id="448784431"
                                        data-gtm-yt-inspected-8739884_95="true" data-gtm-yt-inspected-26="true"></iframe>
                                </div>
                            </div>
                            <div class="highlightedSnippet_highlightedSnippet__6a_7z">
                                <div style="position:relative"
                                    class="ci-fill-image-18695 cdn-image_cdnImage__jhNsc undefined"><img
                                        src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/76e6400e-02b7-48b1-b8d6-8842929c7016_Best+time+.png?w=35&amp;h=35&amp;q=50&amp;org_if_sml=1"
                                        srcset="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/76e6400e-02b7-48b1-b8d6-8842929c7016_Best+time+.png?w=35&amp;h=35&amp;q=50&amp;org_if_sml=1 1x, https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/76e6400e-02b7-48b1-b8d6-8842929c7016_Best+time+.png?w=52.5&amp;h=52.5&amp;q=50&amp;org_if_sml=1 1.5x, https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/76e6400e-02b7-48b1-b8d6-8842929c7016_Best+time+.png?w=70&amp;h=70&amp;q=50&amp;org_if_sml=1 2x"
                                        alt="76e6400e 02b7 48b1 b8d6 8842929c7016 best time "
                                        style="transition-timing-function: ease-out; transition-duration: 800ms; transition-property: none; transition-delay: 100ms; opacity: 1; object-fit: cover; object-position: center center;"
                                        class="ci-ssg-image-18695" loading="lazy"></div>
                                <p>It is important to time your visit well. Valley of Flowers has something different to
                                    offer each month. <a target="_blank"
                                        href="https://indiahikes.com/blog/best-time-to-visit-valley-of-flowers"
                                        rel="noreferrer">Read this article</a> to find out the best time to trek here. </p>
                            </div>
                            <div class="TrekOverview_readMoreParagraph__HfnqG ">
                                <p>
                                    The trek’s cultural essence is equally captivating. You climb to Hemkund Sahib, a sacred
                                    lake perched over 14,000 ft above sea-level. The climb is tough. But as you go higher,
                                    you get stunning views of Ghangaria and the Valley of Flowers far below. It gives you a
                                    sense of how far you’ve come. The scenery shifts as you climb. Trees thin out, and
                                    alpine meadows begin to appear. If you are trekking in August, you stumble upon the
                                    sacred Brahma Kamal along the way. At Hemkund Sahib, you stand at the edge of a huge
                                    glacial lake with the dome-roofed Gurudwara sitting by the water. It’s a moment of peace
                                    that stays with you.
                                    <br><br>
                                    However, the Valley of Flowers Trek isn’t without its challenges. The climbs to the
                                    Valley of Flowers and Hemkund Sahib from Ghangria are steep. The trek days are long and
                                    require good stamina.
                                    <br><br>
                                    But if you come prepared, it’s unforgettable. Trekking to the Valley of Flowers is a
                                    once-in-a-lifetime chance to witness a natural wonder the whole world dreams of
                                    experiencing.
                                    <br><br>
                                    <b>How the World Came to Know About the Valley of Flowers:</b> The story of how this
                                    trek was
                                    discovered is as fascinating as the valley itself. In 1931, legendary British
                                    mountaineer Frank Smythe and his team were returning from an expedition to Mt Kamet when
                                    they lost their way. They wandered into a hidden valley fed by the Pushpavati Nala. What
                                    they found left them spellbound—an endless stretch of vibrant wildflowers blooming in
                                    every direction. Smythe was so taken by the sight that he named it the “Valley of
                                    Flowers” in his book, forever putting this magical place on the map.
                                    <br><br>
                                    In 1980, the area was declared the Valley of Flowers National Park. Later, in 2002, it
                                    gained recognition as a UNESCO World Heritage Site. Ever since then, the name has spread
                                    far and wide. Today, the trek is known globally and features in the bucket list of
                                    trekkers from all parts of the world.
                                </p>
                                <div
                                    class="TrekOverview_readMoreParagraph__HfnqG TrekOverview_readMoreParagraphExpanded__KZK2O">
                                    <h3><strong>5 Things We Love About the Valley of Flowers Trek</strong></h3>
                                </div>
                                <div
                                    class="TrekOverview_readMoreParagraph__HfnqG TrekOverview_readMoreParagraphExpanded__KZK2O">
                                    <p><strong>1) The Waterfalls Along the Trail</strong><br>Not many of us associate the
                                        Valley of Flowers trek with waterfalls. But in peak monsoon, you start spotting them
                                        just after Poolna. Numerous rainfed streams cascade down the steep valley sides into
                                        the Pushpavati Nala. One of the most striking among them appears right as you enter
                                        the Valley. You stand on a wooden bridge over the Pushpavati, watching the waterfall
                                        crash into the stream with full force. Another stunning one lies just above
                                        Ghangria, on the way to Hemkund Sahib. It’s right after this waterfall that the
                                        zigzag climb to Hemkund begins. While we usually think of flowers and greenery when
                                        it comes to the Valley of Flowers, these streams and waterfalls add a whole new
                                        dimension to the trek.</p>
                                </div>
                                <div
                                    class="TrekOverview_readMoreParagraph__HfnqG TrekOverview_readMoreParagraphExpanded__KZK2O">
                                    <p><strong>2) View from the Blue Poppy Point</strong><br>On the climb to the Valley of
                                        Flowers from Ghangria, well before you actually enter the valley, you reach the Blue
                                        Poppy Viewpoint. From here, you get a stunning bird’s-eye view of the entire valley
                                        — a lush green landscape winding along with the Pushpavati Nala. In the distance,
                                        the towering extensions of Gauri Parvat and the Tipra Bamak Glacier come into view.
                                        It beautifully sets the tone for the trek ahead.</p>
                                </div>
                                <div
                                    class="TrekOverview_readMoreParagraph__HfnqG TrekOverview_readMoreParagraphExpanded__KZK2O">
                                    <p><strong>3) The Valley of Flowers</strong><br>The Valley of Flowers is the crown jewel
                                        of this trek. As you enter the valley, you are greeted by a vibrant carpet of
                                        wildflowers stretching across kilometres. Walking deeper into the valley, you notice
                                        the incredible diversity of flora. The variety in shapes, sizes, and colours is
                                        astounding. Every few steps reveal new flowers, and the cool mountain breeze carries
                                        their unique fragrances. The valley is alive, a natural masterpiece that feels
                                        almost magical.</p>
                                </div>
                                <div
                                    class="TrekOverview_readMoreParagraph__HfnqG TrekOverview_readMoreParagraphExpanded__KZK2O">
                                    <p><strong>4) Climb to Hemkund Sahib</strong><br>The climb to Hemkund Sahib is
                                        challenging but deeply rewarding. Over a distance of 6 km, you ascend nearly 4,000
                                        ft, taking you into the heart of the alpine zone. The trail offers dramatic views of
                                        Ghangaria and the Valley of Flowers from above, giving you a perspective of the
                                        journey you’ve undertaken. As you climb higher, the landscape changes. The treeline
                                        gives way to alpine meadows, and the air grows thinner. Upon reaching Hemkund Sahib,
                                        the pristine glacial lake and the surrounding peaks leave you awestruck. The lake
                                        reflects the Gurudwara and the towering mountains, creating a serene and spiritual
                                        atmosphere. For many, this moment is one of quiet reflection and gratitude.</p>
                                </div>
                                <div
                                    class="TrekOverview_readMoreParagraph__HfnqG TrekOverview_readMoreParagraphExpanded__KZK2O">
                                    <p><strong>5) A Cultural Journey</strong><br>The Valley of Flowers Trek offers a glimpse
                                        into the incredible faith and resilience of people. The journey to Hemkund Sahib is
                                        undertaken by pilgrims of all ages, from children to the elderly. Some use ponies or
                                        porters, but many rely on sheer determination to reach the sacred site. The spirit
                                        of service at Hemkund Sahib Gurudwara is equally inspiring. Volunteers tirelessly
                                        clean the trails and serve food and warmth to visitors in freezing temperatures.
                                        Having a hot glass of tea at Hemkund Sahib Gurudwara after a tough climb is an
                                        experience like no other.</p>
                                </div>
                                <div
                                    class="TrekOverview_readMoreParagraph__HfnqG TrekOverview_readMoreParagraphExpanded__KZK2O">
                                    <p><strong>5) A Cultural Journey</strong><br>The Valley of Flowers Trek offers a glimpse
                                        into the incredible faith and resilience of people. The journey to Hemkund Sahib is
                                        undertaken by pilgrims of all ages, from children to the elderly. Some use ponies or
                                        porters, but many rely on sheer determination to reach the sacred site. The spirit
                                        of service at Hemkund Sahib Gurudwara is equally inspiring. Volunteers tirelessly
                                        clean the trails and serve food and warmth to visitors in freezing temperatures.
                                        Having a hot glass of tea at Hemkund Sahib Gurudwara after a tough climb is an
                                        experience like no other.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="col-12 col-lg-4 col-md-12 mt-2 d-m-none-vis">
                <div class="trek-fee-box">
                    <h5>Trek Fee</h5>
                    <p class="trek-fee-amount">₹ 11,950</p>
                    <p class="small-text">+ 5% GST<br>
                        + ₹1,080 Trek Insurance<br>
                        + ₹3,000 for transport to and from basecamp</p>

                    <hr>

                    <ul class="trek-list mb-3">
                        <li>Optional Addons:</li>
                        <li>₹2800 Backpack Offloading</li>
                        <li>₹800 Accommodation Shield</li>
                    </ul>

                    <a href="#" class="d-block small-text mb-2 text-decoration-underline">Inclusions &
                        Exclusions</a>
                    <a href="#" class="d-block small-text mb-2 text-decoration-underline">Terms & Conditions</a>
                    <a href="#" class="d-block small-text mb-3 text-decoration-underline">Cancellation Policy</a>
                    <a href="#" class="d-block small-text text-decoration-underline mb-3">Scholarship & Waivers</a>

                    <h6 class="mb-3">SELECT DATE TO REGISTER - 2025</h6>

                    <select class="form-select">
                        <option>July 2025 🌸 Blooming Season</option>
                    </select>
                    <select class="form-select">
                        <option>August 2025 🌸 Blooming Season</option>
                    </select>
                    <select class="form-select">
                        <option>September 2025 🌸 Blooming Season</option>
                    </select>

                    <select class="form-select">
                        <option>Seniors Only</option>
                    </select>
                    <select class="form-select">
                        <option>New Group</option>
                    </select>

                </div>
            </div>
        </div>
    </div>

@endsection
