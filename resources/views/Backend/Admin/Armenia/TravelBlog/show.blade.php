@extends('Backend.Admin.AdminHome')
@section('admin-content')
    {{-- {{$tour}} --}}

  
    <div class="container-fluid">
        <h2 class="text-center font-weight-bold">

            {{$travelBlog->name}}
        </h2>
        <div class="row">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="padding: 100px">
                <div class="carousel-inner" style="width: 69%;margin: auto;">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img src="{{ asset($travelBlog->images->first()->path) }}" class="d-block w-100 " alt="...">
                    </div>

                    @foreach ($travelBlog->images as $item)
                        @if ($item->id != $travelBlog->images->first()->id)
                            <div class="carousel-item" data-bs-interval="1000">
                                <img src="{{ asset($item->path) }}" class="d-block w-100" alt="...">
                            </div>
                        @endif
                    @endforeach
                    {{-- <div class="carousel-item">
                        <img src="{{ asset($car->images->first()->path) }}" class="d-block w-100" alt="...">
                    </div> --}}
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
   

    
    <div class="col-md-12">

        <div>
            <div
                style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center">
                <h3 class="">
                    {{ $travelBlog->title }}
                </h3>
<hr>
                <p>
                    {{ $travelBlog->description }}
                </p>
                <hr>

                <p>
                    {{ $travelBlog->more_description }}
                </p>

              

            </div>

        </div>

    </div>

 




  
@endsection
