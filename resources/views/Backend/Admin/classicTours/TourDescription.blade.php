@extends('Backend.Admin.AdminHome')
@section('admin-content')
<div class="row">
    {{$tour}}

    <!-- highlights part -->
    <div class="row">
        <div>
            <h3>Highlights</h3>
            <form action="{{route('addHighlight',['id'=> $tour->id])}}" method="post" id="highlightForm">
                <!-- <form action="/admin/highlight" method="POST" id="highlightForm"> -->
                {{csrf_field()}}
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <!-- <input type="number" value="$tour->id" name="tour_id" style="display:none"> -->
                <div>
                    <button>Add</button>
                </div>
            </form>
        </div>
        <ul>
            @foreach($tour->highlights as $highlight)
            <li>{{$highlight->name}}</li>
            @endforeach

        </ul>
    </div>
    <!-- facility part -->
    <div class="row">
        <div>
            <h3>Facility</h3>
            <form action="{{route('addFacility',['id'=> $tour->id])}}" method="post" id="highlightForm">
                <!-- <form action="/admin/highlight" method="POST" id="highlightForm"> -->
                {{csrf_field()}}
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <!-- <input type="number" value="$tour->id" name="tour_id" style="display:none"> -->
                <div>
                    <button>Add</button>
                </div>
            </form>
        </div>
        <ul>
            @foreach($tour->facility as $facility)
            <li>{{$facility->name}}</li>
            @endforeach

        </ul>
    </div>

    <!-- tour program -->
    <div class="row">
        <div>
            <h3>Tour Program</h3>
            <form action="{{route('addTourProgram',['id'=> $tour->id])}}" method="post" id="highlightForm">
                <!-- <form action="/admin/highlight" method="POST" id="highlightForm"> -->
                {{csrf_field()}}
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Day</label>
                    <div class="col-md-10">
                        <input type="number" class="form-control" name="day">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">Date</label>
                    <div class="col-md-10">
                        <input type="date" class="form-control" name="date">
                    </div>
                </div>
             <!-- parent destination dropdown -->
             <div class="form-group row">
                        <label class="col-form-label col-md-2">Default Select</label>
                        <div class="col-md-10">
                            <select class="form-control form-select" name="parent_destination_id">
                                <option>-- Select --</option>
                                @foreach($destination as $destinationitem)
                                <option value="{{$destinationitem->id}}">{{$destinationitem->name}}</option>
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
                                @foreach($destination as $destinationitem)
                                <option value="{{$destinationitem->id}}">{{$destinationitem->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                <!-- <input type="number" value="$tour->id" name="tour_id" style="display:none"> -->
                <div>
                    <button>Add</button>
                </div>
            </form>
        </div>
        <ul>
          <!-- destination data -->

        </ul>
    </div>

</div>
@endsection