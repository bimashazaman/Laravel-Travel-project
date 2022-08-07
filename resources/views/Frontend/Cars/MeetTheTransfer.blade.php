@extends('layouts.master')
@section('content')

<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>




    <div class="parent" align="center">
        <a href="{{ url('/cars') }}">
            <div class="div1">
                <i class="fa-solid fa-car-side"></i>
                <h4 style="margin: 10px;">
                    Rent a car
                </h4>
            </div>
        </a>
        <a href="{{ url('/driver')}}">
            <div class="div2">
                <i class="fa-solid fa-car-side"></i>
                <h4 style="margin: 10px">
                   Transfers With drivers
                </h4>
            </div>
        </a>
        <a href="{{ url('/MT') }}">
        <div class="div3" style="background-color: #FAEFD7; box-shadow:none; border:0.1px solid rgb(212, 211, 211)">
            <i class="fa-solid fa-car-side"></i>
            <h4 style="margin: 10px">
               Meet the transfer at airport
            </h4>
        </div>
    </a>

    </div>


@if (count($carAirports) > 0)

<div class="rentCar">
    <p class="headlineRent">
        Meet and transfer at the airport
    </p>

    @foreach ($carAirports as $carAirport)
        
    
    <p class="ha">
        {{$carAirport->details}}
    </p>

    <br>
    <br>

    <div class="container carMeet" style="align-items:center; text-align: center;">
        <div class="parent1">
            {{-- <div class="divv1">
                <img src="https://www.hyundaicanada.com/-/media/hyundai/feature/homepage-carousel/2023_palisade/img_001_mobile.jpg" alt="">
            </div>
            <div class="divv2">
                <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
            </div> --}}
            </div>
        <br>
        <br>
        <br>
        
        
           <div style="padding: 100px">
            {{ $carAirport->more_details }}
           </div>
       
        @endforeach

        <button class="package-view">
            <a href="{{ url('/BookACar/') }}" style="color: black">
            Send Request
        </a>
    </button>

    </div>
</div>

    
@endif

<br>
<br>
<br>

@endsection
