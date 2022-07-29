@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>


    <h2 style="text-align: center; ">
        <span class="title-head">Rent Tour Accessories</span>
    </h2>

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

                <div class="row">


                    @foreach ($a as $item )
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="{{$item->images->first()->path}}"
                                alt="package-place">
                            <div class="HotelName">
                                <h4>
                                   {{$item->name}}
                                </h4>
                            </div>
                            <div class="hotelDesccription">
                                <p>
                                    {{$item->description}}
                                </p>
                            </div>
                            <div class="pacdet" style="margin-left: -7%;">
                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span> {{$item->availability}}
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-person-hiking"></i></span> {{ $item->type}} 
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span>From {{$item->one_day_price}} AMD
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
                                <a href="{{ url('/ac/'.$item->id) }}"><button class="package-view">
                                        Details
                                    </button>
                                </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
          
                    @endforeach

                 

                </div>
                <center>
                    {{ $a->links() }}
                </center>
                <!--/.row-->
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section>
@endsection
