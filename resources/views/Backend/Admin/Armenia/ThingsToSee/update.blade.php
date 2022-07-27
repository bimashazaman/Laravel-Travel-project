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
            <h2 class="page-title" style="text-align: center">Update places to see</h2>
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
                <form id="tourForm" action="/admin/thingsToSee/update/{{ $things->id }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Name</label>
                        <div class="col-md-10">
                            <input value="{{ $things->name }}" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Description</label>
                        <div class="col-md-10">
                            <input  value="{{ $things->description }}" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px; width:100%;" class="form-control" name="description">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Time</label>
                        <div class="col-md-10">
                            <input value="{{ $things->time }}" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="time">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Address</label>
                        <div class="col-md-10">
                            <input value="{{ $things->address }}" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Duration</label>
                        <div class="col-md-10">
                            <input value="{{ $things->duration }}" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="duration">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Period</label>
                        <div class="col-md-10">
                            <input value="{{ $things->period }}" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="period">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Distance</label>
                        <div class="col-md-10">
                            <input value="{{ $things->distance }}" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="distance">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Price</label>
                        <div class="col-md-10">
                            <input value="{{ $things->price }}" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="price">
                        </div>
                    </div>

                    <!-- category dropdown -->
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Default Select</label>
                        <div class="col-md-10">
                            <select class="form-control form-select" name="category_id">
                               
                                @foreach($categories as $category)
                                <option  value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- <div class="form-group row">
                        <label class="col-form-label col-md-2">File Input </label>
                        <div class="col-md-10">
                            <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" class="form-control" type="file" name="images[]" multiple="">
                        </div>
                    </div> --}}
                    <div style="float: right">
                        <button class="btn btn-info" style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; color:white; width:120px" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
</div>
<!-- <script src="url('js/tour.js')"></script> -->
@endsection