@extends('Backend.Admin.AdminHome')
@section('admin-content')
    {{-- {{$tour}} --}}

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
    @elseif(session('fail'))
        <div class="alert alert-danger">
            {{ session('msg') }}
        </div>
    @endif


    <div class="container-fluid">
        <h2 class="text-center font-weight-bold">

            Tour Description
        </h2>

      

        <div class="row">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="padding: 100px">
                <div class="carousel-inner" style="width: 69%;margin: auto;">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img src="{{ asset($tour->images->first()->path) }}" class="d-block w-100 " alt="...">
                    </div>

                    @foreach ($tour->images as $item)
                        @if ($item->id != $tour->images->first()->id)
                            <div class="carousel-item" data-bs-interval="1000">
                                <img src="{{ asset($item->path) }}" class="d-block w-100" alt="...">
                            </div>
                        @endif
                    @endforeach
                    {{-- <div class="carousel-item">
                        <img src="{{ asset($tour->images->first()->path) }}" class="d-block w-100" alt="...">
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
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>
                {{ $tour->name }}
            </h2>
            <p>
                {{ $tour->description }}
            </p>
            <p>
                {{ $tour->Itenanary }}
            </p>
        </div>
    </div>



    <div class="col-md-12">

        <div>
            <div
                style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center">
                <h3 class="">
                    More Informations
                </h3>
                <hr>

                <div class="d-flex justify-content-between">
                    <div class="col-md-3">
                        <div class="mb-3">
                            Type
                        </div>
                        <div class="mb-3">
                            Price
                        </div>
                        <div class="mb-3">
                            Duration
                        </div>
                        <div class="mb-3">
                            Start Date
                        </div>
                        <div class="mb-3">
                            End date
                        </div>
                        <div class="mb-3">
                            One day price
                        </div>
                        <div class="mb-3">
                            One week price
                        </div>
                        <div class="mb-3">
                            One mounth
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">

                            @foreach ($tour->types as $t)
                                {{ $t->type_name . ',' }}
                            @endforeach

                        </div>
                        <div class="mb-3">
                            {{ $tour->price }}
                        </div>
                        <div class="mb-3">
                            {{ $tour->duration }}
                        </div>
                        <div class="mb-3">
                            {{ $tour->start_date }}
                        </div>
                        <div class="mb-3">
                            {{ $tour->end_date }}
                        </div>
                        <div class="mb-3">
                            {{ $tour->one_day_price }}
                        </div>
                        <div class="mb-3">
                            {{ $tour->one_week_price }}

                        </div>
                        <div class="mb-3">
                            {{ $tour->one_month_price }}
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <div class="row">
        <div class="text-center">
            <h2>
                Interested to add more info?
            </h2>
        </div>
        <div class="col-md-4">
            <div
                style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center">
                <h3 class="">
                    Tour Program
                </h3>
                <hr>

                <form action="{{ url('/admin/tourprogram/' . $tour->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="">
                        <input type="text" class="form-control mt-2" placeholder="Day 1" name="day">
                        <input type="text" class="form-control mt-2" placeholder="USA - CHINA- CANADA" name="fromTo">
                        <input type="text" class="form-control mt-2" placeholder="Description" name="description">
                        <input type="text" class="form-control mt-2" placeholder="500KM" name="distance">
                        <input type="text" class="form-control mt-2" placeholder="Duration" name="duration">
                        <input type="text" class="form-control mt-2" placeholder="Lunch/Dinner etc" name="food">
                        <input type="text" class="form-control mt-2" placeholder="Location" name="location">
                        <hr>
                        <button class="btn btn-info text-white">
                            Submit
                        </button>
                    </div>

                </form>

                <div class="list-group list-group-light">

                    @foreach ($tour->program as $tourProgram)
                        <div class="list-group-item list-group-item-action px-3 border-0 justify-content-between"
                            style="display: flex">


                            <div style="display: block; background-color:rgb(248, 251, 253); border-radius:20px"
                                class="w-100 p-3">
                                <div>
                                    <h4 class="text-center">
                                        {{ $tourProgram->day }}
                                    </h4>
                                    <hr>
                                    <div>
                                        {{ $tourProgram->fromTo }}
                                    </div>
                                    <hr>
                                    <div>
                                        <p>
                                            {{ $tourProgram->description }}
                                        </p>
                                    </div>
                                    <hr>
                                    <div>
                                        <span style="margin-right: 5px"> {{ $tourProgram->distance }}</span> |
                                        <span style="margin-right: 5px">{{ $tourProgram->duration }}</span> |
                                        <span style="margin-right: 5px">{{ $tourProgram->location }}</span>
                                    </div>
                                    <div>
                                        <span>{{ $tourProgram->food }}</span>
                                    </div>
                                </div>
                                <div style="float: right">
                                    <form action="{{ url('/admin/tourprogram/delete/' . $tourProgram->id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger btn-sm ">
                                            Detete
                                        </button>
                                    </form>
                                </div>

                            </div>

                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>







        </div>
        <div class="col-md-4">
            <div
                style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center">
                <h3 class="">
                    Tour Facilities
                </h3>
                <hr>

                <form action="{{ url('admin/facility/' . $tour->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="">
                        <input type="text" class="form-control" placeholder="What is included" name="name">

                        <input type="text" class="form-control mt-2" placeholder="What is not included"
                            name="unname">


                        <hr>
                        <button class="btn btn-info text-white">
                            Submit
                        </button>
                    </div>

                </form>

                <br>
                <div class="list-group list-group-light">
                    @foreach ($tour->facility as $tourFacility)
                        <div class="list-group-item list-group-item-action px-3 border-0 justify-content-between"
                            style="display: flex">

                            {{ $tourFacility->name }}
                            <hr>


                            {{-- {{ $tourFacility->unname }} --}}


                            <form action="{{ url('/admin/facility/delete/' . $tourFacility->id) }}" method="POST"
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

            <div
                style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center">
                <h3 class="">
                    Add multiple type
                </h3>
                <hr>

                <form action="{{ url('/admin/type/' . $tour->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="">
                        <div class="form-group row">
                            {{-- <label class="col-form-label col-md-2">Tour Type</label> --}}
                            <div class="col-md-10">
                                <select class="form-control form-select" name="type_name">

                                    @foreach ($type as $category)
                                        <option value="{{ $category->type_name }}">{{ $category->type_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-info text-white">
                            Submit
                        </button>
                    </div>

                </form>



                <br>
                <div class="list-group list-group-light">
                    @foreach ($tour->types as $tourFacility)
                        <div class="list-group-item list-group-item-action px-3 border-0 justify-content-between"
                            style="display: flex">

                            {{ $tourFacility->type_name }}
                            <hr>


                            {{-- {{ $tourFacility->unname }} --}}


                            <form action="{{ url('/admin/facility/delete/' . $tourFacility->id) }}" method="POST"
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

            <div
                style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center">
                <h3 class="">
                    Add Useful info
                </h3>
                <hr>

                <form action="{{ url('/admin/adduseful/' . $tour->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="">
                        <div class="form-group row">
                            {{-- <label class="col-form-label col-md-2">Tour Type</label> --}}
                            <input type="text" class="form-control" placeholder="Add Info" name="name">
                        </div>
                        <hr>
                        <button class="btn btn-info text-white">
                            Submit
                        </button>
                    </div>

                </form>



                <br>
                <div class="list-group list-group-light">
                    @foreach ($tour->useful as $tourFacility)
                        <div class="list-group-item list-group-item-action px-3 border-0 justify-content-between"
                            style="display: flex">

                            {{ $tourFacility->name }}
                            <hr>


                        </div>
                    @endforeach

                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div
                style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center">
                <h3 class="">
                    Highlights
                </h3>
                <hr>

                <form action="{{ url('admin/highlight/' . $tour->id) }}" method="POST" enctype="multipart/form-data">
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

                    @foreach ($tour->highlights as $highlight)
                        <div class="list-group-item list-group-item-action px-3 border-0 justify-content-between"
                            style="display: flex">

                            {{ $highlight->name }}


                            <form action="{{ url('/admin/highlight/delete/' . $highlight->id) }}" method="POST"
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
            <div
                style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center">
                <h3 class="">
                    Guarantee Departure
                </h3>
                <hr>

                <form action="{{ url('/admin/departure/' . $tour->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="">
                        <input type="text" class="form-control" placeholder="Start Date" name="start_date">
                        <input type="text" class="form-control mt-1" placeholder="End Date" name="end_date">
                        <input type="text" class="form-control mt-1" placeholder="Max Pax" name="price">
                        <input type="text" class="form-control mt-1" placeholder="Price" name="pax">

                        <hr>
                        <button class="btn btn-info text-white">
                            Submit
                        </button>
                    </div>

                </form>

                <div class="list-group list-group-light">

                    @foreach ($tour->departureTable as $departure)
                        <div class="list-group-item list-group-item-action px-3 border-0 justify-content-between"
                            style="display: flex">


                            <div style="display: block; background-color:rgb(248, 251, 253); border-radius:20px"
                                class="w-100 p-3">
                                <div>
                                    <p>
                                        <b>Start Date:</b> {{ $departure->start_date }}
                                    </p>
                                    <p>
                                        <b> End Date:</b> {{ $departure->end_date }}
                                    </p>
                                    <p>
                                        <b> Max Pax:</b> {{ $departure->pax }}
                                    </p>
                                    <p>
                                        <b>Price:</b>{{ $departure->price }}
                                    </p>

                                </div>
                                <div style="float: right">
                                    <form action="{{ url('/admin/departure/delete/' . $tour->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger btn-sm ">
                                            Detete
                                        </button>
                                    </form>
                                </div>

                            </div>

                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>

    </div>


    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="page-title" style="text-align: center">Create Related Tour</h2>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-12">
            <div class="card" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                <div class="card-header">
                    <h4 class="card-title">Add Information</h4>
                </div>
                <div class="card-body">
                    <form id="tourForm" action="/admin/addRelated/{{ $tour->id }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Tour name</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="name">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Description</label>
                            <div class="col-md-10">
                                <textarea style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px; width:100%; border:none" name="description" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Itenanary</label>
                            <div class="col-md-10">
                                <textarea style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px; width:100%; border:none" name="Itenanary" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Duration</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="duration">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Price</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="price">
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Price AMD</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="AMD">
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Price RUR</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="RUR">
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Price EURO</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="EURO">
                            </div>
    
                        </div>
    
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Start Date</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="start_date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">2-3 Pax</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="one_day_price">
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">4-6 Pax</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="one_week_price">
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">17-30 Pax</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="one_month_price">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">30 Pax More</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="one_year_price">
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">End Date</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="end_date">
                            </div>
                        </div>
    
                        <!-- category dropdown -->
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Tour Category</label>
                            <div class="col-md-10">
                                <select class="form-control form-select" name="category_id">
                                   
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
    
                        <!-- destination dropdown -->
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Country</label>
                            <div class="col-md-10">
                                <select class="form-control form-select" name="destination_id">
                                    
                                    @foreach($destinations as $destination)
                                    <option value="{{ $destination->id }}">{{$destination->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">For Home?</label>
                            <div class="col-md-10">
                                <select class="form-control form-select" name="home_tour_id">
                                    
                                    @foreach($homeTour as $d)
                                    <option value="{{ $d->id }}">{{$d->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                       
    
                    
    
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">File Input </label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" class="form-control" type="file" name="images[]" multiple="">
                            </div>
                        </div>
                     
                        <div style="float: right">
                            <button class="btn btn-info" style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; color:white; width:120px" type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
    
        </div>
    </div>
   
    @endsection
