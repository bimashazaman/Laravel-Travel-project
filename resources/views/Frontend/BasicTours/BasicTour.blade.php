@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>


    <center>
        <h2>
            {{ $tour->name }}
        </h2>
    </center>

    <section class="container-fluid" style="">

        <div class="">
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
                                    <div class="carousel imgC"  data-ride="carousel">
                                        @foreach ($tour->images as $item)
                                            <input type="radio" name="slides" checked="checked"
                                                id="slide-{{ $item->id }}">
                                        @endforeach
                                        <ul class="carousel__slides">
                                            @foreach ($tour->images as $item)
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

                                            @foreach ($tour->images as $item)
                                                {{-- @if ($item->id != $tour->images->first()->id) --}}
                                                    <li data-interval="1000">
                                                        <label for="slide-{{ $item->id }}"><img
                                                                src="{{ asset($item->path) }}" alt="">
                                                        </label>
                                                    </li>
                                                {{-- @endif --}}
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </section>

                            <div class="uldescription">
                                <h2>Highlights</h2>
                                <br>
                                <ul style="list-style: none;">
                                    @foreach ($tour->highlights as $h)
                                        <li style="font-weight: 500; font-size:17px">
                                            {{ $h->name }}
                                        </li>
                                    @endforeach


                                </ul>
                            </div>




                        </div><!-- /.tour-descriptions-content-inner-right -->
                    </div><!-- /.tour-descriptions-content-inner -->
                </div><!-- /.tour-descriptions-content -->
            </div><!-- /.col -->

            <div class="col-md-5">

                <div class="tour-descriptions-content-inner-left-content-title bb">

                    <!--Google map-->
                    <div id="map-container-google-1" class="z-depth-1-half map-container"
                        style=" width: 85%; height: 455px;">
                        {{-- <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" style="border:0" allowfullscreen></iframe> --}}

                        <img src="https://www.google.com/maps/d/thumbnail?mid=1Xj7FvDEIi701cgUemkAj9Vk8Voo&hl=en_US" alt="" style="    height: 455px">





                    </div><!-- /.tour-descriptions-content-inner-left-content-title -->
                </div><!-- /.row -->
                <div class="tour-descriptions-content-inner-left-content-title bb">
                    <h2>
                        Key Points
                    </h2>


                    <div class="detailespackage">
                        <div style="float: left"><i class="fa-solid fa-clock"></i>Duration</div>
                        <div>
                            <span>{{ $tour->duration }}</span>
                        </div>
                    </div>
                    <div class="detailespackage">
                        <div><i class="fa-solid fa-repeat"></i>
                            Date
                        </div>
                        <div>
                            <span>{{ $tour->start_date }} - {{ $tour->end_date }} </span>
                        </div>
                    </div>

                    <div class="detailespackage">
                        <div><i class="fa-solid fa-calendar-check"></i>Type</div>
                        <div>
                            @foreach ($tour->types as $t )
                            {{ $t->type_name . ' ' 

                         }}

                        
                        @endforeach
                        </div>
                    </div>

                    <div class="detailespackage">
                        <div><i class="fa-solid fa-dollar-sign"></i>
                            Price
                        </div>
                        <div>
                            <span>{{ $tour->price }}</span>
                        </div>
                    </div>


                </div><!-- /.tour-descriptions-content-inner-left-content-title -->


            </div><!-- /.container -->
    </section><!-- /.tour-descriptions -->
    <!-- Tour description end -->

    <div class="container-fluid">
        <div class="col-md-12 col-xs-12">
            <div class="blah">
                <h3 style="color:white; padding-top:3%">
                    Itenanary
                </h3>
                <p style="color:white; font-size: 1.4rem;  font-weight: 300; padding-bottom:3%">
                    {{ $tour->Itenanary }}

                </p>

            </div>
        </div>

    </div>



    <div class="container-fluid" style="background-color: #EEF0ED; padding-left: 40px; padding-right:40px">
        <div class="col-md-6">
            <h3 style="margin-left: 40px; margin-top: 10px">
                Tour Program
            </h3>
            <br>

            <div class="" style="display: flex">

                <img src="{{ asset('images/timeline.png') }}" alt="" style="margin-left: 19px;">

                <div>
                    @foreach ($tour->program as $p)
                        <h3>
                            {{ $p->day }}
                        </h3>
                        <p style="color: black">
                            {{ $p->fromTo }}
                        </p>
                        <div class="single-row">
                            <input name="collapsable" type="radio" id="col-{{ $p->id }}" class="opener" />
                            <label for="col-{{ $p->id }}">
                                <div class="content">
                                    <p style="width: 70%; font-weight:500; color:black; font-size:1.2rem">
                                        {{ $p->description }}
                                    </p>

                                    <br>
                                    <div style="display: flex" style="font-size: 1.5rem;font-weight:500 ">
                                        <span style="font-weight:600"><i class="fa-solid fa-road"
                                                style="font-size: 1.5rem; color:#e5a686; margin-left:15px;"></i>
                                            {{ $p->distance }}</span>
                                        <span style="font-weight:600"><i class="fa-regular fa-clock"
                                                style="font-size: 1.5rem; color:#e5a686; margin-left:15px;"></i>
                                            {{ $p->duration }}</span>
                                        <span style="font-weight:600"><i class="fa-solid fa-burger"
                                                style="font-size: 1.5rem; color:#e5a686; margin-left:15px;"></i>
                                            {{ $p->food }}</span>
                                        <span style="font-weight:600"><i class="fa-regular fa-bed"
                                                style="font-size: 1.5rem; color:#e5a686; margin-left:15px;"></i>
                                            {{ $p->location }}</span>
                                    </div>
                                </div>

                                <span class="intro" style="width: 70%;"><img src="{{ asset('images/drop.png') }}"
                                        class="arrow" alt=""></span>


                            </label>
                        </div>
                    @endforeach
                    <br>

                </div>




            </div>

        </div>
        <div class="col-md-6">
            {{-- <img src="{{ asset('images/i.png') }}" alt="" style="width: 80%"> --}}
            <br>
            <h3 style="padding-left: 90px">
                What is included
            </h3>
            <br>
            <ul style="list-style: none; padding-left: 90px">

                @foreach ($tour->facility as $i)
                    <li class="mewmew"><span><img src="{{ asset('images/ullist.png') }}" class="plusImg"></span>
                        {{ $i->name }}</li>
                @endforeach
                {{-- //dont show any null value --}}
                {{-- @if ($tour->facility->count() == 0)
                            <li class="mewmew"><span><img src="{{ asset('images/ullist.png') }}" class="plusImg"></span>
                                No facility</li> --}}


                @if ($tour->facility->count() > 0)
                    @foreach ($tour->facility as $i)
                        <li class="mewmew"><span><img src="{{ asset('images/minus.png') }}"
                                    style="width: 20px; margin-right: 10px;"></span>{{ $i->unname }}</li>
                    @endforeach
                @endif



            </ul>
            <br>
            <br>
        </div>
    </div>


    <section class="TWOFORMS">
        <div class="container-fluid">
            <div class="FormTour">
                <h3 style="text-align: center">
                    The price per 1 pax
                </h3>
                <div class="row">
                    <div class="col-md-9 col-xs-9">
                        <table class="table table-bordered tble" style="width: 100%; margin-top: 20px;">

                            <thead>
                                <tr>
                                    <th
                                        style="text-align: center; margin-bottom:10px; background-color: #FFF1EA; padding: 15px; font-size:16px; font-weight:500">
                                        2-3 Pax
                                    </th>
                                    <th
                                        style="text-align: center; margin-bottom:10px; background-color: #FFF1EA; padding: 15px; font-size:16px; font-weight:500">
                                        4-6 Pax
                                    </th>
                                    <th
                                        style="text-align: center; margin-bottom:10px; background-color: #FFF1EA; padding: 15px; font-size:16px; font-weight:500">
                                        17-30 Pax
                                    </th>
                                    <th
                                        style="text-align: center; margin-bottom:10px; background-color: #FFF1EA; padding: 15px; font-size:16px; font-weight:500">
                                        30 More
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 15px;">
                                        {{ $tour->one_day_price }}
                                    </td>
                                    <td style="padding: 15px;">
                                        {{ $tour->one_week_price }}
                                    </td>
                                    <td style="padding: 15px;">
                                        {{ $tour->one_month_price }}
                                    </td>
                                    <td style="padding: 15px;">
                                        {{ $tour->one_year_price }}
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="col-md-3">
                        <span><button class="package-view" style="margin-top: 80px;">
                        <a href="{{ url('/BookATour/'.$tour->id) }}" style="color: black">
                            Book Now
                        </a>
                        </button></span>
                    </div>
                </div>

                <br>
                <br>
                <div class="row">
                    <div class="col-md-10">
                        <table class="table table-bordered tble" style="width: 100%; margin-top: 20px;">
                            <h3 style="text-align: center">
                                The Tours with guaranteed departures
                            </h3>
                            <br>
                            <thead>
                                <tr>
                                    <th
                                        style="text-align: center; margin-bottom:10px; background-color: #FFF1EA; padding: 15px; font-size:16px; font-weight:500">
                                        Start Date
                                    </th>
                                    <th
                                        style="text-align: center; margin-bottom:10px; background-color: #FFF1EA; padding: 15px; font-size:16px; font-weight:500">
                                        End Date
                                    </th>
                                    <th
                                        style="text-align: center; margin-bottom:10px; background-color: #FFF1EA; padding: 15px; font-size:16px; font-weight:500">
                                        Max in the group
                                    </th>
                                    <th
                                        style="text-align: center; margin-bottom:10px; background-color: #FFF1EA; padding: 15px; font-size:16px; font-weight:500">
                                        Price
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tour->departureTable as $d)
                                    <tr>
                                        <td style="padding: 15px;">{{ $d->start_date }}</td>
                                        <td style="padding: 15px;"> {{ $d->end_date }}</td>
                                        <td style="padding: 15px;">{{ $d->pax }}</td>
                                        <td style="padding: 15px;">{{ $d->price }}</td>

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>


                    <div class="col-md-2" style="display: block">

                        @foreach ($tour->departureTable as $d)
                            <button class="package-view" style="margin-top: 10px;">
                                <a href="{{ url('/BookATourDeparture/'.$tour->id.'/departure/'.$d->id) }}" style="color: black">
                                    Book Now
                                    {{ $d->id }}
                                </a>
                                </button>
                        @endforeach
                    </div>
                </div>

            </div>
            <img src="{{ asset('images/tt.png') }}" alt="" style="width:100%">
        </div>

    </section>



    <!--packages start-->
    <section id="pack" class="packages">
        <div class="container">

            <!--/.gallery-header-->
            <div class="packages-content">
                <center>
                    <h2>
                        Related Tours
                    </h2>
                    <br>
                    <br>
                </center>
                <div class="row">

                    @foreach ($relatedTour as $r)
                        
                   
                    <div class="col-md-4 col-sm-6">
                        {{-- <h3 style="text-align: center;  font-weight: 600;">{{ $tour->category->name }}</h3> --}}

                        <div class="single-package-item">

                            {{-- {{ var_dump($tour->image) }} --}}

                            {{-- <img src="{{ asset($tour->images->first()->path) }}" --}}

                            {{-- Get the image by id --}}
                            <img src="{{ asset($r->images->first()->path) }}" alt="" style="width:100%">
                                {{-- alt="package-place"> --}}
                            <div class="packageName">
                               {{ $r->name }}
                            </div>
                            <div>
                                <h4 class="package-txt">
                                    <a href="#">
                                       {{ $r->type }}
                                    </a>
                                </h4>
                                <p class="kki">
                                   {{ $r->description }}
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span> {{ $r->duration }}
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span> {{ $r->start_date }} - {{ $r->end_date }}
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> {{ $r->price }}
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
                                <a href="{{ url('/getClassicTour/' . $r->id) }}"> <button class="package-view">
                                        Details
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>
                    @endforeach
                   

                    <!--/.col-->

                </div>
                <!--/.row-->
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section>


    <div class="container-fluid">
        <h2 style="padding-left:44px">
            Reviews
        </h2>
        <div class="row" style="padding:60px">
            @foreach ($reviews as $r)
                
            
            <div class="col-md-3 col-xs-12">
                <img style="border-radius: 50%; width:26%"
                    src="https://static.vecteezy.com/system/resources/thumbnails/004/511/281/small/default-avatar-photo-placeholder-profile-picture-vector.jpg"
                    alt="">
                <h5>
                    {{ $r->name }}
                </h5>
                <h5>
                    {{ $r->created_at->diffForHumans() }}
                </h5>
                <h5>
                   {{ $r->title }}
                </h5>
                <br>
                <h5>
                    {{ $r->review }}
                </h5>
                <a href="" style="text-decoration: underline; color:rgb(86, 158, 241);">
                    see more
                </a>
                <div class="rating">
                    <span class=""><i class="fa-solid fa-star"></i></span>
                    <span class=""><i class="fa-solid fa-star"></i></span>
                    <span class=""><i class="fa-solid fa-star"></i></span>
                    <span class=""><i class="fa-solid fa-star"></i></span>
                    <span class=""><i class="fa-solid fa-star"></i></span>
                </div>


            </div>

            @endforeach
            
        </div>
        <div class="WR">
            <a class="WR" href="{{ url('/AddReview') }}" style="text-decoration:underline;">Write Review</a> <i
                class="fa-solid fa-pen-clip" style="text-decoration: none"></i>
        </div>
    </div>

    <script>
        var arr = document.querySelector('.arrow');
        arr.addEventListener('click', function(event) {
            event.target.classList.toggle('down');
        });

        $('.carousel').carousel({
  interval: 2000
})
    </script>
@endsection
