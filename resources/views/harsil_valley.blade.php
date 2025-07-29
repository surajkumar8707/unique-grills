@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Harsil Valley')
@section('content')
    <div id="heroCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ public_asset('assets/front/images/slider/harsil_valley/1.jpg') }}" class="d-block w-100"
                    alt="SKY" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Harsil</h1>
                    <p class="lead">Harsil</p>
                </div>

            </div>
            <div class="carousel-item">
                <img src="{{ public_asset('assets/front/images/slider/harsil_valley/2.jpg') }}" class="d-block w-100"
                    alt="Lake" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Harsil</h1>
                    <p class="lead">Harsil</p>
                </div>

            </div>
            <div class="carousel-item">
                <img src="{{ public_asset('assets/front/images/slider/harsil_valley/3.jpg') }}" class="d-block w-100"
                    alt="LANDCAPE" style="height: 90vh; object-fit: cover;">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Harsil</h1>
                    <p class="lead">Harsil</p>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{ public_asset('assets/front/images/slider/harsil_valley/4.jpg') }}" class="d-block w-100"
                    alt="LANDCAPE" style="height: 90vh; object-fit: cover;">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Harsil</h1>
                    <p class="lead">Harsil</p>
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

    <div class="container my-5 py-2">
        <div class="row my-5">
            <div class="col-md-6">
                <h1 class="display-4">Harsil</h1>
                <ul>
                    <li>Hidden hill-station with pristine natural beauty</li>
                    <li>Known for extensive apple orchards</li>
                    <li>Offers adventure activities like trekking</li>
                    <li>Dotted with ancient temples</li>
                    <li>Popular as Raj Kapoor shot parts of film Ram Teri Ganga Maili</li>
                </ul>
            </div>
            <div class="col-md-6 text-end">
                <img class="w-100"
                    src="https://cdn1.tripoto.com/media/filter/tst/img/2035321/Image/1649580119_under_banner_3.jpg.webp"
                    alt="">
            </div>
        </div>

        <div class="my-5">
            <h1 class="display-4 text-center">What to Know About Harsil</h1>
            <p>A hidden jewel near Gangotri Dham, Harsil is a serene Himalayan hamlet surrounded by snow-clad mountains,
                pine forests and apple orchards. Popularly referred to as the mini Switzerland of India, time seems to have
                stopped in this poetic hill-station dotted with traditional houses and ancient temples. A paradise for
                nature-lovers, Harsil also offers many opportunities for thrill-seekers, such as trekking and hiking. The
                landscape is nourished by the Bhagirathi river. Harsil is known for its apple produce, which according to
                local lore, was introduced to the area by a British settler Fredric E Wilson. It is said Wilson fell in love
                with Harsil and a local girl, and made this hamlet his home. He introduced apple cultivation to Harsil and
                changed its economy. Today, Harsil apples are popular across the country and the annual Harsil Apple
                Festival is a big draw! Harsil has another secret, which intrigues tourists. This was the place where
                legendary filmmaker Raj Kapoor had shot parts of his super-hit movie Ram Teri Ganga Maili. The village post
                office, which was featured in the film, stands here even today, just the way it was around 40 years ago! Go
                around the small settlement and hear the villagers proudly recall the film.</p>
        </div>

        <div class="my-5">
            <h1 class="display-4 text-center">Attractions</h1>
            <div class="row">
                <div class="col-md-4"><img class="w-100 img-thumbnail h-100"
                        src="{{ public_asset('assets/front/images/mukhwa_village.jpg') }}" alt=""></div>
                <div class="col-md-4"><img class="w-100 img-thumbnail h-100"
                        src="{{ public_asset('assets/front/images/sattal.webp') }}" alt=""></div>
                <div class="col-md-4"><img class="w-100 img-thumbnail h-100"
                        src="{{ public_asset('assets/front/images/dharali.png') }}" alt=""></div>
            </div>
        </div>

        <div class="my-5">
            <h1 class="display-4 text-center">What To Do</h1>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
@endsection
