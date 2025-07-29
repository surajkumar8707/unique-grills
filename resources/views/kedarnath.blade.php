@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Kedarkantha Winter Trek')
@push('styles')
    {{-- <style>
        div img.kedarnath-img {
            width: 100%;
            height: 500px;
        }

        .elementor-section .elementor-container {
            display: flex;
            margin-left: auto;
            margin-right: auto;
            position: relative;
        }

        .elementor-51 .elementor-element.elementor-element-e1243b7:not(.elementor-motion-effects-element-type-background),
        .elementor-51 .elementor-element.elementor-element-e1243b7>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: transparent;
            background-image: linear-gradient(145deg, #00BDE7 0%, #007A95 100%);
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1140px;
        }

        @media (min-width: 768px) {

            .elementor-column.elementor-col-25,
            .elementor-column[data-col="25"] {
                width: 25%;
            }
        }

        .elementor-element,
        .elementor-lightbox {
            --swiper-theme-color: #000;
            --swiper-navigation-size: 44px;
            --swiper-pagination-bullet-size: 6px;
            --swiper-pagination-bullet-horizontal-gap: 6px;
        }

        .elementor-element {
            --widgets-spacing: 20px 20px;
            --widgets-spacing-row: 20px;
            --widgets-spacing-column: 20px;
        }

        .elementor-column {
            display: flex;
            min-height: 1px;
            position: relative;
        }

        .elementor-element {
            background: #00839f;
            --widgets-spacing: 20px 20px;
            --widgets-spacing-row: 20px;
            --widgets-spacing-column: 20px;
            color: white;
            border-radius: 10px;
            padding-top: 6px;
        }

        .elementor-element {
            --flex-direction: initial;
            --flex-wrap: initial;
            --justify-content: initial;
            --align-items: initial;
            --align-content: initial;
            --gap: initial;
            --flex-basis: initial;
            --flex-grow: initial;
            --flex-shrink: initial;
            --order: initial;
            --align-self: initial;
            align-self: var(--align-self);
            flex-basis: var(--flex-basis);
            flex-grow: var(--flex-grow);
            flex-shrink: var(--flex-shrink);
            order: var(--order);
        }

        .elementor *,
        .elementor :after,
        .elementor :before {
            box-sizing: border-box;
        }

        .elementor-column-gap-default>.elementor-column>.elementor-element-populated {
            padding: 10px;
        }

        .elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap {
            display: flex;
        }

        .elementor-widget-wrap {
            align-content: flex-start;
            flex-wrap: wrap;
            position: relative;
            width: 100%;
        }

        .elementor-51 .elementor-element.elementor-element-bd004b5 {
            --e-icon-list-icon-size: 37px;
            --icon-vertical-offset: 0px;
        }

        .elementor-widget-wrap>.elementor-element {
            width: 100%;
        }

        .elementor-element,
        .elementor-lightbox {
            --swiper-theme-color: #000;
            --swiper-navigation-size: 44px;
            --swiper-pagination-bullet-size: 6px;
            --swiper-pagination-bullet-horizontal-gap: 6px;
        }


        .elementor-widget {
            position: relative;
        }

        .elementor-element:where(.e-con-full, .elementor-widget) {
            align-content: var(--align-content);
            align-items: var(--align-items);
            flex-direction: var(--flex-direction);
            flex-wrap: var(--flex-wrap);
            gap: var(--row-gap) var(--column-gap);
            justify-content: var(--justify-content);
        }

        .group-banner {
            background: linear-gradient(to right, #00b4db, #0083b0);
            border-radius: 15px;
            padding: 30px;
            color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .group-banner img {
            border-radius: 10px;
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .group-banner h2 {
            font-weight: 700;
            font-size: 2.5rem;
        }

        .group-banner p {
            font-size: 1.25rem;
        }

        .highlight {
            color: orange;
            font-weight: bold;
        }

        .btn-book {
            background-color: orange;
            color: white;
            font-weight: 600;
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
        }

        .btn-book:hover {
            background-color: darkorange;
        }

        .trusted-banner {
            background: linear-gradient(to right, #00b4db, #0083b0);
            border-radius: 15px;
            padding: 40px;
            color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .trusted-banner img {
            border-radius: 10px;
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .trusted-banner h2 {
            font-weight: 400;
            font-size: 2.2rem;
        }

        .trusted-banner h2 .fw-bold {
            font-weight: 700;
        }

        .trusted-list {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        .trusted-list li {
            margin-bottom: 10px;
            font-size: 1.1rem;
            position: relative;
            padding-left: 30px;
        }

        .trusted-list li::before {
            content: '⭐';
            position: absolute;
            left: 0;
            top: 2px;
            color: yellow;
            font-size: 1.1rem;
        }

        .btn-trek {
            background-color: orange;
            color: white;
            font-weight: 600;
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
        }

        .btn-trek:hover {
            background-color: darkorange;
        }

        .section-box {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);
        }

        .btn-primary-custom {
            background-color: #00AEEF;
            border: none;
            padding: 10px 25px;
            font-weight: 600;
            border-radius: 8px;
            color: white;
        }

        .btn-primary-custom:hover {
            background-color: #007caa;
        }

        .booking-sidebar {
            background: white;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            position: sticky;
            top: 30px;
        }

        .booking-sidebar .btn {
            width: 100%;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .booking-sidebar ul {
            list-style: none;
            padding-left: 0;
            margin-top: 15px;
        }

        .booking-sidebar ul li {
            padding-left: 24px;
            position: relative;
            font-size: 0.9rem;
            margin-bottom: 8px;
        }

        .booking-sidebar ul li::before {
            content: '⭐';
            position: absolute;
            left: 0;
            color: orange;
        }

        .card-section {
            background: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .text-orange {
            color: orange;
        }

        .btn-orange {
            background-color: orange;
            color: white;
            font-weight: 600;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
        }

        .btn-orange-outline {
            border: 2px solid orange;
            color: orange;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 8px;
            background: transparent;
        }

        ul.custom-list li::before {
            content: "\2022";
            color: orange;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

        .checklist {
            list-style: none;
            padding-left: 0;
        }

        .checklist li::before {
            content: '\2713';
            color: #00aeef;
            font-weight: bold;
            display: inline-block;
            width: 1.5em;
        }

        .crosslist li::before {
            content: '\2717';
            color: red;
            font-weight: bold;
            display: inline-block;
            width: 1.5em;
        }
    </style> --}}
@endpush
@section('content')

    <div id="heroCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ public_asset('assets/front/images/slider/kedarnath_trek/kedarnath_trek_1.jpg') }}"
                    class="d-block w-100" alt="SKY" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Kedarnath TREKKING</h1>
                    <p class="lead">A SACRED JOURNEY TO THE ABODE OF LORD SHIVA</p>
                </div>

            </div>
            <div class="carousel-item active">
                <img src="{{ public_asset('assets/front/images/slider/kedarnath_trek/kedarnath_trek_2.jpg') }}"
                    class="d-block w-100" alt="Lake" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Kedarnath TREKKING</h1>
                    <p class="lead">A SACRED JOURNEY TO THE ABODE OF LORD SHIVA</p>
                </div>

            </div>
            <div class="carousel-item">
                <img src="{{ public_asset('assets/front/images/slider/kedarnath_trek/kedarnath_trek_3.jpg') }}"
                    class="d-block w-100" alt="LANDCAPE" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Kedarnath TREKKING</h1>
                    <p class="lead">A SACRED JOURNEY TO THE ABODE OF LORD SHIVA</p>
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
    <section class="container py-4">
        <div class="row g-4">
            <!-- Left/Main Content -->
            <div class="col-md-8">
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="h4 fw-bold">Kedarnath Trek</h2>
                        <div class="text-muted small">Category:
                            <span class="text-warning fw-medium">UTTARAKHAND, YATRA</span>
                        </div>
                    </div>
                    <div class="text-muted small d-flex align-items-center gap-2">
                        <span>📅 4 Days - 3 Nights</span>
                        <span class="mx-2">|</span>
                        <span>Share:
                            <a href="#" class="text-primary mx-1">Fb</a>
                            <a href="#" class="text-info mx-1">Tw</a>
                            <a href="#" class="text-danger mx-1">P</a>
                        </span>
                    </div>
                </div>

                <!-- Main Image -->
                <img src="https://www.himalayanhikers.in/wp-content/uploads/2019/10/WhatsApp-Image-2024-05-11-at-10.07.47.webp"
                    alt="Trek Group" class="img-fluid rounded shadow">

                <!-- Thumbnails -->
                <div class="d-flex overflow-auto py-3 gap-2">
                    <img src="https://www.himalayanhikers.in/wp-content/uploads/2019/10/WhatsApp-Image-2024-05-11-at-10.07.47.webp"
                        class="img-thumbnail" style="height: 80px; width: auto;">
                    <img src="https://www.himalayanhikers.in/wp-content/uploads/2019/10/WhatsApp-Image-2024-05-11-at-10.07.47-1.webp"
                        class="img-thumbnail" style="height: 80px; width: auto;">
                    <img src="https://www.himalayanhikers.in/wp-content/uploads/2021/09/IMG-20240504-WA0039.webp"
                        class="img-thumbnail" style="height: 80px; width: auto;">
                    <img src="https://www.himalayanhikers.in/wp-content/uploads/2021/08/kedarnath-150x150.jpg"
                        class="img-thumbnail" style="height: 80px; width: auto;">
                </div>

                <!-- Trek Highlights -->
                <div class="row text-center text-muted small g-3">
                    <div class="col-6 col-md-3">
                        <p class="text-warning fw-bold">
                        <h4>🚶‍♂️</h4>
                        </p>
                        <p class="fw-semibold">Trek Difficulty</p>
                        <p>Moderate</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <p class="text-warning fw-bold">
                        <h4>⏱</h4>
                        </p>
                        <p class="fw-semibold">Duration</p>
                        <p>4 Days</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <p class="text-warning fw-bold">
                        <h4>⛰</h4>
                        </p>
                        <p class="fw-semibold">Highest Altitude</p>
                        <p>11,755 ft</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <p class="text-warning fw-bold">
                        <h4>👥</h4>
                        </p>
                        <p class="fw-semibold">Age</p>
                        <p>15 to 62 yrs</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <p class="text-warning fw-bold">
                        <h4>📏</h4>
                        </p>
                        <p class="fw-semibold">Total Distance</p>
                        <p>34 Kms</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <p class="text-warning fw-bold">
                        <h4>🏕</h4>
                        </p>
                        <p class="fw-semibold">Basecamp</p>
                        <p>Gaurikund</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <p class="text-warning fw-bold">
                        <h4>🏠</h4>
                        </p>
                        <p class="fw-semibold">Stay</p>
                        <p>Homestay</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <p class="text-warning fw-bold">
                        <h4>📍</h4>
                        </p>
                        <p class="fw-semibold">Pickup Point</p>
                        <p>Rishikesh</p>
                    </div>
                </div>

                <!-- Tabs -->
                <div class="mt-5">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active fw-semibold text-success" href="#">Overview</a>
                        </li>
                        <!-- Additional tabs can go here -->
                    </ul>
                    <div class="mt-4 text-muted">
                        <h3 class="h5 fw-semibold text-dark mb-2">Kedarnath Temple Trek the India’s Most Popular
                            Destination
                            in Uttarakhand Himalayas, Complete information 2025 Yatra trek </h3>
                        <p>
                            Kedarnath Trek is a renowned pilgrimage destination, forming part of the ‘Char Dham’ in
                            Uttarakhand’s Rudraprayag district. Situated at 3,583 meters, near the Chorabari Glacier—the
                            source of the Mandakini River—Kedarnath is encircled by majestic snow-capped peaks, including
                            the notable Kedarnath Mountain. Annually, thousands of devotees from across India visit this
                            sacred site.
                            <br> <br>
                            Many Peoples thinks the Kedarnath Trek and Kedarkantha Trek are the same but these both are
                            different Treks and also located in different location. Kedarnath Trek located in Rudraprayag
                            district and Kedarkantha Trek located in Uttarakashi district in Uttarkhand.
                            <br> <br>
                            In local dialect ‘Kedarnath’ means ‘lord of fields’; according to a local legend it is believed
                            that Lord shiva hid in an assumption of a bull trying to avoid the Pandavas. Bhima, one of the
                            brothers from Pandavas, recognized lord Shiva and tried to capture the bull through its tail and
                            hind legs. Just before Bhima could fully grasp the bull, it disappeared into the ground only to
                            later appear in many forms across the region. The hump of this bull appeared in Kedarnath where
                            it is believed that Pandavas built the temple and later worshipped it.
                            <br> <br>
                            Kedarnath should not be mistaken as any easy trek, hikers not accustomed to long journeys and
                            altitudes might face some problems, hence it is generally advisable that trekkers practice a
                            reasonable amount of physical fitness.
                        </p>
                        <img class="img-fluid rounded mt-3"
                            src="https://www.himalayanhikers.in/wp-content/uploads/2019/10/WhatsApp-Image-2024-05-11-at-10.07.47.webp"
                            alt="">
                        <h3 class="h5 fw-semibold text-dark mt-4">Kedarnath Temple is a revered Hindu shrine located in the
                            Rudraprayag district of Uttarakhand, India. Here are some of the highlights of the temple:</h3>
                        <ol>
                            <li>Ancient Temple: Kedarnath Temple is one of the oldest temples in India, believed to have
                                been built by the Pandavas during the Mahabharata era.</li>
                            <li>Dedicated to Lord Shiva: The temple is dedicated to Lord Shiva, one of the most important
                                deities in Hinduism.</li>
                            <li>High Altitude: The temple is located at an altitude of 3,583 meters (11,755 feet) above sea
                                level, making it one of the highest temples in India.</li>
                            <li>Magnificent Architecture: The temple’s architecture is a beautiful blend of ancient and
                                modern styles, featuring intricate carvings and a unique design.</li>
                            <li>Unique Rituals: The temple has several unique rituals, including the Abhishekam ceremony, in
                                which the idol of Lord Shiva is bathed with water, milk, and other offerings.</li>
                            <li>Char Dham Yatra: Kedarnath Temple is one of the four shrines that make up the Char Dham
                                Yatra, a pilgrimage tour that is considered one of the most sacred in Hinduism.</li>
                            <li>Importance in Hindu Mythology: According to Hindu mythology, Kedarnath is one of the twelve
                                Jyotirlingas, which are considered to be the most sacred abodes of Lord Shiva. It is also
                                believed to be the place where Lord Shiva absolved Pandavas of the sin of killing their own
                                brothers during the Mahabharata war.</li>
                        </ol>
                        <p>
                            Overall, Kedarnath Temple is a significant pilgrimage destination for devotees of Lord Shiva and
                            Hinduism, and a beautiful site for tourists to visit and admire the ancient architecture and
                            natural beauty of the surrounding region.
                        </p>
                        <img class="img-fluid rounded mt-3"
                            src="https://www.himalayanhikers.in/wp-content/uploads/2021/08/WhatsApp-Image-2023-04-23-at-12.27.10-PM.jpeg"
                            alt="">

                        <h2><strong><u>A special place of Lord Shiva in Himalayas of Uttarakhand</u></strong></h2>
                        <p>Kedarnath is a place where a special form of Lord Shiva is seen. Kedarnath Temple is one of the
                            holy pilgrimage sites in the state of Uttarakhand, northern India, located on the banks of the
                            Mandakini river and is a beautiful place in the lap of Himalayas, which is known as Kedarnath.
                            The name of the historical heritage of this area is “Kedar Khand”. Kedarnath temple is a special
                            part of Char Dham Yatra and Panch Kedar in Uttarakhand state and it is known among the 12
                            Jyotirlingas of Lord Shiva in India.</p>
                        <p>Kedarnath This is the most remote place among all the Char Dham sites where Shiva is the
                            Taposthali, and is surrounded by snow-capped mountains that attract thieves and people to
                            itself. Known for its ancient Shiva temple, a visit to Kedarnath Dham is a beautiful and
                            mind-blowing exhilarating experience. Like other places, Kedarnath temple closes on the first
                            day of Hindu month Kartik October-November and every year Baba Kedarnath ji’s door opens again
                            for his devotees in Vaishakh April-May</p>
                        <h2><strong><u>Where do worship Lord Kedarnath in Uttarakhand ?</u></strong></h2>
                        <p>When Lord Shiva is shifted from Kedarnath to Ukhimath Dham, this Shiva temple remains submerged
                            in snow for almost half a year 6 months. Where sages dedicate themselves to the feet of Baba
                            Kedar even in the winter season, they worship him and do meditation yoga. According to a legend,
                            it is said that Lord Shiva is seen in various forms such as arms in Tungnath temple, face in
                            Rudranath temple, stomach in Madmaheshwar temple and head in Kalpeshwar temple with his hair.
                            give. Kedarnath and the above four temples are considered as Panch Kedar. Where Lord Shiva is
                            worshiped in all the Dhams.</p>
                        <p>When Lord Shiva is shifted from Kedarnath to Ukhimath Dham, this Shiva temple remains submerged
                            in snow for almost half a year 6 months. Where sages dedicate themselves to the feet of Baba
                            Kedar even in the winter season, they worship him and do meditation yoga. According to a legend,
                            it is said that Lord Shiva is seen in various forms such as arms in Tungnath temple, face in
                            Rudranath temple, stomach in Madmaheshwar temple and head in Kalpeshwar temple with his hair.
                            give. Kedarnath and the above four temples are considered as Panch Kedar. Where Lord Shiva is
                            worshiped in all the Dhams.</p>
                        <h2><b>Key Points of Kedarnath Trek</b></h2>
                        <table>
                            <tbody>
                                <tr>
                                    <td><strong>Duration</strong></td>
                                    <td><span style="font-weight: 400;">3 Nights 4 Days from Haridwar to Haridwar or
                                            Rishikesh to Rishikesh (please keep a day or two spare for the schedule
                                            considering, acclimatization and weather conditions)</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Terrain Type</strong></td>
                                    <td><span style="font-weight: 400;">Trails, steep at points</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Temperature</strong></td>
                                    <td><span style="font-weight: 400;">Day (13°C to 18° C) Night (0°C to 7°C)</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Altitude:</strong></td>
                                    <td><span style="font-weight: 400;">3583 m</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Trek Weather</strong></td>
                                    <td><span style="font-weight: 400;">Winters are covered with snow summits and peaks
                                            whereas summers experience higher temperatures</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Best Time:</strong></td>
                                    <td><span style="font-weight: 400;">May, June, September, October, Nov-&nbsp; and post
                                            monsoon season, which occurs after and before the temple gates open and
                                            close.</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Trek Level:</strong></td>
                                    <td><span style="font-weight: 400;">Moderate</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Trek distance:</strong></td>
                                    <td>&nbsp;30 km on foot and 423 km by taxi</td>
                                </tr>
                                <tr>
                                    <td><strong>Group Size:</strong></td>
                                    <td><span style="font-weight: 400;">A minimum group size of 5 people and a maximum of
                                            30
                                            people.</span>
                                        <p></p>
                                        <p><span style="font-weight: 400;">(In case anyone wants to book a private tour for
                                                their friends and family we provide a different procedure for it)</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Trek Fee</strong></td>
                                    <td>11,000.00</td>
                                </tr>
                            </tbody>
                        </table>
                        <h2><strong>Some of the trek highlights of Kedarnath Trek</strong></h2>
                        <p><span style="font-weight: 400;">Even before the trek starts trekkers are introduced to many
                                lavishing vistas of Rishikesh, Devprayag and Rudrapryag. The magical confluence of Alaknanda
                                &amp; Bhagirathi at Devprayag and Alaknanda with Mandakini at Rudraprayag is an inner outer
                                experience. Beautiful temples at every few kilometers clearly stamps that yes trekkers are
                                indeed at the Land of Gods ‘Uttarakhand”.</span></p>
                        <p><span style="font-weight: 400;">The trek officially commences from Gaurikund covering many
                                campsites along the way.</span> <span style="font-weight: 400;">Jungle Chatti, Bheembali,
                                and Linchauli are some of the camps we pass during the trek.&nbsp; The entirety of journey
                                trekkers would find devotees chanting and celebrating the trail. Echo of “Har Har Mahadev”
                                fills you with an exceptional spiritual embodiment.</span></p>
                        <p><span style="font-weight: 400;">The trek officially commences from Gaurikund covering many
                                campsites along the
                                way.</span> <span style="font-weight: 400;">Jungle Chatti, Bheembali, and Linchauli are
                                some
                                of the camps we
                                pass during the trek.&nbsp; The entirety of journey trekkers would find devotees chanting
                                and celebrating
                                the trail. Echo of “Har Har Mahadev” fills you with an exceptional spiritual
                                embodiment.</span></p>
                        <p><span style="font-weight: 400;">The final reach of Kedarnath is enough to overwhelm devotees
                                with
                                the chants of
                                “Mahadev”. Temple covered in long ribbons of marigold garlands, long happy queues of
                                devotees and the
                                calmness of the Kedarnath. Everything about this place will capture you in its
                                essence.</span></p>
                        <p><img decoding="async"
                                src="https://www.himalayanhikers.in/wp-content/uploads/2019/10/WhatsApp-Image-2024-05-11-at-10.07.47-1.jpeg"
                                alt="Kedarnath Trek Basecamp" title="Kedarnath Trek 12"></p>
                        <h2><strong>The trek to Kedarnath Temple offers several beautiful and scenic locations that you can
                                visit along the
                                way. Here are some of the most popular places to visit during the Kedarnath trek:</strong>
                        </h2>
                        <ol>
                            <li>Gaurikund: Gaurikund is the base camp for the Kedarnath trek and is located at an altitude
                                of 1,982 meters
                                (6,503 feet) above sea level. It is believed to be the place where Goddess Parvati meditated
                                to win Lord
                                Shiva’s heart.</li>
                            <li>Rambara: Rambara is a picturesque location located around 7 kilometers from Gaurikund, and
                                is an ideal place
                                to take a break during the trek. It is situated at an altitude of 2,835 meters (9,301 feet)
                                above sea level
                                and is surrounded by beautiful valleys and waterfalls.</li>
                            <li>Kedarnath Temple: Kedarnath Temple is the main attraction of the trek and is located at an
                                altitude of 3,583
                                meters (11,755 feet) above sea level. It is one of the twelve Jyotirlingas in Hindu
                                mythology and is
                                considered to be one of the most sacred sites in India.</li>
                            <li>Vasuki Tal: Vasuki Tal is a serene lake located around 6 kilometers from Kedarnath, and is
                                surrounded by
                                beautiful mountain peaks. It is situated at an altitude of 4,150 meters (13,615 feet) above
                                sea level and is
                                a popular spot for camping and trekking.</li>
                            <li>Gandhi Sarovar: Gandhi Sarovar is a glacial lake located around 2 kilometers from Kedarnath,
                                and is named
                                after Mahatma Gandhi. It is situated at an altitude of 3,900 meters (12,795 feet) above sea
                                level and offers
                                stunning views of the surrounding mountain ranges.</li>
                        </ol>
                        <h2><strong>Things to Look out for-</strong></h2>
                        <ul>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Souvenirs from
                                    Rishikesh are great
                                    for memories.</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">There are
                                    countless
                                    photogenic
                                    vistas, so we recommend that you prepare yourself for any aesthetic shoots. The best
                                    pictures are those
                                    taken under a blue sky with snow-covered peaks in the background.</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Explore the
                                    tranquility of this
                                    holy site and submerge yourself in “Baba Kedar’s” blessings.</span></li>
                        </ul>
                        <h2><b>The altitude covered in Kedarnath Trek&nbsp;</b></h2>
                        <ul>
                            <li><span style="font-weight: 400;">Rishikesh-340 m</span></li>
                            <li><span style="font-weight: 400;">Sonprayag-1829 m</span></li>
                            <li><span style="font-weight: 400;">Gaurikund-1982 m</span></li>
                            <li><span style="font-weight: 400;">Kedarnath-3583 m</span></li>
                        </ul>
                        <p><img decoding="async"
                                src="https://www.himalayanhikers.in/wp-content/uploads/2021/08/WhatsApp-Image-2023-04-23-at-12.27.06-PM.jpeg"
                                alt="Kedarnath Temple" title="Kedarnath Trek 13"></p>
                        <h2><b>Best Time to Visit&nbsp; Kedarnath Trek &amp; Opening or closing&nbsp; time every
                                year&nbsp;</b></h2>
                        <p>Kedarnath Temple, located in the Indian state of Uttarakhand, usually opens for visitors in late
                            April or early
                            May each year, and closes in the first week of November before winter sets in. The exact dates
                            of opening and
                            closing of the temple are determined by the Char Dham Devasthanam Board, which oversees the
                            management of the
                            temple. However, it’s important to note that the dates may vary slightly from year to year,
                            depending on various
                            factors such as weather conditions and other local considerations. If you are planning to visit
                            the temple, it’s
                            a good idea to check with the official website of the Char Dham Devasthanam Board or local
                            authorities for the
                            exact dates of opening and closing before making travel arrangements.</p>
                        <p><span style="font-weight: 400;">Kedarnath temple is best visited during the summer months of
                                April to June. and
                                September to Last October.&nbsp; Families and friends can enjoy the mild temperatures of
                                these months. The
                                unfavorable temperatures and precipitation make this trek a per and post monsoon season
                                trek. Temperatures
                                typically range from 15 to 20 degrees Celsius during the day, with substantially colder
                                nights.</span></p>
                        <p>The most popular time to visit Kedarnath Temple is during the Char Dham Yatra season, which
                            typically runs from
                            April/May to October/November, depending on the weather conditions. During this time, the roads
                            leading to
                            Kedarnath are open, and the temple is easily accessible.</p>
                        <p>To reach Kedarnath from Haridwar, you can take a shared taxi or bus to Gaurikund, which is the
                            base camp for the
                            trek to Kedarnath. The trek is approximately 14 kilometers long and takes around 6-8 hours to
                            complete,
                            depending on your pace and physical fitness level. Along the way, you will pass through several
                            scenic
                            locations, including waterfalls, lush forests, and picturesque valleys.</p>
                        <p>During the Char Dham Yatra season, there are several facilities available for pilgrims, including
                            accommodation
                            options, medical facilities, and food stalls. It is advisable to carry warm clothing, sturdy
                            trekking shoes, and
                            basic first aid supplies when trekking to Kedarnath, as the weather can be unpredictable and the
                            terrain can be
                            challenging.</p>
                        <p>Overall, visiting Kedarnath during the Char Dham Yatra season can be a memorable and spiritually
                            uplifting
                            experience, as you will be part of a large community of devotees who are all journeying towards
                            a common goal.
                        </p>
                        <p><b>FAQ’s</b></p>
                        <p><span style="font-weight: 400;">1) Is it safe?</span></p>
                        <p><span style="font-weight: 400;">2) Difficulty level</span></p>
                        <p><span style="font-weight: 400;">3) Weather conditions</span></p>
                        <p><span style="font-weight: 400;">4) Things to carry</span></p>
                        <p><span style="font-weight: 400;">5) Connectivity and transaction</span></p>
                        <p><span style="font-weight: 400;">6) How to reach</span></p>
                        <p>7) Short Itinerary</p>
                        <h2><b>Is Kedarnath Trek is safe?</b></h2>
                        <p><span style="font-weight: 400;">Set amidst the high altitude ranges, concerns regarding
                                Kedarnath Trek safety are
                                undeniably very valid questions. Yes the trek to Kedarnath is indeed very safe and reliable,
                                new trails and
                                much clearer safety protocols are sure to easy anyone’s concern.</span></p>
                        <h2><b>Difficulty level in Kedarnath Trek</b></h2>
                        <p><span style="font-weight: 400;">Because the top is relatively high in elevation for any beginner
                                level trekkers
                                we strongly recommend a reasonable level of physical fitness. We advise trekkers to
                                physically and mentally
                                prepare themselves prior to this trek.&nbsp;</span></p>
                        <p><span style="font-weight: 400;">Any medical assistance that is required will be provided at any
                                point of the
                                journey; however, trekkers must consult their professional care before beginning any trek.
                                We also strongly
                                advise trekkers to learn about altitude sickness and to notify our teams as soon as any
                                symptoms
                                appear.</span></p>
                        <h2><b>Weather conditions</b></h2>
                        <p><span style="font-weight: 400;">Weather conditions depend on the time of the year trekkers are
                                travelling. In the
                                months leading up to and following the monsoon season, the daytime temperatures are
                                moderate, but the
                                nighttime temperatures are significantly lower. Monsoons receive moderate to heavy
                                rainfall.</span></p>
                        <h2><b>Short itinerary of Kedarnath Trek</b></h2>
                        <p><strong>Day 1&nbsp;</strong>&nbsp; &nbsp; &nbsp;Drive from Haridwar via Rishikesh to&nbsp;
                            Guptkashi/
                            Sonprayag&nbsp;&nbsp; 202 km by taxi (1982 m overnight stay hotel</p>
                        <p><strong>Day 2&nbsp;</strong>&nbsp; &nbsp; Early Morning 3:00 am Drive from Guptkashi/ Sonprayag
                            to&nbsp;
                            &nbsp;Gaurikund same day trek&nbsp; to Kedarnath temple 15 km (8/9 hours) (3553 m) overnight
                            stay
                            Hotel/Dormantory</p>
                        <p><strong>Day 3 </strong>&nbsp; &nbsp; After Arti Darshan&nbsp; &nbsp;trek from Kedarnath to
                            Gaurikund same day
                            drive to Sonprayag/Guptkashi&nbsp; over night stay Hotel</p>
                        <p><strong>Day 4 </strong>&nbsp; &nbsp; &nbsp;Drive from Sonprayag to Haridwar via Rishikesh 202 km
                        </p>
                        <p><i><span style="font-weight: 400;"><strong>Note: –&nbsp;Our service will remain from Rishikesh
                                        to Rishikesh – for
                                        more details please check includes or excludes&nbsp;</strong></span></i></p>
                        <h2><b>Things to carry in Kedarnath Trek</b></h2>
                        <p><span style="font-weight: 400;">1) Because nights at elevations tend to be considerably colder,
                                we suggest having
                                well-graded, warm and comfortable clothing along with good quality shoes.</span></p>
                        <p><span style="font-weight: 400;">2) Despite the fact that we handle medical crises, we urge
                                individuals to keep
                                their emergency kits at hand in any case of personal underlying illnesses.</span></p>
                        <p><span style="font-weight: 400;">3) Since the journey provides you with a picturesque view of
                                many peaks, don’t
                                forget to bring your camera along with extra batteries.</span></p>
                        <p><span style="font-weight: 400;">4) Our staff will consult with fellow trekkers about their
                                luggage and, if
                                lacking, will assist trekkers in obtaining any necessary equipment. Only the relevant
                                luggage should be
                                brought, as a result.</span></p>
                        <p><em><strong>Other trekking Essentials-</strong></em></p>
                        <h2><b>Connectivity and Transactions</b></h2>
                        <p><span style="font-weight: 400;">1) Because connectivity along the route is unpredictable, we
                                urge people to do
                                all of their work ahead of time.</span></p>
                        <p><span style="font-weight: 400;">2) Last ATM transactions available will be at Gaurikund but we
                                recommend
                                travelers to collect cash beforehand or while in Rishikesh as ATMs available at other places
                                might not
                                dispense cash at times.</span></p>
                        <h2><b>How to Reach Kedarnath Trek</b></h2>
                        <p><span style="font-weight: 400;">If you are travelling from any metropolitan city in India or
                                from outside India,
                                getting to the capital city of Delhi may be the first and most important step. All major
                                modes of
                                transportation, such as air, road, and rail, can take you to Delhi.</span></p>
                        <p><span style="font-weight: 400;">Rishikesh is connected to most major cities in India via all
                                chief modes of
                                transportation. Trekkers could perhaps conduct extensive research for their direct mode of
                                transportation to
                                ensure a much smoother arrival.</span></p>
                        <h4><b>By air</b><span style="font-weight: 400;">– Jolly Grant Airport is the nearest airport to
                                Rishikesh. It is
                                well connected to Delhi and many chief cities with daily
                                flights.&nbsp;</span><em><strong>How to reach
                                    Rishikesh from Delhi</strong></em></h4>
                        <p><b>By road</b><span style="font-weight: 400;">-Delhi has direct road routes to Rishikesh.
                                Trekkers will have to
                                book either a bus or private cabs. Prior booking for cabs and buses are easily available at
                                various
                                sites.</span></p>
                        <p><em><strong>Delhi&gt; Rishikesh &gt;Sonprayag&gt;Gaurikund</strong></em></p>
                        <p><b>By railway</b><span style="font-weight: 400;">– Nearest Railway station to Rishikesh will be
                                <a href="https://en.wikipedia.org/wiki/Rishikesh_railway_station" target="_blank"
                                    rel="noopener noreferrer"><strong>Rishikesh Railway station</strong></a>. Since
                                Rishikesh is connected
                                to all major railway routes, trekkers can opt for a direct route or via Delhi. They can also
                                opt for direct
                                trains to Dehradun or Haridwar and the take cab or bus to Rishikesh.</span></p>
                        <p><em><strong>.Some important points to note-</strong></em></p>
                        <ul>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Please note that
                                    we don’t provide
                                    timings schedules for transportation before Rishikesh. Subjected to various conditions
                                    the scheduled
                                    timings and availability of particular rides may differ. We recommend trekkers to reach
                                    out to our teams
                                    for any queries. You can drop an email or call us for an initial guided session.</span>
                            </li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Our teams will
                                    be collecting
                                    trekkers at fixed points of airports, railway stations and bus stands.</span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">It is
                                    recommended that unless any
                                    delay arrives, trekkers are advised to reach the destinations at least 2 hours
                                    prior.</span></li>
                        </ul>
                        <h2><b>Things Himalayan Hikers Recommend</b></h2>
                        <p><span style="font-weight: 400;">As previously stated, a camera, as well as spare batteries and
                                memory cards, are
                                recommended. We can assure and guarantee that you will be stopping frequently along the
                                trail to observe the
                                grandeur of the trekking experience.</span></p>
                        <p><span style="font-weight: 400;">We strongly recommend trekkers to prepare beforehand for the
                                journey ahead.
                                Regular practicing physical fitness and mental endurance will surely assist trekkers in
                                great time.</span>
                        </p>
                        <p><span style="font-weight: 400;">After the trek, we strongly encourage trekkers to tag us on
                                social media when
                                they post any memories from the trip; this will not only prove invaluable to us with our
                                work, but will also
                                serve as a motivational example for all of our experts.</span></p>
                        <h2><b>Why you should choose us</b></h2>
                        <p><span style="font-weight: 400;">We’re here to give you the greatest experience possible through
                                the eyes of
                                highly skilled and qualified specialists who have a passion for adventure sports. We are
                                community members
                                attempting to promote our favorite adventure sports while also supporting local businesses.
                                We, at Himalayan
                                hikers, dedicate ourselves to providing you with an unforgettable experience.</span></p>
                        <h2><strong>What we do during an emergency breakout in the Kedarnath Trek?</strong></h2>
                        <p>First of all, the safety of trekkers is much more for us, if you see in the trek, then there are
                            all the risks,
                            which I do not think about.</p>
                        <p>Himalayan Hikers worry more about you that no one should ever have any problem in the trek.</p>
                        <p><strong><u>What should we and you keep more safety in the trek</u></strong></p>
                        <ol>
                            <li>Whenever you are going for kedarnath trek, it is very important that you go completely fit
                                and ready.</li>
                            <li>Kedarnath trek is Moderate, if you make your feet and your mind calm and strong, you will
                                find the trek very
                                easy.</li>
                            <li>While trekking, keep in mind that you are walking on the right route or not always with your
                                guide.</li>
                            <li>Most people look somewhere and where they are walking, this can cause twitching in your
                                legs, which can ruin
                                your entire trek.</li>
                            <li>It is important to ask your doctor if you have any medical problems</li>
                            <li>I should always keep my medical kit with me, it is very important.</li>
                            <li>Himalayan Hikers always keep a medical kit with you, such as oxygen cylinders, medicine to
                                be given in
                                emergency on the kedarnath trek</li>
                            <li>If any trekkers have any more problems, then they are brought back to the base camp by
                                laying them in the
                                stretcher.</li>
                            <li>Our Hotels in Kedarnath trek is around the 6000 feet to 11,000 feet where you can not have
                                any problem of
                                oxygen, this is tree line area</li>
                            <li>In case of any medical problem, the help of your guide or a well-informed trekkers should be
                                taken</li>
                            <li>If there is major health problems in Kedarnath trek , then Nearest Hospital is in
                                Rudarparyag / Gaurikund /
                                Karanparyag which is about&nbsp; 69&nbsp; Kms away from Kedarnath trek&nbsp; last option in
                                dehradun and
                                Rishikesh the distance is 257 kms</li>
                            <li>Along with the trek we keep getting acclimatization</li>
                        </ol>
                        <h2><strong>&nbsp;</strong><strong>Self-Certificate of Emergency Breakout</strong></h2>
                        <p>Trekking in the Himalayas is not a cup of tea but it is a rewarding experience. However, it’s
                            important to keep
                            things in mind when it comes to Safety. One must know about the weather conditions, the altitude
                            gain, fitness
                            and other factors that can wreck your experience. In such adverse conditions, you are solely
                            responsible for
                            your well being and act maturely.</p>
                        <h2><strong><u>Also Read About – Safety Tips For Safe Trekking.</u></strong></h2>
                        <p>Preparations before the Trek</p>
                        <p>You’ve to understand that treks are away from cities and medical help is not always easily
                            available. So, if you
                            are heading for an adventurous trekking trip, stick to certain trekking guidelines and tips.
                            Following these
                            simple tips will help make the trek more fun and experiential for you as well as your fellow
                            trekkers.</p>
                        <p>These tips and guidelines cater to useful and requisite information about your fitness training,
                            packing and
                            health precautions to be taken before and during the trek.</p>
                        <ol>
                            <li>Firstly, when you start, target 5 km in 40 minutes</li>
                            <li>Then gradually increase your pace by running at least 4 times a week. Then try to bring it
                                down to 5 km in
                                less than 37 minutes</li>
                            <li>If you are a person who prefers cycling over running then your target must be 22 km means
                                you should be able
                                to cover 22 km in 60 minutes.</li>
                            <li>Walking is a great exercise that gives great shape to your legs and your body. It helps in
                                burning calories
                                and cut down excess weight and strengthens the heart.</li>
                            <li>Jogging is effective in increasing the human lifespan and makes your lungs stronger. It is
                                an aerobic
                                activity that requires a lot of oxygen. This is a great exercise for fighting obesity and
                                staying healthy.
                            </li>
                            <li>Squats are the best form of functional exercises to improve stability. They also strengthen
                                your legs,
                                thighs, hips, and hamstring.</li>
                            <li>Another great cardiovascular exercise is pushing your body upstairs after stairs. This is
                                regarded as the
                                best exercise for increasing strength and power</li>
                        </ol>
                        <h2><strong><u>What to pack for Kedarnath Trek </u></strong></h2>
                        <p>Warm clothes, sleeves, wind shelter, comfortable clothing, and extra warm clothes so that you can
                            enjoy trekking.
                            A raincoat is the necessary</p>
                        <p>Footwear: A well-fitted trekking footwear shoes are highly recommended. If you wear an
                            uncomfortable pair of
                            shoes, your feet will be hurt.</p>
                        <h2><strong>Choosing to trek to Kedarnath with Himalayan Hikers can be a rewarding decision for
                                several
                                reasons:</strong></h2>
                        <h3>Expertise and Experience</h3>
                        <ol>
                            <li><strong>Experienced Guides</strong>: Himalayan Hikers employs experienced guides who are
                                well-versed with
                                the terrain, weather conditions, and local culture. Their knowledge ensures a safe and
                                informative journey.
                            </li>
                            <li><strong>Reputation and Track Record</strong>: As a reputable trekking company, they have a
                                strong track
                                record of successfully organizing numerous treks in the Himalayan region.</li>
                        </ol>
                        <h3>Safety and Support</h3>
                        <ol start="3">
                            <li><strong>Safety Measures</strong>: They prioritize safety with well-planned itineraries,
                                proper
                                acclimatization schedules, and emergency protocols.</li>
                            <li><strong>Support Staff</strong>: The presence of support staff like porters, cooks, and
                                assistants ensures
                                that trekkers are well taken care of throughout the journey.</li>
                        </ol>
                        <h3>Comprehensive Packages</h3>
                        <ol start="5">
                            <li><strong>All-Inclusive Packages</strong>: Himalayan Hikers offers all-inclusive packages that
                                cover permits,
                                meals, accommodation, and transportation. This convenience allows trekkers to focus solely
                                on the
                                experience.</li>
                            <li><strong>Customized Itineraries</strong>: They offer flexible itineraries to cater to
                                different fitness
                                levels and preferences, ensuring a personalized trekking experience.</li>
                        </ol>
                        <h3>Local Knowledge and Cultural Insight</h3>
                        <ol start="7">
                            <li><strong>Cultural Immersion</strong>: The company provides insights into the local culture,
                                traditions, and
                                history of the Kedarnath region, enriching the overall experience.</li>
                            <li><strong>Community Connections</strong>: Their strong connections with local communities can
                                offer unique
                                interactions and authentic experiences that independent trekkers might miss.</li>
                        </ol>
                        <h3>Eco-Friendly Practices</h3>
                        <ol start="9">
                            <li><strong>Sustainable Trekking</strong>: Himalayan Hikers promotes eco-friendly practices such
                                as responsible
                                waste management and minimal environmental impact, contributing to the preservation of the
                                pristine
                                Himalayan environment.</li>
                        </ol>
                        <h3>Customer Testimonials and Reviews</h3>
                        <ol start="10">
                            <li><strong>Positive Reviews</strong>: Many trekkers have shared positive reviews and
                                testimonials about their
                                experiences with Himalayan Hikers, highlighting the company’s professionalism, hospitality,
                                and attention to
                                detail.</li>
                        </ol>
                        <p>By choosing Himalayan Hikers, you can ensure a well-organized, safe, and enriching trek to
                            Kedarnath, allowing
                            you to fully enjoy the spiritual and natural beauty of this sacred pilgrimage.</p>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="col-md-4">
                <!-- Price & Booking -->
                <div class="card mb-4 shadow">
                    <div class="card-header bg-warning text-white fw-bold">₹11,000.00</div>
                    <div class="card-body">
                        <label class="form-label">Number of tickets</label>
                        <input type="number" class="form-control" value="1">
                        <p class="mt-2 fw-semibold">Total = ₹11000.00</p>
                        <button class="btn btn-success w-100 mt-3 fw-bold">BOOKING NOW</button>
                    </div>
                </div>

                <!-- Quick Enquiry -->
                <div class="card mb-4 shadow">
                    <div class="card-body">
                        <h4 class="fw-bold mb-3">SEND A QUICK ENQUIRY</h4>
                        <input type="text" class="form-control mb-2" placeholder="Your name*">
                        <input type="text" class="form-control mb-2" placeholder="Phone*">
                        <input type="email" class="form-control mb-2" placeholder="Email*">
                        <input type="text" class="form-control mb-2" placeholder="Your Trek*">
                        <input type="text" class="form-control mb-2" placeholder="Subject*">
                        <textarea class="form-control mb-2" placeholder="Message"></textarea>
                        <button class="btn btn-warning w-100 fw-bold">SEND ENQUIRY</button>
                    </div>
                </div>

                <!-- Suggested Treks -->
                <div class="row g-3">
                    <div class="col-12">
                        <div class="position-relative">
                            <img class="img-fluid rounded w-100"
                                src="https://www.himalayanhikers.in/wp-content/uploads/2025/05/Ranthan-trek4-430x430.webp">
                            <div
                                class="position-absolute bottom-0 start-0 bg-dark bg-opacity-50 text-white px-2 py-1 small fw-semibold">
                                RANTHAN KHARAK TREK</div>
                            <div class="position-absolute top-0 end-0 bg-success text-white px-2 py-1 small">₹15,000.00
                            </div>
                        </div>
                    </div>
                    <!-- Repeat other trek cards similarly -->
                </div>
            </aside>
        </div>
    </section>

@endsection
