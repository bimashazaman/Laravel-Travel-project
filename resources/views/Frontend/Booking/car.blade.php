@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>


@if(session('success'))
<div class="alert alert-success">
    {{session('msg')}}
</div>
@elseif(session('fail'))
<div class="alert alert-danger">
    {{session('msg')}}
</div>
@endif



    <div class="RentForm">

        <h2>
            Rent {{ $car->name }}
        </h2>
        <p>
            {{ $car->car_model }}
        </p>
        <br>
        <form action="/BookACar/store/{{ $car->id }}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            
            <div class="form-group">

                <input type="text" class="form-control" id="" placeholder="Name*" name="name">
            </div>

            <div class="form-group">

                <input type="text" class="form-control" id="inputAddress" placeholder="Email Address*" name="email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="inputAddress2" placeholder="Telephone*" name="phone">
            </div>
            {{-- <div class="form-group">
                <input type="text" class="form-control" id="inputAddress2" placeholder="Address*" name="address">
            </div> --}}
            <div class="form-row">
                <div class="form-group col-md-6">

                    <input type="text" class="form-control" id="inputEmail4" placeholder="Start Date*" name="start_date">
                </div>
                <div class="form-group col-md-6">

                    <input type="text" class="form-control" id="inputPassword4" placeholder="End Date*" name="end_date">
                </div>
            </div>
           
        

            <div class="form-group">

                <input type="text" class="form-control" id="inputAddress2" placeholder="Write a message" name="subject">
            </div>
           
            {{-- <div class="form-group">

                <input type="text" class="form-control" id="inputAddress2" placeholder="Messege" name="message">
            </div> --}}

            <button type="submit" class="package-view">Submit</button>
            <br>
            <br>
            <center>
              {!! NoCaptcha::renderJs() !!}
                  {!! NoCaptcha::display() !!}
            </center>
        </form>
      
    </div>

    <br>
    <br>
    <br>
@endsection
