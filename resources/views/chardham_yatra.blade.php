@extends('layouts.app')
@section('title', getSettings()->app_name . ' :: Chardham Yatra')
@section('content')
    <div id="heroCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ public_asset('assets/front/images/slider/chardhamyatra/6.webp') }}" class="d-block w-100"
                    alt="SKY" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Char Dham Yatra from Haridwar</h1>
                    <p class="lead">Char Dham Yatra from Haridwar {{ date('Y') }}: Char Dham are the famous four Hindu
                        pilgrimage sites nestled among the lofty peaks of the Himalayas in Uttarakhand.</p>
                </div>

            </div>
            <div class="carousel-item">
                <img src="{{ public_asset('assets/front/images/slider/chardhamyatra/5.jpeg') }}" class="d-block w-100"
                    alt="Lake" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Char Dham Yatra from Haridwar</h1>
                    <p class="lead">Char Dham Yatra from Haridwar {{ date('Y') }}: Char Dham are the famous four Hindu
                        pilgrimage sites nestled among the lofty peaks of the Himalayas in Uttarakhand.</p>
                </div>

            </div>
            <div class="carousel-item">
                <img src="{{ public_asset('assets/front/images/slider/chardhamyatra/3.jpeg') }}" class="d-block w-100"
                    alt="LANDCAPE" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Char Dham Yatra from Haridwar</h1>
                    <p class="lead">Char Dham Yatra from Haridwar {{ date('Y') }}: Char Dham are the famous four Hindu
                        pilgrimage sites nestled among the lofty peaks of the Himalayas in Uttarakhand.</p>
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

    <div class="container my-4">
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-8">
                <!-- Top Images -->
                <div class="mb-4">
                    {{-- <div class="row g-2">
                        <div class="col-md-6">
                            <img src="https://i.imgur.com/O4nUQup.jpg" class="img-fluid rounded" alt="Main Temple" />
                        </div>
                        <div class="col-md-6 d-flex flex-column gap-2">
                            <img src="https://i.imgur.com/0Aoc64c.jpg" class="img-fluid rounded" alt="Gangotri" />
                            <div class="d-flex gap-2">
                                <img src="https://i.imgur.com/IlUJ8Ro.jpg" class="img-fluid rounded w-50" alt="Yamunotri" />
                                <img src="https://i.imgur.com/s1rjPg5.jpg" class="img-fluid rounded w-50" alt="Badrinath" />
                            </div>
                        </div>
                    </div> --}}
                    <img src="{{ public_asset('assets/front/images/slider/chardhamyatra/1.jpg') }}" alt="">
                </div>

                <!-- Title & Tags -->
                <h3>Char Dham Yatra Tour Package Haridwar 2025</h3>
                <div class="mb-2">
                    <span class="tag bg-danger text-white">Transportation</span>
                    <span class="tag bg-primary text-white">Accommodation</span>
                    <span class="tag bg-pink text-white">Food</span>
                    <span class="tag bg-warning text-dark">Top Value</span>
                    <span class="ms-2">⭐️⭐️⭐️⭐️⭐️</span>
                </div>

                <!-- Description -->
                <p>
                    The Hindu pilgrimage Char Dham circuit includes four sites: Yamunotri, Gangotri, Kedarnath, and
                    Badrinath. All of these locations are considered highly sacred by the Hindu religion. Every Hindu’s
                    ultimate desire is to visit the holy shrines at least once in their lifetime in order to achieve
                    salvation (Moksha).
                </p>
                <div class="pt-8">
                    <div class="accordion accordion-separate accordion-rounded-0 accordion-faq-2 gap-6"
                        id="accordion-separate">
                        <div class="accordion-item">
                            <h2 style="font-size: 20px">Char Dham Itinerary from Haridwar</h2>
                            <h3 class="accordion-header h2">
                                <button class="accordion-button btn btn-info fs-20 fw-semibold rounded px-0" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#accordion-r1" aria-expanded="true">
                                    1st Day Haridwar - Barkot (220 kms/7hrs)
                                </button>
                            </h3>
                            <div id="accordion-r1" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion-separate">
                                <div class="accordion-body px-0">Drive to Barkot Via Dehradun &amp; Mussoorie. En route
                                    visit kempty fall, later drive straight to your hotel for Night halt.</div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="accordion-item">
                            <h3 class="accordion-header h2">
                                <button class="accordion-button btn btn-info fs-20 fw-semibold rounded px-0 collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion-r2"
                                    aria-expanded="false">
                                    2nd Day Barkot - Yamunotri - back Barkot (36kms drive &amp; 4 kms trek one side)
                                </button>
                            </h3>
                            <div id="accordion-r2" class="accordion-collapse collapse" data-bs-parent="#accordion-separate">
                                <div class="accordion-body px-0">Drive to Hanuman Chatti Trek start from here to Yamunotri
                                    (6 kms). Either by walk or by horse or by Doli at own cost. Arr. Yamunotri, one can cook
                                    rice by packing it in a cloth and dipping it in the hot water of the hot kund. pilgrims
                                    take this cooked rice home as "prasad". here near the temple "pooja" can be offe#094578
                                    to divya shila, After taking bat in jamunabai kund's warmwater and having "darshan" of
                                    pious "Yamunaji" returning to hanumanchatti. later drive back to barkot.</div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="accordion-item">
                            <h3 class="accordion-header h2">
                                <button class="accordion-button btn btn-info fs-20 fw-semibold rounded px-0 collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion-r3"
                                    aria-expanded="false">
                                    3rd Day Barkot - Naitala (106 kms/ 4 hrs)
                                </button>
                            </h3>
                            <div id="accordion-r3" class="accordion-collapse collapse" data-bs-parent="#accordion-separate">
                                <div class="accordion-body px-0">Drive to Naitala via Barkot. check in hotel, later visit
                                    Vishwanath temple, Night halt.</div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="accordion-item">
                            <h3 class="accordion-header h2">
                                <button class="accordion-button btn btn-info fs-20 fw-semibold rounded px-0 collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion-r4"
                                    aria-expanded="false">
                                    4th Day Naitala - Gangotri - back Naitala (106 kms/3 hrs each side)
                                </button>
                            </h3>
                            <div id="accordion-r4" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-separate">
                                <div class="accordion-body px-0">We procced to Gangotri (3048mtrs), en route we enjoy
                                    picturesque harsil village, Bhagirathi River and the most magnificent view of the
                                    Himalayas. After Gangotri Darshan we return to Naitala &amp; Night halt at naitala.
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="accordion-item">
                            <h3 class="accordion-header h2">
                                <button class="accordion-button btn btn-info fs-20 fw-semibold rounded px-0 collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion-r5"
                                    aria-expanded="false">
                                    5th Day Naitala - Gupatkashi ( 230 kms/8 hrs)
                                </button>
                            </h3>
                            <div id="accordion-r5" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-separate">
                                <div class="accordion-body px-0"> Early Morning, Drive to Gupatkashi .Check in hotel, Night
                                    halt.</div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="accordion-item">
                            <h3 class="accordion-header h2">
                                <button class="accordion-button btn btn-info fs-20 fw-semibold rounded px-0 collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion-r6"
                                    aria-expanded="false">
                                    6th Day Gupatkashi - Kedarnath (35 kms by road &amp; 19 kms trek)
                                </button>
                            </h3>
                            <div id="accordion-r6" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-separate">
                                <div class="accordion-body px-0">Morning Drive to Gaurikund, Trek start from Gaurikund to
                                    Kedarnath (3548 mts) on foot or on by pony/doli. Tour members should carry personal
                                    medicines, heavy woolen, toiletries and clothes for an over Night halt at Kedarnath.
                                    Check in Hotel, Later Visit Kedarnath temple. Night halt.</div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="accordion-item">
                            <h3 class="accordion-header h2">
                                <button class="accordion-button btn btn-info fs-20 fw-semibold rounded px-0 collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion-r7"
                                    aria-expanded="false">
                                    7th Day Kedarnath - Gupatkashi ( 19 kms down trek &amp; 35 kms by road)
                                </button>
                            </h3>
                            <div id="accordion-r7" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-separate">
                                <div class="accordion-body px-0">Early Morning, after temple darshan trek down to
                                    Gaurikund. later, drive to Gupatkashi check in Hotel &amp; Night halt.</div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="accordion-item">
                            <h3 class="accordion-header h2">
                                <button class="accordion-button btn btn-info fs-20 fw-semibold rounded px-0 collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion-r8"
                                    aria-expanded="false">
                                    8th Day Gupatkashi - Badrinath (185 kms/8 hrs)
                                </button>
                            </h3>
                            <div id="accordion-r8" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-separate">
                                <div class="accordion-body px-0">Drive to Badrinath via Chopta &amp; Ukhimath. Check in
                                    Hotel. later at evening visit Badrinath temple for Aarti. Over Night stay.</div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="accordion-item">
                            <h3 class="accordion-header h2">
                                <button class="accordion-button btn btn-info fs-20 fw-semibold rounded px-0 collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion-r9"
                                    aria-expanded="false">
                                    9th Day Badrinath - Srinagar (170 kms/7 hrs)
                                </button>
                            </h3>
                            <div id="accordion-r9" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-separate">
                                <div class="accordion-body px-0">Early morning, pilgrims after having a bath in the
                                    Taptkund have the darshan of badrivishal. Brahamakamal is significant for pinddan
                                    shraddh of ancestors (pitrus). There are other interesting sight seeing spot like mana,
                                    vyas gufa, maatamoorti, charanpaduka, Bhimkund and the "mukh" of the saraswati River.
                                    just within the three kms of badrinathjee. later drive back to Srinagar. over Night stay
                                    at Srinagar.</div>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="accordion-item">
                            <h3 class="accordion-header h2">
                                <button class="accordion-button btn btn-info fs-20 fw-semibold rounded px-0 collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion-r10"
                                    aria-expanded="false">
                                    10th Day Srinagar - Haridwar Via Rishikesh (135 kms/7 hrs)
                                </button>
                            </h3>
                            <div id="accordion-r10" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-separate">
                                <div class="accordion-body px-0">Early morning, Visit Narshing Temple, Laxman jhula, Ram
                                    Jhula &amp; Shankracharaya math, muni-ki- reti, thirteen story temple, swarg ashram.
                                    Drive to Haridwar and drop railway station.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-4">
                <div class="bg-light p-3 rounded mb-3">
                    <h5 class="text-primary">10 Days 09 Nights</h5>
                    <p class="fw-bold">The above package cost includes</p>
                    <ul class="list-unstyled">
                        <li>✔️ Including Accommodation, Transportation & Meals.</li>
                        <li>✔️ Accommodation on family basis Rooms with attached Bathroom.</li>
                        <li>✔️ All places are double sharing Deluxe Room.</li>
                        <li>✔️ Transport: By 2*1 12 Seater tempo traveller with Good Driver.</li>
                        <li>✔️ (Breakfast/Lunch/Dinner) Pure Veg - Gujarati, Rajasthani, Jain, South Indian etc.</li>
                    </ul>

                    <p class="fw-bold mt-3">The above package cost does not include</p>
                    <ul class="list-unstyled">
                        <li>❌ Any Expenses of personal Telephone calls, camera charges, Laundry, Entrance fees.</li>
                        <li>❌ Ropeway, Porter and Pony.</li>
                        <li>❌ Guide charges.</li>
                    </ul>
                </div>

                <div class="bg-light p-3 rounded">
                    <h6 class="fw-bold">Travel Tips:-</h6>
                    <ul class="travel-tips">
                        <li>Advance hotel booking are must.</li>
                        <li>Carry snacks with you in case of long traffic jams / landslides.</li>
                        <li>Carry drinking Water, and medicines with you.</li>
                        <li>Respect customs of local.</li>
                        <li>Carry Rain Coat / Umbrella, Torch, minimum luggage with you.</li>
                        <li>Carry enough of winter clothing as it gets cold in Badrinath & Kedarnath.</li>
                        <li>In case of any serious Medical Emergency, CALL 108.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="section-space-md-top section-space-bottom my-5">
            <div class="section-space-md-bottom text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xl-7">

                            <h4 class="mb-0 h2">Hot Destinations</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-xl-3">
                        <div class="card popular-card h-100">
                            <div class="card-body p-4 popular-card__body">
                                <a href="teen-dham-yatra.php" title="Teen Dham Yatra" class="link d-block mb-6"><img
                                        src="https://mahalaxmitravels.com/assets/image/teen-dham-yatra.webp" alt="Teen Dham Yatra"
                                        title="Teen Dham Yatra" class="img-fluid w-100 rounded"></a>
                                <h6 class="card-title fs-18"><a href="teen-dham-yatra.php" title="Teen Dham Yatra"
                                        class="link d-inline-block text-dark hover:text-primary">Teen Dham Yatra</a></h6>
                                <ul class="list list-row gap-1 align-items-center">

                                    <li><span class="text-dark fs-12 d-block">4.8 (122 reviews)</span></li>
                                </ul>
                                <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mt-6">
                                    <h5 class="mb-0">08 Days - 07 Nights </h5>
                                    <a href="tel:+91{{ $settings->contact }}" title="Book Trip"
                                        class="link btn btn-primary fs-14 text-light">Get Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card popular-card h-100">
                            <div class="card-body p-4 popular-card__body">
                                <a href="do-dham-yatra.php" title="Do Dham Yatra" class="link d-block mb-6"><img
                                        src="https://mahalaxmitravels.com/assets/image/do-dham-yatra.webp" alt="Do Dham Yatra" title="Do Dham Yatra"
                                        class="img-fluid w-100 rounded"></a>
                                <h6 class="card-title fs-18"><a href="do-dham-yatra.php" title="Do Dham Yatra"
                                        class="link d-inline-block text-dark hover:text-primary">Do Dham Yatra</a></h6>
                                <ul class="list list-row gap-1 align-items-center">

                                    <li><span class="text-dark fs-12 d-block">4.8 (122 reviews)</span></li>
                                </ul>
                                <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mt-6">
                                    <h5 class="mb-0">06 Days - 05 Nights </h5>
                                    <a href="tel:+91{{ $settings->contact }}" title="Book Trip"
                                        class="link btn btn-primary fs-14 text-light">Get Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card popular-card h-100">
                            <div class="card-body p-4 popular-card__body">
                                <a href="ek-dham-yatra.php" title="Ek Dham Yatra" class="link d-block mb-6"><img
                                        src="https://mahalaxmitravels.com/assets/image/ek-dham-yatra.webp" alt="Ek Dham Yatra" title="Ek Dham Yatra"
                                        class="img-fluid w-100 rounded"></a>
                                <h6 class="card-title fs-18"><a href="ek-dham-yatra.php" title="Ek Dham Yatra"
                                        class="link d-inline-block text-dark hover:text-primary">Ek Dham Yatra</a></h6>
                                <ul class="list list-row gap-1 align-items-center">

                                    <li><span class="text-dark fs-12 d-block">4.8 (122 reviews)</span></li>
                                </ul>
                                <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mt-6">
                                    <h5 class="mb-0">04 Days - 03 Nights</h5>
                                    <a href="tel:+91{{ $settings->contact }}" title="Book Trip"
                                        class="link btn btn-primary fs-14 text-light">Get Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card popular-card h-100">
                            <div class="card-body p-4 popular-card__body">
                                <a href="tel:+91{{ $settings->contact }}" title="Hemkund Sahib" class="link d-block mb-6"><img
                                        src="https://mahalaxmitravels.com/assets/image/hemkund-sahib.webp" alt="Hemkund Sahib" title="Hemkund Sahib"
                                        class="img-fluid w-100 rounded"></a>
                                <h6 class="card-title fs-18"><a href="tel:+91{{ $settings->contact }}"
                                        class="link d-inline-block text-dark hover:text-primary">Hemkund Sahib</a></h6>
                                <ul class="list list-row gap-1 align-items-center">

                                    <li><span class="text-dark fs-12 d-block">4.8 (122 reviews)</span></li>
                                </ul>
                                <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mt-6">
                                    <h5 class="mb-0">4 Days - 3 Nights </h5>
                                    <a href="tel:+91{{ $settings->contact }}" title="Book Trip"
                                        class="link btn btn-primary fs-14 text-light">Get Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
