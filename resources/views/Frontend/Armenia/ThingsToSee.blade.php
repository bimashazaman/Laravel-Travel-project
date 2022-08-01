@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>



    <h2 style="text-align: center">
        Things to see in Armenia
    </h2>
    <br>
    <br>

    @include('partials.EightCards')

    <section id="pack" class="packages">
        <div class="container">

            <!--/.gallery-header-->
            <div class="packages-content">
                <h2 style="text-align: center; padding-bottom:60px">
                    <span class="title-head"> 
                        {{ $category->name }}
                    </span>
                </h2>
                {{-- @if (count($things) == 0)
                <div class="col-md-12">
                    <center>
                        Not Available Yet
                    </center>
                </div>
                
            @endif --}}

                <div class="row">

                    {{-- if there is no things to see in this category --}}
                   
                    @foreach($things as $thing)
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            
                            <img src="{{asset($thing->images->first()->path)}}"
                                alt="package-place">
                            <div class="HotelName">
                                <h4>
                                    {{ $thing->name }}
                                </h4>
                            </div>
                            <div class="hotelDesccription">
                                <p>
                                   {{ $thing->description }}
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-calendar"></i></span> {{ $thing->time }}
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-location-dot"></i></span> {{ $thing->address }}
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span> {{ $thing->distance }}
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
                                <a href="{{ url('/getThingsToSeeById/'.$thing->id) }}"><button class="package-view">
                                        More
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
