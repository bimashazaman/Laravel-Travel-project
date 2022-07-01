@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/armenia.css') }}" />
@endsection
@section('content')

<div class="main-heading">
    <h3 class="text-center heading">
        Things to see in Armenia
    </h3>
</div>

@include('partials.EightCards')

<section id="pack" class="packages">
    <div class="container">

        <!--/.gallery-header-->
        <div class="packages-content">
            <h3 class="text-center heading">
                Churches and monasteries
            </h3>
            <div class="row">

              @for ($i = 0; $i < 9; $i++)
                    
                <div class="col-md-4 col-sm-6">
                    <div class="single-package-item">
                        <img src="https://i.pinimg.com/550x/42/64/14/426414c97264657bebb33d11a0205c04.jpg" alt="package-place">
                        <div class="HotelName">
                            <h4>
                                Zvartnots
                            </h4>
                        </div>
                        <div class="hotelDesccription">
                            <p class="pl-20 pr-20">
                                7th century 7th century 7th century <br>
                                7th century 7th century
                            </p>
                        </div>
                        <div class="pacdet pt-0 pb-0 pl-10 pr-10">
                            <div class="packageOffer change-font">
                                <span class="pr-0"><i class="fa-solid fa-calendar"></i></span> 7th century
                            </div>

                            <div class="packageOffer change-font">
                                <span class="pr-0"><i class="fa-solid fa-location-dot"></i></span> Etchmiadzin
                            </div>

                            <div class="packageOffer change-font">
                                <span class="pr-0"><i class="fa-solid fa-clock-o"></i></span> 20 km/30 min
                            </div>
                        </div>
                        <div class="rating pr-0">
                            <span class="rating-pack">
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                            </span>
                        </div>
                        <div class="package-btn mt-30">
                            <a href="{{ url('h') }}">
                                <button class="package-view pt-10 pb-10 pl-20 pr-20">More</button>
                            </a>
                        </div>
                    </div>
                    <!--/.single-package-item-->
                </div>
                <!--/.col-->
              @endfor

            </div>
            <!--/.row-->

            <div class="paginate">
                <div class="pagination">
                    <a href="#"><</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">></a>
                </div>
            </div>

        </div>
        <!--/.packages-content-->
    </div>
    <!--/.container-->
</section>

@endsection
