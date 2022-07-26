@extends('Backend.Admin.AdminHome')
@section('admin-content')
    {{-- {{$tour}} --}}

  
    <div class="container-fluid">
        <h2 class="text-center font-weight-bold">

            {{$a->name}}
        </h2>
        <div class="row">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="padding: 100px">
                <div class="carousel-inner" style="width: 69%;margin: auto;">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img src="{{ asset($a->images->first()->path) }}" class="d-block w-100 " alt="...">
                    </div>

                    @foreach ($a->images as $item)
                        @if ($item->id != $a->images->first()->id)
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
                    {{ $a->name }}
                </h3>

                <p>
                    {{ $a->description }}
                </p>
                <hr>

                <div class="d-flex justify-content-between">
                    <div class="col-md-3">
                        <div class="mb-3">
                           Available
                        </div>
                        <div class="mb-3">
                            Type
                         </div>
                         <div class="mb-3">
                          Total Pax
                         </div>
                        <div class="mb-3">
                           One Day Price
                        </div>
                        <div class="mb-3">
                            Weekly Price
                        </div>
                        <div class="mb-3">
                            Monthly Price
                        </div>

                        <div class="mb-3">
                           Free Cancelation
                        </div>

                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            {{ $a->availability }}
                        </div>
                        <div class="mb-3">
                            {{ $a->type }}
                        </div>
                        <div class="mb-3">
                            {{ $a->total_pax }}
                        </div>
                        <div class="mb-3">
                            {{ $a->one_day_price }}
                        </div>
                        <div class="mb-3">
                            {{ $a->one_week_price }}
                        </div>
                        <div class="mb-3">
                            {{ $a->one_month_price }}
                        </div>
                        <div class="mb-3">
                            {{ $a->free_cancelation }}
                        </div>
                       
                    </div>
                </div>

            </div>

        </div>

    </div>

 




  
@endsection
