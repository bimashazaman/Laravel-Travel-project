@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>







    <div class="container" style="padding: 30px">
        <h2 style="text-align: center">
            Reviews
        </h2>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus reiciendis sit labore minus laborum eos, ipsum
            illo voluptates veritatis nam soluta odit, doloremque beatae fugit placeat? Placeat nesciunt deserunt cupiditate
            recusandae unde vitae necessitatibus sed, quia illum nobis. Illum modi labore quis dignissimos earum architecto
            repellendus aspernatur, provident in nobis neque laudantium hic corporis error consequuntur quam vel officia
            recusandae laborum esse vero quaerat odio! Dolorum laboriosam cum beatae non?
        </p>
        <br>

        <div class="row" style="padding: 40px">
            <div class="col-md-7">
                <div class="row" style="margin-bottom: 40px">
                    <div>
                        <div style="display: flex">
                            <img src="{{ asset('https://bimasha.com/assets/images/about-banner.png') }}"
                                style="border-radius: 50%; width:15%; margin-right: 20px" alt="">
                            <div>
                                <span>Name</span>
                                <div>
                                    Date
                                </div>
                            </div>
                            <div style="margin-left: 20px">

                                <h5 style="font-weight: 600">
                                    Title
                                </h5>

                                <p style="color: black; margin-top:10px">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, aliquid! Lorem ipsum
                                    dolor sit amet.
                                </p>
                            </div>


                        </div>

                        <div style="float: right">
                            <button class="package-view">
                                Show more
                            </button>
                        </div>
                    </div>

                </div>
                <div class="row" style="margin-bottom: 40px">
                    <div>
                        <div style="display: flex">
                            <img src="{{ asset('https://bimasha.com/assets/images/about-banner.png') }}"
                                style="border-radius: 50%; width:15%; margin-right: 20px" alt="">
                            <div>
                                <span>Name</span>
                                <div>
                                    Date
                                </div>
                            </div>
                            <div style="margin-left: 20px">

                                <h5 style="font-weight: 600">
                                    Title
                                </h5>

                                <p style="color: black; margin-top:10px">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, aliquid! Lorem ipsum
                                    dolor sit amet.
                                </p>
                            </div>


                        </div>

                        <div style="float: right">
                            <button class="package-view">
                                Show more
                            </button>
                        </div>
                    </div>

                </div>

                <div class="row" style="margin-bottom: 40px">
                    <div>
                        <div style="display: flex">
                            <img src="{{ asset('https://bimasha.com/assets/images/about-banner.png') }}"
                                style="border-radius: 50%; width:15%; margin-right: 20px" alt="">
                            <div>
                                <span>Name</span>
                                <div>
                                    Date
                                </div>
                            </div>
                            <div style="margin-left: 20px">

                                <h5 style="font-weight: 600">
                                    Title
                                </h5>

                                <p style="color: black; margin-top:10px">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, aliquid! Lorem ipsum
                                    dolor sit amet.
                                </p>
                            </div>


                        </div>

                        <div style="float: right">
                            <button class="package-view">
                                Show more
                            </button>
                        </div>
                    </div>

                </div>

                <div class="WR">
                    <a class="WR" href="{{ url('/AddReview') }}" style="text-decoration:underline;">Write Review</a> <i
                        class="fa-solid fa-pen-clip" style="text-decoration: none"></i>
                </div>


            </div>
            <div class="col-md-5"></div>
        </div>
    </div>
@endsection
