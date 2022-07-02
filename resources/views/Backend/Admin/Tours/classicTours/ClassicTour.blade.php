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

                    <a href="{{ url('/CreateClassicTour') }}" style="margin-right: 20px">
                        <button type="button" class="btn btn-primary">Create Classic Tour</button>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive no-radius">
                        <table class="table table-hover table-center">
                            <thead>
                                <tr>

                                    <th>Clasic Package name</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-end">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td class="text-nowrap">Scott Albright</td>
                                    <td class="text-center">20 Jan 2019</td>
                                    <td class="text-center">
                                        15 mins ago
                                    </td>
                                    <td class="text-end">
                                        <div class="font-weight-600 text-danger">
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
