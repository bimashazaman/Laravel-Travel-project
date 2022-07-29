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

    <div class="row">
        <div class="col-md-12 d-flex">

            <div class="card card-table flex-fill">
                <div class="card-header">
                    <h4 class="card-title float-start">MICE</h4>

                    <a href="{{ url('/admin/Mice/create') }}">
                        <button class="btn btn-primary float-right">Add Mice</button>
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
                                    <th class="text-center">Available</th>
                                    <th class="text-center">Total Pax</th>
                                    <th class="text-center">personal</th>
                                    {{-- <th class="text-center">Products</th>
                                    <th class="text-center">Extra</th> --}}
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mices as $m )
                                <tr>

                                    <td class="text-nowrap">
                                        {{ $m->name }}
                                    </td>
                                    <td class="text-center">
                                        {{ $m->available }}
                                    </td>
                                    <td class="text-center">
                                        {{ $m->total_pax }}
                                    </td>
                                    <td class="text-center">
                                        {{ $m->personal }}
                                    </td>
                                    {{-- <td class="text-center">
                                        {{ $m->Products }}
                                    </td>
                                    <td class="text-center">
                                        {{ $m->Extra }}
                                    </td> --}}
                                    

                                    <td class="text-end">
                                        <div class="font-weight-600 text-danger float-end" style="display: flex">
                                            <span>
                                               <a href="{{ url('/admin/Mice/'.$m->id) }}">
                                                <button type="button" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;" class="btn btn-success">Detail</button>
                                               </a>
                                            </span>
                                            <span>
                                               <a href="{{ url('/admin/Mice/edit/'.$m->id) }}">
                                                <button type="button" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px; color:white" class="btn btn-info">Update</button>
                                               </a>
                                            </span>
                                            <form method="POST" action="/admin/Mice/delete/{{$m->id}}">
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
                    <center>
                        {{ $mices->links() }}
                    </center>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>

    </div>
@endsection
