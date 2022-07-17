@extends('Backend.Admin.AdminHome')
@section('admin-content')
    {{-- {{$tour}} --}}

  
    <div class="container-fluid">
        <h2 class="text-center font-weight-bold">

            {{$a->name}}
        </h2>
        <div class="row">
            <div class="col-md-12 w-75 align-content-center justify-content-center m-auto">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="padding: 20px; ">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner"
                        style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                        <div class="carousel-item active">
                            <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bGVuc3xlbnwwfHwwfHw%3D&w=1000&q=80"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.pexels.com/photos/1371360/pexels-photo-1371360.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhnf3eaSdDatqYhzTVvfWaUeheiao5bcXWIw&usqp=CAU"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
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
