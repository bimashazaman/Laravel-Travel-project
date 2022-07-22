@extends('Backend.Admin.AdminHome')
@section('admin-content')
    <div class="row">
        <div class="col-md-12 d-flex">

           <div class="card w-100">
            <div class="card-header " style="display: flex">
               <span>
                <h4 class="card-title">
                    Useful Info
                </h4>
               </span>
               <span>
                
                {{-- @if(count($carAirports)>0)
                <button class="btn btn-info" style="color: white; margin-left:15px">
                    <a href="" style="color: white">
                        <i class="fa fa-plus" style="color: white"></i>
                        Edit
                    </a>
                   </button>
                @endif --}}

               
                {{-- @if(count($carAirports)==0) --}}
                <button class="btn btn-info" style="color: white; margin-left:15px">
                    <a href="{{ url('/admin/usefulToKnow/create') }}" style="color: white">
                        <i class="fa fa-plus" style="color: white"></i>
                        Add Information
                    </a>
                   </button>
                {{-- @endif --}}

               </span>
            </div>

          {{-- if no information found: --}}

            @if(count($usefulInfos) == 0)
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                                <h3>No Information Found</h3>
                            </center>
                        </div>
                    </div>
                </div>
          @endif

            {{-- if information found: --}}
                
           
           <div style="padding: 40px">
            <h3>
                Facts
            </h3>
            <hr>
            @foreach ($usefulInfos as $carAirport)
            <p>
                {{$carAirport->facts}}
            </p>
            @endforeach

            <br>

            <h3>
               Tips
            </h3>
            <hr>
            @foreach ($usefulInfos as $carAirport)
            <p>
                {{$carAirport->tips}}
            </p>
            @endforeach
           </div>
           
                
           


        </div>
    </div>
    </div>
    </div>

    </div>
@endsection
