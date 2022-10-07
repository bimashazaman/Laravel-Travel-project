@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>

    <div class="RentForm">
        <h2>
            {{ __('Call Us') }}
        </h2>

        <br>
        <form action="" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">

                <input type="text" class="form-control" id="" placeholder="{{ __('Name') }}*" name="Full Name">
            </div>
            <div class="form-group" style="display: flex">
                <input type="text" placeholder="+880" class="form-control" style="width: 85px; margin-right:5px">
                <input type="text" class="form-control" id="inputAddress2" placeholder="{{ __('Number') }}*"
                    name="email">
            </div>

           <div style="display: flex; margin-top:10px; margin-bottom:10px">
           <div style="margin-top: 8px">
             what is the preferred type for the call?
           </div>
            <div class="form-check" style="margin-left: 10px">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <img style="width: 40px; height:40px; border-radius:100%" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/2044px-WhatsApp.svg.png">
              </div>
              <div class="form-check" style="margin-left: 10px">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <img style="width: 40px; height:40px; border-radius:100%" src="https://tehnoblog.org/wp-content/uploads/2019/01/Viber-App-Logo-1600x1600.png">
              </div>

              <div class="form-check" style="margin-left: 10px">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <img style="width: 35px; height:35px; border-radius:100%" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Telegram_2019_Logo.svg/640px-Telegram_2019_Logo.svg.png">
              </div>

              <div class="form-check" style="margin-left: 10px">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <img style="width: 35px; height:35px; border-radius:100%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHobjUMqTXVw3Zt0IZ7yTQpqK3nwxZAUlO6g&usqp=CAU">
              </div>



           </div>

            {{-- <div class="form-group">
                <select name="" id="" class="form-control">
                    <option value="">
                       <div>
                         what is the preferred type for the call?
                       </div>
                    </option>
                    <option value="whatsApp">
                        <img style="width: 30px; height:30px; border-radius:100%" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/2044px-WhatsApp.svg.png">
                        whatsApp
                    </option>
                    <option value="Phone">
                        Phone
                    </option>
                    <option value="telegram">
                        telegram
                    </option>

                    <option value="Viber">
                        Viber
                    </option>



                </select>
            </div> --}}

            <div class="form-group">
                <textarea placeholder="{{ __('Write a message') }}" class="form-control" name="subject" id="" cols="85"
                    rows="7" style="background-color:#F7F6F4; border:none"></textarea>
            </div>



            <button type="submit" class="package-view" style="text-align: center">{{ __('Send') }}</button>
            <br>
            <br>
            <center>
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}
            </center>
        </form>
        <img src="{{ asset('images/ci.png') }}" style="width: 100%; text-align:center; align-items:center">

    </div>

    <br>
    <br>
    <br>
@endsection
