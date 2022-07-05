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
            Contact us
        </h2>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint, nisi modi suscipit harum excepturi cum aut quia enim ratione rerum similique, libero eligendi molestias ab iusto aperiam repellendus rem repellat nihil deserunt at accusantium earum! Nihil iste magni suscipit soluta?
        </p>
        <div class="row">
            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/533769/pexels-photo-533769.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
            </div>
            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/21014/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
            </div>
        </div>
        <br>
        <form>

            <div class="form-group">

                <input type="text" class="form-control" id="" placeholder="First Name*">
            </div>
            <div class="form-group">

                <input type="text" class="form-control" id="inputAddress2" placeholder="Last Name*">
            </div>
            <div class="form-group">

                <input type="text" class="form-control" id="inputAddress2" placeholder="Last Name*">
            </div>
             <div class="form-group">
            <textarea name="" id="" cols="85" rows="7" style="background-color:#F7F6F4; border:none"></textarea>
            </div>



    <button type="submit" class="package-view" style="text-align: center">Send</button>
    </form>
    <img src="{{ asset('images/ci.png') }}" style="width: 100%; text-align:center; align-items:center" alt="">
       
    </div>
   
    <br>
    <br>
    <br>
@endsection
