@extends('layouts.master')
@section('content')

<br>
<br><br> <br> <br> <br><br><br>
<br> <br> <br><br><br>
<br><br> <br> <br> 


{{-- <div class="parentReqSecond">
    <div class="div1ReqSecond"> 
        <div class="mapouter"><div class="gmap_canvas"><iframe width="796" height="420" id="gmap_canvas" src="https://maps.google.com/maps?q=&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:420px;width:796px;}</style><a href="https://www.embedgooglemap.net">google maps html code</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:420px;width:796px;}</style></div></div>
    </div>
    <div class="div2ReqSecond">
        
    </div>
    </div> --}}

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="requestTour__title">
                    <h2 style="text-align: center">
                        Choose one of our tours or create your own trip!
                    </h2>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="col-sm-4 col-xs-12 padding-0 ">
                            <ul class="list-group ProgressBarItem" style="display: flex;">
                                <li class="list-group-item resMargin" style="background-color:#F7F6F4; border:none;">
                                    <i>Information about the group</i>
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
                                <li class="list-group-item resMargin" style="background-color:#F7F6F4; border:none; ">
                                    <i>Select the destination</i>
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
                                <li class="list-group-item resMargin" style="background-color:#F7F6F4; border:none;">
                                    <i>Submit for a quote</i>
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
            <div class="col-md-9 col-xs-9">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="796" height="420" id="gmap_canvas" src="https://maps.google.com/maps?q=&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:420px;width:796px;}</style><a href="https://www.embedgooglemap.net">google maps html code</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:420px;width:796px;}</style></div></div>
                <div class="row" style="margin: 30px; font-weight:600">
                    <div class="col-md-3">Dhaka</div>
                    <div class="col-md-3">Dhaka</div>
                    <div class="col-md-3">Dhaka</div>
                    <div class="col-md-3">Dhaka</div>
                    
                </div>
                <div class="row" style="margin: 30px; font-weight:600">
                    
                    <div class="col-md-3">Dhaka</div>
                    <div class="col-md-3">Dhaka</div>
                    <div class="col-md-3">Dhaka</div>
                    <div class="col-md-3">Dhaka</div>
                </div>
                <div class="row">
                    <center style="font-weight:600">
                        You can add one of your Tour here  <span style="color:Blue"> Activities</span>
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
            <div class="col-md-3 col-xs-3 formReqSec">
                <div class="row" style="margin-bottom: 10px">
                    <span style="margin-right: 10px; font-size:1.7rem">
                        <i class="fa-solid fa-user"></i>
                    </span>
                    <span style="color: black">
                        Bimasha Zaman
                    </span>
                </div>
                <div class="row" style="margin-bottom: 10px">
                    <span style="margin-right: 10px; font-size:1.7rem">
                        <i class="fa-solid fa-calendar"></i>
                    </span>
                    <span style="color: black">
                        12/12/2019
                    </span>
                </div>
                <div class="row" style="margin-bottom: 10px">
                    <span style="margin-right: 10px; font-size:1.7rem">
                        <i class="fa-solid fa-car"></i>
                    </span>
                    <span style="color: black">
                        By Car
                    </span>
                </div>
                <div class="row" style="margin-bottom: 10px">
                    <span style="margin-right: 10px; font-size:1.7rem">
                        <i class="fa-solid fa-location-dot"></i>
                    </span>
                    <span style="color: black">
                        Dhaka, Bangladesh
                    </span>
                </div>

            </div>
        </div>
    </div>

@endsection