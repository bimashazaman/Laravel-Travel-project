@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>




    <!-- Tour description start -->
    <section class="tour-descriptions" style="padding-left: 40px;padding-right: 40px;margin-top: -59px;">

        <div class="row">
            <div class="col-md-7">
                <div class="tour-descriptions-content">
                    <div class="tour-descriptions-content-inner">
                        <div class="tour-descriptions-content-inner-left">
                            <div class="tour-descriptions-content-inner-left-content">
                                <h1>
                                    {{ __($tour_event->name) }}
                                </h1>
                            </div><!-- /.tour-descriptions-content-inner-left-content -->
                        </div><!-- /.tour-descriptions-content-inner-left -->
                        <div class="tour-descriptions-content-inner-right">
                            <section class="" style="">
                                <div class="imgCcontainer">
                                    <div class="carousel imgC">
                                        @foreach ($tour_event->images as $item)
                                            <input type="radio" name="slides" checked="checked"
                                                id="slide-{{ $item->id }}">
                                        @endforeach
                                        <ul class="carousel__slides">
                                            @foreach ($tour_event->images as $item)
                                                <li class="carousel__slide" data-interval="1000">
                                                    <figure>
                                                        <div>
                                                            <img src="{{ asset($item->path) }}" alt="">
                                                        </div>
                                                    </figure>
                                                </li>
                                            @endforeach

                                        </ul>
                                        <ul class="carousel__thumbnails">
                                            @foreach ($tour_event->images as $item)
                                                @if ($item->id != $tour_event->images->first()->id)
                                                    <li data-interval="1000">
                                                        <label for="slide-{{ $item->id }}"><img
                                                                src="{{ asset($item->path) }}" alt="">
                                                        </label>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div><!-- /.tour-_descriptions-content-inner-right -->
                    </div><!-- /.tour-descriptions-content-inner -->
                </div><!-- /.tour-descriptions-content -->
            </div><!-- /.col -->
            <div class="col-md-5 tour-descriptions-content-inner-left-content-title">
                <div class="row" style="">
                    <div class="col-md-12">
                        {{-- <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height ="100%"
                    frameborder="0" allowfullscreen></iframe> --}}
                        <img src="{{ asset('images/map.png') }}" alt=""
                            style="height:310px; width: 530px; margin-top: 52px;">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <h2>
                            {{ __('Key Points') }}
                        </h2>
                        <div>
                            <div class="detailespackage" style="justify-content:space-between">
                                <div style="float: left"><i class="fa-solid fa-calendar"></i>
                                    {{ __('Period') }}
                                </div>
                                <div>
                                    {{ __($tour_event->period) }}
                                </div>
                            </div>
                            <div class="detailespackage" style="justify-content:space-between">
                                <div><i class="fa-solid fa-location-dot"></i>
                                    {{ __('Settlement') }}
                                </div>
                                <div>
                                    {{ __($tour_event->settlement) }}
                                </div>
                            </div>

                            <div class="detailespackage" style="justify-content:space-between">
                                <div><i class="fa-solid fa-clock"></i>
                                    {{ __('From yerevan') }}
                                </div>
                                <div>
                                    {{ __($tour_event->distance) }}
                                </div>
                            </div>

                            <div class="detailespackage" style="justify-content:space-between">
                                <div><i class="fa-solid fa-file"></i>
                                    {{ __('Working Hours') }}
                                </div>
                                <div>
                                    {{ __($tour_event->duration) }}
                                </div>
                            </div>
                            <div class="detailespackage" style="justify-content:space-between">
                                <div><i class="fa-solid fa-dollar-sign"></i>
                                    {{ __('Enterence') }}
                                </div>
                                <div>
                                    {{ __($tour_event->price) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </div><!-- /.tour-descriptions-content-inner-left-content-title -->
        </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.tour-descriptions -->
    <!-- Tour description end -->

    <div class="row">

        <section class="carDes">
            <h2>
                {{ __('Overview') }}
            </h2>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt magnam reiciendis suscipit aliquam?
                Adipisci, modi error? Possimus ducimus suscipit corrupti!
            </p>
        </section>
    </div>
    <br>

    {{-- <section id="pack" class="packages">
        <div class="container">

            <center>
                <h3>
                    {{ __('Related Tours') }}
                </h3>
            </center>

            <!--/.gallery-header-->
            <div class="packages-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="https://images.pexels.com/photos/1371360/pexels-photo-1371360.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="package-place">
                            <div class="packageName">
                                {{ __('Something') }}
                            </div>
                            <div>
                                <h4 class="package-txt">
                                    <a href="#">
                                        package one
                                    </a>
                                </h4>
                                <p class="kki">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur,
                                    perspiciatis!
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span>4 Days / 3 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span>10 - 15 Feb
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span>$1,000
                                </div>
                            </div>
                            <div class="rating">
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="package-btn">
                                <a href="{{ url('/pageSee') }}"> <button class="package-view">
                                        More
                                    </button>
                                </a>

                            </div>



                        </div>

                        <!--/.single-package-item-->

                    </div>

                    <!--/.col-->

                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.pexels.com/photos/1371360/pexels-photo-1371360.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="package-place">
                            <div class="packageName">
                                Something
                            </div>
                            <div>
                                <h4 class="package-txt">
                                    <a href="#">
                                        package one
                                    </a>
                                </h4>
                                <p class="kki">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur,
                                    perspiciatis!
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span>4 Days / 3 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span>10 - 15 Feb
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span>$1,000
                                </div>
                            </div>
                            <div class="rating">
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="package-btn">
                                <a href="{{ url('/pageSee') }}"> <button class="package-view">
                                        More
                                    </button>
                                </a>

                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.pexels.com/photos/1371360/pexels-photo-1371360.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="package-place">
                            <div class="packageName">
                                Something
                            </div>
                            <div>
                                <h4 class="package-txt">
                                    <a href="#">
                                        package one
                                    </a>
                                </h4>
                                <p class="kki">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur,
                                    perspiciatis!
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span>4 Days / 3 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span>10 - 15 Feb
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span>$1,000
                                </div>
                            </div>
                            <div class="rating">
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="package-btn">
                                <a href="{{ url('/pageSee') }}"> <button class="package-view">
                                        More
                                    </button>
                                </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>


                </div>
                <!--/.row-->
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section> --}}
@endsection
