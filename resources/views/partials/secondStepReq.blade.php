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


                <div>
                    @if ($creator->creator_destinations_id == 'Yerevan' && $creator->motorcycle)
                        @foreach ($yerevanMotor as $y)
                            <div class="row" style="font-weight:600; display:flex; padding:15px" id="oneSel"
                                onclick="onClickSelectRowCheckBox()">
                                @include('partials.box')
                                <input type="checkbox">
                            </div>

                            <br>
                        @endforeach
                    @endif


                    @if ($creator->creator_destinations_id == 'Dilijan' && $creator->motorcycle)
                        @foreach ($dilijanMotor as $y)
                            <div class="row" style="font-weight:600; display:flex; padding:15px">
                                <div id="twoSel" onclick="onClickSelectTwo()">
                                    @include('partials.box')
                                </div>
                            </div>

                            <br>
                        @endforeach
                    @endif

                    @if ($creator->creator_destinations_id == 'Gyumri' && $creator->motorcycle)
                        @foreach ($gyumriMotor as $y)
                            <div class="row" style="font-weight:600; display:flex">
                                @include('partials.box')
                            </div>

                            <br>
                        @endforeach
                    @endif

                    @if ($creator->creator_destinations_id == 'Jermuk' && $creator->motorcycle)
                        @foreach ($jermukMotor as $y)
                            <div class="row" style="font-weight:600; display:flex">
                                @include('partials.box')
                            </div>

                            <br>
                        @endforeach
                    @endif

                    @if ($creator->creator_destinations_id == 'Stepanakert' && $creator->motorcycle)
                        @foreach ($stepanakertMotor as $y)
                            <div class="row" style="font-weight:600; display:flex">
                                @include('partials.box')
                            </div>

                            <br>
                        @endforeach
                    @endif

                    @if ($creator->creator_destinations_id == 'Tbilisi' && $creator->motorcycle)
                        @foreach ($tbilisiMotor as $y)
                            <div class="row" style="font-weight:600; display:flex">
                                @include('partials.box')
                            </div>

                            <br>
                        @endforeach
                    @endif
                </div> {{-- End --}}


                <div>
                    @if ($creator->creator_destinations_id == 'Yerevan' && $creator->hiking)
                        @foreach ($yerevanHiking as $y)
                            <div class="row" style="font-weight:600; display:flex; padding:15px" id="oneSel"
                                onclick="onClickSelectRowCheckBox()">
                                @include('partials.box')
                                <input type="checkbox">
                            </div>

                            <br>
                        @endforeach
                    @endif


                    @if ($creator->creator_destinations_id == 'Dilijan' && $creator->hiking)
                        @foreach ($dilijanHiking as $y)
                            <div class="row" style="font-weight:600; display:flex; padding:15px">
                                <div id="twoSel" onclick="onClickSelectTwo()">
                                    @include('partials.box')
                                </div>
                            </div>

                            <br>
                        @endforeach
                    @endif

                    @if ($creator->creator_destinations_id == 'Gyumri' && $creator->hiking)
                        @foreach ($gyumriHiking as $y)
                            <div class="row" style="font-weight:600; display:flex">
                                @include('partials.box')
                            </div>

                            <br>
                        @endforeach
                    @endif

                    @if ($creator->creator_destinations_id == 'Jermuk' && $creator->hiking)
                        @foreach ($jermukHiking as $y)
                            <div class="row" style="font-weight:600; display:flex">
                                @include('partials.box')
                            </div>

                            <br>
                        @endforeach
                    @endif

                    @if ($creator->creator_destinations_id == 'Stepanakert' && $creator->hiking)
                        @foreach ($stepanakertHiking as $y)
                            <div class="row" style="font-weight:600; display:flex">
                                @include('partials.box')
                            </div>

                            <br>
                        @endforeach
                    @endif

                    @if ($creator->creator_destinations_id == 'Tbilisi' && $creator->hiking)
                        @foreach ($tbilisiHiking as $y)
                            <div class="row" style="font-weight:600; display:flex">
                                @include('partials.box')
                            </div>

                            <br>
                        @endforeach
                    @endif
                </div> {{-- End --}}

                <div>
                    @if ($creator->creator_destinations_id == 'Yerevan' && $creator->bike)
                        @foreach ($yerevanBike as $y)
                            <div class="row" style="font-weight:600; display:flex; padding:15px" id="oneSel"
                                onclick="onClickSelectRowCheckBox()">
                                @include('partials.box')
                                <input type="checkbox">
                            </div>

                            <br>
                        @endforeach
                    @endif


                    @if ($creator->creator_destinations_id == 'Dilijan' && $creator->bike)
                        @foreach ($dilijanBike as $y)
                            <div class="row" style="font-weight:600; display:flex; padding:15px">
                                <div id="twoSel" onclick="onClickSelectTwo()">
                                    @include('partials.box')
                                </div>
                            </div>

                            <br>
                        @endforeach
                    @endif

                    @if ($creator->creator_destinations_id == 'Gyumri' && $creator->bike)
                        @foreach ($gyumriBike as $y)
                            <div class="row" style="font-weight:600; display:flex">
                                @include('partials.box')
                            </div>

                            <br>
                        @endforeach
                    @endif

                    @if ($creator->creator_destinations_id == 'Jermuk' && $creator->bike)
                        @foreach ($jermukBike as $y)
                            <div class="row" style="font-weight:600; display:flex">
                                @include('partials.box')
                            </div>

                            <br>
                        @endforeach
                    @endif

                    @if ($creator->creator_destinations_id == 'Stepanakert' && $creator->bike)
                        @foreach ($stepanakertBike as $y)
                            <div class="row" style="font-weight:600; display:flex">
                                @include('partials.box')
                            </div>

                            <br>
                        @endforeach
                    @endif

                    @if ($creator->creator_destinations_id == 'Tbilisi' && $creator->bike)
                        @foreach ($tbilisiBike as $y)
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
