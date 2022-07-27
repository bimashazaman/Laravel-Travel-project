

@extends('layouts.master')
@section('content')
<div class="fullBanner">
    @include('partials.DefaultBanner')
</div>




    <div class="RentForm">

       
        <h2>
            {{ $travelBlog->title }}
        </h2>
        <p>
            {{ $travelBlog->type }}
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
           {{ $travelBlog->description }}
        </p>
        <br>
        <div class="row">
            @foreach ($travelBlog->images as $item)
            <div class="col-md-6">
                <img src="{{ asset($item->path) }}" alt="">
            </div>
            @endforeach
            
        </div>
        <br>
        <p>
           {{ $travelBlog->more_description }}
        </p>
   
       
    </div>
   
    <br>
    <br>
    <br>
@endsection
