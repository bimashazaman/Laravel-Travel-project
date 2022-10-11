<section class="requestTour">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="requestTour__title">
                    <h2 style="text-align: center">
                        {{ __('Choose one of our tours or create your own trip!') }}
                    </h2>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="col-sm-4 col-xs-12 padding-0 ">
                            <ul class="list-group ProgressBarItem" style="display: flex;">
                                <li class="list-group-item resMargin" style="background-color:#F7F6F4; border:none;">
                                    <i>{{ __('Information about the group') }}</i>
                                </li>
                            </ul>
                            <div class="progress Progress-border ProgressBarSize">
                                <div class="progress-bar bg-success" role="progressbar"
                                    style="width: 100%; background-color: #284525;" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 padding-0 ">
                            <ul class="list-group ProgressBarItem" style="display: flex;">
                                <li class="list-group-item resMargin" style="background-color:#F7F6F4; border:none; ">
                                    <i>{{ __('Select the destination') }}</i>
                                </li>
                            </ul>
                            <div class="progress Progress-border ProgressBarSize">
                                <div class="progress-bar bg-success " role="progressbar"
                                    style="width: 0%; background-color: #284525;" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 padding-0 ">
                            <ul class="list-group ProgressBarItem" style="display: flex;">
                                <li class="list-group-item resMargin" style="background-color:#F7F6F4; border:none;">
                                    <i>{{ __('Submit for a quote') }}</i>
                                </li>
                            </ul>
                            <div class="progress Progress-border ProgressBarSize">
                                <div class="progress-bar bg-success " role="progressbar"
                                    style="width: 0%; background-color: #284525;" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-5 col-xs-12">
                        <br>
                        <br>
                        <br>
                        <img src="{{ asset('images/ReqTour1.png') }}" alt="">
                    </div>
                    <div class="col-md-7 col-xs-12">
                        <form action="{{ url('stepOneStore') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="col-md-12 col-xs-12">
                                    <input class="reqTourInput" type="text" placeholder="{{ __('Name') }}"
                                        style="width:100%" name="name" required>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input class="reqTourInput" type="text" id="datepicker"
                                        placeholder="{{ __('Start Date') }}" name="start_date" style="width:100%"
                                        onfocus="(this.type='date')" required>
                                </div>
                                <div class="col-md-12 col-xs-12">

                                    <Select id="Starting Destination" style="width:100%" class="reqTourInput"
                                        name="creator_destinations_id" required>
                                        @foreach ($destination as $d)
                                            <option value="{{ $d->name }}">Yerevan - {{ $d->name }}</option>
                                        @endforeach
                                    </Select>
                                </div>
                                <div class="col-md-12 col-xs-12">

                                    <div class="col-md-6 col-xs-12">
                                        <span><label style="float: left; background-color: white; width: 100%;"
                                                class="reqTourInput">
                                                <input type="number" style="border:none; outline:none; width: 100%"
                                                    min="0" placeholder="{{ __('Number Of Adults') }}"
                                                    name="adult" required>
                                            </label>
                                        </span>

                                    </div>
                                    <div class="col-md-6 col-xs-12" style="">
                                        <span><label for=""
                                                style="float: left; background-color: white; width: 100%;"
                                                class="reqTourInput">
                                                <input type="number" style="border:none; outline:none; width: 100%"
                                                min="0"
                                                    placeholder="{{ __('Number Of Childs') }}" name="child" required>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12" style="margin: 16px">

                                    <div class="col">
                                        <div class="ReqBox" id="box" style="width: 130px; float:left;"
                                            onclick="onClickSelect()"><i class="fa-solid fa-car"></i>
                                            <div>
                                                {{ __('Car') }}
                                                <span>
                                                    <input value="By Car" style="display: none" type="checkbox"
                                                        id="myCheck" name="car">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="ReqBox" id="motor" style="width: 130px; float:left;"
                                            onclick="onClickSelectmotorcycle()"><i class="fa-solid fa-motorcycle"></i>

                                            {{ __('Motorcycle') }}
                                            <span> <input value="By Motorcycle" style="display: none" type="checkbox"
                                                    id="bla" name="motorcycle"></span>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="ReqBox" id="nos" style="width: 130px; float:left;"
                                            onclick="onClickSelectBike()"><i class="fa-solid fa-person-biking"></i>
                                            <div>
                                                {{ __('Bike') }}

                                                <input value="By Bike" style="display: none" type="checkbox"
                                                    id="jj" name="bike">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="ReqBox" id="yyy" style="width: 130px; float:left;"
                                            onclick="onclickHiking()"> <i class="fa-solid fa-person-hiking"></i>
                                            <div>
                                                {{ __('Hiking') }}
                                                <input value="Hiking" style="display: none" type="checkbox"
                                                    id="zzz" name="hiking">
                                            </div>
                                        </div>
                                    </div>


                                </div>


                                <div class="col-md-12 col-xs-12">
                                    <Select id="Starting Destination" style="width:100%" class="reqTourInput"
                                        name="meals">
                                        <option value="No Meal">{{__('--Select Additional--')}}</option>
                                        <option value="With Meals">
                                           {{ __('Meals (15$ per pax)')}}
                                        </option>
                                    </Select>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <button class="package-view" style="margin: 20px" type="submit">
                                        <a style="text-decoration: none; color:black; font-weight:600; padding:5px "
                                            {{-- href="{{ url('/secondStep') }}" --}}>
                                            {{ __('Create trip') }}
                                        </a>
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
<script>
    function onClickSelect() {
        var checkBox = document.getElementById("myCheck");

        document.querySelector('#box').style.backgroundColor = '#FAEFD7';

        document.querySelector('#motor').style.backgroundColor = 'white';
        document.querySelector('#nos').style.backgroundColor = 'white';
        document.querySelector('#yyy').style.backgroundColor = 'white';
        document.querySelector('#bla').checked = false;
        document.querySelector('#jj').checked = false;
        document.querySelector('#zzz').checked = false;

        if (checkBox.checked == true) {
            checkBox.checked = false;
            document.querySelector('#box').style.backgroundColor = 'white';
        } else {
            checkBox.checked = true;

        }



    }

    function onClickSelectmotorcycle() {
        var checkBox = document.getElementById("bla");
        document.querySelector('#motor').style.backgroundColor = '#FAEFD7';

        document.querySelector('#box').style.backgroundColor = 'white';
        document.querySelector('#nos').style.backgroundColor = 'white';
        document.querySelector('#yyy').style.backgroundColor = 'white';
        document.querySelector('#myCheck').checked = false;
        document.querySelector('#jj').checked = false;
        document.querySelector('#zzz').checked = false;


        if (checkBox.checked == true) {
            checkBox.checked = false;

            document.querySelector('#motor').style.backgroundColor = 'white';

        } else {
            checkBox.checked = true;
        }

    }

    function onClickSelectBike() {
        var checkBox = document.getElementById("jj");
        document.querySelector('#nos').style.backgroundColor = '#FAEFD7';

        document.querySelector('#box').style.backgroundColor = 'white';
        document.querySelector('#motor').style.backgroundColor = 'white';
        document.querySelector('#yyy').style.backgroundColor = 'white';
        document.querySelector('#myCheck').checked = false;
        document.querySelector('#bla').checked = false;
        document.querySelector('#zzz').checked = false;


        if (checkBox.checked == true) {
            checkBox.checked = false;

            document.querySelector('#nos').style.backgroundColor = 'white';

        } else {
            checkBox.checked = true;
        }

    }

    function onclickHiking() {
        var checkBox = document.getElementById("zzz");
        document.querySelector('#yyy').style.backgroundColor = '#FAEFD7';

        document.querySelector('#box').style.backgroundColor = 'white';
        document.querySelector('#motor').style.backgroundColor = 'white';
        document.querySelector('#nos').style.backgroundColor = 'white';
        document.querySelector('#myCheck').checked = false;
        document.querySelector('#bla').checked = false;
        document.querySelector('#jj').checked = false;


        if (checkBox.checked == true) {
            checkBox.checked = false;

            document.querySelector('#yyy').style.backgroundColor = 'white';

        } else {
            checkBox.checked = true;
        }

    }
</script>
