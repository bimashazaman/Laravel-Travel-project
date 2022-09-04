@extends('Backend.Admin.AdminHome')
@section('admin-content')

<!-- added successfully or not -->
@if(session('success'))
<div class="alert alert-success">
    {{session('msg')}}
</div>
@elseif(session('fail'))
<div class="alert alert-danger">
    {{session('msg')}}
</div>
@endif


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


<div class="row">
    <div class="col-md-12 d-flex overflow-scroll">

        <div class="card card-table flex-fill">
            <div class="card-body"
                style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                <div class="table-responsive no-radius">
                    <table class="table table-hover table-center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th class="text-center">Start Date</th>
                                <th class="text-center">End Date</th>
                                <th class="text-center">Price</th>
                                <th class="text-end">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tours as $touritem)
                                <tr>

                                    <td class="text-nowrap">{{ $touritem->name }}</td>
                                    <td class="text-center">{{ $touritem->start_date }}</td>
                                    <td class="text-center">
                                        {{ $touritem->end_date }}
                                    </td>
                                    <td class="text-center">
                                        {{ $touritem->price }} AMD
                                    </td>
                                    <td class="text-end">
                                        <div class="font-weight-600 text-danger float-end" style="display: flex">
                                            <span>
                                                <a href="{{ url('/admin/tours/detail', $touritem->id) }}">
                                                    <button type="button"
                                                        style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;"
                                                        class="btn btn-success">Detail</button>
                                                </a>
                                            </span>
                                            <span>
                                                <!-- <a href="{{ url('/admin/UpdateClassicTour') }}"> -->
                                                <a href="/admin/UpdateTourPage/{{ $touritem->id }}">
                                                    <button type="button"
                                                        style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px; color:white"
                                                        class="btn btn-info">Update</button>
                                                </a>
                                            </span>
                                             
                                            <span>
                                                <form method="POST" action="/admin/tour/delete/{{ $touritem->id }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-danger delete-user"
                                                            value="Delete">
                                                    </div>
                                                </form>
                                                <!-- <button type="button" class="btn btn-danger">Delete</button> -->
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                       
                       
                        
                    </table>
                  
                  {{-- {{ count($tour) }} --}}
                  {{-- <div class="" style="float: right">
                    {{ $tour->links() }}
                  </div>
                  --}}
                    
                </div>
            </div>
        </div>

    </div>
</div>
<!-- <script src="url('js/tour.js')"></script> -->
@endsection