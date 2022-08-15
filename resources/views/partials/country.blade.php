<div class="row ">

    <div class="col-lg-3 col-md-6">

    </div>

    <div class="col-lg-3 col-md-6">
        <a href="{{ url('/nearbyByCategoryId/1') }}">
            <div class="TwoCardNearby"
                {{-- style="background-color: #FAEFD7; box-shadow:none; border:0.1px solid rgb(212, 211, 211)" --}}
                >
                <img src="{{ asset('images/ge.png') }}" alt="">
                <h4 style="margin: 10px">
                    {{ __('Georgia') }}
                </h4>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6">
        <a href="{{ url('/nearbyByCategoryId/2') }}">
            <div class="TwoCardNearby">
                <img src="{{ asset('images/iran.png') }}" alt="">
                <h4 style="margin: 10px">
                    {{ __('Iran') }}
                </h4>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6">

    </div>

</div>