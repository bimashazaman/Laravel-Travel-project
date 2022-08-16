@extends('layouts.master')
@section('content')

<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>



<div class="aboutUs" style="text-align: center">

    <h3 style="margin-bottom: 50px">
        {{ __('Ways to Book') }}
    </h3>
    @foreach ($ways as $w)
        
    
    <center style="margin: auto">
        <p style="color: #2294E3"> <span><i class="fa-solid fa-check-double"></i></span> {{ __($w->title) }}</p>
    <p style="color: rgb(100, 99, 99)">{{ __($w->description) }}</p>
    

    </center>

    @endforeach
</div>

<br>
<br>
<br>
<br>
@endsection
