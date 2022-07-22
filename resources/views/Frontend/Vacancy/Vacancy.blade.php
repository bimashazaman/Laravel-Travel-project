@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>

    <div class="container" style="padding: 30px">
        <h2 style="text-align: center">
            Classic Budget Tour
        </h2>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus reiciendis sit labore minus laborum eos, ipsum
            illo voluptates veritatis nam soluta odit, doloremque beatae fugit placeat? Placeat nesciunt deserunt cupiditate
            recusandae unde vitae necessitatibus sed, quia illum nobis. Illum modi labore quis dignissimos earum architecto
            repellendus aspernatur, provident in nobis neque laudantium hic corporis error consequuntur quam vel officia
            recusandae laborum esse vero quaerat odio! Dolorum laboriosam cum beatae non?
        </p>
        <br>

        <div class="row" style="padding: 40px">
            <div class="col-md-9">
                <div class="row" style="margin-bottom: 40px">
                    <div>
                        <div style="display: flex">
                            <img src="https://static.toiimg.com/photo/67382132.cms"
                                style="width:35%; height:17%; margin-right: 20px" alt="">

                            <div style="margin-left: 20px">

                                <h5 style="font-weight: 600">
                                    Title
                                </h5>

                                <p style="color: black; margin-top:10px">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, aliquid! Lorem ipsum
                                    dolor sit amet.
                                </p>


                                <div class="" style="font-weight: 500; font-size:16px; margin-top:10px">

                                    <i class="fa-regular fa-clock" style="color: #e5a686"></i> <span>A date</span>
                                    <br>
                                    <br>
                                    <br>

                                    <div style="">
                                        <button class="package-view">
                                            Show more
                                        </button>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>

                            </div>


                        </div>


                    </div>

                </div>
                <form action="">
                    <input type="text" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text"
                        class="form-control" placeholder="Add a Review">
                </form>
                <br>
                <div class="star-rating">

                    <div class="thanks-msg">Thanks for your feedback !!!</div>
                    <div class="star-input">
                        <input type="radio" name="rating" id="rating-5">
                        <label for="rating-5" class="fas fa-star"></label>
                        <input type="radio" name="rating" id="rating-4">
                        <label for="rating-4" class="fas fa-star"></label>
                        <input type="radio" name="rating" id="rating-3">
                        <label for="rating-3" class="fas fa-star"></label>
                        <input type="radio" name="rating" id="rating-2">
                        <label for="rating-2" class="fas fa-star"></label>
                        <input type="radio" name="rating" id="rating-1">
                        <label for="rating-1" class="fas fa-star"></label>

                        <!-- Rating Submit Form -->
                        <form>
                            <span class="rating-reaction"></span>
                            <button type="submit" class="submit-rating">Submit</button>
                        </form>
                    </div>
                </div>




            </div>
            <div class="col-md-5"></div>
        </div>
    </div>

    <script>
        const btn = document.querySelector(".submit-rating");
        const thanksmsg = document.querySelector(".thanks-msg");
        const starRating = document.querySelector(".star-input");
        // Success msg show/hide
        btn.onclick = () => {
            starRating.style.display = "none";
            thanksmsg.style.display = "table";
            return false;
        };
    </script>
@endsection
