@extends('layouts.master')
@section('content')
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>

    <div class="RentForm">

        <h2>
           Book a hotel
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

    <br>
    <br>
    <br>
@endsection
