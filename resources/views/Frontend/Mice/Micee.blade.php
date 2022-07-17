<!--packages start-->
@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>

    <section class="tour-descriptions" style="padding: 50px">
        <h1 style="text-align: center">
           {{ $mice->name }}
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


                            <section class="imgC">
                                <div class="imgCcontainer">
                                    <div class="carousel">
                                        <input type="radio" name="slides" checked="checked" id="slide-1">
                                        <input type="radio" name="slides" id="slide-2">
                                        <input type="radio" name="slides" id="slide-3">
                                        <input type="radio" name="slides" id="slide-4">
                                        <input type="radio" name="slides" id="slide-5">
                                        <input type="radio" name="slides" id="slide-6">
                                        <ul class="carousel__slides">
                                            <li class="carousel__slide">
                                                <figure>
                                                    <div>
                                                        <img src="https://picsum.photos/id/1041/800/450" alt="">
                                                    </div>

                                                </figure>
                                            </li>
                                            <li class="carousel__slide">
                                                <figure>
                                                    <div>
                                                        <img src="https://picsum.photos/id/1043/800/450" alt="">
                                                    </div>

                                                </figure>
                                            </li>
                                            <li class="carousel__slide">
                                                <figure>
                                                    <div>
                                                        <img src="https://picsum.photos/id/1044/800/450" alt="">
                                                    </div>

                                                </figure>
                                            </li>
                                            <li class="carousel__slide">
                                                <figure>
                                                    <div>
                                                        <img src="https://picsum.photos/id/1045/800/450" alt="">
                                                    </div>

                                                </figure>
                                            </li>
                                            <li class="carousel__slide">
                                                <figure>
                                                    <div>
                                                        <img src="https://picsum.photos/id/1049/800/450" alt="">
                                                    </div>

                                                </figure>
                                            </li>
                                            <li class="carousel__slide">
                                                <figure>
                                                    <div>
                                                        <img src="https://picsum.photos/id/1052/800/450" alt="">
                                                    </div>

                                                </figure>
                                            </li>
                                        </ul>
                                        <ul class="carousel__thumbnails">
                                            <li>
                                                <label for="slide-1"><img src="https://picsum.photos/id/1041/150/150"
                                                        alt=""></label>
                                            </li>
                                            <li>
                                                <label for="slide-2"><img src="https://picsum.photos/id/1043/150/150"
                                                        alt=""></label>
                                            </li>
                                            <li>
                                                <label for="slide-3"><img src="https://picsum.photos/id/1044/150/150"
                                                        alt=""></label>
                                            </li>
                                            <li>
                                                <label for="slide-4"><img src="https://picsum.photos/id/1045/150/150"
                                                        alt=""></label>
                                            </li>
                                            <li>
                                                <label for="slide-5"><img src="https://picsum.photos/id/1049/150/150"
                                                        alt=""></label>
                                            </li>
                                            <li>
                                                <label for="slide-6"><img src="https://picsum.photos/id/1052/150/150"
                                                        alt=""></label>
                                            </li>
                                        </ul>
                                    </div>

                            </section>







                        </div><!-- /.tour-descriptions-content-inner-right -->
                    </div><!-- /.tour-descriptions-content-inner -->
                </div><!-- /.tour-descriptions-content -->
            </div><!-- /.col -->

            <div class="col-md-5">
                <div class="tour-descriptions-content-inner-left-content-title bb">
                    <h2>
                        Key Points
                    </h2>


                    <div class="detailespackage">
                        <div style="float: left"><i class="fa-solid fa-calendar-check"></i>Best Travel Time</div>
                        <div>
                            {{ $mice->available }}
                        </div>
                    </div>
                    <div class="detailespackage">
                        <div><i class="fa-solid fa-person"></i>Max in the group</div>
                        <div>
                            {{ $mice->total_pax }}
                        </div>
                    </div>

                    <div class="detailespackage">
                        <div><i class="fa-solid fa-folder"></i>Products</div>
                        <div>
                           {{ $mice->Products }}
                        </div>
                    </div>

                    <div class="detailespackage">
                        <div><i class="fa-solid fa-user-plus"></i>Extra</div>
                        <div>
                            {{ $mice->Extra }}
                        </div>
                    </div>
                    <div class="detailespackage">
                        <div><i class="fa-solid fa-syringe"></i>Personal</div>
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
            Overview
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cum hic totam ducimus repudiandae in cupiditate
            deleniti velit accusantium ut consequuntur tempora veritatis explicabo dignissimos quaerat, eius illum alias id
            nihil placeat inventore voluptate animi natus nam. Veritatis quaerat doloremque asperiores, in ad provident,
            quae ut sunt delectus quibusdam voluptate, perspiciatis recusandae officiis! Fugiat voluptate neque optio
            reprehenderit magni eveniet eum suscipit quam, ducimus, odio ex sed vero dolorum! Ratione.
        </p>
    </section>


    <section class="tableOfPrice">
        <button class="package-view" style="text-align: center; align-items:center; margin:20px">
            Book Now
        </button>
    </section>

    <br>
@endsection
