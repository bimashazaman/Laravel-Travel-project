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
                <h2 class="page-title" style="text-align: center">Update Tours</h2>
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
                    <form id="tourForm" action="{{ url('/admin/tour/update/' . $tour->id) }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Tour name</label>
                            <div class="col-md-10">
                                <input value="{{ $tour->name }}" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Tour Type</label>
                            <div class="col-md-10">
                                <input value="{{ $tour->type }}" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="type">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Description</label>
                            <div class="col-md-10">
                                <input value={{ $tour->description }}
                                    style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text"
                                    class="form-control" name="description">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Duration</label>
                            <div class="col-md-10">
                                <input value="{{ $tour->duration }}" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="duration">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Price</label>
                            <div class="col-md-10">
                                <input value="{{ $tour->price }}" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="price">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Start Date</label>
                            <div class="col-md-10">
                                <input value="{{ $tour->start_date }}"
                                    style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text"
                                    class="form-control" name="start_date">
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
                            <label class="col-form-label col-md-2">2-3 Pax</label>
                            <div class="col-md-10">
                                <input value="{{ $tour->one_day_price }}"
                                    style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text"
                                    class="form-control" name="one_day_price">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">4-6 Pax</label>
                            <div class="col-md-10">
                                <input value="{{ $tour->one_week_price }}"
                                    style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text"
                                    class="form-control" name="one_week_price">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">17-30 Pax</label>
                            <div class="col-md-10">
                                <input value="{{ $tour->one_month_price }}"
                                    style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text"
                                    class="form-control" name="one_month_price">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">30 Pax More</label>
                            <div class="col-md-10">
                                <input value="{{ $tour->one_year_price }}"
                                    style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text"
                                    class="form-control" name="one_year_price">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">End Date</label>
                            <div class="col-md-10">
                                <input value="{{ $tour->end_date }}"
                                    style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text"
                                    class="form-control" name="end_date">
                            </div>
                        </div>

                        <!-- category dropdown -->
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Tour Category</label>
                            <div class="col-md-10">
                                <select class="form-control form-select" name="category_id">

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- destination dropdown -->
                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Country</label>
                            <div class="col-md-10">
                                <select class="form-control form-select" name="destination_id">

                                    @foreach ($destinations as $destination)
                                        <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                                    @endforeach
                                </select>
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
    </div>
    <!-- <script src="url('js/tour.js')"></script> -->
@endsection
