@extends('Backend.Admin.AdminHome')
@section('admin-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Solid justified</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                        <li class="nav-item"><a class="nav-link" href="#solid-justified-tab1" data-bs-toggle="tab">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#solid-justified-tab2"
                                data-bs-toggle="tab">Profile</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#solid-justified-tab3"
                                data-bs-toggle="tab">Messages</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show" id="solid-justified-tab1">
                            Tab content 1
                        </div>
                        <div class="tab-pane" id="solid-justified-tab2">
                            Tab content 2
                        </div>
                        <div class="tab-pane active" id="solid-justified-tab3">
                            Tab content 3
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
