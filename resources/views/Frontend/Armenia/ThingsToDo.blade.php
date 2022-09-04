@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>



    <h2 class="title-head" style="text-align: center">{{ __('Things To Do in Armenia') }}</h2>

    <br>
    <br>

    @include('partials.ThingsToDoCard')



    <section id="pack" class="packages">
        <div class="container">

            <div class="packages-content">
                <h2 style="text-align: center; padding-bottom:60px">
                    <span class="title-head"> 
                        {{-- {{ $category->name }} --}}
                    </span>
                </h2>
                <div class="row">

                    {{-- if there is no things to see in this category --}}
                    @if (count($things) == 0)
                        <div class="col-md-12">
                            <center>
                                {{ __('Not Available Yet') }}
                            </center>
                        </div>
                    @endif

                    @foreach($things as $thing)
                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="{{ url(asset($thing->images->first()->path))}}"
                                alt="{{ $thing->name }}">
                            <div class="HotelName">
                                <div style="width: fit-content; font-weight: 700;">
                                    {{ __($thing->name) }}
                                </div>
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
                                <a href="{{ url('/getThingsToDoById/'.$thing->id) }}"><button class="package-view">
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
                <!--/.row-->
                <center>
                    {{ $things->links() }}
                </center>
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section>
@endsection
