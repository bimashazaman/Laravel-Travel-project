<!--packages start-->
@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>

    <section class="tour-descriptions" style="padding: 50px; margin-top:-50px">
        <h1 style="text-align: center">
           {{ __($mice->name) }}
        </h1>
        <div class="row">
            <div class="col-md-7">
                <div class="tour-descriptions-content">
                    <div class="tour-descriptions-content-inner">
                        <div class="tour-descriptions-content-inner-left">
                            <div class="tour-descriptions-content-inner-left-content">
                            </div>
                        </div>
                        <div class="tour-descriptions-content-inner-right">
                            <section class="" style="">
                                <div class="imgCcontainer">
                                    <div class="carousel imgC">
                                        @foreach ($mice->images as $item)
                                            <input type="radio" name="slides" checked="checked"
                                                id="slide-{{ $item->id }}">
                                        @endforeach
                                        <ul class="carousel__slides">
                                            @foreach ($mice->images as $item)
                                                <li class="carousel__slide" data-interval="1000">
                                                    <figure>
                                                        <div>
                                                            <img src="{{ asset($item->path) }}" alt="{{ __($mice->name) }}">
                                                        </div>
                                                    </figure>
                                                </li>
                                            @endforeach

                                        </ul>
                                        <ul class="carousel__thumbnails">

                                            @foreach ($mice->images as $item)
                                                @if ($item->id != $mice->images->first()->id)
                                                    <li data-interval="1000">
                                                        <label for="slide-{{ $item->id }}"><img
                                                                src="{{ asset($item->path) }}" alt="{{ __($mice->name) }}">
                                                        </label>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div><!-- /.tour-descriptions-content-inner-right -->
                    </div><!-- /.tour-descriptions-content-inner -->
                </div><!-- /.tour-descriptions-content -->
            </div><!-- /.col -->

            <div class="col-md-5">
                <div class="tour-descriptions-content-inner-left-content-title bb">
                    <h2>
                        {{ __('Key Points') }}
                    </h2>


                    <div class="detailespackage">
                        <div style="float: left"><i class="fa-solid fa-calendar-check"></i>{{ __('Best Travel Time') }}</div>
                        <div>
                            {{ __($mice->available) }}
                        </div>
                    </div>
                    <div class="detailespackage">
                        <div><i class="fa-solid fa-person"></i>{{ __('Max in the group') }}</div>
                        <div>
                            {{ __($mice->total_pax) }}
                        </div>
                    </div>

                    <div class="detailespackage">
                        <div><i class="fa-solid fa-folder"></i>{{ __('Products') }}</div>
                        <div>
                           {{ __($mice->Products) }}
                        </div>
                    </div>

                    <div class="detailespackage">
                        <div><i class="fa-solid fa-user-plus"></i>{{ __('Extra') }}</div>
                        <div>
                            {{ $mice->Extra }}
                        </div>
                    </div>
                    <div class="detailespackage">
                        <div><i class="fa-solid fa-syringe"></i>{{ __('Personal') }}</div>
                        <div>
                            {{ $mice->personal }}
                        </div>
                    </div>
                </div><!-- /.tour-descriptions-content-inner-left-content-title -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.tour-descriptions -->
    <!-- Tour description end -->

    <section class="carDes">
        <h2>
           {{ __('Overview')}}
        </h2>
        <p>
           {{ __($mice->description) }}
        </p>
    </section>


    <section class="tableOfPrice">
        <button class="package-view" style="text-align: center; align-items:center; margin:20px">
            <a href="{{ url('/BookMice/'.$mice->id) }}" style="color: black">
                {{ __('Book Now') }}
            </a>
        </button>
    </section>

    <br>
@endsection
