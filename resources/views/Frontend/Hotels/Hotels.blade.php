@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>


    <form action="" class="hotelForm">
        <div class="form-group htt">

            <select class="form-control" id="exampleFormControlSelect1">
                <option class="chooseO">{{ __('Choose Country') }}</option>
                @foreach ($destination as $d)
                    <option value="{{ $d->id }}">{{ __($d->name) }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group htt">

            <select class="form-control" id="exampleFormControlSelect1">
                <option class="chooseO">{{ __('Choose region') }}</option>
                @foreach ($region as $r)
                    <option value="{{ $r->id }}">{{ __($r->name) }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group htt">

            <select class="form-control" id="exampleFormControlSelect1">
                <option class="chooseO">{{ __('Choose Type') }}</option>
                @foreach ($hotelType as $h)
                    <option value="{{ $h->id }}">{{ __($h->name) }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group" style="padding-left:65px; color:rgb(179, 179, 179); font-size:17px; cursor:pointer">

            <i class="fa-solid fa-magnifying-glass"></i>
        </div>

    </form>

    <br>
    @foreach ($cms as $c)
        
   

    <p class="hotelDes">
        {{ __($c->description) }}
    </p>

    <section id="pack" class="packages">
        <div class="container">

            <!--/.gallery-header-->
            <div class="packages-content">
                <h2 style="text-align: center; padding-bottom:25px">
                    <span class="title-head">
                        {{ __($c->title) }}
                    </span>
                </h2>
                @endforeach
                <div class="row">

                    @foreach ($hotels as $hotel)
                        <div class="col-md-4 col-sm-6">

                            <div class="single-package-item">

                                <img src="{{ url($hotel->images->first()->path) }}" alt="package-place">
                                <div class="HotelName">
                                    <h4>
                                        {{ __($hotel->name) }}
                                    </h4>
                                </div>
                                <div class="hotelDesccription">
                                    <p>
                                        {{ __($hotel->description) }}
                                    </p>
                                </div>
                                <div class="pacdet" style="margin-left: -7%;">
                                    <div class="packageOffer">
                                        <span><i class="fa-solid fa-location-dot"></i></span>{{ __($hotel->address) }}
                                    </div>

                                    <div class="packageOffer">
                                        <span style="margin-left: -6px;"><i
                                                class="fa-solid fa-star"></i></span>{{ __($hotel->stars) }}
                                    </div>

                                    <div class="packageOffer">
                                        <span><i class="fa-solid fa-dollar-sign"></i></span>{{ $hotel->price }}
                                    </div>
                                </div>

                                <div class="package-btn">
                                    <a href="{{ url('/h/' . $hotel->id) }}"><button class="package-view">
                                            {{ __('Details') }}
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <!--/.single-package-item-->
                        </div>
                    @endforeach

                </div>
                <!--/.row-->
               <center>
                {{ $hotels->links() }}
               </center>
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section>
@endsection
