@extends('layouts.master')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>



    <!-- Tour description start -->
    <section class="tour-descriptions">

        <div class="row">
            <div class="col-md-7">
                <div class="tour-descriptions-content">
                    <div class="tour-descriptions-content-inner">
                        <div class="tour-descriptions-content-inner-left">
                            <div class="tour-descriptions-content-inner-left-content">
                                <h1>
                                    Name
                                </h1>
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
                                                        <img src="https://images.unsplash.com/photo-1625244724120-1fd1d34d00f6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                                            alt="">
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
                        </div><!-- /.tour-_descriptions-content-inner-right -->
                        <div class="highlights">
                            <h3>
                                Highlights
                            </h3>
                            <ul>
                                <li>
                                    Lorem ipsum dolor sit amet.
                                </li>
                                <li>
                                    Lorem ipsum dolor sit amet consectetur adipisicing.
                                </li>
                                <li>
                                    lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </li>
                                <li>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit fkkd
                                </li>
                                <li>
                                    Lorem, ipsum dolor.
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.tour-descriptions-content-inner -->
                </div><!-- /.tour-descriptions-content -->
            </div><!-- /.col -->

            <div class="col-md-5">

                <div class="tour-descriptions-content-inner-left-content-title bb">

                    <!--Google map-->
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                        <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    <h3 style="margin-top: 25px; font-weight: 600;">
                        Key Points
                    </h3>
                    <div class="detailespackage">
                        <span><i class="fa-solid fa-person-skiing"></i></span> Type <span class="rightspan">Skiing</span>
                    </div>
                    <div class="detailespackage">
                        <span><i class="fa-solid fa-person"></i></span> Group size <span class="rightspan">2</span>
                    </div>
                    <div class="detailespackage">
                        <span><i class="fa-solid fa-money-check-dollar"></i></span> Date <span
                            class="rightspan">2.12.2022</span>
                    </div>
                    <div class="detailespackage">
                        <span><i class="fa-solid fa-receipt"></i></span> Date <span class="rightspan">2.12.2022</span>
                    </div>
                    <div class="detailespackage">
                        <span><i class="fa-solid fa-person-running"></i></span> Date <span
                            class="rightspan">2.12.2022</span>
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

    <section class="tableOfPrice" style="background-color: #F5F5F5; padding:60px">
        <div class="container">
            <h3 style="text-align: center; margin-bottom:10px">
                The price table
            </h3>
            <table class="table table-bordered tble">
                <thead>
                    <tr>
                        <th>1 Day</th>
                        <th>1 Week</th>
                        <th>1 Mounth</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Otto</td>

                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>

                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>

                    </tr>

                </tbody>
            </table>

        </div>
        <a href="{{ url('/BookHotel') }}">
            <button class="package-view" style="text-align: center; align-items:center; margin:20px">
                Book Now
            </button>
        </a>
    </section>




    <!--packages start-->
    <section id="pack" class="packages">
        <div class="container">
            <div class="gallary-header text-center">
                <h2>
                    Related Hotels
                </h2>

            </div>
            <!--/.gallery-header-->
            <div class="packages-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1625244724120-1fd1d34d00f6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="package-place">
                         <div class="HotelName">
                            <h4>
                                Hotel Name
                            </h4>
                         </div>
                         <div class="hotelDesccription">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto, maiores.
                            </p>
                         </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-location-dot"></i></span> 2 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-star"></i></span> Date
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> 20$
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
                                <a href="{{ url('h') }}"><button class="package-view">
                                    view more
                                </button>
                                </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1625244724120-1fd1d34d00f6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="package-place">
                         <div class="HotelName">
                            <h4>
                                Hotel Name
                            </h4>
                         </div>
                         <div class="hotelDesccription">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto, maiores.
                            </p>
                         </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-location-dot"></i></span> 2 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-star"></i></span> Date
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> 20$
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
                                <a href="{{ url('h') }}"><button class="package-view">
                                    view more
                                </button>
                                </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1625244724120-1fd1d34d00f6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="package-place">
                         <div class="HotelName">
                            <h4>
                                Hotel Name
                            </h4>
                         </div>
                         <div class="hotelDesccription">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto, maiores.
                            </p>
                         </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-location-dot"></i></span> 2 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-star"></i></span> Date
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> 20$
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
                                <a href="{{ url('h') }}"><button class="package-view">
                                    view more
                                </button>
                                </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1625244724120-1fd1d34d00f6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="package-place">
                         <div class="HotelName">
                            <h4>
                                Hotel Name
                            </h4>
                         </div>
                         <div class="hotelDesccription">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto, maiores.
                            </p>
                         </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-location-dot"></i></span> 2 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-star"></i></span> Date
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> 20$
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
                                <a href="{{ url('h') }}"><button class="package-view">
                                    view more
                                </button>
                                </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1625244724120-1fd1d34d00f6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="package-place">
                         <div class="HotelName">
                            <h4>
                                Hotel Name
                            </h4>
                         </div>
                         <div class="hotelDesccription">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto, maiores.
                            </p>
                         </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-location-dot"></i></span> 2 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-star"></i></span> Date
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> 20$
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
                                <a href="{{ url('h') }}"><button class="package-view">
                                    view more
                                </button>
                                </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1625244724120-1fd1d34d00f6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="package-place">
                         <div class="HotelName">
                            <h4>
                                Hotel Name
                            </h4>
                         </div>
                         <div class="hotelDesccription">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto, maiores.
                            </p>
                         </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-location-dot"></i></span> 2 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-star"></i></span> Date
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> 20$
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
                                <a href="{{ url('h') }}"><button class="package-view">
                                    view more
                                </button>
                                </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.packages-content-->
        </div>
        <!--/.container-->
    </section>
@endsection
