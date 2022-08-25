<!--packages start-->
@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>


    @foreach ($carInfo as $car)
        <section class="tour-descriptions" style="margin-top: -50px;">
            <h1 style="text-align: center">
                {{ __($car->name) }}
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
                                                            <img src="https://media.istockphoto.com/photos/attractive-male-driver-using-the-gps-navigation-map-on-the-car-picture-id1303145841?b=1&k=20&m=1303145841&s=170667a&w=0&h=Aegfed2EYsC4gQRN_06W4b4N9a7ZZs4Ulik3AWSkNgo="
                                                                alt="">
                                                        </div>

                                                    </figure>
                                                </li>
                                                {{-- <li class="carousel__slide">
                                                    <figure>
                                                        <div>
                                                            <img src="https://picsum.photos/id/1043/800/450" alt="">
                                                        </div>

                                                    </figure>
                                                </li>
                                                <li class="carousel__slide">
                                                    <figure>
                                                        <div>
                                                            <img src="https://thumbs.dreamstime.com/b/range-rover-car-rome-italy-september-british-made-full-sized-luxury-sport-utility-vehicle-suv-land-marque-under-jaguar-141812181.jpg" alt="">
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
                                                </li> --}}
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
                            {{ __('Key Points') }}
                        </h2>


                        <div class="detailespackage">
                            <div style="float: left"><i class="fa-solid fa-car"></i>{{ __('Type') }}</div>
                            <div>
                                {{ __($car->type) }}
                            </div>
                        </div>
                        <div class="detailespackage">
                            <div><i class="fa-solid fa-person"></i>{{ __('Number of seats') }}</div>
                            <div>
                                {{ __($car->seats) }}
                            </div>
                        </div>

                        <div class="detailespackage">
                            <div><i class="fa-solid fa-calendar-check"></i>{{ __('Year') }}</div>
                            <div>
                                {{ __($car->model) }}
                            </div>
                        </div>

                        <div class="detailespackage">
                            <div><i class="fa-solid fa-calendar"></i>{{ __('Free Cancellation') }}</div>
                            <div>
                                {{ __($car->cancelation_fee) }}
                            </div>
                        </div>


                    </div><!-- /.tour-descriptions-content-inner-left-content-title -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.tour-descriptions -->
        <!-- Tour description end -->





        <section class="carDes" style="padding: 70px">
            <h2>
                {{ __('Overview') }}
            </h2>
            <p>
                {{ __($car->overview) }}
            </p>
        </section>
    @endforeach

    <br>
    <br>
    <br>
    @if (count($cars) > 0)
        <div class="container">



            <div class="row justify-content-center" style="margin: auto; width: 86%; align-items:center">

                <div class="col-lg-2 col-md-6 newtat" style="border: none">

                </div>

                <div class="col-lg-2 col-md-6 newtata">
                    {{ __('3 Seats') }}
                </div>

                <div class="col-lg-2 col-md-6 newtata">
                    {{ __('7 Seats') }}
                </div>

                <div class="col-lg-2 col-md-6 newtata">
                    {{ __('16 Seats') }}
                </div>

                <div class="col-lg-2 col-md-6 newtata">
                    {{ __('29 Seats') }}
                </div>

                <div class="col-lg-2 col-md-6 newtata">
                    {{ __('49 Seats') }}
                </div>

            </div>
            @foreach ($cars as $car)
                <div class="row justify-content-center" style="margin: auto; width: 86%; margin-top: 7px">

                    <div class="col-lg-2 col-md-6 newtata">
                        {{ __($car->car_name) }}
                    </div>

                    <div class="col-lg-2 col-md-6 newtat">
                        {{ __($car->three_seats) }}
                    </div>

                    <div class="col-lg-2 col-md-6 newtat">
                        {{ __($car->seven_seats) }}
                    </div>

                    <div class="col-lg-2 col-md-6 newtat">
                        {{ __($car->sixteen_seats) }}
                    </div>

                    <div class="col-lg-2 col-md-6 newtat">
                        {{ __($car->twintynine_seats) }}
                    </div>

                    <div class="col-lg-2 col-md-6 newtat">
                        {{ __($car->fortynine_seats) }}
                    </div>

                </div>
            @endforeach
            <center>
                <a href="{{ url('/BookACar') }}">
                    <button class="package-view" style="text-align: center; align-items:center; margin:20px">
                        {{ __('Book Now') }}
                    </button>
                </a>
            </center>
        </div>
    @endif



    <br>
@endsection
