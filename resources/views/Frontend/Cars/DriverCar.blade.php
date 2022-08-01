<!--packages start-->
@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>

 
    <section class="tour-descriptions" style="margin-top: -50px;">
        <h1 style="text-align: center">
            {{ $carInfo->name }}
        </h1>
        <div class="row">
            <div class="col-md-7">
                <div class="tour-descriptions-content">
                    <div class="tour-descriptions-content-inner">
                        <div class="tour-descriptions-content-inner-left">
                            <div class="tour-descriptions-content-inner-left-content">

                            </div><!-- /.tour-descriptions-content-inner-left-content -->
                        </div><!-- /.tour-descriptions-content-inner-left -->
                        <div class="tour-descriptions-content-inner-right">


                            <section class="imgC">
                                <div class="imgCcontainer">
                                    <div class="carousel">
                                        <input type="radio" name="slides" checked="checked" id="slide-1">
                                        <input type="radio" name="slides" id="slide-2">
                                        <input type="radio" name="slides" id="slide-3">
                                        <input type="radio" name="slides" id="slide-4">
                                        <input type="radio" name="slides" id="slide-5">
                                        <input type="radio" name="slides" id="slide-6">
                                        <ul class="carousel__slides">
                                            <li class="carousel__slide">
                                                <figure>
                                                    <div>
                                                        <img src="https://media.drivingelectric.com/image/private/s--jAviEQV8--/v1643195840/drivingelectric/2022-01/BMW-330e-Touring-UK-4_pkva88.jpg"
                                                            alt="">
                                                    </div>

                                                </figure>
                                            </li>
                                            <li class="carousel__slide">
                                                <figure>
                                                    <div>
                                                        <img src="https://picsum.photos/id/1043/800/450" alt="">
                                                    </div>

                                                </figure>
                                            </li>
                                            <li class="carousel__slide">
                                                <figure>
                                                    <div>
                                                        <img src="https://picsum.photos/id/1044/800/450" alt="">
                                                    </div>

                                                </figure>
                                            </li>
                                            <li class="carousel__slide">
                                                <figure>
                                                    <div>
                                                        <img src="https://picsum.photos/id/1045/800/450" alt="">
                                                    </div>

                                                </figure>
                                            </li>
                                            <li class="carousel__slide">
                                                <figure>
                                                    <div>
                                                        <img src="https://picsum.photos/id/1049/800/450" alt="">
                                                    </div>

                                                </figure>
                                            </li>
                                            <li class="carousel__slide">
                                                <figure>
                                                    <div>
                                                        <img src="https://picsum.photos/id/1052/800/450" alt="">
                                                    </div>

                                                </figure>
                                            </li>
                                        </ul>
                                        <ul class="carousel__thumbnails">
                                            <li>
                                                <label for="slide-1"><img src="https://picsum.photos/id/1041/150/150"
                                                        alt=""></label>
                                            </li>
                                            <li>
                                                <label for="slide-2"><img src="https://picsum.photos/id/1043/150/150"
                                                        alt=""></label>
                                            </li>
                                            <li>
                                                <label for="slide-3"><img src="https://picsum.photos/id/1044/150/150"
                                                        alt=""></label>
                                            </li>
                                            <li>
                                                <label for="slide-4"><img src="https://picsum.photos/id/1045/150/150"
                                                        alt=""></label>
                                            </li>
                                            <li>
                                                <label for="slide-5"><img src="https://picsum.photos/id/1049/150/150"
                                                        alt=""></label>
                                            </li>
                                            <li>
                                                <label for="slide-6"><img src="https://picsum.photos/id/1052/150/150"
                                                        alt=""></label>
                                            </li>
                                        </ul>
                                    </div>

                            </section>







                        </div><!-- /.tour-descriptions-content-inner-right -->
                    </div><!-- /.tour-descriptions-content-inner -->
                </div><!-- /.tour-descriptions-content -->
            </div><!-- /.col -->

            <div class="col-md-5">
                <div class="tour-descriptions-content-inner-left-content-title bb">
                    <h2>
                        Key Points
                    </h2>


                    <div class="detailespackage">
                        <div style="float: left"><i class="fa-solid fa-car"></i>Type</div>
                        <div>
                            {{ $carInfo->type }}
                        </div>
                    </div>
                    <div class="detailespackage">
                        <div><i class="fa-solid fa-person"></i>Number of seats</div>
                        <div>
                            {{ $carInfo->seats }}
                        </div>
                    </div>

                    <div class="detailespackage">
                        <div><i class="fa-solid fa-calendar-check"></i>Year</div>
                        <div>
                            {{ $carInfo->model }}
                        </div>
                    </div>

                    <div class="detailespackage">
                        <div><i class="fa-solid fa-calendar"></i>Free Cancellation</div>
                        <div>
                            {{ $carInfo->cancelation_fee }}
                        </div>
                    </div>


                </div><!-- /.tour-descriptions-content-inner-left-content-title -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.tour-descriptions -->
    <!-- Tour description end -->

 

    <section class="carDes" style="padding: 70px">
        <h2>
            Overview
        </h2>
        <p>
            {{ $carInfo->overview }}
        </p>
    </section>

    <br>
    <br>
    <br>

    <div class="container">
        <div class="row justify-content-center" style="margin: auto; width: 86%; align-items:center">

            <div class="col-lg-2 col-md-6 newtat" style="border: none">

            </div>

            <div class="col-lg-2 col-md-6 newtata">
                3 Seats
            </div>

            <div class="col-lg-2 col-md-6 newtata">
                7 Seats
            </div>

            <div class="col-lg-2 col-md-6 newtata">
                16 Seats
            </div>

            <div class="col-lg-2 col-md-6 newtata">
                29 Seats
            </div>

            <div class="col-lg-2 col-md-6 newtata">
                49 Seats
            </div>

        </div>
        @foreach ($cars as $car)
        
        <div class="row justify-content-center" style="margin: auto; width: 86%; margin-top: 7px">

            <div class="col-lg-2 col-md-6 newtata">
{{ $car->car_name }}
            </div>

            <div class="col-lg-2 col-md-6 newtat">
                {{ $car->three_seats }}
            </div>

            <div class="col-lg-2 col-md-6 newtat">
                {{ $car->seven_seats }}
            </div>

            <div class="col-lg-2 col-md-6 newtat">
                {{ $car->sixteen_seats }}
            </div>

            <div class="col-lg-2 col-md-6 newtat">
                {{ $car->twintynine_seats }}
            </div>

            <div class="col-lg-2 col-md-6 newtat">
                {{ $car->fortynine_seats }}
            </div>

        </div>
        @endforeach
        <center>
            <a href="{{ url('/RenACar') }}">
                <button class="package-view" style="text-align: center; align-items:center; margin:20px">
                    Book Now
                </button>
            </a>
        </center>
    </div>



    <br>
@endsection
