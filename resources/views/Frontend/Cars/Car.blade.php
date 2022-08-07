
    @extends('layouts.master')
@section('content')
   
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>

    <section class="tour-descriptions" style="padding: 30p;margin-top: -34px">
        <h1 style="text-align: center">
           {{ $car->name }}
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


                            <section class="" style="">
                                <div class="imgCcontainer">
                                    <div class="carousel imgC">
                                        @foreach ($car->images as $item)
                                            <input type="radio" name="slides" checked="checked"
                                                id="slide-{{ $item->id }}">
                                        @endforeach
                                        <ul class="carousel__slides">
                                            @foreach ($car->images as $item)
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

                                            @foreach ($car->images as $item)
                                                @if ($item->id != $car->images->first()->id)
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
                        <div style="float: left"><i class="fa-solid fa-car"></i>Type</div>  <div>{{ $car->car_type }}</div>
                    </div>
                    <div class="detailespackage">
                        <div><i class="fa-solid fa-person"></i>Number of seats</div> <div>{{ $car->seats }} seats</div>
                    </div>

                    <div class="detailespackage">
                        <div><i class="fa-solid fa-calendar-check"></i>Year</div>  <div>
                            {{ $car->car_model }}
                        </div>
                    </div>

                    <div class="detailespackage">
                        <div><i class="fa-solid fa-calendar"></i>Free Cancellation</div>  <div>{{ $car->free_cancelation }}</div>
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
            {{ $car->overview }}
        </p>
    </section>


    <section class="tableOfPrice">
        <div class="container">
            <h3 style="font-weight: 600">
                The price
            </h3>
            <br>
            <table class="table table-bordered tble" style="margin: auto">
                <thead>
                    <tr>
                        <th  style="text-align: center; margin-bottom:10px; background-color: #FFF1EA">Daily Price</th>
                        <th  style="text-align: center; margin-bottom:10px; background-color: #FFF1EA">Weekly Price</th>
                        <th  style="text-align: center; margin-bottom:10px; background-color: #FFF1EA">Monthly Price</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{ $car->daily_price }}
                        </td>
                        <td> 
                            {{ $car->weekly_price }}
                        </td>
                        <td>
                            {{ $car->monthly_price }}
                        </td>

                    </tr>


                </tbody>
            </table>

        </div>
        <a href="{{ url('/BookACar/'.$car->id) }}">
            <button class="package-view" style="text-align: center; align-items:center; margin:20px">
                Book Now
            </button>
        </a>
    </section>

<br>

    {{-- <!--packages start-->
    <section id="pack" class="packages">
        <div class="container">
            <div class="gallary-header text-center">
                <h2>
                    special packages
                </h2>
                <p>
                    Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.
                </p>
            </div>
            <!--/.gallery-header-->
            <div class="packages-content">
                <div class="row">

                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="package-place">
                            <div class="packageName">

                            </div>
                            <div class="Car-txt">
                                <h4>
                                   Tesla
                                </h4>

                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span> Tesla
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar"></i></span> Two Seats
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> 20$
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
                                <button class="package-view">
                                    Details
                                </button>

                            </div>



                        </div>

                    </div>
                    <!--/.col-->

                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="package-place">
                            <div class="packageName">

                            </div>
                            <div class="Car-txt">
                                <h4>
                                   Tesla
                                </h4>

                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span> Tesla
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar"></i></span> Two Seats
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> 20$
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
                                <button class="package-view">
                                    Details
                                </button>

                            </div>



                        </div>

                    </div>
                    <!--/.col-->

                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="package-place">
                            <div class="packageName">

                            </div>
                            <div class="Car-txt">
                                <h4>
                                   Tesla
                                </h4>

                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span> Tesla
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar"></i></span> Two Seats
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> 20$
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
                                <button class="package-view">
                                    Details
                                </button>

                            </div>



                        </div>
                    </div>
                    <!--/.col-->

                </div>
                <!--/.row-->
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section> --}}
@endsection















