@extends('layouts.app')
@section('title', getSettings()->app_name . ':: Tungnath Chandrashila')
@section('meta_description',
    'Tungnath Chandrashila Trekking - The highest Lord Shiva temple in the world. Experience
    the beauty of nature and spirituality in this breathtaking trek.')
    @push('styles')
        <style>
            elementor-icon-list-icon svg {
                fill: #00c853;
                transition: fill 0.3s;
            }

            div .elementor-widget-container ul li svg,
            div ul li svg {
                fill: #0088a9;
                width: 10px;
                height: 10px;
                margin-right: 5px;
            }
        </style>
    @endpush
@section('content')

    <div id="heroCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ public_asset('assets/front/images/slider/tungnath_chandrashila/1.webp') }}" class="d-block w-100"
                    alt="SKY" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Tungnath TREKKING</h1>
                    <p class="lead">THE HIGHEST LORD SHIVA TEMPLE IN THE WORLD</p>
                </div>

            </div>
            <div class="carousel-item active">
                <img src="{{ public_asset('assets/front/images/slider/tungnath_chandrashila/2.jpg') }}"
                    class="d-block w-100" alt="Lake" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Tungnath TREKKING</h1>
                    <p class="lead">THE HIGHEST LORD SHIVA TEMPLE IN THE WORLD</p>
                </div>

            </div>
            <div class="carousel-item">
                <img src="{{ public_asset('assets/front/images/slider/tungnath_chandrashila/3.webp') }}"
                    class="d-block w-100" alt="LANDCAPE" style="height: 90vh; object-fit: cover;">

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h1 class="text-uppercase font-weight-bold">Tungnath TREKKING</h1>
                    <p class="lead">THE HIGHEST LORD SHIVA TEMPLE IN THE WORLD</p>
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

    <div class="text-center text-white py-2 my-5" style="background-color: #0088a9;">
        <h1>Ready for Adventure? Rent Your Trek Gear Today</h1>
    </div>



    <div class="container my-2-py-2">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">INCLUSIONS</h2>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <div class="elementor-widget-container">
                                <ul type="none">
                                    <li> <svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                            </path>
                                        </svg> Haridwar to Haridwar</li>
                                    <li> <svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                            </path>
                                        </svg> Meals Veg Only - Breakfast, Lunch and Dinner</li>
                                    <li> <svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                            </path>
                                        </svg> Accommodation in Deluxe Camps in Triple Sharing</li>
                                    <li> <svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                            </path>
                                        </svg> Experienced and Qualified Guides</li>
                                    <li> <svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                            </path>
                                        </svg> Medical Amenities – First Aid Kits, Oxymeters, oxygen cylinders.</li>
                                    <li> <svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                            </path>
                                        </svg> Sanitised and Hygienic Camp sites and Hotels</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">INCLUSIONS</h2>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <div class="elementor-widget-container">
                                <ul type="none">
                                    <li> <svg aria-hidden="true" class="e-font-icon-svg e-fas-cut" viewBox="0 0 448 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M278.06 256L444.48 89.57c4.69-4.69 4.69-12.29 0-16.97-32.8-32.8-85.99-32.8-118.79 0L210.18 188.12l-24.86-24.86c4.31-10.92 6.68-22.81 6.68-35.26 0-53.02-42.98-96-96-96S0 74.98 0 128s42.98 96 96 96c4.54 0 8.99-.32 13.36-.93L142.29 256l-32.93 32.93c-4.37-.61-8.83-.93-13.36-.93-53.02 0-96 42.98-96 96s42.98 96 96 96 96-42.98 96-96c0-12.45-2.37-24.34-6.68-35.26l24.86-24.86L325.69 439.4c32.8 32.8 85.99 32.8 118.79 0 4.69-4.68 4.69-12.28 0-16.97L278.06 256zM96 160c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32zm0 256c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32z">
                                            </path>
                                        </svg> Anything not mentioned in inclusion list</li>
                                    <li> <svg aria-hidden="true" class="e-font-icon-svg e-fas-cut" viewBox="0 0 448 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M278.06 256L444.48 89.57c4.69-4.69 4.69-12.29 0-16.97-32.8-32.8-85.99-32.8-118.79 0L210.18 188.12l-24.86-24.86c4.31-10.92 6.68-22.81 6.68-35.26 0-53.02-42.98-96-96-96S0 74.98 0 128s42.98 96 96 96c4.54 0 8.99-.32 13.36-.93L142.29 256l-32.93 32.93c-4.37-.61-8.83-.93-13.36-.93-53.02 0-96 42.98-96 96s42.98 96 96 96 96-42.98 96-96c0-12.45-2.37-24.34-6.68-35.26l24.86-24.86L325.69 439.4c32.8 32.8 85.99 32.8 118.79 0 4.69-4.68 4.69-12.28 0-16.97L278.06 256zM96 160c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32zm0 256c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32z">
                                            </path>
                                        </svg> 5% GST</li>
                                    <li> <svg aria-hidden="true" class="e-font-icon-svg e-fas-cut" viewBox="0 0 448 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M278.06 256L444.48 89.57c4.69-4.69 4.69-12.29 0-16.97-32.8-32.8-85.99-32.8-118.79 0L210.18 188.12l-24.86-24.86c4.31-10.92 6.68-22.81 6.68-35.26 0-53.02-42.98-96-96-96S0 74.98 0 128s42.98 96 96 96c4.54 0 8.99-.32 13.36-.93L142.29 256l-32.93 32.93c-4.37-.61-8.83-.93-13.36-.93-53.02 0-96 42.98-96 96s42.98 96 96 96 96-42.98 96-96c0-12.45-2.37-24.34-6.68-35.26l24.86-24.86L325.69 439.4c32.8 32.8 85.99 32.8 118.79 0 4.69-4.68 4.69-12.28 0-16.97L278.06 256zM96 160c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32zm0 256c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32z">
                                            </path>
                                        </svg> Meals during Transportation</li>
                                    <li> <svg aria-hidden="true" class="e-font-icon-svg e-fas-cut" viewBox="0 0 448 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M278.06 256L444.48 89.57c4.69-4.69 4.69-12.29 0-16.97-32.8-32.8-85.99-32.8-118.79 0L210.18 188.12l-24.86-24.86c4.31-10.92 6.68-22.81 6.68-35.26 0-53.02-42.98-96-96-96S0 74.98 0 128s42.98 96 96 96c4.54 0 8.99-.32 13.36-.93L142.29 256l-32.93 32.93c-4.37-.61-8.83-.93-13.36-.93-53.02 0-96 42.98-96 96s42.98 96 96 96 96-42.98 96-96c0-12.45-2.37-24.34-6.68-35.26l24.86-24.86L325.69 439.4c32.8 32.8 85.99 32.8 118.79 0 4.69-4.68 4.69-12.28 0-16.97L278.06 256zM96 160c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32zm0 256c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32z">
                                            </path>
                                        </svg> Forest Permits</li>
                                    <li> <svg aria-hidden="true" class="e-font-icon-svg e-fas-cut" viewBox="0 0 448 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M278.06 256L444.48 89.57c4.69-4.69 4.69-12.29 0-16.97-32.8-32.8-85.99-32.8-118.79 0L210.18 188.12l-24.86-24.86c4.31-10.92 6.68-22.81 6.68-35.26 0-53.02-42.98-96-96-96S0 74.98 0 128s42.98 96 96 96c4.54 0 8.99-.32 13.36-.93L142.29 256l-32.93 32.93c-4.37-.61-8.83-.93-13.36-.93-53.02 0-96 42.98-96 96s42.98 96 96 96 96-42.98 96-96c0-12.45-2.37-24.34-6.68-35.26l24.86-24.86L325.69 439.4c32.8 32.8 85.99 32.8 118.79 0 4.69-4.68 4.69-12.28 0-16.97L278.06 256zM96 160c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32zm0 256c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32z">
                                            </path>
                                        </svg> Any kind of personal Expenses</li>
                                    <li> <svg aria-hidden="true" class="e-font-icon-svg e-fas-cut" viewBox="0 0 448 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M278.06 256L444.48 89.57c4.69-4.69 4.69-12.29 0-16.97-32.8-32.8-85.99-32.8-118.79 0L210.18 188.12l-24.86-24.86c4.31-10.92 6.68-22.81 6.68-35.26 0-53.02-42.98-96-96-96S0 74.98 0 128s42.98 96 96 96c4.54 0 8.99-.32 13.36-.93L142.29 256l-32.93 32.93c-4.37-.61-8.83-.93-13.36-.93-53.02 0-96 42.98-96 96s42.98 96 96 96 96-42.98 96-96c0-12.45-2.37-24.34-6.68-35.26l24.86-24.86L325.69 439.4c32.8 32.8 85.99 32.8 118.79 0 4.69-4.68 4.69-12.28 0-16.97L278.06 256zM96 160c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32zm0 256c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32z">
                                            </path>
                                        </svg> Unscheduled or extended stay due to road blocks, Landslides</li>
                                    <li> <svg aria-hidden="true" class="e-font-icon-svg e-fas-cut" viewBox="0 0 448 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M278.06 256L444.48 89.57c4.69-4.69 4.69-12.29 0-16.97-32.8-32.8-85.99-32.8-118.79 0L210.18 188.12l-24.86-24.86c4.31-10.92 6.68-22.81 6.68-35.26 0-53.02-42.98-96-96-96S0 74.98 0 128s42.98 96 96 96c4.54 0 8.99-.32 13.36-.93L142.29 256l-32.93 32.93c-4.37-.61-8.83-.93-13.36-.93-53.02 0-96 42.98-96 96s42.98 96 96 96 96-42.98 96-96c0-12.45-2.37-24.34-6.68-35.26l24.86-24.86L325.69 439.4c32.8 32.8 85.99 32.8 118.79 0 4.69-4.68 4.69-12.28 0-16.97L278.06 256zM96 160c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32zm0 256c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32z">
                                            </path>
                                        </svg> Porter/mule charges (Personal), Back pack offloading Charges</li>
                                    <li> <svg aria-hidden="true" class="e-font-icon-svg e-fas-cut" viewBox="0 0 448 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M278.06 256L444.48 89.57c4.69-4.69 4.69-12.29 0-16.97-32.8-32.8-85.99-32.8-118.79 0L210.18 188.12l-24.86-24.86c4.31-10.92 6.68-22.81 6.68-35.26 0-53.02-42.98-96-96-96S0 74.98 0 128s42.98 96 96 96c4.54 0 8.99-.32 13.36-.93L142.29 256l-32.93 32.93c-4.37-.61-8.83-.93-13.36-.93-53.02 0-96 42.98-96 96s42.98 96 96 96 96-42.98 96-96c0-12.45-2.37-24.34-6.68-35.26l24.86-24.86L325.69 439.4c32.8 32.8 85.99 32.8 118.79 0 4.69-4.68 4.69-12.28 0-16.97L278.06 256zM96 160c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32zm0 256c-17.64 0-32-14.36-32-32s14.36-32 32-32 32 14.36 32 32-14.36 32-32 32z">
                                            </path>
                                        </svg> Cost of Evacuation in case of emergency</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2 my-5 bg-light">
        <h1 class="text-center">MODE OF TRANSPORTATION</h1>
        <ul type="none" style="padding-left: 15%;">
            <li>
                <svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                    </path>
                </svg>
                <span class="elementor-icon-list-text">No of Persons (1-4) : Hatch Back: Swift or Equivalent Vehicle</span>
            </li>
            <li class="elementor-icon-list-item">
                <span class="elementor-icon-list-icon">
                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                        </path>
                    </svg> </span>
                <span class="elementor-icon-list-text">No of Persons (5-8) : Tata Sumo/Mahindra Bolero or Equivalent
                    Vehicle</span>
            </li>
            <li class="elementor-icon-list-item">
                <span class="elementor-icon-list-icon">
                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                        </path>
                    </svg> </span>
                <span class="elementor-icon-list-text">No of Persons (9-12): Tempo Traveler</span>
            </li>
        </ul>
    </div>

    <div class="container-fluid py-2 my-5 bg-light">
        <h1 class="text-center">Tungnath Chandrashila Peak Trek</h1>
        <div class="elementor-widget-container ml-5 pl-5">
            <p>Tungnath Chandrashila trek lies in the Himalayan region of Uttrakhand. The 3 days trek covers a lot of
                beautiful places in Uttrakhand like Chopta, Deoriyatal, Tungnath Shiva temple, Chandrashila peak (4000m).
                Chopta is a small hill station in Uttrakhand comprised of meadows and evergreen forest with treks &amp;
                camping. Chopta is known for its beautiful sunsets.&nbsp;</p>
            <p><span style="font-size: 16px;"><b>Deoriatal</b> is a very beautiful emerald lake situated amid dense forests
                    of Rhododendron. Perched at an elevation of 2438 metres above sea level, Deoriatal offers a reflection
                    of mighty Chaukhambha peak in its crystal clear water.&nbsp;</span><b
                    style="font-style: inherit;">Tungnath</b><span style="font-size: 16px;"> or famously known as the
                    Tungnath temple is a sacred temple dedicated to Lord Shiva located in the mountain ranges of the
                    Rudraprayag district of Uttarakhand. Perched at an astonishing elevation of 3680 metres above sea level,
                    this temple is the highest Shiva temple in the world.&nbsp;</span></p>
            <p><span style="font-size: 16px;"><b>Chandrashila</b> also known as the Moon Peak is the peak situated above
                    the Tungnath Temple at an elevation of 4000 metres above sea level. One can view mighty Himalayan peaks
                    from the summit point of Chandrashilla peak namely Mt. Nanda Devi, Chaukhambha Parvat, Kedar Dome,
                    Bandarpoonch etc.&nbsp;</span></p>
            <p></p>
        </div>

        <div class="elementor-element elementor-element-03d4fec elementor-widget elementor-widget-heading"
            data-id="03d4fec" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">
                <h2 class="text-center">What is special about Tungnath trekking?</h2>
            </div>
        </div>

        <div class="elementor-element elementor-element-70422a2 elementor-widget elementor-widget-spacer"
            data-id="70422a2" data-element_type="widget" data-widget_type="spacer.default">
            <div class="elementor-widget-container">
                <div class="elementor-spacer">
                    <div class="elementor-spacer-inner"></div>
                </div>
            </div>
        </div>

        <div class="elementor-element elementor-element-672f308 elementor-widget elementor-widget-text-editor"
            data-id="672f308" data-element_type="widget" data-widget_type="text-editor.default">
            <div class="elementor-widget-container">
                <ul class="ml-5 pl-5">
                    <li style="font-size: 16px;">The trail being of easy grade, is suitable to every age group and people,
                        as compared to other Himalayan treks</li>
                    <li style="font-size: 16px;">&nbsp;As compared to summit treks of Uttarakhand, it is the most easily
                        accessible trek</li>
                    <li style="font-size: 16px;">It makes you reach, of Tungnath, The highest Shiva Temple in the world
                    </li>
                    <li style="font-size: 16px;">The trek offers a complete 360-degree view of mighty Himalayan peaks</li>
                    <li style="font-size: 16px;">Achievement of summiting a Himalayan peak of 4000 metres without much
                        stress.</li>
                    <li style="font-size: 16px;">You can easily spot some great Himalayan birds during the trail,
                        especially Monal, the National Bird of Nepal on the trails to Tungnath and Chandrashilla. If you are
                        lucky Himalayan Tahr can also be spotted at times</li>
                    <li style="font-size: 16px;">This is few of the Himalayan Treks which is accessible throughout the
                        year. Though from Dec to Feb the trek comes under moderate category due to heavy snow fall in the
                        region</li>
                </ul>
            </div>
        </div>

        <div>
            <h1 class="text-center">Tungnath Trek Video</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="text-left">Tungnath Trek Video</h4>
                        <iframe width="100%" height="310" src="https://www.youtube.com/embed/oWndUQiE1sk"
                            title="Tungnath Chandrashila Deoriyatal Trek | The Searching Souls" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-left">Tungnath Trek Experience with TSS</h4>
                        <iframe width="100%" height="310" src="https://www.youtube.com/embed/t5be03Cbgnw"
                            title="Our Motivation-3 | Tungnath Trek Feedback | TheSearchingSouls" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="mb-3 ml-5 pl-5">
                <h2>TUNGNATH TREK ITINERARY</h2>
                <div>
                    <details>
                        <summary>Day 01: Haridwar to Chopta | 240 km Drive | Altitude: 7874 ft</summary>
                        <ul>
                            <li>Pick up from Haridwar at 7:00 AM.</li>
                            <li>Drive to Chopta from Rishikesh via Devprayag, Srinagar, Rudraprayag.</li>
                            <li>Arrival at Chopta and accommodation will be in a Deluxe Camps</li>
                            <li>Dinner and rest at camps followed by a quick introduction and briefing session with the tour
                                leader&nbsp;</li>
                        </ul>
                    </details>

                    <details>
                        <summary>Day 02: Trek to Tungnath | Trek distance: 5.5 Km | Altitude: 7874 ft to 13123 ft</summary>
                        <ul>
                            <li>Trek to Tungnath Temple after breakfast.</li>
                            <li>The trail is of easy to moderate ascend. It generally takes 3-4 hours to reach the temple
                            </li>
                            <li>Ascend to Chandrashila Summit. Packed lunch at summit.</li>
                            <li>Descend down to Chopta by evening. Enjoy the beautiful sunset from Chopta</li>
                            <li>Overnight stay in the camps.</li>
                        </ul>
                    </details>

                    <details>
                        <summary>Day 03: Drive to Sari village and trek to Deoriyatal, descend to Sari Village and drive to
                            haridawr</summary>
                        <ul>
                            <li>Leave early from Chopta and drive to Sari village</li>
                            <li>hike for 2 hours towards Deoriyatal</li>
                            <li>Enjoy the reflection of mighty Chaukhamba peak on the lake.</li>
                            <li>Descend down to Sari village by lunch</li>
                            <li>Drive back to haridwar.</li>
                            <li>Expected time of arrival 11:00 PM</li>
                        </ul>
                    </details>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="text-left">Trek Essentials</h4>
                        <iframe width="100%" height="310" src="https://www.youtube.com/embed/th1TrvIArGE"
                            title="Trek Essentials for High Altitude Treks || TheSearchingSouls" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-left">TSS Jumbo Bag</h4>
                        <iframe width="100%" height="310" src="https://www.youtube.com/embed/0uZkt8wGP1g"
                            title="Jumbo Bag - A one stop solution for all your trekking needs | TheSearchingSouls"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="my-2">
                    <details>
                        <summary>List of Essentials to Carry on chopta chandrashila trek package</summary>
                        <ul>
                            <li>Backpack/Ruck Sack (at least 55 Litres) and a small day bag ( upto 15 litres) for summit day
                            </li>
                            <li>Poncho/Raincoat and Rain Cover for Ruck Sack</li>
                            <li>2 Quick Dry T-shirts (preferably Full Sleeves) and Track Pants</li>
                            <li>Warm Jacket preferably a down jacket or an equivalent heavy jacket to protect from cold at
                                night</li>
                            <li>Comfortable Shoes with a good grip and ankle support. We recommend Quechua Forclaz 100 or
                                similar shoe</li>
                            <li>A pair of fleece jacket or fleece upper</li>
                            <li>Good Thermals for insulation at night</li>
                            <li>Lip Balm and Cold Cream</li>
                            <li>Sun Cap or Sunscreen (SPF 30+)</li>
                            <li>Dark Sunglasses. People who wear spectacle may use photochromatic lenses in their spects
                            </li>
                            <li>2 pair of warm socks and at least 2 pair of normal cotton socks</li>
                            <li>1&nbsp;Pair of slippers/Sandals</li>
                            <li>Woolen Cap and Gloves for night</li>
                            <li>Toiletries – Tooth brush, Tooth paste, Liquid soap, Hand Sanitizers, Slippers, Light Towel,
                                Toilet Roll (Avoid wet tissues as they are not eco friendly)</li>
                            <li>Torch or Headlamp with extra pair of batteries</li>
                            <li>Personal Medical Kit: Crocin-Fever, Avomine-Motion Sickness, Avil 25mg – Allergies,
                                Combiflam, Disprin-headache, Norflox TZ &amp; Lomofen-diarrhea, digene-acidity,
                                omez/rantadine&nbsp; antacid, crepe bandages, band aids, ORS, betadiene or antiseptic cream,
                                moov spray/volini, cotton, gauze.</li>
                            <li>Water bottle 1 L or Hydration bag 2 L</li>
                            <li>Other personal accessories – Camera, Tripod,&nbsp;mobile charger, power banks(as there will
                                be no electricity during the trek)</li>
                        </ul>
                    </details>
                </div>

                <h4><b>Note:</b></h4>
                <ul>
                    <li style="font-size: 16px;"><span
                            style="font-size: 16px; font-style: normal; font-weight: 400; white-space: pre-wrap;">Note: AC doesnt run on hills in fixed departure batches. Standard Non AC vehicles are provided for transportation</span></li>
                    <li>Being a high altitude trek, this trek is suitable for climbers with good physical condition and
                        stamina.</li>
                    <li>This is a tentative itinerary which may change as per weather conditions</li>
                    <li>We expect you to carry your rucksacks, in case if you want them to be carried by mules back pack
                        offloading charge up to Rs. 300/bag/day is applicable</li>
                    <li>In case of any natural calamity the company will not be able to refund the trip charges, for more
                        details check our cancellation policy</li>
                </ul>
            </div>
        </div>
    </div>

@endsection
