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
           Book {{ $tour->name }} 
          
           
            
        </h2>
        <p> With Guaranteed Departure</p>
        <br>
       
        {{-- <p>
            ({{ $departure->price }})
        </p> --}}
        <br>
        <form action="/BookATour/store/{{ $tour->id }}/departure/{{ $departure->id }}" method="POST" enctype="multipart/form-data">
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
            <div class="form-group">
                <input type="text" class="form-control" id="inputAddress2" placeholder="Address*" name="address">
            </div>

            <div class="form-group">

                <input type="text" class="form-control" id="inputAddress2" placeholder="Number of person" name="persons">
            </div>
            

            
           
            <div class="form-group">

                <input type="text" class="form-control" id="inputAddress2" placeholder="Message" name="subject">
            </div>
           
           

            <button type="submit" class="package-view">Submit</button>
        </form>
    </div>

    <br>
    <br>
    <br>
@endsection
