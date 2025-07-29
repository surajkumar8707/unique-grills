@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Gallery Page')
@section('content')

    <!-- Page Banner -->
    <section class="py-5 theme-bg text-light text-center heading-section">
        <div class="container">
            <h1 class="display-6 fw-bold">Gallery {{ $settings->app_name }}</h1>
            <p class="lead">Your trusted partner in Himalayan trekking & travel experiences</p>
        </div>
    </section>

    <section class="py-5 text-center">
        <div class="container">
            <h1 class="banner-title">{{ $settings->app_name }}</h1>
            @if (count($galleries) > 0)
                <div class="row">
                    @foreach ($galleries as $gallery)
                        <div class="col-md-4">
                            <img class="w-100 my-3" src="{{ public_asset($gallery->image) }}" alt="">
                        </div>
                    @endforeach
                </div>
            @else
            @endif
        </div>
    </section>

@endsection

{{-- @section('content')

    <div id="banner-area" class="banner-area1" style="background-image:url(images/design.png);background-color:#3f1d71 ;">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <!-- <nav aria-label="breadcrumb">
                              <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">About Us</a></li>
                              </ol>
                          </nav> -->
                            <h1 class="banner-title">Our Gallery</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="project-area" class="project-area solid-bg single-service-gap">
        <div class="container">
            <h1 class="text-center">Mivan Technology</h1>
            <div class="row">
                @foreach ($mivans as $gallery)
                    <div class="col-md-4 col-xs-6 thumb">
                        <a href="{{ public_asset($gallery->image) }}" class="fancybox" rel="ligthbox">
                            <img src="{{ public_asset($gallery->image) }}" class="zoom img-fluid " alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="project-area" class="project-area solid-bg single-service-gap">
        <div class="container">
            <h1 class="text-center">Post Tensionings</h1>
            <div class="row">
                @foreach ($post_tensionings as $gallery)
                    <div class="col-md-4 col-xs-6 thumb">
                        <a href="{{ public_asset($gallery->image) }}" class="fancybox" rel="ligthbox">
                            <img src="{{ public_asset($gallery->image) }}" class="zoom img-fluid " alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection --}}
