@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>


@foreach ($cms as $c)
    <h2 style="text-align: center; ">
        <span class="title-head">
            {{ __($c->title) }}
        </span>
    </h2>

    <p class="hotelDes">
        {{ __($c->description) }}
    </p>

    @endforeach

    <section id="pack" class="packages">
        <div class="container">
            <div class="packages-content">
                <div class="row">
                    @foreach ($a as $item )
                    <div class="col-md-4 col-sm-6">
                        <div class="single-package-item">
                            <img src="{{ url($item->images->first()->path)}}"
                                alt="{{ __($item->name)}}">
                            <div class="HotelName">
                                <h4>
                                   {{ __($item->name)}}
                                </h4>
                            </div>
                            <div class="hotelDesccription">
                                <p>
                                    {{ __($item->description)}}
                                </p>
                            </div>
                            <div class="pacdet" style="margin-left: -7%;">
                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span> {{ __($item->availability)}}
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-person-hiking"></i></span> {{ __($item->type)}} 
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> {{ __($item->one_day_price)}} 
                                </div>
                            </div>
                            <div class="rating">
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                                <span class=""><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="package-btn">
                                <a href="{{ url('/ac/'.$item->id) }}"><button class="package-view">
                                        {{ __('Details') }}
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    @endforeach
                </div>
            </div>
            <center>
                {{ $a->links() }}
            </center>
        </div>
    </section>
@endsection
