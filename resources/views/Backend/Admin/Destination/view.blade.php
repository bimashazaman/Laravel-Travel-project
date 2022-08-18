@extends('Backend.Admin.AdminHome')
@section('admin-content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
    @elseif(session('fail'))
        <div class="alert alert-danger">
            {{ session('msg') }}
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12 d-flex">
            <div class="card flex-fill"
                style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                <div class="card-header">
                    <h4 class="card-title">From Yerevan</h4>
                </div>
                <div class="card-body">
                    <form id="tourForm" action="{{ url('/storeYerevan') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="name">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameTwo">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameThree">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameFour">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameFive">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameSix">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameSeven">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameEight">
                            </div>
                        </div>
                        <div style="float: right">
                            <button class="btn btn-info"
                                style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; color:white; width:120px"
                                type="submit">Create</button>
                        </div>
                    </form>
                    <br>
                    <br>

                    @foreach ($yerevan as $y)
                        <div class="row">
                            <div class="col">
                                {{ $y->name }}
                            </div>
                            <div class="col">
                                {{ $y->nameTwo }}
                            </div>
                            <div class="col">
                                {{ $y->nameThree }}
                            </div>
                            <div class="col">
                                {{ $y->nameFour }}
                            </div>
                            <div class="col">
                                {{ $y->nameFive }}
                            </div>
                            <div class="col">
                                {{ $y->nameSix }}
                            </div>
                            <div class="col">
                                {{ $y->nameSeven }}
                            </div>
                            <div class="col">
                                {{ $y->nameEight }}
                            </div>
                        </div>
                        <br>
                    @endforeach

                    {{-- <li>
                                {{ $y->name }}
                            </li>
                        @endforeach --}}
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12 d-flex">
            <div class="card flex-fill"
                style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                <div class="card-header">
                    <h4 class="card-title">From Dilijans</h4>
                </div>
                <div class="card-body">
                    <form id="tourForm" action="{{ url('/storeDilijans') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="name">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameTwo">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameThree">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameFour">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameFive">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameSix">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameSeven">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameEight">
                            </div>
                        </div>

                        <div style="float: right">
                            <button class="btn btn-info"
                                style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; color:white; width:120px"
                                type="submit">Create</button>
                        </div>
                    </form>
                    <br>
                    <br>
                    @foreach ($dilijan as $y)
                        <div class="row">
                            <div class="col">
                                {{ $y->name }}
                            </div>
                            <div class="col">
                                {{ $y->nameTwo }}
                            </div>
                            <div class="col">
                                {{ $y->nameThree }}
                            </div>
                            <div class="col">
                                {{ $y->nameFour }}
                            </div>
                            <div class="col">
                                {{ $y->nameFive }}
                            </div>
                            <div class="col">
                                {{ $y->nameSix }}
                            </div>
                            <div class="col">
                                {{ $y->nameSeven }}
                            </div>
                            <div class="col">
                                {{ $y->nameEight }}
                            </div>
                        </div>
                        <br>
                    @endforeach

                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 d-flex">
            <div class="card flex-fill"
                style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                <div class="card-header">
                    <h4 class="card-title">From Gyumris</h4>
                </div>
                <div class="card-body">
                    <form id="tourForm" action="{{ url('/storeGyumri') }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="name">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameTwo">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameThree">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameFour">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameFive">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameSix">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameSeven">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameEight">
                            </div>
                        </div>

                        <div style="float: right">
                            <button class="btn btn-info"
                                style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; color:white; width:120px"
                                type="submit">Create</button>
                        </div>
                    </form>
                    <br>
                    <br>
                    @foreach ($gyumri as $y)
                        <div class="row">
                            <div class="col">
                                {{ $y->name }}
                            </div>
                            <div class="col">
                                {{ $y->nameTwo }}
                            </div>
                            <div class="col">
                                {{ $y->nameThree }}
                            </div>
                            <div class="col">
                                {{ $y->nameFour }}
                            </div>
                            <div class="col">
                                {{ $y->nameFive }}
                            </div>
                            <div class="col">
                                {{ $y->nameSix }}
                            </div>
                            <div class="col">
                                {{ $y->nameSeven }}
                            </div>
                            <div class="col">
                                {{ $y->nameEight }}
                            </div>
                        </div>
                        <br>
                    @endforeach

                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 d-flex">
            <div class="card flex-fill"
                style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                <div class="card-header">
                    <h4 class="card-title">From Jermuks</h4>
                </div>
                <div class="card-body">
                    <form id="tourForm" action="{{ url('/storeJermuks') }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="name">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameTwo">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameThree">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameFour">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameFive">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameSix">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameSeven">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameEight">
                            </div>
                        </div>
                        <div style="float: right">
                            <button class="btn btn-info"
                                style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; color:white; width:120px"
                                type="submit">Create</button>
                        </div>
                    </form>
                    <br>
                    <br>

                    @foreach ($jermuk as $y)
                        <div class="row">
                            <div class="col">
                                {{ $y->name }}
                            </div>
                            <div class="col">
                                {{ $y->nameTwo }}
                            </div>
                            <div class="col">
                                {{ $y->nameThree }}
                            </div>
                            <div class="col">
                                {{ $y->nameFour }}
                            </div>
                            <div class="col">
                                {{ $y->nameFive }}
                            </div>
                            <div class="col">
                                {{ $y->nameSix }}
                            </div>
                            <div class="col">
                                {{ $y->nameSeven }}
                            </div>
                            <div class="col">
                                {{ $y->nameEight }}
                            </div>
                        </div>
                        <br>
                    @endforeach

                    {{-- <li>
                                {{ $y->name }}
                            </li>
                        @endforeach --}}

                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 d-flex">
            <div class="card flex-fill"
                style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                <div class="card-header">
                    <h4 class="card-title">From Stepanakerts</h4>
                </div>
                <div class="card-body">
                    <form id="tourForm" action="{{ url('/storeStepanakerts') }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="name">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameTwo">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameThree">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameFour">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameFive">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameSix">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameSeven">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameEight">
                            </div>
                        </div>
                        <div style="float: right">
                            <button class="btn btn-info"
                                style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; color:white; width:120px"
                                type="submit">Create</button>
                        </div>
                    </form>
                    <br>
                    <br>

                    @foreach ($stepanakert as $y)
                        <div class="row">
                            <div class="col">
                                {{ $y->name }}
                            </div>
                            <div class="col">
                                {{ $y->nameTwo }}
                            </div>
                            <div class="col">
                                {{ $y->nameThree }}
                            </div>
                            <div class="col">
                                {{ $y->nameFour }}
                            </div>
                            <div class="col">
                                {{ $y->nameFive }}
                            </div>
                            <div class="col">
                                {{ $y->nameSix }}
                            </div>
                            <div class="col">
                                {{ $y->nameSeven }}
                            </div>
                            <div class="col">
                                {{ $y->nameEight }}
                            </div>
                        </div>
                        <br>
                    @endforeach

                    {{-- <li>
                                {{ $y->name }}
                            </li>
                        @endforeach --}}

                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 d-flex">
            <div class="card flex-fill"
                style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                <div class="card-header">
                    <h4 class="card-title">From Tbilisi</h4>
                </div>
                <div class="card-body">
                    <form id="tourForm" action="{{ url('/storeTbilisis') }}" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="name">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameTwo">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameThree">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameFour">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameFive">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameSix">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameSeven">
                            </div>
                            <div class="col">
                                <input placeholder="Destination" style="box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"
                                    type="text" class="form-control" name="nameEight">
                            </div>
                        </div>
                        <div style="float: right">
                            <button class="btn btn-info"
                                style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px; color:white; width:120px"
                                type="submit">Create</button>
                        </div>
                    </form>
                    <br>
                    <br>

                    @foreach ($tbilisi as $y)
                        <div class="row">
                            <div class="col">
                                {{ $y->name }}
                            </div>
                            <div class="col">
                                {{ $y->nameTwo }}
                            </div>
                            <div class="col">
                                {{ $y->nameThree }}
                            </div>
                            <div class="col">
                                {{ $y->nameFour }}
                            </div>
                            <div class="col">
                                {{ $y->nameFive }}
                            </div>
                            <div class="col">
                                {{ $y->nameSix }}
                            </div>
                            <div class="col">
                                {{ $y->nameSeven }}
                            </div>
                            <div class="col">
                                {{ $y->nameEight }}
                            </div>
                        </div>
                        <br>
                    @endforeach

                    {{-- <li>
                                {{ $y->name }}
                            </li>
                        @endforeach --}}

                </div>
            </div>

        </div>
    </div>
@endsection
