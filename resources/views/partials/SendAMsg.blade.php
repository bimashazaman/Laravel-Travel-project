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
                                    style="width: 100%; background-color: #284525;" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="RentForm">

                        <h2>
                            Send us a message
                        </h2>
                        <br>
                        <form>

                            <div class="form-group">

                                <input type="text" class="form-control" id="" placeholder="First Name*">
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control" id="inputAddress2" placeholder="Last Name*">
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control" id="inputAddress" placeholder="Email Address*">
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control" id="inputAddress2" placeholder="Telephone*">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">

                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Start Date*">
                                </div>
                                <div class="form-group col-md-6">

                                    <input type="text" class="form-control" id="inputPassword4" placeholder="End Date*">
                                </div>
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control" id="inputAddress2" placeholder="Car Type*">
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control" id="inputAddress2" placeholder="Messege">
                            </div>

                            <button type="submit" class="package-view">Submit</button>
                        </form>
                    </div>
                </div>

<br>
<br>
<br>

            </div>
        </div>

    </div>
@endsection
