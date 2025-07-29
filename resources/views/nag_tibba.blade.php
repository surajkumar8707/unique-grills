@extends('layouts.app')
@section('title', getSettings()->app_name . ' :: Nag Tibba')
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

        .IndiahikesFeatures_featureContainer__ZB2AH {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            gap: 20px;
            margin: 24px;
        }

        .IndiahikesFeatures_featureContainer__ZB2AH {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            gap: 20px;
            margin: 24px;
        }

        .IndiahikesFeatures_featureItem__OuZWa {
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .IndiahikesFeatures_description__NUHhj {
            font-family: Lora;
            font-size: 16px;
        }
    </style>
@endpush
@section('content')
    <div id="heroCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ public_asset('assets/front/images/slider/nag_tibba/1.jpg') }}" class="d-block w-100"
                    alt="SKY" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Nag Tibba Weekend Trek</h1>
                    <p class="lead">Mussoorie's own weekend summit climb</p>
                </div>

            </div>
            <div class="carousel-item active">
                <img src="{{ public_asset('assets/front/images/slider/nag_tibba/2.jpg') }}" class="d-block w-100"
                    alt="Lake" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Nag Tibba Weekend Trek</h1>
                    <p class="lead">Mussoorie's own weekend summit climb</p>
                </div>

            </div>
            <div class="carousel-item">
                <img src="{{ public_asset('assets/front/images/slider/nag_tibba/3.jpg') }}" class="d-block w-100"
                    alt="LANDCAPE" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Nag Tibba Weekend Trek</h1>
                    <p class="lead">Mussoorie's own weekend summit climb</p>
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
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aEkeh7NJEFaPX2TQ_difficultyicon_moderate.png?w=100&amp;q=50&amp;org_if_sml=1"
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
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/4902f37f-15b9-4b5d-ace9-ad71d477a4e9_Trek_duration_icon.png?w=100&amp;q=50&amp;org_if_sml=1"
                        class="info-icon" alt="Trek Duration">
                    <div>
                        <div class="info-label">Trek Duration</div>
                        <div class="info-value">2 days</div>
                    </div>
                </div>
            </div>

            <!-- HIGHEST ALTITUDE -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/c67b49bd-854f-4450-a803-a24db9f283fd_Highest_altitude_icon.png?w=100&amp;q=50&amp;org_if_sml=1"
                        class="info-icon" alt="Highest Altitude">
                    <div>
                        <div class="info-label">Highest Altitude</div>
                        <div class="info-value">9915 ft</div>
                    </div>
                </div>
            </div>

            <!-- TOTAL TREK DISTANCE -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/ZwPatrVsGrYSwcis_trekdistance_icon.png?w=100&amp;q=50&amp;org_if_sml=1"
                        class="info-icon" alt="Trek Distance">
                    <div>
                        <div class="info-label">Total Trek Distance</div>
                        <div class="info-value">14.5 kms</div>
                    </div>
                </div>
            </div>

            <!-- BASECAMP -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/07baea47-6aea-47fb-80e1-c79f051d7596_How_to_reach_the_basecamp.png?w=100&amp;q=50&amp;org_if_sml=1"
                        class="info-icon" alt="Basecamp">
                    <div>
                        <div class="info-label">Basecamp</div>
                        <div class="info-value">Pantwari</div>
                    </div>
                </div>
            </div>

            <!-- ACCOMMODATION TYPE -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/ZwPatbVsGrYSwcir_tent_icon.png?w=100&amp;q=50&amp;org_if_sml=1"
                        class="info-icon" alt="Accommodation">
                    <div>
                        <div class="info-label">Accommodation Type</div>
                        <div class="info-value">Tents</div>
                    </div>
                </div>
            </div>

            <!-- PICKUP DETAILS -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/Z_ZYHHdAxsiBwews_PickupTime_icon.png?w=100&amp;q=50&amp;org_if_sml=1"
                        class="info-icon" alt="Pickup">
                    <div>
                        <div class="info-label">Pickup Details</div>
                        <div class="info-value">
                            <a href="#">Hotel Grand Legacy, Dehradun</a> at 6.30 AM
                        </div>
                    </div>
                </div>
            </div>

            <!-- DROPOFF DETAILS -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/Z_ZYG3dAxsiBwewr_DropOffTime_icon.png?w=100&amp;q=50&amp;org_if_sml=1"
                        class="info-icon" alt="Dropoff">
                    <div>
                        <div class="info-label">Dropoff Details</div>
                        <div class="info-value">
                            <a href="#">Hotel Grand Legacy, Dehradun</a> at 10.00 PM
                        </div>
                    </div>
                </div>
            </div>

            <!-- CLOAKROOM -->
            <div class="col">
                <div class="info-box">
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/Z-5jYHdAxsiBwREN_Cloakroom_Icon_New.png?w=100&amp;q=50&amp;org_if_sml=1"
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
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/cefde51a-92aa-4cc0-a80b-cd7f98c51d5e_Age+Icon+.png?w=100&amp;q=50&amp;org_if_sml=1"
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
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aCwyiCdWJ-7kSVBz_RegionIconColoured_ResizedFinal.png?w=100&amp;q=50&amp;org_if_sml=1"
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
                    <img src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/Z-4my3dAxsiBwQLj_OffloadingIcon.png?w=100&amp;q=50&amp;org_if_sml=1"
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
                        <h2 class="p-text-1 mt-3 mb-2"><b>Mussoorie's own weekend summit climb</b></h2>
                        <div class="TrekOverview_intro_mobile__5AOPL p-text-4">
                            <div
                                class="TrekOverview_readMoreParagraph__HfnqG TrekOverview_readMoreParagraphExpanded__KZK2O">
                                <p>We all know summit climbs are incredibly rewarding in a trek. This is why we have
                                    trekkers flocking to treks like Kedarkantha or Deoriatal-Chandrashila. On a trail like
                                    Nag Tibba, you get to experience the thrill of a summit climb in just a weekend!</p>
                            </div>
                            <div
                                class="TrekOverview_readMoreParagraph__HfnqG TrekOverview_readMoreParagraphExpanded__KZK2O">
                                <p>Resting at 9915 ft, the summit of this trek is the highest in the Nag Tibba range of the
                                    Garhwal Himalayas. From here, you see a 100-degree view of snow-capped Himalayan ranges
                                    such as Swargarohini, Bandarpoonch, Kala Nag, Srikanth, and Gangotri. You also see
                                    Kedarnath peak in the north, Doon valley, and the snowy peaks of Changabang. With views
                                    like this and a climb to make you earn them, this weekend trek may be one of the best.
                                </p>
                            </div>
                            <div
                                class="TrekOverview_readMoreParagraph__HfnqG TrekOverview_readMoreParagraphExpanded__KZK2O">
                                <div data-oembed="https://www.youtube.com/watch?v=aljJo0o6Kg4" data-oembed-type="video"
                                    data-oembed-provider="YouTube"><iframe width="100%" height="450"
                                        src="https://www.youtube.com/embed/J94esuMH8r4"
                                        title="Nag Tibba - A Thrilling Weekend Trek Near Delhi | Indiahikes | By Pritish Bhanushali"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                            {{-- <div class="highlightedSnippet_highlightedSnippet__6a_7z">
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
                            </div> --}}
                            <div class="TrekOverview_readMoreParagraph__HfnqG ">
                                <p>
                                    As you go up one side of the mountain and come down from another side, you also
                                    experience a variety of landscapes. This trek takes you through dense forests,
                                    clearings, and ridge walks. All within two days!
                                    <br><br>
                                    This relatively unknown trail near Mussoorie is a good fit for trekkers living in Delhi
                                    and the National Capital Region who want to have an adventure over the weekend. For
                                    beginners, this trek is great as an introductory trek to the world of trekking.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="col-12 col-lg-4 col-md-12 mt-2 d-m-none-vis">
                <div class="trek-fee-box">
                    <h5>Trek Fee</h5>
                    <p class="trek-fee-amount">₹ 4,450</p>
                    <p class="small-text">+ 5% GST<br>
                        + ₹60 Trek Insurance<br>
                        + ₹1,400 for transport to and from basecamp</p>

                    <hr>

                    <ul class="trek-list mb-3">
                        <li>Optional Addons:</li>
                        <li>₹450 Backpack Offloading</li>
                        <li>₹600 Accommodation Shield</li>
                    </ul>
                </div>
            </div>
        </div>

        <section>
            <h1 class="border-bottom">The Indiahikes Spirit of Trekking</h1>
            <div class="IndiahikesFeatures_featureContainer__ZB2AH">
                <div class="IndiahikesFeatures_featureItemContainer__ZzVKG">
                    <div class="IndiahikesFeatures_featureItem__OuZWa">
                        <div class="IndiahikesFeatures_featureTitle__HzPSu">
                            <p><strong>We're always ready for adventure</strong></p>
                        </div>
                        <div class="IndiahikesFeatures_imageContainer__N7HCP">
                            <div style="position:relative"
                                class="ci-fill-image-18695 cdn-image_cdnImage__jhNsc undefined"><img
                                    src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPYCdWJ-7kSt08_Readyforadventureicon.png?&amp;q=50&amp;org_if_sml=1"
                                    srcset="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPYCdWJ-7kSt08_Readyforadventureicon.png?w=100&amp;q=50&amp;org_if_sml=1 1x, https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPYCdWJ-7kSt08_Readyforadventureicon.png?w=100&amp;q=50&amp;org_if_sml=1 1.5x, https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPYCdWJ-7kSt08_Readyforadventureicon.png?w=200&amp;q=50&amp;org_if_sml=1 2x"
                                    alt="adlpycdwj 7kst08 readyforadventureicon"
                                    style="transition-timing-function: ease-out; transition-duration: 800ms; transition-property: none; transition-delay: 100ms; opacity: 1; object-fit: cover; object-position: center center;"
                                    class="ci-ssg-image-18695" loading="lazy"></div>
                        </div>
                    </div>
                    <div class="IndiahikesFeatures_description__NUHhj">
                        <p>Trekking comes with uncertainty. Weather, terrain, and setbacks are part of the journey. We
                            embrace them with resilience and openness—each challenge makes us stronger and more appreciative
                            of nature's beauty.</p>
                    </div>
                </div>
                <div class="IndiahikesFeatures_featureItemContainer__ZzVKG">
                    <div class="IndiahikesFeatures_featureItem__OuZWa">
                        <div class="IndiahikesFeatures_featureTitle__HzPSu">
                            <p><strong>We embrace low-noise trekking</strong></p>
                        </div>
                        <div class="IndiahikesFeatures_imageContainer__N7HCP">
                            <div style="position:relative"
                                class="ci-fill-image-18695 cdn-image_cdnImage__jhNsc undefined"><img
                                    src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPSCdWJ-7kSt04_Lownoisetrekkingicon.png?&amp;q=50&amp;org_if_sml=1"
                                    srcset="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPSCdWJ-7kSt04_Lownoisetrekkingicon.png?w=100&amp;q=50&amp;org_if_sml=1 1x, https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPSCdWJ-7kSt04_Lownoisetrekkingicon.png?w=100&amp;q=50&amp;org_if_sml=1 1.5x, https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPSCdWJ-7kSt04_Lownoisetrekkingicon.png?w=200&amp;q=50&amp;org_if_sml=1 2x"
                                    alt="adlpscdwj 7kst04 lownoisetrekkingicon"
                                    style="transition-timing-function: ease-out; transition-duration: 800ms; transition-property: none; transition-delay: 100ms; opacity: 1; object-fit: cover; object-position: center center;"
                                    class="ci-ssg-image-18695" loading="lazy"></div>
                        </div>
                    </div>
                    <div class="IndiahikesFeatures_description__NUHhj">
                        <p>We blend into nature, not the other way around. We avoid shouting, loud music, and noisy games.
                            In silence, we hear birdsong, streams, and the wind—inviting peace, reflection, and a deeper
                            connection with nature.</p>
                    </div>
                </div>
                <div class="IndiahikesFeatures_featureItemContainer__ZzVKG">
                    <div class="IndiahikesFeatures_featureItem__OuZWa">
                        <div class="IndiahikesFeatures_featureTitle__HzPSu">
                            <p><strong>We protect the environment</strong></p>
                        </div>
                        <div class="IndiahikesFeatures_imageContainer__N7HCP">
                            <div style="position:relative"
                                class="ci-fill-image-18695 cdn-image_cdnImage__jhNsc undefined"><img
                                    src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPPCdWJ-7kSt02_Protecttheenvironmenticon.png?&amp;q=50&amp;org_if_sml=1"
                                    srcset="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPPCdWJ-7kSt02_Protecttheenvironmenticon.png?w=100&amp;q=50&amp;org_if_sml=1 1x, https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPPCdWJ-7kSt02_Protecttheenvironmenticon.png?w=100&amp;q=50&amp;org_if_sml=1 1.5x, https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPPCdWJ-7kSt02_Protecttheenvironmenticon.png?w=200&amp;q=50&amp;org_if_sml=1 2x"
                                    alt="adlppcdwj 7kst02 protecttheenvironmenticon"
                                    style="transition-timing-function: ease-out; transition-duration: 800ms; transition-property: none; transition-delay: 100ms; opacity: 1; object-fit: cover; object-position: center center;"
                                    class="ci-ssg-image-18695" loading="lazy"></div>
                        </div>
                    </div>
                    <div class="IndiahikesFeatures_description__NUHhj">
                        <p>We protect the environment by minimising waste, reusing resources, and picking up litter. We
                            carry eco-bags, segregate waste, and inspire others to preserve trails. Sustainable trekking
                            ensures these mountains remain beautiful for future generations.</p>
                    </div>
                </div>
                <div class="IndiahikesFeatures_featureItemContainer__ZzVKG">
                    <div class="IndiahikesFeatures_featureItem__OuZWa">
                        <div class="IndiahikesFeatures_featureTitle__HzPSu">
                            <p><strong>We are self-sufficient&nbsp;</strong></p>
                        </div>
                        <div class="IndiahikesFeatures_imageContainer__N7HCP">
                            <div style="position:relative"
                                class="ci-fill-image-18695 cdn-image_cdnImage__jhNsc undefined"><img
                                    src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPLydWJ-7kSt01_selfsufficienticon.png?&amp;q=50&amp;org_if_sml=1"
                                    srcset="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPLydWJ-7kSt01_selfsufficienticon.png?w=100&amp;q=50&amp;org_if_sml=1 1x, https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPLydWJ-7kSt01_selfsufficienticon.png?w=100&amp;q=50&amp;org_if_sml=1 1.5x, https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPLydWJ-7kSt01_selfsufficienticon.png?w=200&amp;q=50&amp;org_if_sml=1 2x"
                                    alt="adlplydwj 7kst01 selfsufficienticon"
                                    style="transition-timing-function: ease-out; transition-duration: 800ms; transition-property: none; transition-delay: 100ms; opacity: 1; object-fit: cover; object-position: center center;"
                                    class="ci-ssg-image-18695" loading="lazy"></div>
                        </div>
                    </div>
                    <div class="IndiahikesFeatures_description__NUHhj">
                        <p>We carry our load as much as possible, manage our gear, and stay prepared for all situations.
                            Self-sufficiency builds confidence, independence, and respect for fellow trekkers, support
                            staff, and the trail itself.&nbsp;&nbsp;</p>
                    </div>
                </div>
                <div class="IndiahikesFeatures_featureItemContainer__ZzVKG">
                    <div class="IndiahikesFeatures_featureItem__OuZWa">
                        <div class="IndiahikesFeatures_featureTitle__HzPSu">
                            <p><strong>We support each other</strong></p>
                        </div>
                        <div class="IndiahikesFeatures_imageContainer__N7HCP">
                            <div style="position:relative"
                                class="ci-fill-image-18695 cdn-image_cdnImage__jhNsc undefined"><img
                                    src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPKydWJ-7kSt00_Supporteachothericon.png?&amp;q=50&amp;org_if_sml=1"
                                    srcset="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPKydWJ-7kSt00_Supporteachothericon.png?w=100&amp;q=50&amp;org_if_sml=1 1x, https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPKydWJ-7kSt00_Supporteachothericon.png?w=100&amp;q=50&amp;org_if_sml=1 1.5x, https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPKydWJ-7kSt00_Supporteachothericon.png?w=200&amp;q=50&amp;org_if_sml=1 2x"
                                    alt="adlpkydwj 7kst00 supporteachothericon"
                                    style="transition-timing-function: ease-out; transition-duration: 800ms; transition-property: none; transition-delay: 100ms; opacity: 1; object-fit: cover; object-position: center center;"
                                    class="ci-ssg-image-18695" loading="lazy"></div>
                        </div>
                    </div>
                    <div class="IndiahikesFeatures_description__NUHhj">
                        <p>Trekking is not a solo act. We wait for each other, share burdens, and uplift teammates. By
                            putting the group first, we build strong bonds and help everyone complete the trek joyfully.</p>
                    </div>
                </div>
                <div class="IndiahikesFeatures_featureItemContainer__ZzVKG">
                    <div class="IndiahikesFeatures_featureItem__OuZWa">
                        <div class="IndiahikesFeatures_featureTitle__HzPSu">
                            <p><strong>We are fit and prepared&nbsp;</strong></p>
                        </div>
                        <div class="IndiahikesFeatures_imageContainer__N7HCP">
                            <div style="position:relative"
                                class="ci-fill-image-18695 cdn-image_cdnImage__jhNsc undefined"><img
                                    src="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPXydWJ-7kSt07_Fitandpreparedicon.png?&amp;q=50&amp;org_if_sml=1"
                                    srcset="https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPXydWJ-7kSt07_Fitandpreparedicon.png?w=100&amp;q=50&amp;org_if_sml=1 1x, https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPXydWJ-7kSt07_Fitandpreparedicon.png?w=100&amp;q=50&amp;org_if_sml=1 1.5x, https://cvsqtgaxsa.cloudimg.io/https://images.prismic.io/indiahike/aDlPXydWJ-7kSt07_Fitandpreparedicon.png?w=200&amp;q=50&amp;org_if_sml=1 2x"
                                    alt="adlpxydwj 7kst07 fitandpreparedicon"
                                    style="transition-timing-function: ease-out; transition-duration: 800ms; transition-property: none; transition-delay: 100ms; opacity: 1; object-fit: cover; object-position: center center;"
                                    class="ci-ssg-image-18695" loading="lazy"></div>
                        </div>
                    </div>
                    <div class="IndiahikesFeatures_description__NUHhj">
                        <p>We train well before our treks. This helps us walk longer, handle emergencies, and contribute to
                            the team. Fitness ensures we are never a burden and always ready to help when needed.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
