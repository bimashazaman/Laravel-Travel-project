

@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>
    <div class="RentForm">
        <h2>
            {{ __($travelBlog->title) }}
        </h2>
        <p>
            {{ __($travelBlog->type) }}
        </p>
        <a href="">
            2expedition
        </a>
        <p>
            {{ $travelBlog->created_at->diffForHumans() }}
        </p>
        <br>
        <br>
        <p>
           {{ __($travelBlog->description) }}
        </p>
        <br>
        <div class="row">
            @foreach ($travelBlog->images as $item)
            <div class="col-md-6">
                <img src="{{ url(asset($item->path)) }}">
            </div>
            @endforeach  
        </div>
        <br>
        <p>
           {{ __($travelBlog->more_description) }}
        </p>
    </div>
   
    <br>
    <br>
    <br>
@endsection
