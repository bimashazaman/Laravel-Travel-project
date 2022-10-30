@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>

    <!-- added successfully or not -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
    @elseif(session('fail'))
        <div class="alert alert-danger">
            {{ session('msg') }}
        </div>
    @endif

    <div class="container">
        <h2 style="text-align: center; margin-bottom: -70px">
            {{ __('Add Review') }}
        </h2>

        <div class="row" style="padding: 40px; margin:auto">
            <div class="col-md-9 card" style="padding:30px;



            box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px">
                <form action="/review/store"method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px; margin-bottom:10px"
                        type="text" class="form-control" placeholder="{{ __('Your Name') }}" name="name">
                    <textarea type="text" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px; margin-bottom:10px" type="text"
                        class="form-control" placeholder="{{ __('Add a Review') }}" name="review"></textarea>
                    <input type="text" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px; margin-bottom:10px"
                        type="text" class="form-control" placeholder="{{ __('Add a Title') }}" name="title">
                    <input type="text" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px; margin-bottom:10px"
                        type="text" class="form-control" placeholder="{{ __('Email') }}" name="email">
                    <select class="form-control form-select" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" name="category_id">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <br>

                    <input type="file" name="images[]"
                        multiple="">


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

                            <span class="rating-reaction"></span>
                            <button type="submit" class="package-view" value="submit">Submit</button>
                            <br>
                            <br>
                            <center>
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </center>

                        </div>
                    </div>

                </form>




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
