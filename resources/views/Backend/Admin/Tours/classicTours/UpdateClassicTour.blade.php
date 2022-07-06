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

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Horizontal Form</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Horizontal Form</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h4 class="card-title">Basic Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">First Name</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Last Name</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Email Address</label>
                                <div class="col-lg-9">
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Username</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Password</label>
                                <div class="col-lg-9">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Repeat Password</label>
                                <div class="col-lg-9">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h4 class="card-title">Address Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Address 1</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Address 2</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">City</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">State</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Country</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Postal Code</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Two Column Horizontal Form</h4>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Personal Information</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">First Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Last Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Gender</label>
                                        <div class="col-lg-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="gender_male" value="option1" checked="">
                                                <label class="form-check-label" for="gender_male">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="gender_female" value="option2">
                                                <label class="form-check-label" for="gender_female">
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Blood Group</label>
                                        <div class="col-lg-9">
                                            <select class="select form-control select2-hidden-accessible" tabindex="-1"
                                                aria-hidden="true">
                                                <option>Select</option>
                                                <option value="1">A+</option>
                                                <option value="2">O+</option>
                                                <option value="3">B+</option>
                                                <option value="4">AB+</option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                dir="ltr" style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-labelledby="select2-p00w-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-p00w-container" title="Select">Select</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Username</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Email</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Password</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Repeat Password</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title">Address</h4>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Address Line 1</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Address Line 2</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">State</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">City</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Country</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Postal Code</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Two Column Horizontal Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-6">
                                    <h4 class="card-title">Personal Details</h4>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">First Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Last Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Password</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">State</label>
                                        <div class="col-lg-9">
                                            <select class="select form-control select2-hidden-accessible" tabindex="-1"
                                                aria-hidden="true">
                                                <option>Select State</option>
                                                <option value="1">California</option>
                                                <option value="2">Texas</option>
                                                <option value="3">Florida</option>
                                            </select><span class="select2 select2-container select2-container--default"
                                                dir="ltr" style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-labelledby="select2-hzny-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-hzny-container" title="Select State">Select
                                                            State</span><span class="select2-selection__arrow"
                                                            role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">About</label>
                                        <div class="col-lg-9">
                                            <textarea rows="4" cols="5" class="form-control" placeholder="Enter message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <h4 class="card-title">Personal details</h4>
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label">Name</label>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="First Name"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Last Name"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Email</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Phone</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Address</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control m-b-20">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select class="select form-control select2-hidden-accessible"
                                                            tabindex="-1" aria-hidden="true">
                                                            <option>Select Country</option>
                                                            <option value="1">USA</option>
                                                            <option value="2">France</option>
                                                            <option value="3">India</option>
                                                            <option value="4">Spain</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" style="width: 100%;"><span
                                                                class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-labelledby="select2-v0to-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-v0to-container"
                                                                        title="Select Country">Select Country</span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="ZIP code"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="State/Province"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="City" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="url('js/tour.js')"></script> -->
@endsection
