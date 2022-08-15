@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>

    <section class="tour-descriptions" style="padding-left: 40px;padding-right: 40px;margin-top: -59px;">
        <div class="row">
            <div class="col-md-7">
                <div class="tour-descriptions-content">
                    <div class="tour-descriptions-content-inner">
                        <div class="tour-descriptions-content-inner-left">
                            <div class="tour-descriptions-content-inner-left-content">
                                <h1>
                                    {{ __($foods->name) }}
                                </h1>
                            </div><!-- /.tour-descriptions-content-inner-left-content -->
                        </div><!-- /.tour-descriptions-content-inner-left -->
                        <div class="tour-descriptions-content-inner-right">
                            <section class="" style="">
                                <div class="imgCcontainer">
                                    <div class="carousel imgC">
                                        @foreach ($foods->images as $item)
                                            <input type="radio" name="slides" checked="checked"
                                                id="slide-{{ $item->id }}">
                                        @endforeach
                                        <ul class="carousel__slides">
                                            @foreach ($foods->images as $item)
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

                                            @foreach ($foods->images as $item)
                                                @if ($item->id != $foods->images->first()->id)
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 tour-descriptions-content-inner-left-content-title">
                <div class="row" style="">
                    <div class="col-md-12">
                        {{-- <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height ="100%"
                    frameborder="0" allowfullscreen></iframe> --}}
                        <img src="{{ asset('images/map.png') }}" alt="{{ __($foods->name) }}" style="height:310px; width: 530px; margin-top: 52px;">
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
                                    {{ __($foods->period) }}
                                </div>
                            </div>
                            <div class="detailespackage" style="justify-content:space-between">
                                <div><i class="fa-solid fa-location-dot"></i>
                                {{ __('Settlement') }}
                                </div>
                                <div>
                                    {{ __($foods->address) }}
                                </div>
                            </div>

                            <div class="detailespackage" style="justify-content:space-between">
                                <div><i class="fa-solid fa-clock"></i>
                                {{ __('From yerevan') }}
                                </div>
                                <div>
                                    {{ __($foods->distance) }}
                                </div>
                            </div>

                            <div class="detailespackage" style="justify-content:space-between">
                                <div><i class="fa-solid fa-file"></i>
                                    {{ __('Working Hours') }}
                                </div>
                                <div>
                                    {{ __('$foods->duration') }}
                                </div>
                            </div>
                            <div class="detailespackage" style="justify-content:space-between">
                                <div><i class="fa-solid fa-dollar-sign"></i>
                                    {{ __('Enterence') }}
                                </div>
                                <div>
                                    {{ __($foods->price) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </div>
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
                
                {{ __($foods->description) }}
            </p>
        </section>
    </div>
    <br>


    <section id="pack" class="packages">
        <div class="container">

            <center>
                <h3>
                    {{ __('Related Packages') }}
                </h3>
            </center>

            <!--/.gallery-header-->
            <div class="packages-content">
                <div class="row">
                    @foreach($related as $thing)
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="{{ url(asset($thing->images->first()->path))}}"
                                alt="{{ $thing->name }}">
                            <div class="HotelName">
                                <h4>
                                    {{ __($thing->name) }}
                                </h4>
                            </div>
                            <div class="hotelDesccription">
                                <p>
                                   {{ __($thing->description) }}
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-calendar"></i></span> {{ __($thing->time) }}
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-location-dot"></i></span> {{ __($thing->address) }}
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span> {{ __($thing->distance) }}
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
                                <a href="{{ url('/getfoodsById/'.$thing->id) }}"><button class="package-view">
                                        {{ __('More') }}
                                    </button>
                                </a>
                            </div>
                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->

                    @endforeach
                </div>
                <center>
                    {{ 
                        $related->links()
                    }}
                </center>
                <!--/.row-->
                
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section>
@endsection
