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
                                    <div class="carousel imgC">
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
                                </div>
                            </section>

                            <div class="uldescription">
                                <h2>Highlights</h2>
                                <br>
                                <ul style="list-style: none;">

                                    <li style="font-weight: 500; font-size:17px">Lorem ipsum dolor sit.</li>
                                    <li style="font-weight: 500; font-size:17px">Lorem, ipsum dolor.</li>
                                    <li style="font-weight: 500; font-size:17px">Lorem ipsum dolor sit amet.</li>
                                    <li style="font-weight: 500; font-size:17px">Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li style="font-weight: 500; font-size:17px">Lorem, ipsum.</li>
                                </ul>
                            </div>




                        </div><!-- /.tour-descriptions-content-inner-right -->
                    </div><!-- /.tour-descriptions-content-inner -->
                </div><!-- /.tour-descriptions-content -->
            </div><!-- /.col -->

            <div class="col-md-5">

                <div class="tour-descriptions-content-inner-left-content-title bb">

                    <!--Google map-->
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style=" width: 85%; height: 577px;">
                        {{-- <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" style="border:0" allowfullscreen></iframe> --}}

                        <img src="{{ asset('images/Tour.png') }}" alt="" style="height: 577px;">

                                

                       

                </div><!-- /.tour-descriptions-content-inner-left-content-title -->
            </div><!-- /.row -->
            <div class="tour-descriptions-content-inner-left-content-title bb">
                <h2>
                    Key Points
                </h2>


                <div class="detailespackage">
                    <div style="float: left"><i class="fa-solid fa-car"></i>Type</div>  <div>lkgd</div>
                </div>
                <div class="detailespackage">
                    <div><i class="fa-solid fa-person"></i>Number of seats</div> <div> seats</div>
                </div>

                <div class="detailespackage">
                    <div><i class="fa-solid fa-calendar-check"></i>Year</div>  <div>
                        hjnfg
                    </div>
                </div>

                <div class="detailespackage">
                    <div><i class="fa-solid fa-calendar"></i>Free Cancellation</div>  <div>
                        fkvdfv
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum consectetur
                    temporibus
                    deserunt distinctio, debitis impedit enim officiis aperiam tenetur? Aliquid
                    voluptatibus
                    dolorem dignissimos iure in incidunt. Vero laboriosam dolore, quidem cumque
                    voluptates
                    provident voluptatibus ipsam corporis sequi voluptatem, repellendus autem
                    accusantium ex
                    velit minus sapiente, praesentium iure ullam qui a nostrum labore natus. Non
                    deleniti
                    dignissimos ipsum odit. Voluptatibus ducimus, alias quis reiciendis consequatur
                    cumque
                    sint aut enim quam nulla. Velit numquam aliquam corrupti libero sunt laboriosam

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
                    <h3>
                        Day 1
                    </h3>
                    <p>
                        india - canada - nepal
                    </p>

                    <br>
                    <br>
                    <br>

                    <h3>
                        Day 2
                    </h3>


                    <p>
                        india - canada - nepal
                    </p>



                    <h3>
                        Day 3
                    </h3>
                    <p>
                        india - canada - nepal
                    </p>
                    <br>


                    <h3>
                        Day 4
                    </h3>
                    <p>
                        india - canada - nepal
                    </p>
                </div>


            </div>
            {{-- <div style="margin-left: 30px; padding-left: 50px">
                <span style="color: #e5a686; font-size: 25px; font-weight:500; margin-right:24px">$</span>
                <span style="font-size: 20px; font-weight:400; margin-right:24px">Price</span>
                <span style="font-size: 20px; font-weight:600;">250$</span>
            </div> --}}
            <div style="margin: 30px; padding-left: 50px">
                <button class="package-view">
                    Tour Request
                </button>
            </div>
        </div>
        <div class="col-md-6">
            {{-- <img src="{{ asset('images/i.png') }}" alt="" style="width: 80%"> --}}
            <br>
            <h3>
                What is included
            </h3>
            <br>
            <ul style="list-style: none">

                <li class="mewmew"><span><img src="{{ asset('images/ullist.png') }}" class="plusImg"></span> Lorem ipsum dolor sit.</li>
                <li class="mewmew"><span><img src="{{ asset('images/ullist.png') }}" class="plusImg"></span> Lorem ipsum dolor sit.</li>
                <li class="mewmew"><span><img src="{{ asset('images/ullist.png') }}" class="plusImg"></span> Lorem ipsum dolor sit.</li>
                <li class="mewmew"><span><img src="{{ asset('images/ullist.png') }}" class="plusImg"></span> Lorem ipsum dolor sit.</li>
                <li class="mewmew"><span><img src="{{ asset('images/ullist.png') }}" class="plusImg"></span> Lorem ipsum dolor sit.</li>
                <li class="mewmew"><span><img src="{{ asset('images/ullist.png') }}" class="plusImg"></span> Lorem ipsum dolor sit.</li>
                <li class="mewmew"><span><img src="{{ asset('images/minus.png') }}"
                            style="width: 20px; margin-right: 10px;"></span> Lorem ipsum dolor sit.</li>
                <li class="mewmew"><span><img src="{{ asset('images/minus.png') }}"
                            style="width: 20px; margin-right: 10px;"></span> Lorem ipsum dolor sit.</li>
                <li class="mewmew"><span><img src="{{ asset('images/minus.png') }}"
                            style="width: 20px; margin-right: 10px;"></span> Lorem ipsum dolor sit.</li>
                <li class="mewmew"><span><img src="{{ asset('images/minus.png') }}"
                            style="width: 20px; margin-right: 10px;"></span> Lorem ipsum dolor sit.</li>
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
                                    <td style="padding: 15px;">25000 AMD</td>
                                    <td style="padding: 15px;"> 35000 AMD</td>
                                    <td style="padding: 15px;">45000 AMD</td>
                                    <td style="padding: 15px;">45000 AMD</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    <div class="col-md-3">
                        <span><button class="package-view" style="margin-top: 80px;">Book Now</button></span>
                    </div>
                </div>

                <br>
                <br>
                <div class="row">
                    <div class="col-md-9">
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
                                <tr>
                                    <td style="padding: 15px;">25000</td>
                                    <td style="padding: 15px;"> 35000</td>
                                    <td style="padding: 15px;">45000</td>
                                    <td style="padding: 15px;">45000</td>

                                </tr>
                                <tr>
                                    <td style="padding: 15px;">25000</td>
                                    <td style="padding: 15px;"> 35000</td>
                                    <td style="padding: 15px;">45000</td>
                                    <td style="padding: 15px;">45000</td>

                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-3">

                        <span><button class="package-view" style="margin-top: 138px;">Book Now</button></span>
                        <span><button class="package-view" style="margin-top: 10px;">Book Now</button></span>
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
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <h3 style="text-align: center;  font-weight: 600;">{{ $tour->category->name }}</h3>

                        <div class="single-package-item">

                            {{-- {{ var_dump($tour->image) }} --}}

                            <img src="https://www.trolleytours.com/wp-content/uploads/2016/07/trolley-tours-of-key-west.jpg"
                                alt="package-place">
                            <div class="packageName">
                                blah
                            </div>
                            <div>
                                <h4 class="package-txt">
                                    <a href="#">
                                        meh
                                    </a>
                                </h4>
                                <p class="kki">
                                    blah
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span> 4days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span>12 - 12 Dec
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span>$100k
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
                                <a href="{{ url('/Bv') }}"> <button class="package-view">
                                        Details
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <h3 style="text-align: center;  font-weight: 600;">{{ $tour->category->name }}</h3>

                        <div class="single-package-item">

                            {{-- {{ var_dump($tour->image) }} --}}

                            <img src="https://www.trolleytours.com/wp-content/uploads/2016/07/trolley-tours-of-key-west.jpg"
                                alt="package-place">
                            <div class="packageName">
                                blah
                            </div>
                            <div>
                                <h4 class="package-txt">
                                    <a href="#">
                                        meh
                                    </a>
                                </h4>
                                <p class="kki">
                                    blah
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span> 4days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span>12 - 12 Dec
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span>$100k
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
                                <a href="{{ url('/Bv') }}"> <button class="package-view">
                                        Details
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <h3 style="text-align: center;  font-weight: 600;">{{ $tour->category->name }}</h3>

                        <div class="single-package-item">

                            {{-- {{ var_dump($tour->image) }} --}}

                            <img src="https://www.trolleytours.com/wp-content/uploads/2016/07/trolley-tours-of-key-west.jpg"
                                alt="package-place">
                            <div class="packageName">
                                blah
                            </div>
                            <div>
                                <h4 class="package-txt">
                                    <a href="#">
                                        meh
                                    </a>
                                </h4>
                                <p class="kki">
                                    blah
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span> 4days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span>12 - 12 Dec
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span>$100k
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
                                <a href="{{ url('/Bv') }}"> <button class="package-view">
                                        Details
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>

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
            <div class="col-md-3 col-xs-12">
                <img style="border-radius: 50%; width:26%"
                    src="https://img.freepik.com/free-vector/cute-swag-polar-bear-with-hat-gold-chain-necklace-cartoon-illustration-flat-cartoon-style_138676-2719.jpg?w=2000"
                    alt="">
                <h5>
                    Name
                </h5>
                <h5>
                    Date
                </h5>
                <h5>
                    Write your story
                </h5>
                <br>
                <h5>
                    kjfkdhvkjbvkjdfhv dvkhdskvhjdkshv vkjdshvkjsdvjhsd nvksdjhkvjhsdk dvjhdskhvsd dsvjhsdkjvbds djvhdskjvbdb
                    dvjhdskv
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
            <div class="col-md-3 col-xs-12">
                <img style="border-radius: 50%; width:26%"
                    src="https://img.freepik.com/free-vector/cute-swag-polar-bear-with-hat-gold-chain-necklace-cartoon-illustration-flat-cartoon-style_138676-2719.jpg?w=2000"
                    alt="">
                <h5>
                    Name
                </h5>
                <h5>
                    Date
                </h5>
                <h5>
                    Write your story
                </h5>
                <br>
                <h5>
                    kjfkdhvkjbvkjdfhv dvkhdskvhjdkshv vkjdshvkjsdvjhsd nvksdjhkvjhsdk dvjhdskhvsd dsvjhsdkjvbds djvhdskjvbdb
                    dvjhdskv
                </h5>
                <a href="" style="text-decoration: underline; color:rgb(86, 158, 241)">
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
            <div class="col-md-3 col-xs-12">
                <img style="border-radius: 50%; width:26%"
                    src="https://img.freepik.com/free-vector/cute-swag-polar-bear-with-hat-gold-chain-necklace-cartoon-illustration-flat-cartoon-style_138676-2719.jpg?w=2000"
                    alt="">
                <h5>
                    Name
                </h5>
                <h5>
                    Date
                </h5>
                <h5>
                    Write your story
                </h5>
                <br>
                <h5>
                    kjfkdhvkjbvkjdfhv dvkhdskvhjdkshv vkjdshvkjsdvjhsd nvksdjhkvjhsdk dvjhdskhvsd dsvjhsdkjvbds djvhdskjvbdb
                    dvjhdskv
                </h5>
                <a href="" style="text-decoration: underline; color:rgb(86, 158, 241)">
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
            <div class="col-md-3 col-xs-12">
                <img style="border-radius: 50%; width:26%"
                    src="https://img.freepik.com/free-vector/cute-swag-polar-bear-with-hat-gold-chain-necklace-cartoon-illustration-flat-cartoon-style_138676-2719.jpg?w=2000"
                    alt="">
                <h5>
                    Name
                </h5>
                <h5>
                    Date
                </h5>
                <h5>
                    Write your story
                </h5>
                <br>
                <h5>
                    kjfkdhvkjbvkjdfhv dvkhdskvhjdkshv vkjdshvkjsdvjhsd nvksdjhkvjhsdk dvjhdskhvsd dsvjhsdkjvbds djvhdskjvbdb
                    dvjhdskv
                </h5>
                <a href="" style="text-decoration: underline; color:rgb(86, 158, 241)">
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
        </div>
        <div class="WR">
            <a class="WR" href="{{ url('/AddReview') }}" style="text-decoration:underline;">Write Review</a> <i
                class="fa-solid fa-pen-clip" style="text-decoration: none"></i>
        </div>
    </div>
@endsection
