@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>


    <form action="" class="hotelForm">
        <div class="form-group htt">

            <select class="form-control" id="exampleFormControlSelect1">
                <option class="chooseO">Choose Country</option>
                <option>Armenia</option>
                <option>Georgia</option>
                <option>Iran</option>
            </select>
        </div>
        <div class="form-group htt">

            <select class="form-control" id="exampleFormControlSelect1">
                <option class="chooseO">Choose region</option>
                <option>
                    Yerevan
                </option>
                <option>
                    Gyumri
                </option>
                <option>
                    Diijan
                </option>
                <option>Tsakhkadzor</option>
                <option>Jermuk</option>
                <option>Lori</option>
                <option>Sevan</option>
                <option>Goris</option>
                <option>Sisian</option>
                <option>Areni</option>
                <option>Kapan</option>
                <option>Ashtarak</option>
                <option>Garni</option>
                <option>Aghveran</option>
                <option>Arzni</option>
                <option>Ijevan</option>
                <option>Meghri</option>
                <option>Stepanakert</option>
            </select>
        </div>

        <div class="form-group htt">

            <select class="form-control" id="exampleFormControlSelect1">
                <option class="chooseO">Choose Type</option>
                <option>
                    Hotel
                </option>
                <option>
                    Hostel
                </option>
                <option>
                    Camp
                </option>
                <option>
                    Bungalo
                </option>
            </select>
        </div>

        <div class="form-group" style="padding-left:65px; color:rgb(179, 179, 179); font-size:17px; cursor:pointer">

            <i class="fa-solid fa-magnifying-glass"></i>
        </div>

    </form>

    <br>

    <p class="hotelDes">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum sequi reprehenderit, nam laborum architecto
        accusantium temporibus deleniti quam, nisi sint tenetur nihil ipsam maiores minus eius assumenda officia debitis?
        Autem hic quae aliquam consequatur maxime dolorum quisquam illum dignissimos iste eaque sit architecto laudantium
        magnam sint error, dolorem aperiam quos voluptates sequi dolore. Eveniet aspernatur at excepturi ad deleniti
        asperiores quasi beatae totam officiis accusamus. Eos reiciendis molestias vero repellat atque! Cupiditate,
        doloremque nostrum aperiam in dolore provident praesentium voluptatum hic voluptas cum quis animi harum deserunt
        unde distinctio aut.
    </p>

    <section id="pack" class="packages">
        <div class="container">

            <!--/.gallery-header-->
            <div class="packages-content">
                <h2 style="text-align: center; padding-bottom:25px">
                    <span class="title-head">Most populer hotels</span>
                </h2>
                <div class="row">

                    @foreach ($hotels as $hotel)
                        <div class="col-md-4 col-sm-6">

                            <div class="single-package-item">

                                <img src="https://images.unsplash.com/photo-1625244724120-1fd1d34d00f6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                    alt="package-place">
                                <div class="HotelName">
                                    <h4>
                                        {{ $hotel->name }}
                                    </h4>
                                </div>
                                <div class="hotelDesccription">
                                    <p>
                                        {{ $hotel->description }}
                                    </p>
                                </div>
                                <div class="pacdet" style="margin-left: -7%;">
                                    <div class="packageOffer">
                                        <span><i class="fa-solid fa-location-dot"></i></span>{{ $hotel->location }}
                                    </div>

                                    <div class="packageOffer">
                                        <span style="margin-left: -6px;"><i
                                                class="fa-solid fa-star"></i></span>{{ $hotel->stars }}
                                    </div>

                                    <div class="packageOffer">
                                        <span><i class="fa-solid fa-dollar-sign"></i></span>{{ $hotel->price }}
                                    </div>
                                </div>

                                <div class="package-btn">
                                    <a href="{{ url('/h/' . $hotel->id) }}"><button class="package-view">
                                            Details
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <!--/.single-package-item-->
                        </div>
                    @endforeach

                </div>
                <!--/.row-->
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section>
@endsection
