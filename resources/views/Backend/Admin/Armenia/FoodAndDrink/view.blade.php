@extends('Backend.Admin.AdminHome')
@section('admin-content')
    <div class="row">
        <div class="col-md-12 d-flex">

            <div class="card card-table flex-fill">
                <div class="card-header">
                    <h4 class="card-title float-start">Food and Drink</h4>

                    <button class="btn btn-info" style="color: white; margin-left:15px">
                        <a href="{{ url('/admin/foods/create') }}" style="color: white">
                            <i class="fa fa-plus" style="color: white"></i>
                            Add
                        </a>
                    </button>

                    <div class="table-search float-end">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                    </div>


                </div>
                <div class="card-body"
                    style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                    <div class="table-responsive no-radius">
                        <table class="table table-hover table-center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="text-center">Time</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Duration</th>
                                    <th class="text-end">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($foods as $t)
                                    <tr>

                                        <td class="text-nowrap">
                                            {{ $t->name }}
                                        </td>
                                        <td class="text-center">
                                            {{ $t->time }}
                                        </td>
                                        <td class="text-center">
                                            {{ $t->address }}
                                        </td>
                                        <td class="text-center">
                                            {{ $t->duration }}
                                        </td>
                                        <td class="text-end">
                                            <div class="font-weight-600 text-danger">
                                                <span>
                                                    <a href="">
                                                        <button type="button"
                                                            style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;"
                                                            class="btn btn-success">Detail</button>
                                                    </a>
                                                </span>
                                                <span>
                                                    <a href="{{ url('/admin/thingstoSeeCreate') }}">
                                                        <button type="button"
                                                            style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px; color:white"
                                                            class="btn btn-info">Update</button>
                                                    </a>
                                                </span>
                                                <span>
                                                    <button type="button"
                                                        style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;"
                                                        class="btn btn-danger">Delete</button>
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
