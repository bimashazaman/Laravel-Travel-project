@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>


    <div class="RentForm">

        <h2>
           Book {{ $tour->name }}
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
            <div class="form-group">
                <input type="text" class="form-control" id="inputAddress2" placeholder="Address*">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">

                    <input type="text" class="form-control" id="inputEmail4" placeholder="Start Date*">
                </div>
                <div class="form-group col-md-6">

                    <input type="text" class="form-control" id="inputPassword4" placeholder="End Date*">
                </div>
            </div>

            <div class="form-group ">
                {{-- <label class="col-form-label col-md-2">Country</label> --}}
                <div class="">
                    <select class="form-control form-select" name="destination_id" style="border: none;background-color: #f7f6f4;">
                       
                        @foreach($destinations as $destination)
                        <option value="{{ $destination->id }}">{{$destination->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="">
                <select class="form-control form-select" name="home_tour_id" style="border: none; background-color: #f7f6f4; ">
                                
                    @foreach($type as $d)
                    <option value="{{ $d->id }}">{{$d->type_name}}</option>

                    
                    @endforeach
                </select>
                </div>
            </div>
           
            <div class="form-group">

                <input type="text" class="form-control" id="inputAddress2" placeholder="Messege">
            </div>

            <button type="submit" class="package-view">Submit</button>
        </form>
    </div>

    <br>
    <br>
    <br>
@endsection
