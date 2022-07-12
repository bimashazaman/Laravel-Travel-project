<section class="requestTour">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="requestTour__title">
                    <h2 style="text-align: center">
                        Choose one of our tours or create your own trip!
                    </h2>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="col-sm-4 col-xs-12 padding-0 ">
                            <ul class="list-group ProgressBarItem" style="display: flex;">
                                <li class="list-group-item resMargin" style="background-color:#F7F6F4; border:none;">
                                    <i>Information about the group</i>
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
                                    <i>Select the destination</i>
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
                                    <i>Submit for a quote</i>
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


                {{-- <ul class="list-group ProgressBarItem" style="display: flex;">
                <li class="list-group-item resMargin" style="background-color:#F7F6F4; border:none;"><i>Information about the group</i></li>
                <li class="list-group-item resMargin" style="background-color:#F7F6F4; border:none; margin-left:10%"><i>Select the destination</i></li>
                <li class="list-group-item resMargin" style="background-color:#F7F6F4; border:none; margin-left:17%"><i>Submit for a quote</i></li>

            </ul>
            <ul class="progress list-group ProgressBarItem" style="-webkit-column-count: 3; -moz-column-count: 3; column-count: 3;">
                <li class="list-group-item" style="background-color: #284525;"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>

            </ul> --}}
            </div>

            {{-- <div class="row">
<div class="col-md-12 col-xs-12">
    <div class="col-md-6 col-xs-6">
        <img src="{{ asset('images/ReqTour1.png') }}" alt="">
    </div>
    <div class="col-md-6 col-xs-6">

        <form id="multistepsform">
            <!-- progressbar -->

            <!-- fieldsets -->
            <fieldset>
                <input type="text" placeholder="Name">
                <input type="Text" placeholder="Start Date">
                <input type="text" list="cars" placeholder="Destination" />
                <datalist id="Starting Destination">
                    <option>Volvo</option>
                    <option>Saab</option>
                    <option>Mercedes</option>
                    <option>Audi</option>
                </datalist>
                <input type="number" placeholder="Number of people">
                <div class="parentForm">
                    <div class="divForm1"><i class="fa-solid fa-car"></i> Car </div>
                    <div class="divForm2"> <i class="fa-solid fa-bicycle"></i> Cycle</div>
                    <div class="divForm3"> <i class="fa-solid fa-person-hiking"></i> Hiking</div>
                    <div class="divForm4"><i class="fa-solid fa-person-biking"></i> Bike </div>
                    <div class="divForm5"><i class="fa-solid fa-bus"></i>Bus </div>
                    <div class="divForm6"><i class="fa-solid fa-car-bus"></i>Car Bus </div>
                </div>
                <input type="button" name="next" class="package-view" style="width: 80px;box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;" value="Next" />



            </fieldset>

            <fieldset>
                <input type="text" name="fname" placeholder="First Name" />
                <input type="text" name="lname" placeholder="Last Name" />
                <input type="text" name="phone" placeholder="Phone" />
                <textarea name="address" placeholder="Address"></textarea>
                <input type="button" name="previous" class="previous action-button" value="Previous" />

                <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Social Profiles</h2>
                <h3 class="fs-subtitle">Your presence on the social network</h3>
                <input type="text" name="twitter" placeholder="Twitter" />
                <input type="text" name="facebook" placeholder="Facebook" />
                <input type="text" name="gplus" placeholder="Google Plus" />
                <input type="button" name="previous" class="previous action-button" value="Previous" />
                <input type="submit" name="submit" class="submit action-button" value="Submit" />
            </fieldset>
        </form>


   </div>
</div>

            </div> --}}

            {{-- <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-6 col-xs-6">
                        <img src="{{ asset('images/ReqTour1.png') }}" alt="">
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <form>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="text" placeholder="Name" style="width:100%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="Text" placeholder="Start Date" style="width:100%">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                    <input type="text" list="cars" placeholder="Destination" style="width:100%"/>
                                    <datalist id="Starting Destination">
                                        <option>Volvo</option>
                                        <option>Saab</option>
                                        <option>Mercedes</option>
                                        <option>Audi</option>
                                    </datalist>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="col-md-4 col-xs-4" style="background-color: white;">
                                            <label for="" >Adult</label>
                                        </div>
                                        <div class="col-md-2 col-xs-2" style="display: flex">
                                            <button>-</button>
                                            <input type="text" style="width:5px">
                                            <button>+</button>
                                        </div>
                                        <div class="col-md-4 col-xs-4" style="background-color: white;">
                                            <label for="">Child</label>
                                        </div>
                                        <div class="col-md-4 col-xs-2" style="display: flex">
                                            <button>-</button>
                                            <input type="text" style="width: 2px">
                                            <button>+</button>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                        </form>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-5 col-xs-12">
                        <img src="{{ asset('images/ReqTour1.png') }}" alt="">
                    </div>
                    <div class="col-md-7 col-xs-12">
                        <form>
                            <fieldset>
                                <div class="col-md-12 col-xs-12">
                                    <input class="reqTourInput" type="text" placeholder="Name" style="width:100%" name="name">
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input class="reqTourInput" type="date" placeholder="Start Date" name="start_date"
                                        style="width:100%">
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <input class="reqTourInput" type="text" list="cars" placeholder="Destination"
                                        style="width:100%" />
                                    <datalist id="Starting Destination">
                                        
                                        <option>Saab</option>
                                        <option>Mercedes</option>
                                        <option>Audi</option>
                                    </datalist>
                                </div>
                                <div class="col-md-12 col-xs-12">

                                    <div class="col-md-6 col-xs-12">
                                        <span><label for=""
                                                style="float: left;background-color: white; padding-right: 30%;"
                                                class="reqTourInput"><i
                                                    style="font-weight: 400">Adult</i></label></span>
                                        <span>
                                            <div class="number" style="float:left;">
                                                <button class="minus"
                                                    style="width:25px; color: black; border:none; font-size:3rem">-</button>
                                                <input type="text" value="1"
                                                    style="width: 40px; text-align: center;" class="reqTourInput" />
                                                <button class="plus"
                                                    style="width:25px; color: black; border:none; font-size:3rem">+</button>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="col-md-6 col-xs-12" style="">
                                        <label for=""
                                            style="float: left;background-color: white; padding-right: 30%;"
                                            class="reqTourInput"><i style="font-weight: 400">Child</i></label>
                                        <div class="number" style="float:left;">
                                            <button class="minus"
                                                style="width:25px; color: black; border:none; font-size:3rem">-</button>
                                            <input type="text" value="1"
                                                style="width: 40px; text-align: center;" class="reqTourInput" />
                                            <button class="plus"
                                                style="width:25px; color: black; border:none; font-size:3rem">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12" style="margin: 16px">
                                    <div class="col">
                                        <input type="text" class="reqTourInput"
                                            style="width: 140px; float:left; margin-top: 2.5%;P{}" placeholder="Type">
                                    </div>
                                    <div class="col">
                                        <div class="ReqBox" style="width: 100px; float:left;"><i
                                                class="fa-solid fa-car"></i>
                                            <div>Car</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="ReqBox" style="width: 100px; float:left;"><i
                                                class="fa-solid fa-motorcycle"></i> Motorcycle</div>
                                    </div>
                                    <div class="col">
                                        <div class="ReqBox" style="width: 100px; float:left;"><i
                                                class="fa-solid fa-person-biking"></i> Bike </div>
                                    </div>
                                    <div class="col">
                                        <div class="ReqBox" style="width: 100px; float:left;"> <i
                                                class="fa-solid fa-person-hiking"></i> Hiking</div>
                                    </div>


                                </div>

                                {{-- <div class="col-md-12 col-xs-12 col-sm-12" style="margin: 0; align-items: start; display: contents;">

                                    <div class="ReqBox" style="width: 100px; float:left;"><i class="fa-solid fa-car" ></i> <div>Car</div> </div>
                                    <div class="ReqBox" style="width: 100px; float:left;"> <i class="fa-solid fa-bicycle" ></i> Cycle</div>
                                    <div class="ReqBox" style="width: 100px; float:left;"> <i class="fa-solid fa-person-hiking"></i> Hiking</div>
                                    <div class="ReqBox" style="width: 100px; float:left;"><i class="fa-solid fa-person-biking"></i> Bike </div>
                                    <div class="ReqBox" style="width: 100px; float:left;"><i class="fa-solid fa-bus"></i><div>Bus</div> </div>

                                </div> --}}
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-9 col-xs-9">
                                        <input class="reqTourInput" type="Text"
                                            placeholder="Meals (10$ Per one pax)" style="width:100%; ">
                                    </div>
                                    <div class="col-md-3 col-xs-3">
                                        <div class="checkIcon"><i class="fa-solid fa-check" style="width:100%"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <button class="package-view" style="margin: 20px">
                                        <a style="text-decoration: none; color:black; font-weight:600; padding:5px " href="{{ url('/secondStep') }}">
                                            Create trip
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
