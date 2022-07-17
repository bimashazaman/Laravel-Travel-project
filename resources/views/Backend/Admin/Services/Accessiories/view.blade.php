@extends('Backend.Admin.AdminHome')
@section('admin-content')
    <div class="row">
        <div class="col-md-12 d-flex">

            <div class="card card-table flex-fill">
                <div class="card-header">
                    <h4 class="card-title float-start">Tour Accessiories</h4>
                    <button class="btn btn-info" style="color: white; margin-left:15px">
                        <a href="{{url('/admin/accessiories/create')}}" style="color: white">
                            <i class="fa fa-plus" style="color: white"></i>
                            Add New
                        </a>
                    </button>


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
                                    <th class="text-center">
                                        Availability
                                    </th>
                                    <th class="text-center">
                                        Type
                                    </th>
                                    <th class="text-center">
                                        Total Pax
                                    </th>
                                    <th class="text-end">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($a as $item)
                                <tr>

                                    <td class="text-nowrap">
                                        <a href="{{url('/admin/accessiories/'.$item->id)}}">{{$item->name}}</a>
                                    </td>
                                    <td class="text-center">
                                        {{$item->availability}}
                                    </td>
                                    <td class="text-center">
                                       {{$item->type}}
                                    </td>
                                    <td class="text-center">
                                        {{$item->total_pax}}
                                    </td>
                                    <td class="text-end">
                                        <div class="font-weight-600 text-danger">
                                            <span>
                                               <a href="{{ url('/admin/accessiories/'.$item->id) }}">
                                                <button type="button" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;" class="btn btn-success">Detail</button>
                                               </a>
                                            </span>
                                            <span>
                                               <a href="{{ url('/admin/updateAccessiories') }}">
                                                <button type="button" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px; color:white" class="btn btn-info">Update</button>
                                               </a>
                                            </span>
                                            <span>
                                                <button type="button" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;" class="btn btn-danger">Delete</button>
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

@endsection