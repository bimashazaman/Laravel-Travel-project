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
            <h2 class="page-title" style="text-align: center">Create Car with driver</h2>
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
                <form id="tourForm" action="{{ url('/admin/CarWithDriver/store') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">Car name</label>
                        <div class="col-md-10">
                            <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="car_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">3 seats price</label>
                        <div class="col-md-10">
                            <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="three_seats">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-2">7 seats price</label>
                        <div class="col-md-10">
                            <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="seven_seats">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-2">16 seats price</label>
                        <div class="col-md-10">
                            <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="sixteen_seats">
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">29 seats price</label>
                        <div class="col-md-10">
                            <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="twintynine_seats">
                        </div>
                    </div>


                    
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">49 seats price</label>
                        <div class="col-md-10">
                            <input style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;" type="text" class="form-control" name="fortynine_seats">
                        </div>
                    </div>
                    

                    <div style="float: right">
                        <button class="btn btn-info" style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; color:white; width:120px" type="submit">Create</button>
                    </div>


                    
                </form>
            </div>
        </div>

    </div>
</div>
</div>
<!-- <script src="url('js/tour.js')"></script> -->
@endsection