@extends('layouts.master')
@section('content')

<div class="fullBanner">
    @include('partials.DefaultBanner')

    <center>
        <div class="search">
            <form action="{{ url('/search') }}" method="GET">
                <div class="search-box">
                    <input type="text" name="search" placeholder="Search" class="search-txt" style="width:50%; background-color:beige; border:none; padding:10px; border-radius:30px">
                    <button type="submit" class="search-btn" style="background-color:#284525; color:white; padding:10px; border-radius:30px; border:none">
                       Search
                    </button>
                </div>
            </form>
        </div>
    </center>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-content">
                   {{ count($tours) }} {{ __('results found') }}
                </div>
            </div>
        </div>

    </div>

    <section id="pack" class="packages">
        <div class="container">
            <!--/.gallery-header-->
            <div class="packages-content">
                <div class="row">
                    <div data-slick='{"slidesToShow": 4, "slidesToScroll": 4}' class="autoplay">
                        @foreach ($tours as $tour)
                            <div class="col-md-4 col-sm-6">

                                <div class="single-package-item">
                                    <img src="{{ url($tour->images->first()->path) }}" alt="{{ __($tour->name) }}">
                                    <div class="packageName">
                                        {{ __($tour->name) }}
                                    </div>
                                    <div>
                                        <h4 class="package-txt">
                                            <a href="#"
                                                style="margin-left: 15%;font-weight: 400; font-size: 1.5rem;">
                                                @foreach ($tour->types as $t)
                                                    <div style="margin-left: 15%;font-weight: 400; font-size: 1.5rem;">
                                                        {{ __($t->type_name) }}
                                                    </div>
                                                @endforeach
                                            </a>
                                        </h4>
                                        <p class="kki">
                                            {{ __($tour->description) }}
                                        </p>
                                    </div>
                                    <div class="pacdet">
                                        <div class="packageOffer">
                                            <span><i class="fa-regular fa-clock"></i></span>{{ __($tour->duration )}}
                                        </div>

                                        <div class="packageOffer">
                                            <span><i
                                                    class="fa-solid fa-calendar-check"></i></span>{{ __($tour->start_date) . ' - ' . __($tour->end_date) }}
                                        </div>



                                            <div class="packageOffer">
                                                <span><i class="fa-solid fa-dollar-sign"></i></span>{{ __($tour->AMD) }}
                                                {{ __('AMD') }}
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
                                        <a href="{{ url('/tour/search/'.$tour->id) }}"> <button class="package-view">
                                               {{__('Details')}}
                                            </button>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>



                </div>
                <!--/.row-->
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section>

</div>




@endsection
