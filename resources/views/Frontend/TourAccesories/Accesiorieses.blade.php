<!--packages start-->
@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>


    <section class="tour-descriptions" style="margin-top: -52px;">
        <h1 style="text-align: center">
            Tent
        </h1>
        <div class="row" style="padding-left: 70px; padding-right: 70px">
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
                                        @foreach ($a->images as $item)
                                            <input type="radio" name="slides" checked="checked"
                                                id="slide-{{ $item->id }}">
                                        @endforeach
                                        <ul class="carousel__slides">
                                            @foreach ($a->images as $item)
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

                                            @foreach ($a->images as $item)
                                                @if ($item->id != $a->images->first()->id)
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
                        <div style="float: left"><i class="fa-solid fa-person-hiking"></i>Type</div>
                        <div>
                            {{ $a->type }}
                        </div>
                    </div>
                    <div class="detailespackage">
                        <div><i class="fa-solid fa-person"></i>Per Pax</div>
                        <div>
                            {{ $a->total_pax }}
                        </div>
                    </div>

                    <div class="detailespackage">
                        <div> <i class="fa-solid fa-calendar-check"></i>
                            Available
                        </div>
                        <div>
                            {{ $a->availability }}
                        </div>
                    </div>
                    <div class="detailespackage">
                        <div><i class="fa-solid fa-calendar"></i>Free Cancellation</div>
                        <div>
                            {{ $a->free_cancellation }}
                        </div>
                    </div>


                </div><!-- /.tour-descriptions-content-inner-left-content-title -->

            </div><!-- /.row -->


        </div><!-- /.container -->
    </section><!-- /.tour-descriptions -->
    <!-- Tour description end -->

    <section class="carDes">
        <h2>
            Overview
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cum hic totam ducimus repudiandae in cupiditate
            deleniti velit accusantium ut consequuntur tempora veritatis explicabo dignissimos quaerat, eius illum alias id
            nihil placeat inventore voluptate animi natus nam. Veritatis quaerat doloremque asperiores, in ad provident,
            quae ut sunt delectus quibusdam voluptate, perspiciatis recusandae officiis! Fugiat voluptate neque optio
            reprehenderit magni eveniet eum suscipit quam, ducimus, odio ex sed vero dolorum! Ratione.
        </p>
    </section>


    <section class="tableOfPrice grayAc">
        <div class="container">
            <h3 style="font-weight: 600">
                The price
            </h3>
            <br>
            <table class="table table-bordered tble" style="margin: auto">
                <thead>
                    <tr>
                        <th style="text-align: center; margin-bottom:10px; background-color: #FFF1EA">1 Day</th>
                        <th style="text-align: center; margin-bottom:10px; background-color: #FFF1EA">1 Week</th>
                        <th style="text-align: center; margin-bottom:10px; background-color: #FFF1EA">1 Month</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{ $a->one_day_price }}
                        </td>
                        <td>
                            {{ $a->one_week_price }}
                        </td>
                        <td>
                            {{ $a->one_month_price }}
                        </td>

                    </tr>


                </tbody>
            </table>

        </div>
        <button class="package-view" style="text-align: center; align-items:center; margin:20px">
            Book Now
        </button>
    </section>


    <!--packages start-->
    <section id="pack" class="packages">
        <div class="container">
            <div class="gallary-header text-center">
                <h2>
                    Related Accessories
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

                            <img src="https://cdn.thewirecutter.com/wp-content/uploads/2020/04/carcampingtents-lowres-72-2x1-1.jpg?auto=webp&quality=75&crop=2:1&width=1024"
                                alt="package-place">
                            <div class="HotelName">
                                <h4>
                                    Comfortable Large Tent
                                </h4>
                            </div>
                            <div class="hotelDesccription">
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto, maiores.
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span> 2 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-person-hiking"></i></span> Date
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
                                <a href="{{ url('h') }}"><button class="package-view">
                                        Details
                                    </button>
                                </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://cdn.thewirecutter.com/wp-content/uploads/2020/04/carcampingtents-lowres-72-2x1-1.jpg?auto=webp&quality=75&crop=2:1&width=1024"
                                alt="package-place">
                            <div class="HotelName">
                                <h4>
                                    Comfortable Large Tent
                                </h4>
                            </div>
                            <div class="hotelDesccription">
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto, maiores.
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span> 2 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-person-hiking"></i></span> Date
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
                                <a href="{{ url('h') }}"><button class="package-view">
                                        Details
                                    </button>
                                </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://cdn.thewirecutter.com/wp-content/uploads/2020/04/carcampingtents-lowres-72-2x1-1.jpg?auto=webp&quality=75&crop=2:1&width=1024"
                                alt="package-place">
                            <div class="HotelName">
                                <h4>
                                    Comfortable Large Tent
                                </h4>
                            </div>
                            <div class="hotelDesccription">
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto, maiores.
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span> 2 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-person-hiking"></i></span> Date
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
                                <a href="{{ url('h') }}"><button class="package-view">
                                        Details
                                    </button>
                                </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->

                </div>
                <!--/.row-->
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section>
@endsection
