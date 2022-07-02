@extends('layouts.master')
@section('content')

<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br><br><br>
<br>
<br>
<br><br><br>


<form action="" class="hotelForm">
    <div class="form-group htt">

        <select class="form-control" id="exampleFormControlSelect1">
          <option class="chooseO">Choose Country</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class="form-group htt">

        <select class="form-control" id="exampleFormControlSelect1">
          <option class="chooseO">Choose region</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class="form-group htt">

        <select class="form-control" id="exampleFormControlSelect1">
          <option class="chooseO">Choose Type</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
</form>

<p class="hotelDes">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum sequi reprehenderit, nam laborum architecto accusantium temporibus deleniti quam, nisi sint tenetur nihil ipsam maiores minus eius assumenda officia debitis? Autem hic quae aliquam consequatur maxime dolorum quisquam illum dignissimos iste eaque sit architecto laudantium magnam sint error, dolorem aperiam quos voluptates sequi dolore. Eveniet aspernatur at excepturi ad deleniti asperiores quasi beatae totam officiis accusamus. Eos reiciendis molestias vero repellat atque! Cupiditate, doloremque nostrum aperiam in dolore provident praesentium voluptatum hic voluptas cum quis animi harum deserunt unde distinctio aut.
</p>

<section id="pack" class="packages">
    <div class="container">

        <!--/.gallery-header-->
        <div class="packages-content">
            <h2 style="text-align: center; padding-bottom:25px">
                <span class="title-head">Most populer hotels</span>
            </h2>
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
                <!--/.col-->

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
                <!--/.col-->
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
                <!--/.col-->
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
                <!--/.col-->
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
                <!--/.col-->
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
                <!--/.col-->
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
                <!--/.col-->
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
                <!--/.col-->
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
                <!--/.col-->



            </div>
            <!--/.row-->
        </div>
        <!--/.packages-content-->
    </div>
    <!--/.container-->
</section>

@endsection
