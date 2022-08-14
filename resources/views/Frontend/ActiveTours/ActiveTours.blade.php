@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>


    <h2 style="text-align: center; padding-bottom:60px">
        Tours To Armenia
    </h2>

    @include('partials.sixCards')

    <section id="pack" class="packages">
        <div class="container">

            <!--/.gallery-header-->
            <div class="packages-content">
                <h2 style="text-align: center; ">
                    {{ __($category->name) }}
                </h2>
                <div class="overview">

                    @foreach ($cms as $c)
                        <p>
                            {{ __($c->description) }}
                        </p>
                    @endforeach
                </div>
                <br>
                <br>
                <br>
                <div class="row">

                    @foreach ($tour as $item)
                    {{-- {{ dd($item->images->first()->path) }} --}}
                        <div class="col-md-4 col-sm-6">
                           
                            <div class="single-package-item">
                                <img src="{{ url($item->images->first()->path) }}" alt="{{ __($item->name) }}">
                                <div class="packageName">

                                    {{ __($item->name) }}

                                </div>
                                <div class="package-txt" style="margin-left: -7%;">
                                    <h4>
                                        <a href="#" style="margin-left: 15%;font-weight: 400; font-size: 1.5rem;">
                                            @foreach ($item->types as $t)
                                                <div style="margin-left: 15%;font-weight: 400; font-size: 1.5rem;">
                                                    {{ __($t->type_name) }}
                                                </div>
                                            @endforeach
                                        </a>
                                    </h4>
                                    <p class="kki">
                                        {{ __($item->description) }}
                                    </p>
                                </div>
                                <div class="pacdet" style="margin-left: -7%;">
                                    <div class="packageOffer">
                                        <span><i class="fa-regular fa-clock"></i></span> {{ __($item->duration) }}
                                    </div>

                                    <div class="packageOffer">
                                        <span><i class="fa-solid fa-calendar-check"></i></span>
                                        {{__($item->start_date) . ' - ' . __($item->end_date) }}
                                    </div>

                                    <div class="packageOffer">
                                        <span><i class="fa-solid fa-dollar-sign"></i></span> {{ $item->AMD }} {{ __('AMD') }}
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
                                    <a href="{{ url('/getClassicTour/' . $item->id) }}">

                                        <button class="package-view">
                                            {{ __('Details') }}
                                        </button>
                                    </a>

                                </div>



                            </div>
                            <!--/.single-package-item-->

                        </div>
                    @endforeach




                </div>
                <center>
                    {{ $tour->links() }}
                </center>
                <!--/.row-->
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section>
@endsection
