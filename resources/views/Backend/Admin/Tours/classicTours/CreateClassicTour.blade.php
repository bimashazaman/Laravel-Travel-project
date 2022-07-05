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
            <h3 class="page-title">Basic Inputs</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Basic Inputs</li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>
            <div class="card-body">
                <form id="tourForm" action="/admin/tours/add" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Description</label>
                        <div class="col-md-10">
                            <textarea name="description" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Duration</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="duration">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Price</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Start Date</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="start_date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">End Date</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="end_date">
                        </div>
                    </div>

                    <!-- category dropdown -->
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Default Select</label>
                        <div class="col-md-10">
                            <select class="form-control form-select" name="category_id">
                                <option>-- Select --</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- destination dropdown -->
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Default Select</label>
                        <div class="col-md-10">
                            <select class="form-control form-select" name="destination_id">
                                <option>-- Select --</option>
                                @foreach($destinations as $destination)
                                <option value="{{$destination->id}}">{{$destination->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-2">File Input</label>
                        <div class="col-md-10">
                            <input class="form-control" type="file" name="images" multiple>
                        </div>
                    </div>
                    <div>
                        <button type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
<!-- <script src="url('js/tour.js')"></script> -->
@endsection