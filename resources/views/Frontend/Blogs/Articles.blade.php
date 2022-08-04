@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>



    <div class="row">
        <div class="col-md-6">
            <div class="factBox"></div>
        </div>
        @foreach ($cms as $c)
            
       
        <div class="col-md-6 aboutUs">
            <br>
            <br>


            <p style="color: #2294E3;align:left"> <span><i class="fa-solid fa-check-double"></i></span> 
            {{ $c->subtitle }}
            </p>
            {{-- <p style="color: #2294E3;align:left"><span><i class="fa-solid fa-check-double"></i></span> Lorem ipsum dolor sit
                amet
                consectetur.</p>
            <p style="color: #2294E3;align:left"><span><i class="fa-solid fa-check-double"></i></span> Lorem ipsum dolor sit
                amet,
                consectetur adipisicing elit.</p>
            <p style="color: #2294E3;align:left"> <span><i class="fa-solid fa-check-double"></i></span> Lorem ipsum dolor
                sit amet
                consectetur adipisicing elit.</p>
            <p style="color: #2294E3;align:left"><span><i class="fa-solid fa-check-double"></i></span> Lorem ipsum dolor sit
                amet
                consectetur.</p>
            <p style="color: #2294E3;align:left"><span><i class="fa-solid fa-check-double"></i></span> Lorem ipsum dolor sit
                amet,
                consectetur adipisicing elit.</p>
            <p style="color: #2294E3;align:left"> <span><i class="fa-solid fa-check-double"></i></span> Lorem ipsum dolor
                sit amet
                consectetur adipisicing elit.</p>
            <p style="color: #2294E3;align:left"><span><i class="fa-solid fa-check-double"></i></span> Lorem ipsum dolor sit
                amet
                consectetur.</p> --}}

        </div>
       


    </div>


    <section id="pack" class="packages">
        <div class="container">

            <!--/.gallery-header-->
            <div class="packages-content">
                <h2 style="text-align: center; padding-bottom:60px">
                    {{ $c->title }}
                </h2>
                <div class="row">
                    @endforeach

@foreach ($travelBlogs as $t)
    

                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="{{$t->images->first()->path}}" alt="package-place">
                            <div class="packageName">
                               {{ $t->title }}
                            </div>
                            <div class="">
                                <h4 style="text-align:center;">
                                    <a href="#"
                                        style="text-align:center; font-size:1.6rem; text-decoration:underline">
                                        {{ $t->type }}
                                    </a>
                                </h4>
                                <p class="" style="text-align: center; font-size:1.5rem; color:black">
                                    {{ $t->description }}
                                </p>
                            </div>

                            <div style="width: 70%;margin-left: 17%">
                                <span>
                                    {{ $t->created_at->diffForHumans() }}
                                </span>
                                <span style="float:right">
                                    <a href="">
                                        2expedition
                                    </a>
                                </span>
                            </div>

                            <div class="package-btn">
                                <a href="{{ url('/Article/'.$t->id) }}">
                                 <button class="package-view">
                                    Read More
                                </button></a>
                               

                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    @endforeach         

                </div>
                <!--/.row-->
                <center>
                    {{ $travelBlogs ->links() }}
                </center>
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section>
@endsection
