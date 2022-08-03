<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>

                <li class="menu-title">
                </li>
                <li class="active">
                    <a href="{{ url('/main') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>
               

                <li class="submenu">
                    <a href="#"><i class="fe fe-users"></i> <span> Tours</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">

                        <li><a href="{{ url('/getTourByCategory/1')}}">Classic Tours</a></li>
                        <li><a href="{{ url('/getTourByCategory/2')}}">Tours With Guarantee Departures</a></li>
                        <li><a href="{{ url('/getTourByCategory/3')}}">Gastro Tours</a></li>
                        <li><a href="{{ url('/getTourByCategory/4')}}">Active Tours</a></li>
                        <li><a href="{{ url('/getTourByCategory/5')}}">One Day</a></li>
                        <li><a href="{{ url('/getTourByCategory/6')}}">Themed Tours</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fe fe-layout"></i> <span> Services <span class="menu-arrow"></span></span></a>
                    <ul style="display: none;">
                        {{-- <li><a href="{{ url('/admin/d') }}">Destination</a></li> --}}
                        <li><a href="{{ url('/cars') }}">Car</a></li>
                        <li><a href="{{ url('/admin/CarWithDriver') }}">Car with driver</a></li>
                        <li><a href="{{ url('/admin/CarAtAirport') }}">Car for airport</a></li>
                        <li><a href="{{ url('/admin/Hotel') }}">Hotels </a></li>
                        <li><a href="{{ url('/admin/Accessiories') }}">Tour Accessiories</a></li>
                        <li><a href="{{ url('/admin/Mice') }}">Mice</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-sync"></i> <span> Armenia </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/admin/thingsToSee') }}"> Things To see </a></li>
                        <li><a href="{{ url('/admin/thingsToDo') }}"> Things to Do </a></li>
                        <li><a href="{{ url('/admin/foods') }}"> Food and Drink </a></li>
                        <li><a href="{{ url('/admin/nearby') }}"> Todo In sorrounding </a></li>
                        <li><a href="{{ url('/admin/usefulToKnow') }}"> Useful to know</a></li>
                        <li><a href="{{ url('/admin/events') }}">Events </a></li>
                        <li><a href="{{ url('/admin/brochure') }}">Brochure </a></li>
                        <li><a href="{{ url('/admin/TravelBlog') }}">Travel Blog </a></li>
                    </ul>
                </li>
              
                
                   
                        
                   
               
                <li class="submenu">
                    <a href="#"><i class="fe fe-table"></i> <span> About Us <span class="menu-arrow"></span></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ url('/admin/aboutUs') }}">Who we are </a></li>
                        <li><a href="{{ url('/admin/waysToBook') }}">Ways to book</a></li>
                        {{-- <li><a href="tables-basic.html">Privacy policy </a></li> --}}
                        <li><a href="{{ url('/admin/vacancy') }}">Vacancy</a></li>
                        {{-- <li><a href="tables-basic.html">Reviews</a></li>
                        <li><a href="tables-basic.html">Contact us</a></li> --}}
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fe fe-home"></i> <span> CMS</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">

                        <li><a href="{{ url('/homeCms/1/edit') }}">HOME</a></li>
                        <li><a href="{{ url('/tourCms') }}">Tour</a></li>
                        <li><a href="{{ url('/carCms') }}">Car</a></li>
                        <li><a href="{{ url('/hotelCms') }}">Hotel</a></li>
                        <li><a href="{{ url('/accessioriesCms') }}">Accessories</a></li>
                        <li><a href="{{ url('/miceCms') }}">MICE</a></li>
                        <li><a href="{{ url('/blogCms') }}">Blog</a></li>
                        <li><a href="{{ url('/vacancyCms') }}">Vacancy</a></li>
                        <li><a href="{{ url('/reviewCms') }}">Review</a></li>
                        {{-- <li><a href="">Contact</a></li> --}}
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <script>

    </script>
</div>