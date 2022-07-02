@extends('layouts.master')
@section('content')
    <br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br>
    <section id="pack" class="packages">
        <div class="container">
            @include('partials.CarCard')

            <div class="packages-content">

                <div class="RentCar">
                    <h2 style="color:black; font-weidth:500">
                        Rent a Car
                    </h2>
                    <p>
                        On our web page you can find prices for individual, group and corporate tours with specially
                        developed and multiply realized programs. The variety of trips is as diverse as our country itself –
                        from classical sightseeing tours to food and wine tours as well as guided backpacking trips, hiking
                        and trekking in mountains. You can also get therapeutic tours to popular Jermuk resort and
                        Tsaghkadzor winter ski resort. We offer the largest choice of hotels in Yerevan and regions of
                        Armenia, with seasonal prices. All the rates, mentioned on our web page for 2020, are valid and
                        refreshed depending on season, discount availability, special offers and hot tours.
                    </p>
                </div>
                <div class="row">

                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="package-place">
                            <div class="packageName">

                            </div>
                            <div class="Car-txt">
                                <h4>
                                    Tesla
                                </h4>

                            </div>
                            <div class="pacdet">
                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-regular fa-clock"></i></span> Tesla
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-calendar-check"></i></span> Two Seats
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> From 15000 AMD
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
                               <a href="{{ url('/car') }}">
                                 <button class="package-view">
                                    Details
                                </button>

                               </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->

                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="package-place">
                            <div class="packageName">

                            </div>
                            <div class="Car-txt">
                                <h4>
                                    Tesla
                                </h4>

                            </div>
                            <div class="pacdet">
                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-regular fa-clock"></i></span> Tesla
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-calendar-check"></i></span> Two Seats
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> From 15000 AMD
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
                               <a href="{{ url('/car') }}">
                                 <button class="package-view">
                                    Details
                                </button>

                               </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="package-place">
                            <div class="packageName">

                            </div>
                            <div class="Car-txt">
                                <h4>
                                    Tesla
                                </h4>

                            </div>
                            <div class="pacdet">
                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-regular fa-clock"></i></span> Tesla
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-calendar-check"></i></span> Two Seats
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> From 15000 AMD
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
                               <a href="{{ url('/car') }}">
                                 <button class="package-view">
                                    Details
                                </button>

                               </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="package-place">
                            <div class="packageName">

                            </div>
                            <div class="Car-txt">
                                <h4>
                                    Tesla
                                </h4>

                            </div>
                            <div class="pacdet">
                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-regular fa-clock"></i></span> Tesla
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-calendar-check"></i></span> Two Seats
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> From 15000 AMD
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
                               <a href="{{ url('/car') }}">
                                 <button class="package-view">
                                    Details
                                </button>

                               </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="package-place">
                            <div class="packageName">

                            </div>
                            <div class="Car-txt">
                                <h4>
                                    Tesla
                                </h4>

                            </div>
                            <div class="pacdet">
                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-regular fa-clock"></i></span> Tesla
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-calendar-check"></i></span> Two Seats
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> From 15000 AMD
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
                               <a href="{{ url('/car') }}">
                                 <button class="package-view">
                                    Details
                                </button>

                               </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="package-place">
                            <div class="packageName">

                            </div>
                            <div class="Car-txt">
                                <h4>
                                    Tesla
                                </h4>

                            </div>
                            <div class="pacdet">
                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-regular fa-clock"></i></span> Tesla
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-calendar-check"></i></span> Two Seats
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> From 15000 AMD
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
                               <a href="{{ url('/car') }}">
                                 <button class="package-view">
                                    Details
                                </button>

                               </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="package-place">
                            <div class="packageName">

                            </div>
                            <div class="Car-txt">
                                <h4>
                                    Tesla
                                </h4>

                            </div>
                            <div class="pacdet">
                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-regular fa-clock"></i></span> Tesla
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-calendar-check"></i></span> Two Seats
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> From 15000 AMD
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
                               <a href="{{ url('/car') }}">
                                 <button class="package-view">
                                    Details
                                </button>

                               </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="package-place">
                            <div class="packageName">

                            </div>
                            <div class="Car-txt">
                                <h4>
                                    Tesla
                                </h4>

                            </div>
                            <div class="pacdet">
                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-regular fa-clock"></i></span> Tesla
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-calendar-check"></i></span> Two Seats
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> From 15000 AMD
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
                               <a href="{{ url('/car') }}">
                                 <button class="package-view">
                                    Details
                                </button>

                               </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->
                    <div class="col-md-4 col-sm-6">

                        <div class="single-package-item">

                            <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="package-place">
                            <div class="packageName">

                            </div>
                            <div class="Car-txt">
                                <h4>
                                    Tesla
                                </h4>

                            </div>
                            <div class="pacdet">
                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-regular fa-clock"></i></span> Tesla
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-calendar-check"></i></span> Two Seats
                                </div>

                                <div class="packageOffer" style="margin-left: 20px">
                                    <span><i class="fa-solid fa-dollar-sign"></i></span> From 15000 AMD
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
                               <a href="{{ url('/car') }}">
                                 <button class="package-view">
                                    Details
                                </button>

                               </a>
                            </div>



                        </div>
                        <!--/.single-package-item-->

                    </div>
                    <!--/.col-->



                </div>
                <!--/.row-->
            </div>
        </div>
    </section>
@endsection
