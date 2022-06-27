<section class="requestTour">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="requestTour__title">
                    <h2>Request a tour</h2>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/ReqTour.png') }}" alt="">
            </div>
            <div class="col-md-6">

                <form id="multistepsform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                      <li class="active">Account Setup</li>
                      <li>Personal Details</li>
                      <li>Social Profiles</li>

                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                      <h2 class="fs-title">Create your account</h2>
                      <h3 class="fs-subtitle"></h3>
                      <input type="text" name="email" placeholder="Email" />
                      <input type="password" name="pass" placeholder="Password" />
                      <input type="password" name="cpass" placeholder="Confirm Password" />
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
 <br>
 <br>
 <br>
 <br>
