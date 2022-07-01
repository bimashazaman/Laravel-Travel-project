	<header class="top-area">
		<div class="header-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="logo">
							<a href="{{ url('/') }}">
								<img src="{{ asset('images/Tour-Logo.png') }}" alt="">
							</a>
						</div><!-- /.logo-->
					</div><!-- /.col-->
					<div class="col-sm-10">
						<div class="main-menu">

							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse"
									data-target=".navbar-collapse">
									<i class="fa fa-bars"></i>
								</button><!-- / button-->
							</div><!-- /.navbar-header-->
							<div class="collapse navbar-collapse bg-white">
								<ul class="nav navbar-nav navbar-center" >
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         Tours
                                        </a>
                                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ url('/ClassicTour') }}">Classic Tours</a>
                                          <a class="dropdown-item" href="{{ url('/gurantee') }}">Tours with guarantee departures</a>
                                          <a class="dropdown-item" href="{{ url('/gastroTours') }}">Gastro tours</a>
                                          <a class="dropdown-item" href="{{ url('activeTours') }}">Active Tours</a>
                                          <a class="dropdown-item" href="{{ url('/oneDay') }}">Oneday Tours</a>
                                          <a class="dropdown-item" href="{{ url('/themed') }}">Themed Tours</a>
                                        </div>
                                      </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         Services
                                        </a>
                                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ url('/cars')}}">Rent a transport</a>
                                          <a class="dropdown-item" href="{{ url('/hs') }}">Hotels</a>
                                          <a class="dropdown-item" href="{{ url('/acs') }}">Tour Accessories</a>
                                          <a class="dropdown-item" href="{{ url('/mice') }}">MICE</a>
                                        </div>
                                      </li>

                                      <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         Armenia
                                        </a>
                                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ url('/tts') }}">Things to see</a>
                                          <a class="dropdown-item" href="{{ url('/ttdd') }}">Things to do</a>
                                          <a class="dropdown-item" href="{{ url('/food') }}">Food and drink</a>
                                          <a class="dropdown-item" href="">Todo in sorrounding</a>
                                          <a class="dropdown-item" href="">Useful to know</a>
                                          <a class="dropdown-item" href="{{ url('/cs') }}">Events</a>
                                          <a class="dropdown-item" href="{{ url('/b') }}">Brochure</a>
                                          <a class="dropdown-item" href="">Travel Blog</a>
                                        </div>
                                      </li>
                                    <li class="nav-item dropdown ">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         About Us
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item ru" href="{{ url('/c2') }}">Who are we</a>
                                          <a class="dropdown-item ru" href="{{ url('/ways') }}">3 ways to book a tour</a>
                                          <a class="dropdown-item ru" href="">Privacy Policy</a>
                                          <a class="dropdown-item ru" href="">Vacancy</a>
                                          <a class="dropdown-item ru" href="">Reviews</a>
                                          <a class="dropdown-item ru" href="{{ url('/contact') }}">Contact us</a>
                                        </div>
                                      </li>

									<li class="language">ENG</li>
                                      <li class="USD">USD</li>

									<li>
										<input type="text" placeholder="Search" class="searchHeader">
									</li>
									<!--/.project-btn-->
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.main-menu-->
					</div><!-- /.col-->
				</div><!-- /.row -->
				<div class="home-border"></div><!-- /.home-border-->
			</div><!-- /.container-->
		</div><!-- /.header-area -->
        <div class="fullBanner">
            <img src="{{ asset('images/DefaultBanner.png') }}" alt="">
        </div>

	</header><!-- /.top-area-->

