@extends('Backend.Admin.AdminHome')
@section('admin-content')
    <div class="row">
        <div class="col-md-12 d-flex">

            <div class="card card-table flex-fill">
                <div class="card-header">
                    <h4 class="card-title float-start">Cars</h4>

                    <a href="{{ url('/car/create') }}">
                        <button class="btn btn-primary float-right">Add Car</button>
                    </a>

                    <div class="table-search float-end">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                    </div>

                    
                </div>
                <div class="card-body" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                    <div class="table-responsive no-radius">
                        <table class="table table-hover table-center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="text-center">Seats</th>
                                    <th class="text-center">Daily Price</th>
                                    <th class="text-center">Weekly price</th>
                                    <th class="text-end">Monthly price</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>


                            {{-- // if car is not available --}}
                            @if (count($cars) == 0)
                                <tr>
                                    <td colspan="6" class="text-center">
                                     <a href="{{ url('/car/create') }}">
                                        <h4>
                                            Click me
                                         </h4>
                                     </a>
                                     <span>
                                        to add a car
                                     </span>
                                    </td>
                                </tr>
                            @endif
                            <tbody>
                                @foreach ($cars as$car )
                                    
                               
                                <tr>

                                    
                                    <td class="text-nowrap">
                                        {{ $car->name }}
                                    </td>
                                    <td class="text-center">
                                        {{ $car->seats }}
                                    </td>
                                    <td class="text-center">
                                        {{ $car->daily_price }}
                                    </td>
                                    <td class="text-center">
                                        {{ $car->weekly_price }}
                                    </td>
                                    <td class="text-center">
                                        {{ $car->monthly_price }}
                                    </td>

                                    
                                    <td class="text-end" >
                                        <div class="font-weight-600 text-danger float-end" style="display: flex">
                                            <span>
                                               <a href="
                                                {{ url('/carShow/' . $car->id) }}
                                             
                                               "> 
                                                <button type="button" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;" class="btn btn-success">Detail</button>
                                               </a>
                                            </span>
                                            <span>
                                               <a href="{{ url('/car/edit/'.$car->id) }}">
                                                <button type="button" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px; color:white" class="btn btn-info">Update</button>
                                               </a>
                                            </span>
                                           

                                                <form method="POST" action="/car/delete/{{$car->id}}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                            
                                                   <span>
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-danger delete-user" value="Delete">
                                                    </div>
                                                   </span>
                                                </form>
                                
                                            
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














{{-- @extends('Backend.Admin.AdminHome')
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
                                    <th class="text-center">End Date</th>
                                    <th class="text-center">Price</th>
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
@endsection --}}
