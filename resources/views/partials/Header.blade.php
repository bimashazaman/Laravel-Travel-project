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
								<ul class="nav navbar-nav navbar-right">
									<li class=""><a href="{{ route('home') }}">home</a></li>
									<li class=""><a href="{{ url('/tours') }}">Tours</a></li>
									<li class=""><a href="{{ url('/hs') }}">Hotels</a></li>
                                    <li class=""><a href="{{ url('/cars') }}">Cars</a></li>
                                    <li class=""><a href="{{ url('/cs') }}">Events</a></li>
                                    <li class=""><a href="{{ url('/c2') }}">About Us</a></li>
                                    <li class=""><a href="{{ url('/contact') }}">Contact</a></li>
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

	</header><!-- /.top-area-->
	<!-- main-menu End -->


{{-- <div class="banner">

    <img src="{{ asset('images/DefaultBanner.png') }}" alt="">

</div> --}}
