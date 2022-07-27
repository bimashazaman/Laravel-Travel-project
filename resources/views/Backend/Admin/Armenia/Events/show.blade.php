@extends('Backend.Admin.AdminHome')
@section('admin-content')
    {{-- {{$car}} --}}

  
    <div class="container-fluid">
        <h2 class="text-center font-weight-bold">

           Event Details
        </h2>
        <div class="row">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="padding: 100px">
                <div class="carousel-inner" style="width: 69%;margin: auto;">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img src="{{ asset($tour_event->images->first()->path) }}" class="d-block w-100 " alt="...">
                    </div>

                    @foreach ($tour_event->images as $item)
                        @if ($item->id != $tour_event->images->first()->id)
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
                    {{ $tour_event->name }}
                </h3>
                <hr>

                <div class="d-flex justify-content-between">
                    <div class="col-md-3">
                        <div class="mb-3">
                           Name
                        </div>
                        <div class="mb-3">
                            Location
                         </div>
                         <div class="mb-3">
                           Time
                         </div>
                        <div class="mb-3">
                            Type
                        </div>
                        <div class="mb-3">
                           Period
                        </div>
                        <div class="mb-3">
                            Settlement
                        </div>

                        <div class="mb-3">
                            Distance
                        </div>

                        <div class="mb-3">
                            Duration
                        </div>

                        <div class="mb-3">
                            Price
                        </div>


                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            {{ $tour_event->name }}
                        </div>
                        <div class="mb-3">
                            {{ $tour_event->location }}
                        </div>
                        <div class="mb-3">
                            {{ $tour_event->time }}
                        </div>
                        <div class="mb-3">
                            {{ $tour_event->type }}
                        </div>
                        <div class="mb-3">
                            {{ $tour_event->period }}
                        </div>
                        <div class="mb-3">
                            {{ $tour_event->settlement }}
                        </div>
                        <div class="mb-3">
                            {{ $tour_event->distance }}
                        </div>
                        <div class="mb-3">
                            {{ $tour_event->duration }}
                        </div>
                        <div class="mb-3">
                            {{ $tour_event->price }}
                        </div>
                            
                       
                       
                    </div>
                </div>

            </div>

        </div>

    </div>

 




  
@endsection
