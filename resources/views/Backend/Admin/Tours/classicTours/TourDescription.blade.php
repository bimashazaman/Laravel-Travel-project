@extends('Backend.Admin.AdminHome')
@section('admin-content')

    {{-- {{$tour}} --}}

    <!-- highlights part -->
   <div class="container-fluid">
    <h2 class="text-center font-weight-bold">
       
        Tour Description
    </h2>
    <div class="row">
        <div class="col-md-7">
         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="padding: 20px; ">
             <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
             </div>
             <div class="carousel-inner" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
               <div class="carousel-item active">
                 <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                 <img src="https://images.pexels.com/photos/1371360/pexels-photo-1371360.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhnf3eaSdDatqYhzTVvfWaUeheiao5bcXWIw&usqp=CAU" class="d-block w-100" alt="...">
               </div>
             </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
             </button>
           </div>
        </div>

        <div class="col-md-5">

            <div>
               <div  style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center" >
                   <h3 class="">
                      Facilities
                   </h3>
                       <hr>
   
                       <div class="list-group list-group-light">
                        <button type="button" class="list-group-item list-group-item-action  px-3 border-0 " aria-current="true">
                          Cras justo odio
                        </button>
                        <button type="button" class="list-group-item list-group-item-action px-3 border-0">
                          Dapibus ac facilisis in
                        </button>
                        <button type="button" class="list-group-item list-group-item-action px-3 border-0">
                          Morbi leo risus
                        </button>
                        <button type="button" class="list-group-item list-group-item-action px-3 border-0">
                          Porta ac consectetur ac
                        </button>
                        <button type="button" class="list-group-item list-group-item-action px-3 border-0" disabled>
                          Vestibulum at eros
                        </button>
                      </div>
               </div>
                   
              </div>
               
            </div>
   
        </div>
        </div>
        <div class="row">
        <div class="col-md-12 text-center">
            <h2>
                Singapur Tour
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dolorum vel nesciunt libero ut officia aliquid fuga quod dicta nemo nam excepturi recusandae inventore quisquam sunt sapiente beatae, id facere reiciendis voluptates magnam delectus consectetur non quis! Eos, magni deleniti.
            </p>
          </div>
        </div>

     <div class="row">
        <div class="col-md-6">
     
            <div>
               <div  style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center" >
                   <h3 class="">
                      Highlights
                   </h3>
                       <hr>
   
                       <div class="list-group list-group-light">
                        <button type="button" class="list-group-item list-group-item-action  px-3 border-0 " aria-current="true">
                          Cras justo odio
                        </button>
                        <button type="button" class="list-group-item list-group-item-action px-3 border-0">
                          Dapibus ac facilisis in
                        </button>
                        <button type="button" class="list-group-item list-group-item-action px-3 border-0">
                          Morbi leo risus
                        </button>
                        <button type="button" class="list-group-item list-group-item-action px-3 border-0">
                          Porta ac consectetur ac
                        </button>
                        <button type="button" class="list-group-item list-group-item-action px-3 border-0" disabled>
                          Vestibulum at eros
                        </button>
                      </div>
               </div>
                   
              </div>
               
            </div>
   
        

        <div class="col-md-6">
     
            <div>
               <div  style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center" >
                   <h3 class="">
                      Tour Program
                   </h3>
                       <hr>
   
                       <div class="list-group list-group-light">
                        <button type="button" class="list-group-item list-group-item-action  px-3 border-0 " aria-current="true">
                          Cras justo odio
                        </button>
                        <button type="button" class="list-group-item list-group-item-action px-3 border-0">
                          Dapibus ac facilisis in
                        </button>
                        <button type="button" class="list-group-item list-group-item-action px-3 border-0">
                          Morbi leo risus
                        </button>
                        <button type="button" class="list-group-item list-group-item-action px-3 border-0">
                          Porta ac consectetur ac
                        </button>
                        <button type="button" class="list-group-item list-group-item-action px-3 border-0" disabled>
                          Vestibulum at eros
                        </button>
                      </div>
               </div>
                   
              </div>
               
            </div>
   
        </div>
    
     

        <div class="col-md-12">
         
            <div>
               <div  style=" padding: 30px; margin: 20px; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; align-items:center" >
                   <h3 class="">
                       More Informations
                   </h3>
                       <hr>
   
                   <div class="d-flex justify-content-between">
                   <div class="col-md-3">
                       <div class="mb-3">
                           Price
                       </div>
                       <div class="mb-3">
                           Duration
                       </div>
                       <div class="mb-3">
                          Start Date
                       </div>
                       <div class="mb-3">
                           End date
                       </div>
                       <div class="mb-3">
                        One day price
                    </div>
                    <div class="mb-3">
                        One week price
                    </div>
                    <div class="mb-3">
                        One mounth
                    </div>
                   </div>
                   <div class="col-md-2">
                       <div class="mb-3">
                           300 AMD
                       </div>
                       <div class="mb-3">
                           2 days
                       </div>
                       <div class="mb-3">
                           2020-01-01
                       </div>
                       <div class="mb-3">
                           2022-01-01
                       </div>
                       <div class="mb-3">
                        2000 AMD
                    </div>
                    <div class="mb-3">
                        3000 AMD
                    </div>
                    <div class="mb-3">
                        5000 AMD
                    </div>
                   </div>
               </div>
                   
              </div>
               
            </div>
   
        </div>
        
        
        <div class="row">


        </div>
      
       
    
        

    


@endsection