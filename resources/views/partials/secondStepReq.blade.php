@extends('layouts.master')
@section('content')
    <div class="fullBanner">
        @include('partials.DefaultBanner')
    </div>

    <div class="container">
        @include('partials.bar')
        <br>
        <br>
        <div class="row">
            <div class="col-md-9">
                @include('partials.secondMap')
                <br>
                <br>

                <div>
                    @if ($creator->creator_destinations_id == 'Yerevan' && $creator->car)
                        @foreach ($yerevan as $y)
                            <div class="row" style="font-weight:600; display:flex; padding:15px" id="oneSel"
                                onclick="onClickSelectRowCheckBox()">
                                @include('partials.box')
                                <input type="checkbox">
                            </div>

                            <br>
                        @endforeach
                    @endif


                    @if ($creator->creator_destinations_id == 'Dilijan' && $creator->car)
                        @foreach ($dilijan as $y)
                            <div class="row" style="font-weight:600; display:flex; padding:15px">
                                <div id="twoSel" onclick="onClickSelectTwo()">
                                    @include('partials.box')
                                </div>
                            </div>

                            <br>
                        @endforeach
                    @endif

                    @if ($creator->creator_destinations_id == 'Gyumri' && $creator->car)
                        @foreach ($gyumri as $y)
                            <div class="row" style="font-weight:600; display:flex">
                                @include('partials.box')
                            </div>

                            <br>
                        @endforeach
                    @endif

                    @if ($creator->creator_destinations_id == 'Jermuk' && $creator->car)
                        @foreach ($jermuk as $y)
                            <div class="row" style="font-weight:600; display:flex">
                                @include('partials.box')
                            </div>

                            <br>
                        @endforeach
                    @endif

                    @if ($creator->creator_destinations_id == 'Stepanakert' && $creator->car)
                        @foreach ($stepanakert as $y)
                            <div class="row" style="font-weight:600; display:flex">
                                @include('partials.box')
                            </div>

                            <br>
                        @endforeach
                    @endif

                    @if ($creator->creator_destinations_id == 'Tbilisi' && $creator->car)
                        @foreach ($tbilisi as $y)
                            <div class="row" style="font-weight:600; display:flex">
                                @include('partials.box')
                            </div>

                            <br>
                        @endforeach
                    @endif
                </div> {{-- End --}}




               @include('partials.button')
            </div>
           @include('partials.more')
        </div>
    </div>
    
@endsection
