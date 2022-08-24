<div class="col-md-3 formReqSec">
    <div class="row" style="margin-bottom: 10px">
        <span style="margin-right: 10px; font-size:1.7rem">
            <i class="fa-solid fa-user"></i>
        </span>
        <span style="color: black">
            {{ $creator->name }}
        </span>
    </div>
    <div class="row" style="margin-bottom: 10px">
        <span style="margin-right: 10px; font-size:1.7rem">
            <i class="fa-solid fa-calendar"></i>
        </span>
        <span style="color: black">
            {{ $creator->start_date }}
        </span>
    </div>

    <div class="row" style="margin-bottom: 10px">
        <span style="margin-right: 10px; font-size:1.7rem">
            <i class="fa-solid fa-car"></i>
        </span>
        <span style="color: black">
            {{ $creator->car }}
            {{ $creator->motorcycle }}
            {{ $creator->bike }}
            {{ $creator->hiking }}
        </span>
    </div>


    {{-- <div class="row" style="margin-bottom: 10px">
        <span style="margin-right: 10px; font-size:1.7rem">
            <i class="fa-solid fa-motorcycle"></i>
        </span>
        <span style="color: black">
            {{ $creator->motorcycle }}
        </span>
    </div>

    <div class="row" style="margin-bottom: 10px">
        <span style="margin-right: 10px; font-size:1.7rem">
            <i class="fa-solid fa-person-biking"></i>
        </span>
        <span style="color: black">
            {{ $creator->bike }}
        </span>
    </div>
    <div class="row" style="margin-bottom: 10px">
        <span style="margin-right: 10px; font-size:1.7rem">
            <i class="fa-solid fa-person-hiking"></i>
        </span>
        <span style="color: black">
            {{ $creator->hiking }}
        </span>
    </div> --}}
    <div class="row" style="margin-bottom: 10px">
        <span style="margin-right: 10px; font-size:1.7rem">
            <i class="fa-solid fa-location-dot"></i>
        </span>
        <span style="color: black">
            {{ $creator->creator_destinations_id }}
        </span>
    </div>

    <div class="row" style="margin-bottom: 10px">
        <span style="margin-right: 10px; font-size:1.7rem">
            <i class="fa-solid fa-location-dot"></i>
        </span>
        <span style="color: black">
            {{ $creator->meals }}
        </span>
    </div>

    <img src="{{ asset('images/track.PNG') }}" style="height: 32%">

</div>