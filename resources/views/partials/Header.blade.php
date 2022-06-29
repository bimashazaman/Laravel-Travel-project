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
								<ul class="nav navbar-nav navbar-right" style=" text-align: center;">
                                    <li class="sp"><a href="{{ url('/tours') }}">Tours</a></li>
                                    <li class="sp"><a href="">Services</a></li>
                                    <li class="sp"><a href="">Armenia</a></li>
                                    <li class="sp"><a href="">About Us</a></li>

									{{-- <li class="sp"><a href="{{ url('/hs') }}">Hotels</a></li>
                                    <li class="sp"><a href="{{ url('/cars') }}">Cars</a></li>
                                    <li class="sp"><a href="{{ url('/cs') }}">Events</a></li> --}}


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
            <img src="{{ asset('images/DefaultBanner.jpg') }}" alt="">
        </div>

	</header><!-- /.top-area-->

