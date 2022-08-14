@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>

    <section id="pack" class="packages">
        <div class="container">
            <div class="packages-content">
                @foreach ($cms as $c)     
                <div class="RentCar">
                    <h2>
                       {{ __($c->title) }}
                    </h2>
                    <p class="ha">
                        {{ __($c->description) }}
                    </p>
                </div>

                @endforeach
                <div class="row">

                    @foreach ($mices as $m )
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">
                            <img src="{{url($m->images->first()->path)}}"
                                alt="{{ __($m->name) }}">
                            <div class="packageName">
                            </div>
                            <div class="Car-txt">
                                <h4>
                                    {{ __($m->name) }}
                                </h4>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span> {{ __($m->available) }}
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-person"></i></span> {{ __($m->total_pax) }}
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-syringe"></i></span> {{ $m->personal }}
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
                                <a href="{{ url('/mices/'.$m->id) }}"><button class="package-view">
                                    {{ __('Details') }}
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--/.col-->
                    @endforeach
                </div>
                <center>
                    {{ $mices->links() }}
                </center>
                <!--/.row-->
            </div>
        </div>
    </section>
@endsection
