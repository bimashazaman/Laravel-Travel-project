@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>

    <div class="container" style="align-items: center; text-align:center">
        <div class="aboutUs" style="text-align: center">
            <h1 style="margin-bottom: 50px">
                {{ __('About Us') }}
            </h1>

            @foreach ($aboutUs as $a)
                <h2>
                    {{ __($a->title) }}
                </h2>
                <p>
                    {{ __($a->description) }}
                </p>
                {{-- <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" style="width: 260px" alt=""> --}}
            @endforeach
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
