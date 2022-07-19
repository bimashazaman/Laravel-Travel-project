@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>



    <form action="" class="hotelForm">
        <div class="form-group htt">

            <select class="form-control" id="exampleFormControlSelect1">
                <option class="chooseO">Type</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group htt">

            <select class="form-control" id="exampleFormControlSelect1">
                <option class="chooseO">Date</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group htt">

            <select class="form-control" id="exampleFormControlSelect1">
                <option class="chooseO">Region</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
    </form>
    <section id="pack" class="packages">
        <div class="container">

            <!--/.gallery-header-->
            <div class="packages-content">
                <h2 style="text-align: center; padding-bottom:60px">
                    Events in Armenia
                </h2>
                <div class="row">

                    @foreach ($tour_events as $t )
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://media.istockphoto.com/photos/man-speaking-at-a-business-conference-picture-id499517325?b=1&k=20&m=499517325&s=170667a&w=0&h=jMCaZov25c5VR1CP-4axUdJPEKSpBWbzzWAubQS3-oo="
                                alt="package-place">
                            <div class="packageName">

                            </div>
                            <div class="package-txt">
                                <h4 style="text-align: center; font-weight: 700;">
                                    {{ $t->name }}
                                </h4>

                            </div>
                            <div class="pacdet" style="margin-left: -9%;">
                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-location-dot"></i></span> 
                                    {{ $t->location }}
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-calendar"></i></span> 
                                    {{ $t->time }}
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-newspaper"></i></span> 
                                    {{ $t->type }}
                                </div>
                            </div>

                            <div class="package-btn">
                                <a href="{{ url('/pageSee') }}">
                                    <button class="package-view">
                                        Details
                                    </button>

                                </a>

                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->
                    @endforeach
              


                </div>
                <!--/.row-->
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section>
@endsection
