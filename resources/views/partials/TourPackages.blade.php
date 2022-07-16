 <!--packages start-->


 <section id="pack" class="packages">
     <div class="container">

         <!--/.gallery-header-->
         <div class="packages-content">
             <div class="row">
                 @foreach($tours as $tour)
                 <div class="col-md-4 col-sm-6">
                     <h3 style="text-align: center;  font-weight: 600;">{{$tour->category->name}}</h3>

                     <div class="single-package-item">

                         <img src="https://images.pexels.com/photos/1371360/pexels-photo-1371360.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="package-place">
                         <div class="packageName">
                             {{$tour->name}}
                         </div>
                         <div>
                             <h4 class="package-txt">
                                 <a href="#">
                                     package one
                                 </a>
                             </h4>
                             <p class="kki">
                                 {{$tour->description}}
                             </p>
                         </div>
                         <div class="pacdet">
                             <div class="packageOffer">
                                 <span><i class="fa-regular fa-clock"></i></span>{{$tour->duration}}
                             </div>

                             <div class="packageOffer">
                                 <span><i class="fa-solid fa-calendar-check"></i></span>{{$tour->start_date.' - '.$tour->end_date}}
                             </div>

                             <div class="packageOffer">
                                 <span><i class="fa-solid fa-dollar-sign"></i></span>${{$tour->price}}
                             </div>
                         </div>
                         <div class="rating">
                             <span class=""><i class="fa-solid fa-star"></i></span>
                             <span class=""><i class="fa-solid fa-star"></i></span>
                             <span class=""><i class="fa-solid fa-star"></i></span>
                             <span class=""><i class="fa-solid fa-star"></i></span>
                             <span class=""><i class="fa-solid fa-star"></i></span>
                         </div>
                         <div class="package-btn">
                             <a href="{{ url('/tour/detail/{id}') }}"> <button class="package-view">
                                     Details
                                 </button>
                             </a>

                         </div>
                     </div>
                 </div>
                 @endforeach



             </div>
             <!--/.row-->
         </div>
         <!--/.packages-content-->
     </div>
     <!--/.container-->
 </section>