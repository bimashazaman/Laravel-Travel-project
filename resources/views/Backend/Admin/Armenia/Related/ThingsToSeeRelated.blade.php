@extends('Backend.Admin.AdminHome')
@section('admin-content')
    <!-- added successfully or not -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
    @elseif(session('fail'))
        <div class="alert alert-danger">
            {{ session('msg') }}
        </div>
    @endif

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="page-title" style="text-align: center">Create Related places to see</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                <div class="card-header">
                    <h4 class="card-title">Add Related</h4>
                </div>
                <div class="card-body">
                    <form id="tourForm" action="/admin/addRelatedsee/{{ $see->id }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Name</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text"
                                    class="form-control" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Description</label>
                            <div class="col-md-10">
                                <textarea style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px; width:100%; border:none" name="description"
                                    cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Time</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text"
                                    class="form-control" name="time">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Address</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text"
                                    class="form-control" name="address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Duration</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text"
                                    class="form-control" name="duration">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Period</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text"
                                    class="form-control" name="period">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Distance</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text"
                                    class="form-control" name="distance">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Price</label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text"
                                    class="form-control" name="price">
                            </div>
                        </div>

                        <!-- category dropdown -->
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Category</label>
                            <div class="col-md-10">
                                <select class="form-control form-select" name="category_id">

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">File Input </label>
                            <div class="col-md-10">
                                <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" class="form-control"
                                    type="file" name="images[]" multiple="">
                            </div>
                        </div>
                        <div style="float: right">
                            <button class="btn btn-info"
                                style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; color:white; width:120px"
                                type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    {{-- {{ dd($things) }} --}}
   <div class="row">
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
                @foreach ($things as $t)
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
                            <div class="font-weight-600 text-danger float-end" style="display: flex">
                                <span>
                                    <a href="/admin/createRelatedsee/{{ $t->id }}">
                                        <button type="button"
                                            style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;"
                                            class="btn btn-success">Related</button>
                                    </a>
                                </span>
                                <span>
                                    <a href="{{ url('/admin/thingsToSee/edit/' . $t->id) }}">
                                        <button type="button"
                                            style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px; color:white"
                                            class="btn btn-info">Update</button>
                                    </a>
                                </span>
                                <form method="POST" action="{{ url('/admin/thingsToSee/delete/' . $t->id) }}">
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
    {{-- <center>
                    {{ $things->links() }}
                </center> --}}
</div>
   </div>

    <!-- <script src="url('js/tour.js')"></script> -->
@endsection
