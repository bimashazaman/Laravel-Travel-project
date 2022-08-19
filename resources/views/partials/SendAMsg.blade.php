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
                        Choose one of our tours or create your own trip!
                    </h2>
                    @if(session('success'))
<div class="alert alert-success">
    {{session('msg')}}
</div>
@elseif(session('fail'))
<div class="alert alert-danger">
    {{session('msg')}}
</div>
@endif
{{-- {{ dd($creator) }} --}}
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="col-sm-4 col-xs-12 padding-0 ">
                            <ul class="list-group ProgressBarItem" style="display: flex;">
                                <li class="list-group-item resMargin" style="background-color:whitw; border:none;">
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
                                <li class="list-group-item resMargin" style="background-color:white; border:none; ">
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
                                <li class="list-group-item resMargin" style="background-color:white; border:none;">
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
                        
                        <form action="/storeThree" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">

                                <input type="text" class="form-control" value="" placeholder="name" name="name">
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control" id="inputAddress2" name="email" placeholder="Email Address*">
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control" id="inputAddress" name="phone" placeholder="Telephone*">
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control" id="inputAddress2" placeholder="Your Country*" name="country">
                            </div>
                            
                           
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Your Message*" name="info"></textarea>
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" id="inputAddress2" placeholder="Discount coupon(optional)" name="coupon">
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
