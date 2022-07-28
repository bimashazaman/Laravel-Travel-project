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

                        {{-- @if (count($carAirports) > 0)
                <button class="btn btn-info" style="color: white; margin-left:15px">
                    <a href="" style="color: white">
                        <i class="fa fa-plus" style="color: white"></i>
                        Edit
                    </a>
                   </button>
                @endif --}}


                        {{-- @if (count($carAirports) == 0) --}}
                        <button class="btn btn-info" style="color: white; margin-left:15px">
                            <a href="{{ url('/admin/admin/waystoBookCreate') }}" style="color: white">
                                <i class="fa fa-plus" style="color: white"></i>
                                Add Information
                            </a>
                        </button>
                        {{-- @endif --}}

                    </span>
                </div>

                {{-- if no information found: --}}

                @if (count($ways) == 0)
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


                    @foreach ($ways as $w)
                        <p>
                            <b>Title: </b> {{ $w->title }}
                        </p>
                        <form method="POST" action="{{ url('/admin/waysToBook/delete/'.$w->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                    
                           <span class="flex-end" style="float: right">
                            <div class="form-group">
                                <input type="submit" class="btn btn-danger delete-user" value="Delete">
                            </div>
                           </span>
                        </form>
                        hr

                        <p>
                            <b>
                                Description:
                            </b> {{ $w->description }}
                            
                        </p>
                        <br>
                       
                    @endforeach


                


                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
