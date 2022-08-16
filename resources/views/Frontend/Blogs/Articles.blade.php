@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="factBox">
                <img src="https://velvetescape.com/wp-content/uploads/2015/07/artak-petrosyan-vwvshYHYAZs-unsplash-1500x920.jpg"
                    alt="">
            </div>
        </div>
        @foreach ($cms as $c)
            <div class="col-md-6 aboutUs">
                <br>
                <br>
                <p style="color: #2294E3;align:left"> <span><i class="fa-solid fa-check-double"></i></span>
                    {{ __($c->subtitle) }}
                </p>
            </div>
    </div>
    <section id="pack" class="packages">
        <div class="container">
            <div class="packages-content">
                <h2 style="text-align: center; padding-bottom:60px">
                    {{ __($c->title) }}
                </h2>
                <div class="row">
                    @endforeach
                    @foreach ($travelBlogs as $t)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <img src="{{ url($t->images->first()->path) }}">
                                <div class="packageName">
                                    {{ __($t->title) }}
                                </div>
                                <div class="">
                                    <h4 style="text-align:center;">
                                        <a href="#"
                                            style="text-align:center; font-size:1.6rem; text-decoration:underline">
                                            {{ __($t->type) }}
                                        </a>
                                    </h4>
                                    <p class="" style="text-align: center; font-size:1.5rem; color:black">
                                        {{ __($t->description) }}
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
                                    <a href="{{ url('/Article/' . $t->id) }}">
                                        <button class="package-view">
                                            {{ __('Read More') }}
                                        </button></a>
                                </div>
                            </div>
                            <!--/.single-package-item-->
                        </div>
                    @endforeach

                </div>
                <!--/.row-->
                <center>
                    {{ $travelBlogs->links() }}
                </center>
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section>
@endsection
