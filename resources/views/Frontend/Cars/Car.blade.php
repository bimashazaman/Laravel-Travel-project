@extends('layouts.master')
@section('content')
   
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>

    <section class="tour-descriptions" style="padding: 30p;margin-top: -34px">
        <h1 style="text-align: center">
           {{ __($car->name) }}
        </h1>
        <div class="row">
            <div class="col-md-7">
                <div class="tour-descriptions-content">
                    <div class="tour-descriptions-content-inner">
                        <div class="tour-descriptions-content-inner-left">
                            <div class="tour-descriptions-content-inner-left-content">
                            </div><!-- /.tour-descriptions-content-inner-left-content -->
                        </div><!-- /.tour-descriptions-content-inner-left -->
                        <div class="tour-descriptions-content-inner-right">
                            <section class="" style="">
                                <div class="imgCcontainer">
                                    <div class="carousel imgC">
                                        @foreach ($car->images as $item)
                                            <input type="radio" name="slides" checked="checked"
                                                id="slide-{{ $item->id }}">
                                        @endforeach
                                        <ul class="carousel__slides">
                                            @foreach ($car->images as $item)
                                                <li class="carousel__slide" data-interval="1000">
                                                    <figure>
                                                        <div>
                                                            <img src="{{ asset($item->path) }}" alt="">
                                                        </div>

                                                    </figure>
                                                </li>
                                            @endforeach

                                        </ul>
                                        <ul class="carousel__thumbnails">
                                            @foreach ($car->images as $item)
                                                @if ($item->id != $car->images->first()->id)
                                                    <li data-interval="1000">
                                                        <label for="slide-{{ $item->id }}"><img
                                                                src="{{ asset($item->path) }}" alt="">
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
                        <div style="float: left"><i class="fa-solid fa-car"></i> {{ __('Type') }} </div>  <div>{{ __($car->car_type)  }}</div>
                    </div>
                    <div class="detailespackage">
                        <div><i class="fa-solid fa-person"></i> {{ __('Number of seats') }} </div> <div>{{ __($car->seats) }} {{ __('seats') }}</div>
                    </div>

                    <div class="detailespackage">
                        <div><i class="fa-solid fa-calendar-check"></i> {{ __('Year') }} </div>  <div>
                            {{ __($car->car_model) }}
                        </div>
                    </div>

                    <div class="detailespackage">
                        <div><i class="fa-solid fa-calendar"></i>{{ __('Free Cancellation') }}</div>  <div>{{ __($car->free_cancelation) }}</div>
                    </div>
                </div><!-- /.tour-descriptions-content-inner-left-content-title -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.tour-descriptions -->
    <!-- Tour description end -->

    <section class="carDes" style="padding: 70px">
        <h2>
            {{ __('Overview') }}
        </h2>
        <p>
            {{ __($car->overview) }}
        </p>
    </section>


    <section class="tableOfPrice">
        <div class="container">
            <h3 style="font-weight: 600">
                {{ __('The price') }}
            </h3>
            <br>
            <table class="table table-bordered tble" style="margin: auto">
                <thead>
                    <tr>
                        <th  style="text-align: center; margin-bottom:10px; background-color: #FFF1EA">{{ __('Daily Price') }}</th>
                        <th  style="text-align: center; margin-bottom:10px; background-color: #FFF1EA">{{ __('Weekly Price') }}</th>
                        <th  style="text-align: center; margin-bottom:10px; background-color: #FFF1EA">{{ __('Monthly Price') }}</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{ __($car->daily_price) }}
                        </td>
                        <td> 
                            {{ __($car->weekly_price) }}
                        </td>
                        <td>
                            {{ __($car->monthly_price) }}
                        </td>

                    </tr>


                </tbody>
            </table>

        </div>
        <a href="{{ url('/BookACar/'.$car->id) }}">
            <button class="package-view" style="text-align: center; align-items:center; margin:20px">
               {{ __('Book Now')}}
            </button>
        </a>
    </section>

<br>

   
@endsection















