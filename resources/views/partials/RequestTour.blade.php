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
                        <form>
                            <fieldset>
                                <div class="col-md-12 col-xs-12">
                                    <input class="reqTourInput" type="text" placeholder="{{ __('Name') }}" style="width:100%" name="name">
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input class="reqTourInput" type="text" id="datepicker" placeholder="{{ __('Start Date') }}" name="start_date"
                                        style="width:100%" onfocus="(this.type='date')">
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    
                                    <Select id="Starting Destination" style="width:100%" class="reqTourInput" pla>
                                        <option>Destination</option>
                                        <option>Mercedes</option>
                                        <option>Audi</option>
                                    </Select>
                                </div>
                                <div class="col-md-12 col-xs-12">

                                    <div class="col-md-6 col-xs-12">
                                        <span><label for="" style="float: left; background-color: white; width: 100%;"
                                                class="reqTourInput">
                                            <input type="number" style="border:none; outline:none; width: 100%" placeholder="{{ __('Number Of Adults') }}">
                                            </label></span>
                                        {{-- <span>
                                            <div class="number" style="float:left;">
                                                <button class="minus"
                                                    style="width:25px; color: black; border:none; font-size:3rem">-</button>
                                                <input type="number" value="1"
                                                    style="width: 40px; text-align: center;" class="reqTourInput" />
                                                <button class="plus"
                                                    style="width:25px; color: black; border:none; font-size:3rem">+</button>
                                            </div>
                                        </span> --}}
                                    </div>
                                    <div class="col-md-6 col-xs-12" style="">
                                        <span><label for="" style="float: left; background-color: white; width: 100%;"
                                            class="reqTourInput">
                                        <input type="number" style="border:none; outline:none; width: 100%" placeholder="{{ __('Number Of Childs') }}">
                                        </label></span>
                                        {{-- <div class="number" style="float:left;">
                                            <button class="minus"
                                                style="width:25px; color: black; border:none; font-size:3rem">-</button>
                                            <input type="text" value="1"
                                                style="width: 40px; text-align: center;" class="reqTourInput" />
                                            <button class="plus"
                                                style="width:25px; color: black; border:none; font-size:3rem">+</button>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12" style="margin: 16px">
                                    {{-- <div class="col">
                                        <input type="text" class="reqTourInput"
                                            style="width: 140px; float:left; margin-top: 2.5%;" placeholder="{{ __('Type') }}">
                                    </div> --}}
                                    <div class="col">
                                        <div class="ReqBox" style="width: 100px; float:left;"><i
                                                class="fa-solid fa-car"></i>
                                            <div>{{ __('Car') }}</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="ReqBox" style="width: 100px; float:left;"><i
                                                class="fa-solid fa-motorcycle"></i> {{ __('Motorcycle') }}</div>
                                    </div>
                                    <div class="col">
                                        <div class="ReqBox" style="width: 100px; float:left;"><i
                                                class="fa-solid fa-person-biking"></i> {{ __('Bike') }} </div>
                                    </div>
                                    <div class="col">
                                        <div class="ReqBox" style="width: 100px; float:left;"> <i
                                                class="fa-solid fa-person-hiking"></i> {{ __('Hiking') }}</div>
                                    </div>


                                </div>

                               
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-9 col-xs-9">
                                        <input class="reqTourInput" type="Text"
                                            placeholder="{{ __('Meals (10$ Per one pax)') }}" style="width:100%; ">
                                    </div>
                                    <div class="col-md-3 col-xs-3">
                                        <div class="checkIcon"><i class="fa-solid fa-check" style="width:100%"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <button class="package-view" style="margin: 20px">
                                        <a style="text-decoration: none; color:black; font-weight:600; padding:5px " href="{{ url('/secondStep') }}">
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
</section><script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
    </script>
