@extends('Backend.Admin.AdminHome')
@section('admin-content')
    {{-- {{$tour}} --}}

  
    <div class="container-fluid">
        <h2 class="text-center font-weight-bold">
           Mice {{$mice->name}}
        </h2>
        <div class="row">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="padding: 100px">
                <div class="carousel-inner" style="width: 69%;margin: auto;">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img src="{{ asset($mice->images->first()->path) }}" class="d-block w-100 " alt="...">
                    </div>
                    @foreach ($mice->images as $image)
                        @if ($image->id != $mice->images->first()->id)
                            <div class="carousel-item" data-bs-interval="1000">
                                <img src="{{ asset($image->path) }}" class="d-block w-100" alt="...">
                            </div>
                        @endif
                    @endforeach

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
                  {{ $mice->name }}
                </h3>
                <hr>
               

                <div class="d-flex justify-content-between">
                    <div class="col-md-3">
                        <div class="mb-3">
                            Name
                         </div>
                         <div class="mb-3">
                            Best Time to Visit
                          </div>
                          
                         <div class="mb-3">
                           Total Pax
                         </div>
                         <div class="mb-3">
                            Personal
                         </div>
                         <div class="mb-3">
                             Products
                         </div>

                       

                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            {{ $mice->name }}
                        </div>
                        <div class="mb-3">
                            {{ $mice->available }}
                        </div>
                        <div class="mb-3">
                            {{ $mice->total_pax }}
                        </div>
                        <div class="mb-3">
                           {{ $mice->personal }}
                        </div>
                        <div class="mb-3">
                           {{ $mice->Products }}
                        </div>
                      
                       
                    </div>
                </div>

            </div>

        </div>

    </div>

 




  
@endsection
