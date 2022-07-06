@extends('Backend.Admin.AdminHome')
@section('admin-content')
    <div class="row">
        <div class="col-md-12 d-flex">

            <div class="card card-table flex-fill">
                <div class="card-header">
                    <h4 class="card-title float-start">Classic Tour List .</h4>



                    <div class="table-search float-end">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                    </div>

                    <a href="{{ url('/admin/CreateClassicTour') }}" style="margin-right: 20px">
                        <button type="button" class="btn btn-primary">Create Classic Tour</button>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive no-radius">
                        <table class="table table-hover table-center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="text-center">Start Date</th>
                                    <th class="text-center">Duration</th>
                                    <th class="text-center">Cetagory</th>
                                    <th class="text-center">Destination</th>
                                    <th class="text-center">End Date</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Image</th>
                                    <th class="text-end">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tour as $touritem)
                                <tr>

                                    <td class="text-nowrap">tour name</td>
                                    <td class="text-center">{{$touritem->start_date}}</td>
                                    <td class="text-center">
                                        {{$touritem->end_date}}
                                    </td>
                                    <td class="text-center">
                                        {{$touritem->price}}
                                    </td>
                                    <td class="text-end">
                                        <div class="font-weight-600 text-danger">
                                            <span>
                                               <a href="{{ url('/admin/tours/detail',$touritem->id) }}">
                                                <button type="button" class="btn btn-success">Detail</button>
                                               </a>
                                            </span>
                                            <span>
                                                <a href="{{ url('/AddHighlight') }}">
                                                 <button type="button" class="btn btn-info">Add Highlights</button>
                                                </a>
                                             </span>
                                             <span>
                                                <a href="{{ url('/AddFacility') }}">
                                                 <button type="button" class="btn btn-success">Add Facility</button>
                                                </a>
                                             </span>
                                            <span>
                                               <a href="{{ url('/UpdateClassicTour') }}">
                                                <button type="button" class="btn btn-success">Update</button>
                                               </a>
                                            </span>
                                            <span>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>

    </div>
@endsection
