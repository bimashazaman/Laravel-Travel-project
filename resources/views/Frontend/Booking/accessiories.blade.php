@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>


    <div class="RentForm">

        <h2>
            Rent {{ $acc->name }}

        </h2>
        <br>
        {{-- {{ dd($room) }} --}}
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
            {{-- <div class="form-group ">
                <div class="">
                    <select class="form-control form-select" name="" style="border: none;background-color: #f7f6f4;">
                        @foreach($acc as $destination)
                        <option value="{{ $destination->id }}">{{$destination->price}}</option>
                        @endforeach
                    </select>
                </div>
            </div> --}}

       
            {{-- <div class="form-group">

                <input type="text" class="form-control" id="inputAddress2" placeholder="Car Type*">
            </div> --}}
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
