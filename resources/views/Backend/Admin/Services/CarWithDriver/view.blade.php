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
      
            <div class="content container-fluid">
            
            <div class="page-header">
            <div class="row">
            <div class="col-sm-12">
            <h3 class="page-title">Car with driver</h3>
            <button class="btn btn-info" style="color: white; margin-left:15px; float:right">
                <a href="{{ url('/admin/CarWithDriver/create') }}" style="color: white">
                    <i class="fa fa-plus" style="color: white"></i>
                    Add Car
                </a>
            </button>
            <button class="btn btn-dark" style="color: white; margin-left:15px; float:right">
                <a href="{{ url('//admin/CarWithDriver/createInfo') }}" style="color: white">
                    <i class="fa fa-plus" style="color: white"></i>
                    Add Info
                </a>
            </button>
            </div>
            </div>
            </div>
            
            <div class="row">
            <div class="col-sm-12">
            <div class="card">
            <div class="card-header">
            <h4 class="card-title">Price Table</h4>
           
            </div>
            <div class="card-body">
            <div class="table-responsive">
            <table class="datatable table table-stripped">
            <thead>
            <tr>
            <th>Name</th>
            <th>
                3 seats
            </th>
            <th>
                7 seats
            </th>
            <th>
                16 seats
            </th>
            <th>
                29 Seats
            </th>
            <th>
                49 seats
            </th>
            <th>Action</th>
            </tr>
            
            </thead>
           
            <tbody>

                @foreach ($cars as $c )
                    
               
            <tr>
            <td>
                {{$c->car_name}}
            </td>
            <td>
                {{ $c->three_seats }}
            </td>
            <td>
                {{ $c->seven_seats }}
            </td>
            <td>
                {{ $c->sixteen_seats }}
            </td>
            <td>
                {{ $c->twintynine_seats }}
            </td>
            <td>
                {{ $c->fortynine_seats }}
            </td>

            <td>
                <form method="POST" action="/admin/CarWithDriver/delete/{{$c->id}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
            
                   <span>
                    <div class="form-group">
                        <input type="submit" class="btn btn-danger delete-user" value="Delete">
                    </div>
                   </span>
                </form>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            
          
    

   
@endsection
