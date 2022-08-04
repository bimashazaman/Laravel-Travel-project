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
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Blog Content Management</h4>

                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                        <li class="nav-item"><a class="nav-link" href="#solid-justified-tab1" data-bs-toggle="tab">Blog</a>
                        </li>
                        
                        <li class="nav-item"><a class="nav-link active" href="#solid-justified-tab2"
                                data-bs-toggle="tab">Update</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show" id="solid-justified-tab1">
                            {{-- @foreach ($carContent as $h) --}}
                                <center>
                                    <h2>
                                        {{ $blogContent->title }}
                                    </h2>
                                </center>
                                <hr>
                                <center>
                                    <h4>
                                        {{ $blogContent->subtitle }}

                                    </h4>
                                </center>
                            {{-- @endforeach --}}
                        </div>
                       
                        <div class="tab-pane active" id="solid-justified-tab2">
                            
                                <div class="card-header">
                                    <h4 class="card-title">Update</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ url('/blogCms/1') }}" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2">Hotel Title</label>
                                            <div class="col-md-10">
                                                <input value="{{ $blog->title }}" type="text" class="form-control" name="title">
                                            </div>
                                        </div>
                                     
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2">Overview</label>
                                            <div class="col-md-10">
                                                <textarea value="{{ $blog->subtitle }}" rows="5" cols="5" class="form-control" placeholder="Enter text here" name="subtitle"></textarea>
                                            </div>
                                        </div>

                                        <div style="float: right">
                                            <button class="btn btn-info" style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; color:white; width:120px" type="submit">Update</button>
                                        </div>
                                        
                                    </form>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
