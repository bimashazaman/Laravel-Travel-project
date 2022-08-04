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
                    {{ $category->name }}
                </h2>
                <div class="overview">

                    @foreach ($cms as $c)
                        
                    
                    <p>
                        {{ $c->description }}
                    </p>

                    @endforeach
                </div>
                <br>
                <br>
                <br>
                <div class="row">

                    @foreach ($tour as $item)
                        <div class="col-md-4 col-sm-6">
                            {{-- <h3 style="text-align: center">
                            {{$item->name}}
                        </h3> --}}
                            <div class="single-package-item">

                                {{-- {{ $item->images->json() }}
                                 --}}
                                
                                {{-- //show the image from images/tours
                                <img src="{{ $item->images }}" alt=""> --}}
                                {{-- {{ $item->images }} --}}


                                <img src="{{$item->images->first()->path}}" alt="">
                               


                                <div class="packageName">

                                    {{ $item->name }}

                                </div>
                                <div class="package-txt" style="margin-left: -7%;">
                                    <h4>
                                        <a href="#" style="margin-left: 15%;font-weight: 400; font-size: 1.5rem;">
                                            @foreach ($item->types as $t)
                                            <div style="margin-left: 15%;font-weight: 400; font-size: 1.5rem;">
                                                {{ $t->type_name }}
                                            </div>
                                        @endforeach
                                        </a>
                                    </h4>
                                    <p class="kki">
                                        {{ $item->description }}
                                    </p>
                                </div>
                                <div class="pacdet" style="margin-left: -7%;">
                                    <div class="packageOffer">
                                        <span><i class="fa-regular fa-clock"></i></span> {{ $item->duration }}
                                    </div>

                                    <div class="packageOffer">
                                        <span><i class="fa-solid fa-calendar-check"></i></span>
                                        {{ //just date and month
                                        
                                            $item->start_date . ' - ' . $item->end_date }}
                                    </div>

                                    <div class="packageOffer">
                                        <span><i class="fa-solid fa-dollar-sign"></i></span> {{ $item->price }}
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
                                    <a href="{{ url('/getClassicTour/'.$item->id) }}">
                                        
                                        <button class="package-view">
                                            Details
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
