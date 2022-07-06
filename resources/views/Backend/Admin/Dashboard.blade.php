@extends('Backend.Admin.AdminHome')
@section('admin-content')
    <div class="row">
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <a href="{{ url('/admin/CreateClassicTour') }}">
                            <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                                Add Tour 
                             </button>
                        </a>
                        
                        <div class="dash-count">
                            <a href="#" class="count-title">Tours</a>
                            <a href="#" class="count">100 Tours</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
               <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                          Add Places
                        </button>
                        <div class="dash-count">
                            <a href="#" class="count-title">Things to see</a>
                            <a href="#" class="count">30 places</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                           Add TODO
                        </button>
                        <div class="dash-count">
                            <a href="#" class="count-title">Things To Do</a>
                            <a href="#" class="count">10 places</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                           Add Tour 
                        </button>
                        <div class="dash-count">
                            <a href="#" class="count-title">FOOD AND DRINK</a>
                            <a href="#" class="count">1 Place</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
               <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                           Add Place 
                        </button>
                        <div class="dash-count">
                            <a href="#" class="count-title">Todo in surrounding</a>
                            <a href="#" class="count">4 places</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                           Add Tour 
                        </button>
                        <div class="dash-count">
                            <a href="#" class="count-title">Active</a>
                            <a href="#" class="count">100 Tours</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                           Add Event 
                        </button>
                        <div class="dash-count">
                            <a href="#" class="count-title">Events</a>
                            <a href="#" class="count">100 Events</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
               <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                           Add Brochure
                        </button>
                        <div class="dash-count">
                            <a href="#" class="count-title">Brochures</a>
                            <a href="#" class="count">1 active</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                           Add Blog 
                        </button>
                        <div class="dash-count">
                            <a href="#" class="count-title">Blogs</a>
                            <a href="#" class="count">10 Blogs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                           Add Car
                        </button>
                        <div class="dash-count">
                            <a href="#" class="count-title">Cars</a>
                            <a href="#" class="count">100 Cars</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
               <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                           Add Hotels
                        </button>
                        <div class="dash-count">
                            <a href="#" class="count-title">Hotels</a>
                            <a href="#" class="count">300 Hotels</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                           Add Packages
                        </button>
                        <div class="dash-count">
                            <a href="#" class="count-title">Accessiories</a>
                            <a href="#" class="count">10 Active</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                           Add Ways 
                        </button>
                        <div class="dash-count">
                            <a href="#" class="count-title">Book</a>
                            <a href="#" class="count">3 ways</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
               <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                           Add MICE
                        </button>
                        <div class="dash-count">
                            <a href="#" class="count-title">MICE</a>
                            <a href="#" class="count">1 Mice</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                           Add Policy 
                        </button>
                        <div class="dash-count">
                            <a href="#" class="count-title">Privacy Policy</a>
                            <a href="#" class="count">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
