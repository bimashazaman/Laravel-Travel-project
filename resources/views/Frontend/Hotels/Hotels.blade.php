@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>


    <form action="" class="hotelForm">
        <div class="form-group htt">

            <select class="form-control" id="exampleFormControlSelect1">
                <option class="chooseO">Choose Country</option>
                @foreach ($destination as $d)
                    <option value="{{ $d->id }}">{{ $d->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group htt">

            <select class="form-control" id="exampleFormControlSelect1">
                <option class="chooseO">Choose region</option>
                @foreach ($region as $r)
                    <option value="{{ $r->id }}">{{ $r->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group htt">

            <select class="form-control" id="exampleFormControlSelect1">
                <option class="chooseO">Choose Type</option>
                @foreach ($hotelType as $h)
                    <option value="{{ $h->id }}">{{ $h->name }}</option>
                @endforeach
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

                                <img src="{{ $hotel->images->first()->path }}" alt="package-place">
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
                                        <span><i class="fa-solid fa-location-dot"></i></span>{{ $hotel->address }}
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
               <center>
                {{ $hotels->links() }}
               </center>
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section>
@endsection
