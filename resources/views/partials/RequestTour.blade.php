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
                                    <i>Information about the group</i></li>
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
                                    <i>Select the destination</i></li>
                            </ul>
                            <div class="progress Progress-border ProgressBarSize">
                                <div class="progress-bar bg-success " role="progressbar"
                                    style="width: 50%; background-color: #284525;" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12 padding-0 ">
                            <ul class="list-group ProgressBarItem" style="display: flex;">
                                <li class="list-group-item resMargin" style="background-color:#F7F6F4; border:none;">
                                    <i>Submit for a quote</i></li>
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
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images/ReqTour1.png') }}" alt="">
                </div>
                <div class="col-md-6">

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
        </div>
</section>
