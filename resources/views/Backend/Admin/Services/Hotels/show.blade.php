@extends('Backend.Admin.AdminHome')
@section('admin-content')
    {{-- {{$tour}} --}}


    <div class="container-fluid">
        <h2 class="text-center font-weight-bold">
            Hotel Description
        </h2>
        <div class="row">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="padding: 100px">
                <div class="carousel-inner" style="width: 69%;margin: auto;">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img src="{{ asset($hotel->images->first()->path) }}" class="d-block w-100 " alt="...">
                    </div>
                    @foreach ($hotel->images as $image)
                        @if ($image->id != $hotel->images->first()->id)
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

<center>
    <h5>
        {{ $hotel->description }}
    </h5>
    
</center>
    <div class="col-md-12">

        <div>
            <div
                style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center">
            

                <div class="d-flex justify-content-between">
                    <div class="col-md-3">
                        <div class="mb-3">
                            Name
                        </div>
                        <div class="mb-3">
                            Address
                        </div>

                        <div class="mb-3">
                            Stars
                        </div>
                        <div class="mb-3">
                            Price
                        </div>
                        <div class="mb-3">
                            Free Cancelation
                        </div>



                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            {{ $hotel->name }}
                        </div>
                        <div class="mb-3">
                            {{ $hotel->address }}
                        </div>
                        <div class="mb-3">
                            {{ $hotel->stars }}
                        </div>
                        <div class="mb-3">
                            {{ $hotel->price }}
                        </div>
                        <div class="mb-3">
                            {{ $hotel->free_cancelation }}
                        </div>


                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <div
                style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center">
                <h3 class="">
                    Highlights
                </h3>
                <hr>

                <form action="{{ url('/admin/hotel/highlight/' . $hotel->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="">
                        <input type="text" class="form-control" placeholder="Add Highlights" name="name">

                        <hr>
                        <button class="btn btn-info text-white">
                            Submit
                        </button>
                    </div>

                </form>
                <br>
                <div class="list-group list-group-light">

                    @foreach ($hotel->highlights as $highlight)
                        <div class="list-group-item list-group-item-action px-3 border-0 justify-content-between"
                            style="display: flex">

                            {{ $highlight->name }}


                            <form action="{{ url('/hotelHighlight/delete/' . $highlight->id) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger btn-sm ">
                                    Detete
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div
                style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center">
                <h3 class="">
                    Rooms
                </h3>
                <hr>
                <form action="{{ url('/admin/hotel/room/' . $hotel->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="">
                        <input type="text" class="form-control" placeholder="Add Room" name="name">
                        <input type="text" class="form-control mt-2" placeholder="Add Price" name="price">
                        <input type="text" class="form-control mt-2" placeholder="Add Price" name="price2">
                        <hr>
                        <button class="btn btn-info text-white" type="submit">
                            Submit
                        </button>
                    </div>

                </form>
                <br>
                <div class="list-group list-group-light">

                    @foreach ($hotel->rooms as $room)
                        <div class="list-group-item list-group-item-action px-3 border-0 justify-content-between"
                            style="display: flex">

                            <div>
                                <b>Room Type:</b> {{ $room->name }}
                            </div>

                            <div>
                                <b>Price:</b> {{ $room->price }} - {{ $room->price2 }}

                            </div>

                            <form action="{{ url('/hotelRoom/delete/' . $room->id) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger btn-sm ">
                                    Detete
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-md-6">
            <div
                style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center">
                <h3 class="">
                    Hotel Included
                </h3>
                <hr>
                <form action="{{ url('/admin/hotel/facility/' . $hotel->id) }}" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="">
                        <input type="text" class="form-control" placeholder="What is included?" name="name">

                        <hr>
                        <button class="btn btn-info text-white" type="submit">
                            Submit
                        </button>
                    </div>

                </form>
                <br>
                <div class="list-group list-group-light">

                    @foreach ($hotel->hotelFacilities as $room)
                        <div class="list-group-item list-group-item-action px-3 border-0 justify-content-between"
                            style="display: flex">

                            <div>
                                {{ $room->name }}
                            </div>



                            <form action="{{ url('/hotelFacility/delete/' . $room->id) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger btn-sm ">
                                    Detete
                                </button>
                            </form>

                            <hr>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div
                style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center">
                <h3 class="">
                    Useful to Know
                </h3>
                <hr>
                <form action="{{ url('/admin/addHotelInfo/' . $hotel->id) }}" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="">
                        <input type="text" class="form-control" placeholder="What is useful to know?" name="name">

                        <hr>
                        <button class="btn btn-info text-white" type="submit">
                            Submit
                        </button>
                    </div>

                </form>
                <br>
                <div class="list-group list-group-light">

                    @foreach ($hotel->hotelInfo as $room)
                        <div class="list-group-item list-group-item-action px-3 border-0 justify-content-between"
                            style="display: flex">

                            <div>
                                {{ $room->name }}
                            </div>



                            <form action="{{ url('/hotelInfo/delete/' . $room->id) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger btn-sm ">
                                    Detete
                                </button>
                            </form>

                            <hr>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>
@endsection
