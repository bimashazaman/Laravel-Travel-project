@extends('layouts.master')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <section class="container-fluid" style="">

        <div class="">
            <div class="col-md-7">
                <div class="tour-descriptions-content">
                    <div class="tour-descriptions-content-inner">
                        <div class="tour-descriptions-content-inner-left">
                            <div class="tour-descriptions-content-inner-left-content">
                                <center>
                                   <h2>
                                        {{$tour->name}}
                                   </h2>
                                </center>
                            </div><!-- /.tour-descriptions-content-inner-left-content -->
                        </div><!-- /.tour-descriptions-content-inner-left -->
                        <div class="tour-descriptions-content-inner-right">







                            <section class="imgC" style="">
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
                                </div>
                            </section>

                            <div class="uldescription">
                                <h2>Highlights</h2>
                                <ul style="list-style: none;">
                                    
                                    <li>Lorem ipsum dolor sit.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                    <li>Lorem, ipsum.</li>
                                </ul>
                            </div>




                        </div><!-- /.tour-descriptions-content-inner-right -->
                    </div><!-- /.tour-descriptions-content-inner -->
                </div><!-- /.tour-descriptions-content -->
            </div><!-- /.col -->

            <div class="col-md-5">

                <div class="tour-descriptions-content-inner-left-content-title bb">

                    <!--Google map-->
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 400px; width: 85%">
                        {{-- <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" style="border:0" allowfullscreen></iframe> --}}

                            <img src="{{ asset('images/Tour.png') }}" alt="">
                    </div>


                    <div class="blah">

                        <h3 style="color:white; padding-top:30px">
                            Itenanary
                        </h3>
                        <p style="color:white; font-size: 1.4rem;  font-weight: 300; padding-top:15px">
                            If you are planning your first trip to Armenia this tour package is

                            just for you! The itinerary gives you opportunity to discover the
                            country: traditions, lots of interesting historic facts, visit the most



                            lorem50 important historic, cultural and religious centers, communicate
                            with local people. As presumed, our tour has gastronomic
                            emphasis and you can taste old, originally Armenian national
                            dishes made from natural products, even take part in baking
                            process of Armenian national bread - lavash and learn how to
                            cook Sevan goods from a real chef. We will not forget about the
                            drinks - you will observe the preparation process of Armenian
                            wine and legendary brandy (Cognac), as well as taste it.

                            lorem50 important historic, cultural and religious centers, communicate
                            with local people. As presumed, our tour has gastronomic
                            emphasis and you can taste old, originally Armenian national
                            dishes made from natural products, even take part in baking
                            process of Armenian national bread - lavash and learn how to
                            cook Sevan goods from a real chef. We will not forget about the
                            drinks - you will observe the preparation process of Armenian
                            wine and legendary brandy (Cognac), as well as taste it.

                            lorem50 important historic, cultural and religious centers, communicate
                            with local people. As presumed, our tour has gastronomic
                            emphasis and you can taste old, originally Armenian national

                        </p>
                    </div>


                </div><!-- /.tour-descriptions-content-inner-left-content-title -->
            </div><!-- /.row -->
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
            <div class="timeline">

                <div class="containerA right">
                    <div class="content">
                        <h2 style="font-weight: 400; font-size:2rem" style="text-align: center">Day One</h2>
                        <p style="color:black">CANADA- USA - CHINA</p>
                    </div>
                </div>

                <div class="containerA right">
                    <div class="content">
                        <h2 style="font-weight: 400; font-size:2rem">Day 2</h2>
                        <p style="color:black">Japan- india- USA</p>
                    </div>
                </div>

                <div class="containerA right">
                    <div class="content">
                        <h2 style="font-weight: 400; font-size:2rem">Day 2</h2>
                        <p style="color:black">Japan- india- USA</p>
                    </div>
                </div>

            </div>
            <div style="margin: 30px; padding-left: 50px">
                <span style="color: #e5a686; font-size: 25px; font-weight:500; margin-right:24px">$</span>
                <span style="font-size: 20px; font-weight:400; margin-right:24px">Price</span>
                <span style="font-size: 20px; font-weight:600;">250$</span>
            </div>
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
            
            <li style="margin:10px"><span><img src="{{ asset('images/ullist.png') }}" style="width: 24px; margin-right: 10px" alt=""></span> Lorem ipsum dolor sit.</li>
            <li style="margin:10px"><span><img src="{{ asset('images/ullist.png') }}" style="width: 24px; margin-right: 10px" alt=""></span> Lorem ipsum dolor sit.</li>
            <li style="margin:10px"><span><img src="{{ asset('images/ullist.png') }}" style="width: 24px; margin-right: 10px" alt=""></span> Lorem ipsum dolor sit.</li>
            <li style="margin:10px"><span><img src="{{ asset('images/ullist.png') }}" style="width: 24px; margin-right: 10px" alt=""></span> Lorem ipsum dolor sit.</li>
           </ul>
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
                                    <th style="text-align: center; margin-bottom:10px; background-color: #FFF1EA; padding: 15px;">1 Day</th>
                                    <th style="text-align: center; margin-bottom:10px; background-color: #FFF1EA; padding: 15px;">1 Week</th>
                                    <th style="text-align: center; margin-bottom:10px; background-color: #FFF1EA; padding: 15px;">1 Mounth</th>
                                    <th style="text-align: center; margin-bottom:10px; background-color: #FFF1EA; padding: 15px;">1 Mounth</th>
                                </tr>
                            </thead>
                            <tbody>
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
                                <th style="text-align: center; margin-bottom:10px; background-color: #FFF1EA; padding: 15px;">1 Day</th>
                                <th style="text-align: center; margin-bottom:10px; background-color: #FFF1EA; padding: 15px;">1 Week</th>
                                <th style="text-align: center; margin-bottom:10px; background-color: #FFF1EA; padding: 15px;">1 Mounth</th>
                                <th style="text-align: center; margin-bottom:10px; background-color: #FFF1EA; padding: 15px;">1 Mounth</th>
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
            <div class="gallary-header text-center">
                <h2>
                    special packages
                </h2>
                <p>
                    Duis aute irure dolor in velit esse cillum dolore eu fugiat nulla.
                </p>
            </div>
            <!--/.gallery-header-->
            <div class="packages-content">
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <h3 style="text-align: center">Day one</h3>
                        <div class="single-package-item">

                            <img src="https://www.trolleytours.com/wp-content/uploads/2016/07/trolley-tours-of-key-west.jpg"
                                alt="package-place">
                            <div class="package-txt">
                                <h4>
                                    <a href="#">
                                        package one
                                    </a>
                                </h4>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, perspiciatis!
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span>4 Days / 3 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span>10 - 15 Feb
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span>$1,000
                                </div>
                            </div>
                            <div class="package-btn">
                                <button class="package-view">
                                    view more
                                </button>


                            </div>

                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->

                    <div class="col-md-4 col-sm-6">
                        <h3 style="text-align: center">Day one</h3>
                        <div class="single-package-item">

                            <img src="https://thumbs.dreamstime.com/b/beautiful-iland-sea-montains-beautiful-landscape-water-montains-blue-sky-nature-lush-147918456.jpg"
                                alt="package-place">
                            <div class="package-txt">
                                <h4>
                                    <a href="#">
                                        package one
                                    </a>
                                </h4>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, perspiciatis!
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span>4 Days / 3 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span>10 - 15 Feb
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span>$1,000
                                </div>
                            </div>
                            <div class="package-btn">
                                <button class="package-view">
                                    view more
                                </button>


                            </div>

                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->
                    <div class="col-md-4 col-sm-6">
                        <h3 style="text-align: center">Day one</h3>
                        <div class="single-package-item">

                            <img src="https://thumbs.dreamstime.com/b/beautiful-iland-sea-montains-beautiful-landscape-water-montains-blue-sky-nature-lush-147918456.jpg"
                                alt="package-place">
                            <div class="package-txt">
                                <h4>
                                    <a href="#">
                                        package one
                                    </a>
                                </h4>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, perspiciatis!
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span>4 Days / 3 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span>10 - 15 Feb
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span>$1,000
                                </div>
                            </div>
                            <div class="package-btn">
                                <button class="package-view">
                                    view more
                                </button>


                            </div>

                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->
                    <div class="col-md-4 col-sm-6">
                        <h3 style="text-align: center">Day one</h3>
                        <div class="single-package-item">

                            <img src="https://thumbs.dreamstime.com/b/beautiful-iland-sea-montains-beautiful-landscape-water-montains-blue-sky-nature-lush-147918456.jpg"
                                alt="package-place">
                            <div class="package-txt">
                                <h4>
                                    <a href="#">
                                        package one
                                    </a>
                                </h4>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, perspiciatis!
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span>4 Days / 3 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span>10 - 15 Feb
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span>$1,000
                                </div>
                            </div>
                            <div class="package-btn">
                                <button class="package-view">
                                    view more
                                </button>


                            </div>

                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->
                    <div class="col-md-4 col-sm-6">
                        <h3 style="text-align: center">Day one</h3>
                        <div class="single-package-item">

                            <img src="https://thumbs.dreamstime.com/b/beautiful-iland-sea-montains-beautiful-landscape-water-montains-blue-sky-nature-lush-147918456.jpg"
                                alt="package-place">
                            <div class="package-txt">
                                <h4>
                                    <a href="#">
                                        package one
                                    </a>
                                </h4>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, perspiciatis!
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span>4 Days / 3 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span>10 - 15 Feb
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span>$1,000
                                </div>
                            </div>
                            <div class="package-btn">
                                <button class="package-view">
                                    view more
                                </button>


                            </div>

                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->

                    <div class="col-md-4 col-sm-6">
                        <h3 style="text-align: center">Day one</h3>
                        <div class="single-package-item">

                            <img src="https://thumbs.dreamstime.com/b/beautiful-iland-sea-montains-beautiful-landscape-water-montains-blue-sky-nature-lush-147918456.jpg"
                                alt="package-place">
                            <div class="package-txt">
                                <h4>
                                    <a href="#">
                                        package one
                                    </a>
                                </h4>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, perspiciatis!
                                </p>
                            </div>
                            <div class="pacdet">
                                <div class="packageOffer">
                                    <span><i class="fa-regular fa-clock"></i></span>4 Days / 3 Days
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-calendar-check"></i></span>10 - 15 Feb
                                </div>

                                <div class="packageOffer">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span>$1,000
                                </div>
                            </div>
                            <div class="package-btn">
                                <button class="package-view">
                                    view more
                                </button>


                            </div>

                        </div>
                        <!--/.single-package-item-->

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
            <a class="WR" href="" style="text-decoration:underline;">Write Review</a> <i class="fa-solid fa-pen-clip" style="text-decoration: none"></i>
        </div>
    </div>
@endsection
