@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>



    <section id="pack" class="packages">
        <div class="container">

            <!--/.gallery-header-->
            <div class="packages-content">
                <h2 style="text-align: center; padding-bottom:60px">
                    <span class="title-head">
                        <span class="title-head-bold">
                            Brochures
                        </span>
                    </span>
                </h2>
                <div class="row">

                    @foreach ($brochure as $b)

                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="{{asset($b->images->first()->path)}}"
                                alt="package-place">
                            <div class="" style="font-weight: 500">
                                {{ $b->name }}
                            </div>


                            <div class="package-btn">
                                <button class="package-view">
                                    Download
                                </button>

                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
        
                        
                    @endforeach

                 




                </div>
                <!--/.row-->
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section>
@endsection
