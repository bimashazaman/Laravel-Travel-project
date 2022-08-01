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
                            <a href="/admin/CreateClassicTour" class="count-title">Tours</a>
                            <a href="#" class="count">
                                <?php
                                    $tour = DB::table('tours')->get();
                                    $count = count($tour);
                                    echo $count." Tours";
                                ?>
                            </a>
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
                            <a href="{{ url('/admin//admin/thingstoSeeCreate') }}" class="count-title">Things to see</a>
                            <a href="#" class="count">
                                <?php
                                    
                                    $place = DB::table('things_to_sees')->get();
                                    $count = count($place);
                                    echo $count." Places";

                                ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <a href="{{ url('/admin/admin/thingstoDoCreate') }}">
                            <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                                Add TODO
                             </button></a>
                       
                        <div class="dash-count">
                            <a href="#" class="count-title">Things To Do</a>
                            <a href="#" class="count">
                                <?php
                                    $todo = DB::table('things_to_dos')->get();
                                    $count = count($todo);
                                    echo $count." Things";
                                ?>
                            </a>
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
                        <a href="{{ url('/admin/foods/create') }}">
                            <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                                Add Food 
                             </button>
                            </a>
                        
                        <div class="dash-count">
                            <a href="#" class="count-title">FOOD AND DRINK</a>
                            <a href="#" class="count">
                                <?php
                                    $fd = DB::table('food_armenias')->get();
                                    $count = count($fd);
                                    echo $count." FD";
                                ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
               <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <a href="{{ url('/admin/nearby/Create') }}"> <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                            Add Place 
                         </button></a>
                       
                        <div class="dash-count">
                            <a href="#" class="count-title">Todo in surrounding</a>
                            <a href="#" class="count">
                                <?php
                                    $todo = DB::table('nearby_armenias')->get();
                                    $count = count($todo);
                                    echo $count." TODO";
                                ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <a href="{{ url('/admin/brochure/create') }}">
                            <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                                Add 
                                 
                             </button></a>
                        
                        <div class="dash-count">
                            <a href="#" class="count-title">Active</a>
                            <a href="#" class="count">
                                <?php
                                    $tour = DB::table('brochures')->get();
                                    $count = count($tour);
                                    echo $count." Brochures";
                                ?>
                            </a>
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
                        <a href="{{ url('/admin/events/create') }}">
                            <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                                Add Event 
                             </button></a>
                        
                        <div class="dash-count">
                            <a href="#" class="count-title">Events</a>
                            <a href="#" class="count">
                                <?php
                                    $tour = DB::table('tour_events')->get();
                                    $count = count($tour);
                                    echo $count." Events";
                                ?>
                            </a>
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
                            <a href="{{ url('/admin/Mice/create') }}" style="color: white">
                                Add MICE
                            </a>
                                
                            </button>
                            <div class="dash-count">
                                <a href="#" class="count-title">MICE</a>
                                <a href="#" class="count">
                                    <?php
                                        $tour = DB::table('miceS')->get();
                                        $count = count($tour);
                                        echo $count." MICE";
                                    ?>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="card">
                <div class="card-body" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                    <div class="dash-widget-header">
                        <a href="{{ url('/admin/travelBlogs/create') }}">
                            <button class="btn btn-info" style="color: white; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
                                Add Blog 
                             </button></a>
                       
                        <div class="dash-count">
                            <a href="#" class="count-title">Blogs</a>
                            <a href="#" class="count">
                                <?php
                                    $tour = DB::table('travel_blogs')->get();
                                    $count = count($tour);
                                    echo $count." Blogs";
                                ?>
                            </a>
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
                           <a href="{{ url('/car/create') }}" style="color: white">
                            Add Car
                        </a>
                            
                        </button>
                        <div class="dash-count">
                            <a href="#" class="count-title">Cars</a>
                            <a href="#" class="count">
                                <?php
                                    $tour = DB::table('vehicles')->get();
                                    $count = count($tour);
                                    echo $count." Cars";
                                ?>
                            </a>
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
                           <a href="{{ url('/admin/Hotel/create') }}" style="color: white">Add Hotels</a>
                            
                        </button>
                        <div class="dash-count">
                            <a href="#" class="count-title">Hotels</a>
                            <a href="#" class="count">
                                <?php
                                    $tour = DB::table('hotels')->get();
                                    $count = count($tour);
                                    echo $count." Hotels";
                                ?>
                            </a>
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
                           <a href="{{ url('/admin/accessiories/create') }}" style="color: white">Add Packages</a>
                            
                        </button>
                        <div class="dash-count">
                            <a href="" class="count-title">Accessiories</a>
                            <a href="#" class="count">
                                <?php
                                    $tour = DB::table('accessiories')->get();
                                    $count = count($tour);
                                    echo $count." Active";
                                ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection
