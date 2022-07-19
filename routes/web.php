<?php

use App\Http\Controllers\AccessioriesController;
use App\Http\Controllers\ActiveTour;
use App\Http\Controllers\CarAirportController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ClassicTour;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GastroTour;
use App\Http\Controllers\GuranteeTour;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\MiceController;
use App\Http\Controllers\ThemedTour;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TourEventController;
use App\Models\Accessiories;
use Illuminate\Support\Facades\Route;

//============login===============

Route::get('/login', function () {
    return view('Backend.Admin.login.login');
});

//============ Add facility page==============

Route::get('/AddFacility', function () {
    return view('Backend.Admin.Tours.classicTours.AddFacility');
});

//================add highlight============

Route::get('/AddHighlight', function () {
    return view('Backend.Admin.Tours.classicTours.AddHighlights');
});


//----- dashboard page ---------

Route::get("/main", [DashboardController::class, 'index']);


//---- tour page ---------

Route::get("/admin/tours/{name}", [TourController::class, "index"]);
Route::get("/admin/tours/detail/{id}", [TourController::class, "show"]);
Route::post("/admin/tours/add", [TourController::class, "store"]);
Route::get('/admin/CreateClassicTour',[TourController::class, "create"]);
Route::delete("/admin/tour/delete/{id}",[TourController::class,"destroy"])->name('tourDelete');
Route::get('/admin/UpdateTourPage/{id}',[TourController::class,'edit']);
Route::put('/admin/tour/update/{id}',[TourController::class,'update']);
Route::post("/admin/highlight/{id}",[TourController::class,"addTourHighlights"])->name('addHighlight');
Route::post("/admin/facility/{id}",[TourController::class,"addTourFacility"])->name('addFacility');
Route::post("/admin/tourprogram/{id}",[TourController::class,"addTourProgram"])->name('addTourProgram');
Route::delete("/admin/highlight/delete/{id}",[TourController::class,"deleteHighlights"])->name('highlightDelete');
Route::delete("/admin/facility/delete/{id}",[TourController::class,"deleteTourFacility"])->name('facilityDelete');
Route::delete("/admin/tourprogram/delete/{id}",[TourController::class,"deleteTourProgram"])->name('tourProgramDelete');


//----------- Frontend -------------

Route::get('/', [FrontendController::class,'index'])->name('home');
Route::get('/tour/detail/{id}',[FrontendController::class,'tourDescription'])->name('tourDescription');
Route::get('/tour/{name}',[FrontendController::class,'getTours'])->name('getTours');



//=========== classic tours==========

Route::get('/Bv', [ClassicTour::class, 'getClasicTours']);
Route::get('/getClassicTour/{id}', [ClassicTour::class, 'getClassicTour']);

//=====gurantee Tour===========

Route::get('/guaranteeTour',[GuranteeTour::class,'getTours']);

//=========Gastro Tours=========


Route::get('/GastroTours',[GastroTour::class,'getTours']);

//=========Active Tours=========

Route::get('/activeTours', [ActiveTour::class, 'getTours']);

//=======theme tours==========

Route::get('/themed',[ThemedTour::class,'getTours']);

Route::get('/check', [TourController::class, 'index']);
Route::post('/checkpost', [TourController::class, 'checkStore']);

//========Admin Car=========

Route::get('/cars', [CarController::class, 'index'])->named('cars');
Route::get('/car/create', [CarController::class, 'create']);
Route::get('/car/{id}', [CarController::class, 'show']);
Route::post('/car/store', [CarController::class, 'store']);
Route::get('/car/edit/{id}', [CarController::class, 'edit']);
Route::put('/car/update/{id}', [CarController::class, 'update']);
Route::delete('/car/delete/{id}', [CarController::class, 'destroy']);


//========Admin CarAirport=========

Route::get('/admin/CarAtAirport',[CarAirportController::class,'index']);
Route::get('/admin/CarAtAirport/create',[CarAirportController::class,'create']);
Route::get('/admin/CarAtAirport/{id}',[CarAirportController::class,'show']);
Route::post('/admin/CarAtAirport/store',[CarAirportController::class,'store']);
Route::get('/admin/CarAtAirport/edit/{id}',[CarAirportController::class,'edit']);
Route::put('/admin/CarAtAirport/update/{id}',[CarAirportController::class,'update']);



//==========Admin Accessiories=========

Route::get('/admin/Accessiories',[AccessioriesController::class,'index']);
Route::get('/admin/accessiories/create',[AccessioriesController::class,'create']);
Route::get('/admin/accessiories/{id}',[AccessioriesController::class,'show']);
Route::post('/admin/accessiories/store',[AccessioriesController::class,'store']);
Route::get('/admin/accessiories/edit/{id}',[AccessioriesController::class,'edit']);
Route::put('/admin/accessiories/update/{id}',[AccessioriesController::class,'update']);
Route::delete('/admin/accessiories/delete/{id}',[AccessioriesController::class,'destroy']);


//==========Admin Hotel=========

Route::get('/admin/Hotel',[HotelController::class,'index']);
Route::get('/admin/Hotel/create',[HotelController::class,'create']);
Route::get('/admin/Hotel/{id}',[HotelController::class,'show']);
Route::post('/admin/Hotel/store',[HotelController::class,'store']);
Route::put('/admin/Hotel/update/{id}',[HotelController::class,'update']);
Route::delete('/admin/Hotel/delete/{id}',[HotelController::class,'destroy']);

//===========Admin Mice=========

Route::get('/admin/Mice',[MiceController::class,'index']);
Route::get('/admin/Mice/create',[MiceController::class,'create']);
Route::get('/admin/Mice/{id}',[MiceController::class,'show']);
Route::post('/admin/Mice/store',[MiceController::class,'store']);
Route::put('/admin/Mice/update/{id}',[MiceController::class,'update']);
Route::delete('/admin/Mice/delete/{id}',[MiceController::class,'destroy']);

//===========Admin Tour Events=========

Route::get('/admin/events',[TourEventController::class,'index']);
Route::get('/admin/events/create',[TourEventController::class,'create']);
Route::get('/admin/events/{id}',[TourEventController::class,'show']);
Route::post('/admin/events/store',[TourEventController::class,'store']);
Route::put('/admin/events/update/{id}',[TourEventController::class,'update']);
Route::delete('/admin/events/delete/{id}',[TourEventController::class,'destroy']);

//===========Frontend Tour Events=========
Route::get('/cs',[TourEventController::class,'showFrontend']);
Route::get('/c',[TourEventController::class,'showFrontendDetails']);


//==========Frontend Hotel=========

Route::get('/hs',[HotelController::class,'getHotels']);
Route::get('/h/{id}', [HotelController::class, 'getHotelDetails']);



//==========Frontend Accessiories=========

Route::get('/acs',[AccessioriesController::class,'getAccessiories']);
Route::get('/ac/{id}',[AccessioriesController::class,'getAccessioriesDetails']);


//========Frontend CarAirport=========
Route::get('/MT',[CarAirportController::class,'getAllCarAirport']);


//============= car frontend==============

Route::get('caa', [CarController::class, 'getCars']);
Route::get('/car/detail/{id}', [CarController::class, 'getCarDetails']);

//=========Mice frontend=========

Route::get('/mices', [MiceController::class, 'showMice']);
Route::get('/mices/{id}', [MiceController::class, 'showMiceDetails']);


Route::get("/dashboard/hello", [TourController::class, "index"]);



Route::get('/c2', function () {
    return view('Frontend.About.AboutUs');
});


Route::get('/privacy', function () {
    return view('Frontend.About.PrivacyPolicy');
});

Route::get('/ways', function () {
    return view('Frontend.About.waysToBook');
});






Route::get('/TourFrontPage', function () {
    return view('Frontend.Tours.Tour');
});




Route::get('/Rv', function () {
    return view('Frontend.BasicTours.RequestABasicTour');
});

Route::get('/Articles', function () {
    return view('Frontend.Blogs.Articles');
});

Route::get('/Article', function () {
    return view('Frontend.Blogs.Article');
});


Route::get('/b', function () {
    return view('Frontend.Brochures.Brochures');
});

Route::get('/withDriver', function () {
    return view('Frontend.Cars.WithDriver');
});





Route::get('/RF', function () {
    return view('Frontend.Cars.RentACarForm');
});





Route::get('/TentForm', function () {
    return view('Frontend.TourAccesories.TentForm');
});


Route::get('/mice', function () {
    return view('Frontend.Mice.Micee');
});

Route::get('/oneDay', function () {
    return view('Frontend.OneDayTour.OneDayTour');
});








Route::get('/ClassicTour', function () {
    return view('Frontend.BasicTours.BasicTours');
});


Route::get('/RenACar', function () {
    return view('Frontend.Cars.RentACarForm');
});





Route::get('/contact', function () {
    return view('Frontend.Contact.Contact');
});

Route::get('/BookHotel', function () {
    return view('Frontend.Hotels.BookHotelForm');
});




Route::get('/tts', function () {
    return view('Frontend.Armenia.ThingsToSee');
});


Route::get('/ttdd', function () {
    return view('Frontend.Armenia.ThingsToDo');
});

Route::get('/food', function () {
    return view('Frontend.Armenia.Foods');
});






 Route::get('/adminClassicTour', function () {
     return view('Backend.Admin.classicTours.ClassicTour');
 });



Route::get('/UpdateClassicTour', function () {
    return view('Backend.Admin.Tours.classicTours.UpdateClassicTour');
});


Route::get('/driver', function () {
    return view('Frontend.Cars.DriverCar');
});


Route::get('/usefulToKnow', function () {
    return view('Frontend.Armenia.UsefulToKnow');
});


Route::get('/todoSorrounding', function () {
    return view('Frontend.Armenia.nearby');
});


Route::get('/review', function () {
    return view('Frontend.About.reviews');
});

Route::get('/pageSee', function () {
    return view('Frontend.Armenia.ThingsToSeePage');
});





//================ view routes ====================


Route::get('/admin/thingstoSee', function () {
    return view('Backend.Admin.Armenia.ThingsToSee.view');
});

Route::get('/admin/thingstoDo', function () {
    return view('Backend.Admin.Armenia.ThingsToDo.view');
});

Route::get('/admin/food', function () {
    return view('Backend.Admin.Armenia.FoodAndDrink.view');
});

Route::get('/admin/TODO', function () {
    return view('Backend.Admin.Armenia.TODO.view');
});

Route::get('/admin/usefulToKnow', function () {
    return view('Backend.Admin.Armenia.Informations.view');
});



Route::get('/admin/brochure', function () {
    return view('Backend.Admin.Armenia.Brochure.view');
});

Route::get('/admin/TravelBlog', function () {
    return view('Backend.Admin.Armenia.TravelBlog.view');
});



Route::get('/admin/CarWithDriver', function () {
    return view('Backend.Admin.Services.CarWithDriver.view');
});






//===============Create routes=============

Route::get('/admin/thingstoSeeCreate', function () {
    return view('Backend.Admin.Armenia.ThingsToSee.create');
});


Route::get('/admin/createHotel', function () {
    return view('Backend.Admin.Services.Hotels.create');
});




//============destination routes=============

Route::get('/admin/d', function () {
    return view('Backend.Admin.Destination.view');
});



//===============Services Update routes=============

Route::get('/admin/UpdateCar', function () {
    return view('Backend.Admin.Services.Car.update');
});


Route::get('/admin/UpdateCarWithDriver', function () {
    return view('Backend.Admin.Services.CarWithDriver.update');
});




Route::get('/admin/updateHotel', function () {
    return view('Backend.Admin.Services.Hotels.update');
});








//============Armenia Create routes=============

Route::get('/admin/createBrochur', function () {
    return view('Backend.Admin.Armenia.Brochure.create');
});


Route::get('/admin/createFD', function () {
    return view('Backend.Admin.Armenia.FoodAndDrink.create');
});

Route::get('/admin/createInformation', function () {
    return view('Backend.Admin.Armenia.Informations.create');
});

Route::get('/admin/createThingsToDo', function () {
    return view('Backend.Admin.Armenia.ThingsToDo.create');
});

Route::get('/admin/createThingsToSee', function () {
    return view('Backend.Admin.Armenia.ThingsToSee.create');
});

Route::get('/admin/createTravelBlog', function () {
    return view('Backend.Admin.Armenia.TravelBlog.create');
});

Route::get('/admin/createTODO', function () {
    return view('Backend.Admin.Armenia.TODO.create');
});




//=============Armenia Update routes=============


Route::get('/admin/Brochure', function () {
    return view('Backend.Admin.Armenia.Brochure.update');
});


Route::get('/admin/updateFoodAndDrnk', function () {
    return view('Backend.Admin.Armenia.FoodAndDrink.update');
});

Route::get('/admin/updateInformation', function () {
    return view('Backend.Admin.Armenia.Informations.update');
});

Route::get('/admin/updateThingsToDo', function () {
    return view('Backend.Admin.Armenia.ThingsToDo.update');
});
Route::get('/admin/updateTravelBlog', function () {
    return view('Backend.Admin.Armenia.TravelBlog.update');
});

Route::get('/admin/TODOnearbyUpdate', function () {
    return view('Backend.Admin.Armenia.TODO.update');
});


//======frontend send step route ==========


Route::get('/secondStep', function () {
    return view('partials.secondStepReq');
});

Route::get('/ThirdStep', function () {
    return view('partials.SendAMsg');
});




