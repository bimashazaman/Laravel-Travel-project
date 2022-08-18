@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="requestTour__title">
                    <h2 style="text-align: center">
                        {{ __('Choose one of our tours or create your own trip!') }}
                    </h2>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="col-sm-4 col-xs-12 padding-0 ">
                            <ul class="list-group ProgressBarItem" style="display: flex;">
                                <li class="list-group-item resMargin" style="background-color: white; border:none;">
                                    Information about the group
                                </li>
                            </ul>
                            <div class="progress Progress-border ProgressBarSize">
                                <div class="progress-bar bg-success" role="progressbar"
                                    style="width: 100%; background-color: #284525;" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 padding-0 ">
                            <ul class="list-group ProgressBarItem" style="display: flex;">
                                <li class="list-group-item resMargin" style="background-color:whitw; border:none; ">
                                    Select the destination
                                </li>
                            </ul>
                            <div class="progress Progress-border ProgressBarSize">
                                <div class="progress-bar bg-success " role="progressbar"
                                    style="width: 100%; background-color: #284525;" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 padding-0 ">
                            <ul class="list-group ProgressBarItem" style="display: flex;">
                                <li class="list-group-item resMargin" style="background-color: white; border:none;">
                                   Submit for a quote
                                </li>
                            </ul>
                            <div class="progress Progress-border ProgressBarSize">
                                <div class="progress-bar bg-success " role="progressbar"
                                    style="width: 0%; background-color: #284525;" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-9">
                <div class="mapouter" >
                    <div class="gmap_canvas"><iframe width="796" height="420" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                        <style>
                            .mapouter {
                                position: relative;
                            
                            }
                        </style>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 80%;
                                width: 100%;
                            }
                        </style>
                    </div>
                </div>
                <br>
                <br>
                
                {{-- {{ dd($creator) }} --}}
                @if ($creator->creator_destinations_id == "Yerevan"  && $creator->car)
                @foreach ($yerevan as $y)
                
                <div class="row"  style="font-weight:600; display:flex">
                    <div class="col-md-2">
                        {{ $y->name }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameTwo }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameThree }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameFour }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameFive }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameSix }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameSeven }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameEight }}
                    </div>
                </div>
                
                <br>               
                @endforeach
                @endif


                @if ($creator->creator_destinations_id == "Dilijan"  && $creator->car)
                @foreach ($dilijan as $y)
                
                <div class="row"  style="font-weight:600; display:flex">
                    <div class="col-md-2">
                        {{ $y->name }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameTwo }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameThree }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameFour }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameFive }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameSix }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameSeven }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameEight }}
                    </div>
                </div>
                
                <br>               
                @endforeach
                @endif

                @if ($creator->creator_destinations_id == "Gyumri" && $creator->car)
                @foreach ($gyumri as $y)
                
                <div class="row"  style="font-weight:600; display:flex">
                    <div class="col-md-2">
                        {{ $y->name }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameTwo }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameThree }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameFour }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameFive }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameSix }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameSeven }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameEight }}
                    </div>
                </div>
                
                <br>               
                @endforeach
                @endif

                @if ($creator->creator_destinations_id == "Jermuk"  && $creator->car)
                @foreach ($jermuk as $y)
                
                <div class="row"  style="font-weight:600; display:flex">
                    <div class="col-md-2">
                        {{ $y->name }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameTwo }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameThree }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameFour }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameFive }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameSix }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameSeven }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameEight }}
                    </div>
                </div>
                
                <br>               
                @endforeach
                @endif

                @if ($creator->creator_destinations_id == "Stepanakert"  && $creator->car)
                @foreach ($stepanakert as $y)
                
                <div class="row"  style="font-weight:600; display:flex">
                    <div class="col-md-2">
                        {{ $y->name }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameTwo }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameThree }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameFour }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameFive }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameSix }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameSeven }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameEight }}
                    </div>
                </div>
                
                <br>               
                @endforeach
                @endif

                @if ($creator->creator_destinations_id == "Tbilisi"  && $creator->car)
                @foreach ($tbilisi as $y)
                
                <div class="row"  style="font-weight:600; display:flex">
                    <div class="col-md-2">
                        {{ $y->name }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameTwo }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameThree }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameFour }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameFive }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameSix }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameSeven }}
                    </div>
                    <div class="col-md-2">
                        {{ $y->nameEight }}
                    </div>
                </div>
                
                <br>               
                @endforeach
                @endif
                
                
                <div class="row">
                    <center style="font-weight:600">
                        You can add one of your Tour here <span style="color:Blue"> Activities</span>
                    </center>
                </div>
                <div class="row" style="margin-top: 40px; margin-bottom:30px">
                    <center>
                        <a href="{{ url('/ThirdStep') }}">
                            <button class="package-view">
                                Send a quote
                            </button>
                        </a>
                    </center>
                </div>
            </div>
            <div class="col-md-3 formReqSec">
                <div class="row" style="margin-bottom: 10px">
                    <span style="margin-right: 10px; font-size:1.7rem">
                        <i class="fa-solid fa-user"></i>
                    </span>
                    <span style="color: black">
                        {{ $creator->name }}
                    </span>
                </div>
                <div class="row" style="margin-bottom: 10px">
                    <span style="margin-right: 10px; font-size:1.7rem">
                        <i class="fa-solid fa-calendar"></i>
                    </span>
                    <span style="color: black">
                        {{ $creator->start_date }}
                    </span>
                </div>
               
                <div class="row" style="margin-bottom: 10px">
                    <span style="margin-right: 10px; font-size:1.7rem">
                        <i class="fa-solid fa-car"></i>
                    </span>
                    <span style="color: black">
                        {{ $creator->car }} 
                        {{ $creator->motorcycle }}
                        {{ $creator->bike }}
                        {{ $creator->hiking }}
                    </span>
                </div>
              
               
                {{-- <div class="row" style="margin-bottom: 10px">
                    <span style="margin-right: 10px; font-size:1.7rem">
                        <i class="fa-solid fa-motorcycle"></i>
                    </span>
                    <span style="color: black">
                        {{ $creator->motorcycle }}
                    </span>
                </div>

                <div class="row" style="margin-bottom: 10px">
                    <span style="margin-right: 10px; font-size:1.7rem">
                        <i class="fa-solid fa-person-biking"></i>
                    </span>
                    <span style="color: black">
                        {{ $creator->bike }}
                    </span>
                </div>
                <div class="row" style="margin-bottom: 10px">
                    <span style="margin-right: 10px; font-size:1.7rem">
                        <i class="fa-solid fa-person-hiking"></i>
                    </span>
                    <span style="color: black">
                        {{ $creator->hiking }}
                    </span>
                </div> --}}
                <div class="row" style="margin-bottom: 10px">
                    <span style="margin-right: 10px; font-size:1.7rem">
                        <i class="fa-solid fa-location-dot"></i>
                    </span>
                    <span style="color: black">
                        {{ $creator->creator_destinations_id }}
                    </span>
                </div>

                <div class="row" style="margin-bottom: 10px">
                    <span style="margin-right: 10px; font-size:1.7rem">
                        <i class="fa-solid fa-location-dot"></i>
                    </span>
                    <span style="color: black">
                        {{ $creator->meals }}
                    </span>
                </div>

                <img src="{{ asset('images/track.PNG') }}" style="height: 32%">

            </div>
        </div>
    </div>
@endsection
