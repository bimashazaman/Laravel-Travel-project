 <!--packages start-->


 <section id="pack" class="packages">
     <div class="container">


         <!--/.gallery-header-->
         <div class="packages-content">
             <div class="row">
                 <div data-slick='{"slidesToShow": 4, "slidesToScroll": 4}' class="autoplay">
                     @foreach ($tours as $tour)
                         <div class="col-md-4 col-sm-6">
                             <h3 style="text-align: center;  font-weight: 600;">{{ $tour->category->name }}</h3>

                             <div class="single-package-item">

                                 {{-- {{ var_dump($tour->image) }} --}}

                                 <img src="{{ $tour->images->first()->path }}" alt="">

                                 <div class="packageName">
                                     {{ $tour->name }}
                                 </div>
                                 <div>
                                     <h4 class="package-txt">
                                         <a href="#"
                                             style="margin-left: 15%;font-weight: 400; font-size: 1.5rem;">
                                             @foreach ($tour->types as $t)
                                                 <div style="margin-left: 15%;font-weight: 400; font-size: 1.5rem;">
                                                     {{ $t->type_name }}
                                                 </div>
                                             @endforeach
                                         </a>
                                     </h4>
                                     <p class="kki">
                                         {{ $tour->description }}
                                     </p>
                                 </div>
                                 <div class="pacdet">
                                     <div class="packageOffer">
                                         <span><i class="fa-regular fa-clock"></i></span>{{ $tour->duration }}
                                     </div>

                                     <div class="packageOffer">
                                         <span><i
                                                 class="fa-solid fa-calendar-check"></i></span>{{ $tour->start_date . ' - ' . $tour->end_date }}
                                     </div>

                                    
                                         
                                         <div class="packageOffer">
                                             <span><i class="fa-solid fa-dollar-sign"></i></span>{{ __($tour->AMD) }}
                                             AMD
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
                                     <a href="{{ url('/Bv') }}"> <button class="package-view">
                                             Details
                                         </button>
                                     </a>

                                 </div>
                             </div>
                         </div>
                     @endforeach
                 </div>



             </div>
             <!--/.row-->
         </div>
         <!--/.packages-content-->
     </div>
     <!--/.container-->
 </section>
