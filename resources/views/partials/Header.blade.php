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
                                    <li class="sp"><a href="{{ url('/tours') }}">Tours</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         Services
                                        </a>
                                        <div class="dropdown-menu dm" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ url('/cars')}}">Rent a transport</a>
                                          <a class="dropdown-item" href="{{ url('/hs') }}">Hotels</a>
                                          <a class="dropdown-item" href="#">Tour Accessories</a>
                                        </div>
                                      </li>
                                    <li class="sp"><a href="">Armenia</a></li>
                                    <li class="sp"><a href="">About Us</a></li>

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

