@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>

    <section class="tour-descriptions" style="padding: 40px; margin-top: -92px;">
        <div class="row">
            <div class="col-md-7">
                <div class="tour-descriptions-content">
                    <div class="tour-descriptions-content-inner">
                        <div class="tour-descriptions-content-inner-left">
                            <div class="tour-descriptions-content-inner-left-content">
                                <center>
                                    <h1>
                                        {{ __($hotels->name) }}
                                    </h1>
                                </center>
                            </div>
                        </div>
                        <div class="tour-descriptions-content-inner-right">
                            <section class="" style="">
                                <div class="imgCcontainer">
                                    <div class="carousel imgC">
                                        @foreach ($hotels->images as $item)
                                            <input type="radio" name="slides" checked="checked"
                                                id="slide-{{ $item->id }}">
                                        @endforeach
                                        <ul class="carousel__slides">
                                            @foreach ($hotels->images as $item)
                                                <li class="carousel__slide" data-interval="1000">
                                                    <figure>
                                                        <div>
                                                            <img src="{{ asset($item->path) }}"
                                                                alt="{{ __($hotels->name) }}">
                                                        </div>
                                                    </figure>
                                                </li>
                                            @endforeach

                                        </ul>
                                        <ul class="carousel__thumbnails">

                                            @foreach ($hotels->images as $item)
                                                @if ($item->id != $hotels->images->first()->id)
                                                    <li data-interval="1000">
                                                        <label for="slide-{{ $item->id }}"><img
                                                                src="{{ asset($item->path) }}">
                                                        </label>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="highlights">
                            <h3>
                                {{ __('Highlights') }}
                            </h3>
                            <ul class="uldescription" style="margin-left: 3%">
                                @foreach ($hotels->highlights as $item)
                                    <li>
                                        {{ __($item->name) }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="tour-descriptions-content-inner-left-content-title bb">
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                        <img src="{{ asset('images/map.png') }}" alt="">
                    </div>

                    <h3 style="margin-top: 25px; font-weight: 600;">
                        {{ __('Key Points') }}
                    </h3>
                    @foreach ($hotels->hotelKeys as $ht)
                        {{-- {{ dd($hotels->hotelKeys) }} --}}
                        <div class="">
                            <ul style="list-style: none">
                                <li class="mewmew" style="color: Black"><span><img src="{{ asset('images/p.png') }}"
                                            class="plusImg">
                                        {{ __($ht->key) }}
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="carDes">
        <h2>
            {{ __('Overview') }}
        </h2>
        <p>
            {{ __($hotels->overview) }}
        </p>
    </section>


    <section class="tableOfPrice" style="background-color: #F5F5F5; padding:60px">
        <div class="container">
            <h3 style="text-align: center; margin-bottom:10px">
                {{ __('The price') }}
            </h3>

            <br>
            <table class="table table-bordered tble" style="margin: auto">
                <tbody>
                    <tr style="font-weight: 600">
                        <td style="background-color: #FFF1E9">
                            {{ __('Rooms') }}
                        </td>
                        <td style="background-color: #FFF1E9">
                            07.01-15.03
                            <div>
                                01.11-29.12
                            </div>
                        </td>
                        <td style="background-color: #FFF1E9">
                            16.03-31.10
                            <div>
                                30.12-06.01
                            </div>
                        </td>

                    </tr>
                    @foreach ($hotels->rooms as $item)
                        <tr>
                            <td>
                                {{ __($item->name) }}
                            </td>
                            <td>
                                {{ __($item->price) }}
                            </td>
                            <td>
                                {{ __($item->price2) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        <a href="{{ url('/BookARoom/' . $hotels->id) }}">
            <button class="package-view" style="text-align: center; align-items:center; margin:20px">
                {{ __('Book Now') }}
            </button>
        </a>
    </section>
    <section class="useFull">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="uselist">
                        <h3 style="padding: 10px; color:white">
                            {{ __('UseFul To know') }}
                        </h3>
                        <ul>
                            @foreach ($hotels->hotelInfo as $item)
                                <li>
                                    {{ __($item->name) }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <img src="{{ asset('images/usefull.png') }}" alt="">
                </div>
                @if(count($hotels->hotelFacilities) > 0)
                <div class="col-md-6">
                    <br>
                    <h3 style="color: white">
                        {{ __('What is included') }}
                    </h3>
                    <br>
                    <ul style="list-style: none; padding-left:30px">

                        @foreach ($hotels->hotelFacilities as $f)
                            <li class="mewmew" style="color: white"><span><img src="{{ asset('images/p.png') }}"
                                        class="plusImg"></span>
                                {{ __($f->name) }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </section>


    <section id="pack" class="packages" style="background-color: #F5F5F5">
        <div class="container">
            <div class="gallary-header text-center">
                @if (count($foods) > 0)
                <h2>
                    {{ __('What to eat nearby') }}
                </h2>
                @endif

            </div>
            <!--/.gallery-header-->
            <div class="packages-content">
                @if (count($foods) > 0)
                    <div class="row">
                        @foreach ($foods as $thing)
                            <div class="col-md-4 col-sm-6">

                                <div class="single-package-item">

                                    <img src="{{ url(asset($thing->images->first()->path)) }}"
                                        alt="{{ __($thing->name) }}">
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
                                        <a href="{{ url('/getfoodsById/' . $thing->id) }}"><button class="package-view">
                                                {{ __('More') }}
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <center>
                        {{ $foods->links() }}
                    </center>
                @endif

                <br>
                <br>
                <br>

                @if (count($things) > 0)
                    <center style="margin: 20px">
                        <h2>
                           {{ __('What to do nearby')}}
                        </h2>
                    </center>

                    <div class="row">
                        @foreach ($things as $thing)
                            <div class="col-md-4 col-sm-6">

                                <div class="single-package-item">

                                    <img src="{{ url(asset($thing->images->first()->path)) }}"
                                        alt="{{ __($thing->name) }}">
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
                                            <span><i class="fa-solid fa-location-dot"></i></span>
                                            {{ __($thing->address) }}
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
                                        <a href="{{ url('/getThingsToDoById/' . $thing->id) }}"><button
                                                class="package-view">
                                                {{ __('More') }}
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
            </div>
            <center>
                {{ $things->links() }}
            </center>
            <!--/.row-->
        </div>
        @endif
        </div>
    </section>
@endsection
