 <header class="top-area">
     <div class="header-area">
         <div class="container">
             <div class="row">
                <div class="col-md-2">
                     <div class="logo">
                         <a href="{{ url('/') }}">
                            <img src="{{ asset('images/Tour-Logo.png') }}" style="width:165px; height:76px" alt="">
                         </a>
                     </div><!-- /.logo-->
                 </div><!-- /.col-->
                 <div class="col-md-10">
                     <div class="main-menu">

                         <!-- Brand and toggle get grouped for better mobile display -->
                         <div class="navbar-header">
                             <button type="button" class="navbar-toggle" data-toggle="collapse"
                                 data-target=".navbar-collapse">
                                 <i class="fa fa-bars"></i>
                             </button><!-- / button-->
                         </div><!-- /.navbar-header-->
                         <div class="collapse navbar-collapse bg-white">
                             <ul class="nav navbar-nav navbar-center" style="margin-top: 14px;">
                                 <li class="nav-item dropdown">
                                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                         role="button" data-toggle="dropdown" aria-haspopup="true"
                                         aria-expanded="false">
                                         Tours
                                     </a>
                                     <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                         <a class="dropdown-item" href="{{ url('/Bv') }}">Classic Tours</a>
                                         <a class="dropdown-item" href="{{ url('/guaranteeTour') }}">Tours with guarantee
                                             departures</a>
                                         <a class="dropdown-item" href="{{ url('/gastroTours') }}">Gastro tours</a>
                                         <a class="dropdown-item" href="{{ url('activeTours') }}">Active Tours</a>
                                         <a class="dropdown-item" href="{{ url('/oneDay') }}">Oneday Tours</a>
                                         <a class="dropdown-item" href="{{ url('/themed') }}">Themed Tours</a>
                                     </div>
                                 </li>
                                 <li class="nav-item dropdown">
                                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                         role="button" data-toggle="dropdown" aria-haspopup="true"
                                         aria-expanded="false">
                                         Services
                                     </a>
                                     <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                         <a class="dropdown-item" href="{{ url('/cars') }}">Rent a transport</a>
                                         <a class="dropdown-item" href="{{ url('/hs') }}">Hotels</a>
                                         <a class="dropdown-item" href="{{ url('/acs') }}">Tour Accessories</a>
                                         <a class="dropdown-item" href="{{ url('/mices') }}">MICE</a>
                                     </div>
                                 </li>

                                 <li class="nav-item dropdown">
                                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                         role="button" data-toggle="dropdown" aria-haspopup="true"
                                         aria-expanded="false">
                                         Armenia
                                     </a>
                                     <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                         <a class="dropdown-item" href="{{ url('/tts') }}">Things to see</a>
                                         <a class="dropdown-item" href="{{ url('/ttdd') }}">Things to do</a>
                                         <a class="dropdown-item" href="{{ url('/food') }}">Food and drink</a>
                                         <a class="dropdown-item" href="{{ url('/todoSorrounding') }}">Todo in Surrounding</a>
                                         <a class="dropdown-item" href="{{ url('/usefulToKnow') }}">Useful to know</a>
                                         <a class="dropdown-item" href="{{ url('/cs') }}">Events</a>
                                         <a class="dropdown-item" href="{{ url('/b') }}">Brochure</a>
                                         <a class="dropdown-item" href="{{ url('/Articles') }}">Travel Blog</a>
                                     </div>
                                 </li>
                                 <li class="nav-item dropdown ">
                                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                         role="button" data-toggle="dropdown" aria-haspopup="true"
                                         aria-expanded="false">
                                         About Us
                                     </a>
                                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                         <a class="dropdown-item ru" href="{{ url('/c2') }}">Who are we</a>
                                         <a class="dropdown-item ru" href="{{ url('/ways') }}">3 ways to book a
                                             tour</a>
                                         <a class="dropdown-item ru" href="{{ url('/privacy') }}">Privacy Policy</a>
                                         <a class="dropdown-item ru" href="">Vacancy</a>
                                         <a class="dropdown-item ru" href="{{ url('/review') }}">Reviews</a>
                                         <a class="dropdown-item ru" href="{{ url('/contact') }}">Contact us</a>
                                     </div>

                                 </li>
                                 <!--/.project-btn-->
                             </ul>
                             {{-- <li class="language">ENG</li>
                                      <li class="USD">USD</li> --}}
                             <ul class="nav navbar-nav navbar-right" style="margin-top: 14px;">
                                 <li class="nav-item" style="text-decoration: underline; margin-top:10px">USD</li>
                                    <li class="nav-item" style="text-decoration: underline; margin-top:10px">ENG</li>
                                 <li style="display: flex">
                                     <input type="text" placeholder="Search" class="searchHeader" style="margin-top: 1px;">
                                     <i class="fa-solid fa-magnifying-glass" style="color: rgb(192, 181, 181); margin-top:10px; margin-left: 10px"></i>
                                 </li>
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
