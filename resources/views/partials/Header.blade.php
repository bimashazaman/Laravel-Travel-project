 <header class="top-area">
     <div class="header-area">
         <div class="container">
             <div class="row">
                 <div class="col-md-2">
                     <div class="logo">
                         <a href="{{ url('/home') }}">
                             <img src="{{ asset('images/Tour-Logo.png') }}" style="width:165px; height:76px"
                                 alt="">
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
                                         {{ __('Tours') }}
                                     </a>
                                     <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                         <a class="dropdown-item" href="{{ route('getClasicTours') }}">{{ __('Classic Tours') }}</a>
                                         <a class="dropdown-item" href="{{ url('/guaranteeTour') }}">{{ __('Tours With Guarantee Departures') }}</a>
                                         <a class="dropdown-item" href="{{ url('/GastroTours') }}">{{ __('Gastro tours') }}</a>
                                         <a class="dropdown-item" href="{{ url('activeTours') }}">{{ __('Active Tours') }}</a>
                                         <a class="dropdown-item" href="{{ url('/oneDay') }}">{{ __('Oneday Tours') }}</a>
                                         <a class="dropdown-item" href="{{ url('/themed') }}">{{ __('Themed Tours') }}</a>
                                     </div>
                                 </li>
                                 <li class="nav-item dropdown">
                                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                         role="button" data-toggle="dropdown" aria-haspopup="true"
                                         aria-expanded="false">
                                        {{ __('Services')}}
                                     </a>
                                     <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                         <a class="dropdown-item" href="{{ url('/caa') }}">{{ __('Rent a transport') }}</a>
                                         <a class="dropdown-item" href="{{ url('/hs') }}">{{ __('Hotels') }}</a>
                                         <a class="dropdown-item" href="{{ url('/acs') }}">{{ __('Tour Accessories') }}</a>
                                         <a class="dropdown-item" href="{{ url('/mices') }}">{{ __('MICE') }}</a>
                                     </div>
                                 </li>

                                 <li class="nav-item dropdown">
                                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                         role="button" data-toggle="dropdown" aria-haspopup="true"
                                         aria-expanded="false">
                                         {{ __('Armenia') }}
                                     </a>
                                     <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                         <a class="dropdown-item"
                                             href="{{ url('/getThingsToSeeByCategoryId/1') }}">{{ __('Things to see') }}</a>
                                         <a class="dropdown-item" href="{{ url('/getAllThingsToDo') }}">{{ __('Things To Do')}}</a>
                                         <a class="dropdown-item" href="{{ url('/getfoodsByCategory/1') }}">{{ __('Food and drink') }}</a>
                                         <a class="dropdown-item" href="{{ url('/nearbyByCategoryId/1') }}">{{ __('Todo in Surrounding') }}</a>
                                         <a class="dropdown-item" href="{{ url('/usefulToKnow') }}">{{ __('Useful to know') }}</a>
                                         <a class="dropdown-item" href="{{ url('/cs') }}">{{ __('Events') }}</a>
                                         <a class="dropdown-item" href="{{ url('/b') }}">{{ __('Brochure') }}</a>
                                         <a class="dropdown-item" href="{{ url('/Articles') }}">{{ __('Travel Blog') }}</a>
                                     </div>
                                 </li>
                                 <li class="nav-item dropdown ">
                                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                         role="button" data-toggle="dropdown" aria-haspopup="true"
                                         aria-expanded="false">
                                        {{ __('About Us')}}
                                     </a>
                                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                         <a class="dropdown-item ru" href="{{ url('/aboutUs') }}">{{ __('Who are we') }}</a>
                                         <a class="dropdown-item ru" href="{{ url('/ways') }}">{{ __('How To Book A Tour') }}</a>
                                         {{-- <a class="dropdown-item ru" href="{{ url('/privacy') }}">Privacy Policy</a> --}}
                                         <a class="dropdown-item ru" href="{{ url('/vacancyAll') }}">{{ __('Vacancy') }}</a>
                                         <a class="dropdown-item ru" href="{{ url('/reviews') }}">{{ __('Reviews') }}</a>
                                         <a class="dropdown-item ru" href="{{ url('/contact') }}">{{ __('Contact us') }}</a>
                                     </div>

                                 </li>
                                 <!--/.project-btn-->
                             </ul>
                             {{-- <li class="language">ENG</li>
                                      <li class="USD">USD</li> --}}
                             <ul class="nav navbar-nav navbar-right" style="margin-top: 14px;">
                                 
                                 <li class="nav-item dropdown">
                                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                         role="button" data-toggle="dropdown" aria-haspopup="true"
                                         aria-expanded="false">
                                         USD
                                     </a>

                                     {{-- @php($params = array_merge(request()->route()->parameters, ['currency_locale' => $lang])) --}}
                                     <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: auto">

                                         <a class="dropdown-item" href="{{url('/AMD') }}">
                                             AMD
                                         </a>
                                         <a class="dropdown-item" href="
                                         {{url('/EUR' )}}
                                         ">
                                             EUR
                                         </a>
                                         <a class="dropdown-item"
                                             href="
                                             {{url('/USD') }}">
                                             USD
                                         </a>
                                         <a class="dropdown-item"
                                             href="
                                             {{url('/RUB' )}}">
                                             RUB
                                         </a>

                                     </div>
                                 </li>


                               
                                 <li class="nav-item dropdown">
                                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                         role="button" data-toggle="dropdown" aria-haspopup="true"
                                         aria-expanded="false">
                                         {{ __('English') }}
                                     </a>
                                     
                                     <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: auto">
                                        @foreach($available_locales as $locale_name => $available_locale)

                                        
                                         <a class="dropdown-item" href="{{ url(url()->current().'/'.$available_locale) }}">
                                            {{ __($locale_name) }}
                                        </a>

                                        @endforeach
                                      
                                     </div>
                                   

                                 </li>
                                 {{-- @endif --}}



                                 <li style="display: flex">
                                     <input type="text" placeholder="Search" class="searchHeader"
                                         style="margin-top: 1px;">
                                     <i class="fa-solid fa-magnifying-glass"
                                         style="color: rgb(192, 181, 181); margin-top:10px; margin-left: 10px"></i>
                                 </li>
                             </ul>
                         </div><!-- /.navbar-collapse -->
                     </div><!-- /.main-menu-->
                 </div><!-- /.col-->
             </div><!-- /.row -->
             <div class="home-border"></div><!-- /.home-border-->
         </div><!-- /.container-->
     </div><!-- /.header-area -->


 </header><!-- /.top-area-->
