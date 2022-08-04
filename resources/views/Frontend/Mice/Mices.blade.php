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
                       {{ $c->title }}
                    </h2>
                    <p class="ha">
                        {{ $c->description }}
                    </p>
                </div>

                @endforeach
                <div class="row">

                    @foreach ($mices as $m )
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="{{$m->images->first()->path}}"
                                alt="package-place">
                            <div class="packageName">

                            </div>
                            <div class="Car-txt">
                                <h4>
                                    {{ $m->name }}
                                </h4>

                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span> {{ $m->available }}
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-person"></i></span> {{ $m->total_pax }}
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
                                    Details
                                </button>
                                </a>

                            </div>



                        </div>
                        <!--/.single-package-item-->

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
