@extends('layouts.master')

@section('content')

<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>
    <div class="row">
        <div class="container" style="color: black;">
            <h2 style="text-align: center">
                {{ __('Useful to know') }}
            </h2>
            <br>
            <center>
                <p style="font-weight: 500">
                    {{ __('Interesting facts') }}
                </p>
            </center>
            <br>
            <br>
            <div class="col-md-6">
                <br>
                <br>
                <br>
                @foreach ($usefulInfos as $u)
                <div style="display: flex">
                    <span><i class="fa-solid fa-check-double"></i></span>
                    <p style="color: black; padding-left: 10px; font-size:1.5rem">
                        {{ __($u->facts) }}
                    </p>
                </div>
                <br>
                @endforeach
            
                <br>
                
                <br>
                <center>
                    <p style="font-weight: 500">
                        {{ __('Tips for tourist') }}
                    </p>
                </center>
                <br>
                @foreach ($usefulInfos as $u)
                <div style="display: flex">
                    <span><i class="fa-solid fa-check-double"></i></span>
                    <p style="color: black; padding-left: 10px; font-size:1.5rem">
                        {{ __($u->tips) }}
                    </p>
                </div>
                
                <br>
                <br>
                @endforeach
                <br>
                <br>
                <br>
            </div>
            {{-- <div class="col-md-6">
                <div class="factBox"></div>

                <div class="factBox"></div>
            </div> --}}
        </div>
    </div>
@endsection
