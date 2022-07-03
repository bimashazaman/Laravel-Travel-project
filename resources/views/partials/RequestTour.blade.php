<section class="requestTour">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="requestTour__title">
                    <h2 style="text-align: center">
                        Choose one of our tours or create your own trip!
                    </h2>
            </div>
            


              <ul class="list-group" style="display: flex;">
                <li class="list-group-item ProgressBarItem" style="background-color:#F7F6F4; border:none"><i>Information about the group</i></li>
                <li class="list-group-item ProgressBarItem" style="background-color:#F7F6F4; border:none; margin-left:13.5%"><i>Select the destination</i></li>
                <li class="list-group-item ProgressBarItem" style="background-color:#F7F6F4; border:none; margin-left:17%"><i>Submit for a quote</i></li>

            </ul>
            <ul class="progress list-group" style="-webkit-column-count: 3; -moz-column-count: 3; column-count: 3;">
                <li class="list-group-item" style="background-color: #284525;"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>

            </ul>
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

                      <h3 class="fs-subtitle"></h3>
                      <input type="text" placeholder="Name">
                      <input type="date" >
                      <input type="text" list="cars" placeholder="Destination"/>
                      <datalist id="cars">
                        <option>Volvo</option>
                        <option>Saab</option>
                        <option>Mercedes</option>
                        <option>Audi</option>
                      </datalist>
                        <input type="number" placeholder="Number of people">
                      <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>

                    <fieldset>
                      <h2 class="fs-title">Personal Details</h2>
                      <h3 class="fs-subtitle">We will never sell it</h3>
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
