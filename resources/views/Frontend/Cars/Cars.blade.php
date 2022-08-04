@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>

    <section id="pack" class="packages">
        <div class="container">
            <h2 style="text-align: center; padding-bottom:60px">
                Rent a transport
            </h2>

            <div class="container">

                <div class="parent" align="center">
                    <a href="{{ url('/caa') }}">
                        <div class="div1"
                            style="background-color: #FAEFD7; box-shadow:none; border:0.1px solid rgb(212, 211, 211)">
                            <i class="fa-solid fa-car-side"></i>
                            <h4 style="margin: 10px;">
                                Rent a car
                            </h4>
                        </div>
                    </a>
                    <a href="{{ url('/driver') }}">
                        <div class="div2">
                            <i class="fa-solid fa-car-side"></i>
                            <h4 style="margin: 10px">
                                Transfers With drivers
                            </h4>
                        </div>
                    </a>
                    <a href="{{ url('/MT') }}">
                        <div class="div3">
                            <i class="fa-solid fa-car-side"></i>
                            <h4 style="margin: 10px">
                                Meet the transfer at airport
                            </h4>
                        </div>
                    </a>

                </div>
            </div>


            <div class="packages-content">

                @foreach ($cms as $c )
                    
              
                <div class="RentCar">
                    <h2 style="color:black; font-weidth:500">
                       {{ $c->title }}
                    </h2>
                    <p>
                        {{ $c->description }}
                    </p>
                </div>

                @endforeach
                <div class="row">


                    @if (count($cars) == 0)
                        <div class="col-md-12">

                            <center>
                                <h3 class="" style="margin-top: 20px">
                                    Cars will be available soon
                                </h3>
                            </center>

                        </div>
                    @endif

                        
                    @foreach ($cars as $car)
                        <div class="col-md-4 col-sm-6">

                            <div class="single-package-item">

                                <img src="{{$car->images->first()->path}}" alt="">
                                   

                                <div class="packageName">

                                </div>
                                <div class="Car-txt">
                                    <h4>
                                        {{ $car->name }}
                                    </h4>

                                </div>
                                <div class="pacdet">
                                    <div class="packageOffer" style="margin-left: 20px">
                                        <span><i class="fa-regular fa-clock"></i></span> {{ $car->car_model }}
                                    </div>

                                    <div class="packageOffer" style="margin-left: 20px">
                                        <span><i class="fa-solid fa-calendar-check"></i></span> {{ $car->seats }} Seats
                                    </div>

                                    <div class="packageOffer" style="margin-left: 20px">
                                        <span><i class="fa-solid fa-dollar-sign"></i></span> From {{ $car->daily_price }}
                                        AMD
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
                                    <a href="{{ url('/car/detail/' . $car->id) }}">
                                        <button class="package-view">
                                            Details
                                        </button>

                                    </a>
                                </div>



                            </div>
                            <!--/.single-package-item-->

                        </div>
                    @endforeach


                    <!--/.col-->



                </div>
                <center>
                    {{ $cars->links() }}
                </center>
                <!--/.row-->
            </div>
        </div>
    </section>
@endsection
