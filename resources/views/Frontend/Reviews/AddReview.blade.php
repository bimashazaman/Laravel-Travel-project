@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>







    <div class="container" style="padding: 30px">
        <h2 style="text-align: center; margin-bottom: -70px">
            Add Review
        </h2>
   

        <div class="row" style="padding: 40px; margin:auto">
            <div class="col-md-9 card" style="padding:30px; margin: 120px; box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px" >
                
                <form action="">
                    <input type="text" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px; margin-bottom:10px" type="text" class="form-control" placeholder="Your Name">
                    <textarea type="text" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px; margin-bottom:10px" type="text" class="form-control" placeholder="Add a Review"></textarea>
                    <input type="text" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px; margin-bottom:10px" type="text" class="form-control" placeholder="Add a Title">
                    <input type="text" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px; margin-bottom:10px" type="text" class="form-control" placeholder="Email">
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
