<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AccessioriesCmsController;
use App\Http\Controllers\AccessioriesController;
use App\Http\Controllers\ActiveTour;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogCmsController;
use App\Http\Controllers\BookATourController;
use App\Http\Controllers\BookATourDepartureController;
use App\Http\Controllers\BookingACarAtAirportController;
use App\Http\Controllers\BookingACarController;
use App\Http\Controllers\BookingACarWithDriverController;
use App\Http\Controllers\BookingAccessioriesController;
use App\Http\Controllers\BookingARoomController;
use App\Http\Controllers\BookingMiceController;
use App\Http\Controllers\BrochureController;
use App\Http\Controllers\CarAirportController;
use App\Http\Controllers\CarCmsController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarWithDriverController;
use App\Http\Controllers\ClassicTour;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FoodArmeniaController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GastroTour;
use App\Http\Controllers\GuranteeTour;
use App\Http\Controllers\HomeCmsController;
use App\Http\Controllers\HotelCmsController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MiceCmsController;
use App\Http\Controllers\MiceController;
use App\Http\Controllers\NearbyArmeniaController;
use App\Http\Controllers\OneDayController;
use App\Http\Controllers\ReviewCmsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ThemedTour;
use App\Http\Controllers\ThingsToDoController;
use App\Http\Controllers\ThingsToSeeController;
use App\Http\Controllers\TourCmsController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TourEventController;
use App\Http\Controllers\TravelBlogController;
use App\Http\Controllers\UsefulInfoController;
use App\Http\Controllers\VacancyCmsController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\WaysToBookController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

//============login===============

 
    
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/loginTo', [LoginController::class, 'loginTo'])->name('loginTo');

//logout
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');



Route::group(['middleware' => ['admin']], function () {





//=========Admin CMS=================


//========Home ==========
// Route::get('/homeCms/{id}', [HomeCmsController::class, 'index']);
Route::get('/homeCms/{id}/edit', [HomeCmsController::class, 'edit']);
Route::put('/homeCms/{id}', [HomeCmsController::class, 'update']);
Route::delete('/homeCms/{id}', [HomeCmsController::class, 'destroy']);

//======Tour========
// Route::get('/tourCms', [TourCmsController::class, 'index']);
Route::get('/tourCms/{id}/edit', [TourCmsController::class, 'edit']);
Route::put('/tourCms/{id}', [TourCmsController::class, 'update']);
Route::delete('/tourCms/{id}', [TourCmsController::class, 'destroy']);


//=======Car=======
// Route::get('/carCms', [CarCmsController::class, 'index']);
Route::get('/carCms/{id}/edit', [CarCmsController::class, 'edit']);
Route::put('/carCms/{id}', [CarCmsController::class, 'update']);
Route::delete('/carCms/{id}', [CarCmsController::class, 'destroy']);


//=======Hotel=======
// Route::get('/hotelCms', [HotelCmsController::class, 'index']);
Route::get('/hotelCms/{id}/edit', [HotelCmsController::class, 'edit']);
Route::put('/hotelCms/{id}', [HotelCmsController::class, 'update']);
Route::delete('/hotelCms/{id}', [HotelCmsController::class, 'destroy']);


//=======Accessiories=======
// Route::get('/accessioriesCms', [AccessioriesCmsController::class, 'index']);
Route::get('/accessioriesCms/{id}/edit', [AccessioriesCmsController::class, 'edit']);
Route::put('/accessioriesCms/{id}', [AccessioriesCmsController::class, 'update']);
Route::delete('/accessioriesCms/{id}', [AccessioriesCmsController::class, 'destroy']);


//======Mice ======
// Route::get('/miceCms/{id}', [MiceCmsController::class, 'index']);
Route::get('/miceCms/{id}/edit', [MiceCmsController::class, 'edit']);
Route::put('/miceCms/{id}', [MiceCmsController::class, 'update']);
Route::delete('/miceCms/{id}', [MiceCmsController::class, 'destroy']);


//=======Blog=======
// Route::get('/blogCms', [BlogCmsController::class, 'index']);
Route::get('/blogCms/{id}/edit', [BlogCmsController::class, 'edit']);
Route::put('/blogCms/{id}', [BlogCmsController::class, 'update']);
Route::delete('/blogCms/{id}', [BlogCmsController::class, 'destroy']);


//=====Vacancy======
// Route::get('/vacancyCms', [VacancyCmsController::class, 'index']);
Route::get('/vacancyCms/{id}/edit', [VacancyCmsController::class, 'edit']);
Route::put('/vacancyCms/{id}', [VacancyCmsController::class, 'update']);
Route::delete('/vacancyCms/{id}', [VacancyCmsController::class, 'destroy']);


//========Review========
// Route::get('/reviewCms', [ReviewCmsController::class, 'index']);
Route::get('/reviewCms/{id}/edit', [ReviewCmsController::class, 'edit']);
Route::put('/reviewCms/{id}', [ReviewCmsController::class, 'update']);
Route::delete('/reviewCms/{id}', [ReviewCmsController::class, 'destroy']);

















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
Route::get('/admin/CreateClassicTour', [TourController::class, "create"]);
Route::delete("/admin/tour/delete/{id}", [TourController::class, "destroy"])->name('tourDelete');
Route::get('/admin/UpdateTourPage/{id}', [TourController::class, 'edit']);
Route::put('/admin/tour/update/{id}', [TourController::class, 'update']);
Route::post("/admin/highlight/{id}", [TourController::class, "addTourHighlights"])->name('addHighlight');
Route::post("/admin/adduseful/{id}", [TourController::class, "adduseful"])->name('adduseful');
Route::post("/admin/departure/{id}", [TourController::class, "addDeparture"])->name('addDeparture');

Route::post("/admin/facility/{id}", [TourController::class, "addTourFacility"])->name('addFacility');
Route::post("/admin/tourprogram/{id}", [TourController::class, "addTourProgram"])->name('addTourProgram');
Route::delete("/admin/highlight/delete/{id}", [TourController::class, "deleteHighlights"])->name('highlightDelete');
Route::delete("/admin/facility/delete/{id}", [TourController::class, "deleteTourFacility"])->name('facilityDelete');
Route::delete("/admin/tourprogram/delete/{id}", [TourController::class, "deleteTourProgram"])->name('tourProgramDelete');
Route::delete("/admin/departure/delete/{id}", [TourController::class, "deleteTourDeparture"])->name('deleteTourDeparture');
Route::get('/getTourByCategory/{id}', [TourController::class, 'getToursByCategory']);
Route::post("/admin/type/{id}", [TourController::class, "type"])->name('type');
Route::get('/check', [TourController::class, 'index']);
Route::post('/checkpost', [TourController::class, 'checkStore']);

//========Admin Car=========

Route::get('/cars', [CarController::class, 'index'])->named('cars');
Route::get('/car/create', [CarController::class, 'create']);
Route::get('/carShow/{id}', [CarController::class, 'show']);
Route::post('/car/store', [CarController::class, 'store']);
Route::get('/car/edit/{id}', [CarController::class, 'edit']);
Route::put('/car/update/{id}', [CarController::class, 'update']);
Route::delete('/car/delete/{id}', [CarController::class, 'destroy']);


//========Admin CarAirport=========

Route::get('/admin/CarAtAirport', [CarAirportController::class, 'index']);
Route::get('/admin/CarAtAirport/create', [CarAirportController::class, 'create']);
Route::get('/admin/CarAtAirport/{id}', [CarAirportController::class, 'show']);
Route::post('/admin/CarAtAirport/store', [CarAirportController::class, 'store']);
Route::get('/admin/CarAtAirport/edit/{id}', [CarAirportController::class, 'edit']);
Route::put('/admin/CarAtAirport/update/{id}', [CarAirportController::class, 'update']);



//==========Admin Accessiories=========

Route::get('/admin/Accessiories', [AccessioriesController::class, 'index']);
Route::get('/admin/accessiories/create', [AccessioriesController::class, 'create']);
Route::get('/admin/accessiories/{id}', [AccessioriesController::class, 'show']);
Route::post('/admin/accessiories/store', [AccessioriesController::class, 'store']);
Route::get('/admin/accessiories/edit/{id}', [AccessioriesController::class, 'edit']);
Route::put('/admin/accessiories/update/{id}', [AccessioriesController::class, 'update']);
Route::delete('/admin/accessiories/delete/{id}', [AccessioriesController::class, 'destroy']);


//==========Admin Hotel=========

Route::get('/admin/Hotel', [HotelController::class, 'index']);
Route::get('/admin/Hotel/create', [HotelController::class, 'create']);
Route::get('/admin/Hotel/{id}', [HotelController::class, 'show']);
Route::get('/admin/Hotel/edit/{id}', [HotelController::class, 'edit']);
Route::post('/admin/Hotel/store', [HotelController::class, 'store']);
Route::put('/admin/Hotel/update/{id}', [HotelController::class, 'update']);
Route::delete('/admin/Hotel/delete/{id}', [HotelController::class, 'destroy']);
Route::post("/admin/hotel/highlight/{id}", [HotelController::class, "addHotelHighlights"]);
Route::delete('/hotelHighlight/delete/{id}', [HotelController::class, 'deleteHotelHighlight']);
Route::post("/admin/hotel/room/{id}", [HotelController::class, "addHotelRoom"]);
Route::delete('/hotelRoom/delete/{id}', [HotelController::class, 'deleteHotelRoom']);
Route::post("/admin/hotel/facility/{id}", [HotelController::class, "addFacility"]);
Route::delete('/hotelFacility/delete/{id}', [HotelController::class, 'FacilityDelete']);
Route::post("/admin/addHotelInfo/{id}", [HotelController::class, "addHotelInfo"]);
Route::delete('/hotelInfo/delete/{id}', [HotelController::class, 'deleteHotelInfo']);
Route::post("/admin/addHotelKey/{id}", [HotelController::class, "addHotelKey"]);

//===========Admin Mice=========
Route::get('/admin/Mice', [MiceController::class, 'index']);
Route::get('/admin/Mice/create', [MiceController::class, 'create']);
Route::get('/admin/Mice/{id}', [MiceController::class, 'show']);
Route::get('/admin/Mice/edit/{id}', [MiceController::class, 'edit']);
Route::post('/admin/Mice/store', [MiceController::class, 'store']);
Route::put('/admin/Mice/update/{id}', [MiceController::class, 'update']);
Route::delete('/admin/Mice/delete/{id}', [MiceController::class, 'destroy']);

//===========Admin Tour Events=========
Route::get('/admin/events', [TourEventController::class, 'index']);
Route::get('/admin/events/create', [TourEventController::class, 'create']);
Route::get('/admin/events/{id}', [TourEventController::class, 'show']);
Route::get('/admin/events/edit/{id}', [TourEventController::class, 'edit']);
Route::post('/admin/events/store', [TourEventController::class, 'store']);
Route::put('/admin/events/update/{id}', [TourEventController::class, 'update']);
Route::delete('/admin/events/delete/{id}', [TourEventController::class, 'destroy']);



//===========Admin Things to see=========
Route::get('/admin/thingsToSee', [ThingsToSeeController::class, 'index']);
Route::get('/admin//admin/thingstoSeeCreate', [ThingsToSeeController::class, 'create']);
Route::get('/admin/thingsToSee/{id}', [ThingsToSeeController::class, 'show']);
Route::get('/admin/thingsToSee/edit/{id}', [ThingsToSeeController::class, 'edit']);
Route::post('/admin/thingsToSee/store', [ThingsToSeeController::class, 'store']);
Route::put('/admin/thingsToSee/update/{id}', [ThingsToSeeController::class, 'update']);
Route::delete('/admin/thingsToSee/delete/{id}', [ThingsToSeeController::class, 'destroy']);

//=====Admin things to do=========
Route::get('/admin/thingsToDo', [ThingsToDoController::class, 'index']);
Route::get('/admin/admin/thingstoDoCreate', [ThingsToDoController::class, 'create']);
Route::get('/admin/thingsToDo/{id}', [ThingsToDoController::class, 'show']);
Route::get('/admin/thingsToDo/edit/{id}', [ThingsToDoController::class, 'edit']);
Route::post('/admin/thingsToDo/store', [ThingsToDoController::class, 'store']);
Route::put('/admin/thingsToDo/update/{id}', [ThingsToDoController::class, 'update']);
Route::delete('/admin/thingsToDo/delete/{id}', [ThingsToDoController::class, 'destroy']);



//=====ways to book=========
Route::get('/admin/waysToBook', [WaysToBookController::class, 'index']);
Route::get('/admin/admin/waystoBookCreate', [WaysToBookController::class, 'create']);
Route::get('/admin/waysToBook/{id}', [WaysToBookController::class, 'show']);
Route::get('/admin/waysToBook/edit/{id}', [WaysToBookController::class, 'edit']);
Route::post('/admin/waysToBook/store', [WaysToBookController::class, 'store']);
Route::put('/admin/waysToBook/update/{id}', [WaysToBookController::class, 'update']);
Route::delete('/admin/waysToBook/delete/{id}', [WaysToBookController::class, 'destroy']);




//=====Admin Vacancy=========
Route::get('/admin/vacancy', [VacancyController::class, 'index']);
Route::get('/admin/admin/vacancyCreate', [VacancyController::class, 'create']);
Route::get('/admin/vacancy/{id}', [VacancyController::class, 'show']);
Route::get('/admin/vacancy/edit/{id}', [VacancyController::class, 'edit']);
Route::post('/admin/vacancy/store', [VacancyController::class, 'store']);
Route::put('/admin/vacancy/update/{id}', [VacancyController::class, 'update']);
Route::delete('/admin/vacancy/delete/{id}', [VacancyController::class, 'destroy']);





//========admin brochure=========
Route::get('/admin/brochure', [BrochureController::class, 'index']);
Route::get('/admin/brochure/create', [BrochureController::class, 'create']);
Route::get('/admin/brochure/{id}', [BrochureController::class, 'show']);
Route::get('/admin/brochure/edit/{id}', [BrochureController::class, 'edit']);
Route::post('/admin/brochure/store', [BrochureController::class, 'store']);
Route::put('/admin/brochure/update/{id}', [BrochureController::class, 'update']);
Route::delete('/admin/brochure/delete/{id}', [BrochureController::class, 'destroy']);





//========Admin Nearby=========
Route::get('/admin/nearby', [NearbyArmeniaController::class, 'index']);
Route::get('/admin/nearby/Create', [NearbyArmeniaController::class, 'create']);
Route::get('/admin/nearby/{id}', [NearbyArmeniaController::class, 'show']);
Route::get('/admin/nearby/edit/{id}', [NearbyArmeniaController::class, 'edit']);
Route::post('/admin/nearby/store', [NearbyArmeniaController::class, 'store']);
Route::put('/admin/nearby/update/{id}', [NearbyArmeniaController::class, 'update']);
Route::delete('/admin/nearby/delete/{id}', [NearbyArmeniaController::class, 'destroy']);

//=========About us=========

Route::get('/aboutUs/create', [AboutUsController::class, 'create']);
Route::get('/aboutUs/{id}', [AboutUsController::class, 'show']);
Route::post('/aboutUs/store', [AboutUsController::class, 'store']);
Route::put('/aboutUs/update/{id}', [AboutUsController::class, 'update']);
Route::delete('/aboutUs/delete/{id}', [AboutUsController::class, 'destroy']);
Route::get('/admin/aboutUs', [AboutUsController::class, 'index2']);




//==========Admin useful info ======

Route::get('/admin/usefulToKnow', [UsefulInfoController::class, 'index']);
Route::get('/admin/usefulToKnow/create', [UsefulInfoController::class, 'create']);
Route::get('/admin/usefulToKnow/{id}', [UsefulInfoController::class, 'show']);
Route::post('/admin/usefulToKnow/store', [UsefulInfoController::class, 'store']);
Route::put('/admin/usefulToKnow/update/{id}', [UsefulInfoController::class, 'update']);
Route::delete('/admin/usefulToKnow/delete/{id}', [UsefulInfoController::class, 'destroy']);







//==========Armenia admin food=========
Route::get('/admin/foods', [FoodArmeniaController::class, 'index']);
Route::get('/admin/foods/create', [FoodArmeniaController::class, 'create']);
Route::get('/admin/foods/{id}', [FoodArmeniaController::class, 'show']);
Route::post('/admin/foods/store', [FoodArmeniaController::class, 'store']);
Route::get('/admin/foods/edit/{id}', [FoodArmeniaController::class, 'edit']);
Route::put('/admin/foods/update/{id}', [FoodArmeniaController::class, 'update']);
Route::delete('/admin/foods/delete/{id}', [FoodArmeniaController::class, 'destroy']);




//===============reviews===============

Route::get('/reviews', [ReviewController::class, 'index']);
Route::get('/AddReview', [ReviewController::class, 'create']);
Route::post('/review/store', [ReviewController::class, 'store']);




//===============admin travel blogs===============
Route::get('/admin/TravelBlog', [TravelBlogController::class, 'index']);
Route::get('/admin/travelBlogs/create', [TravelBlogController::class, 'create']);
Route::get('/admin/travelBlogs/{id}', [TravelBlogController::class, 'show']);
Route::get('/admin/travelBlogs/edit/{id}', [TravelBlogController::class, 'edit']);
Route::post('/admin/travelBlogs/store', [TravelBlogController::class, 'store']);
Route::put('/admin/travelBlogs/update/{id}', [TravelBlogController::class, 'update']);
Route::delete('/admin/travelBlogs/delete/{id}', [TravelBlogController::class, 'destroy']);


Route::get("/dashboard/hello", [TourController::class, "index"]);

//================ Car with driver ================
Route::get('/admin/CarWithDriver', [CarWithDriverController::class,"index"]);
Route::get('/admin/CarWithDriver/create', [CarWithDriverController::class,"create"]);
Route::get('/admin/CarWithDriver/createInfo', [CarWithDriverController::class,"createInfo"]);
Route::post('/admin/CarWithDriverInfo/store', [CarWithDriverController::class,"storeInfo"]);
Route::get('/admin/CarWithDriver/{id}', [CarWithDriverController::class,"show"]);
Route::post('/admin/CarWithDriver/store', [CarWithDriverController::class,"store"]);
Route::get('/admin/CarWithDriver/edit/{id}', [CarWithDriverController::class,"edit"]);
Route::put('/admin/CarWithDriver/update/{id}', [CarWithDriverController::class,"update"]);
Route::delete('/admin/CarWithDriver/delete/{id}', [CarWithDriverController::class,"destroy"]);


//============destination routes=============

Route::get('/admin/d', function () {
    return view('Backend.Admin.Destination.view');
});

});

//===============Services Update routes=============



// Route::get('/admin/UpdateCarWithDriver', function () {
//     return view('Backend.Admin.Services.CarWithDriver.update');
// });







// //============Armenia Create routes=============

// Route::get('/admin/createBrochur', function () {
//     return view('Backend.Admin.Armenia.Brochure.create');
// });






// //=============Armenia Update routes=============


// Route::get('/admin/Brochure', function () {
//     return view('Backend.Admin.Armenia.Brochure.update');
// });


// Route::get('/admin/updateFoodAndDrnk', function () {
//     return view('Backend.Admin.Armenia.FoodAndDrink.update');
// });

// Route::get('/admin/updateInformation', function () {
//     return view('Backend.Admin.Armenia.Informations.update');
// });






//=================All frontend routes=================


//
Route::get('/AMD', [FrontendController::class, 'index'])->name('AMD');
Route::get('/EUR', [FrontendController::class, 'index']);

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {
Route::get('/', [FrontendController::class, 'index'])->name('blaaaaa');
Route::get('/tour/detail/{id}', [FrontendController::class, 'tourDescription'])->name('tourDescription');
Route::get('/tour/{name}', [FrontendController::class, 'getTours'])->name('getTours');


//==========Armenia Frontend food=========
Route::get('/food', [FoodArmeniaController::class, 'getAllFoods']);
Route::get('/getfoodsByCategory/{id}', [FoodArmeniaController::class, 'getfoodsByCategory']);
Route::get('/getfoodsById/{id}', [FoodArmeniaController::class, 'getfoodsById']);


//===========Frontend Tour Events=========
Route::get('/cs', [TourEventController::class, 'showFrontend']);
Route::get('/c/{id}', [TourEventController::class, 'showFrontendDetails']);

//=========== classic tours==========
Route::get('/Bv', [ClassicTour::class, 'getClasicTours']);
Route::get('/getClassicTour/{id}', [ClassicTour::class, 'getClassicTour']);

//=====gurantee Tour===========
Route::get('/guaranteeTour', [GuranteeTour::class, 'getTours']);

//=========Gastro Tours=========
Route::get('/GastroTours', [GastroTour::class, 'getTours']);

//=========Active Tours=========
Route::get('/activeTours', [ActiveTour::class, 'getTours']);


//=========OneDay Tours=========
Route::get('/oneDay', [OneDayController::class, 'index']);

//=======theme tours==========
Route::get('/themed', [ThemedTour::class, 'getTours']);

//============= car frontend==============
Route::get('/caa', [CarController::class, 'getCars']);
Route::get('/car/detail/{id}', [CarController::class, 'getCarDetails']);

//=========Mice frontend=========
Route::get('/mices', [MiceController::class, 'showMice']);
Route::get('/mices/{id}', [MiceController::class, 'showMiceDetails']);

//=======ways to book frontend=========
Route::get('/ways', [WaysToBookController::class,"GetAll"]);

//=========Vacancy frontend=========
Route::get('/vacancyAll', [VacancyController::class, "GetAll"]);


//===========Frontend Tour Events=========
Route::get('/pageSee', function () {
    return view('Frontend.Armenia.ThingsToSeePage');
});

//======about us===========
Route::get('/aboutUs', [AboutUsController::class, 'index']);

//=============Frontend Nearby ===========
Route::get('/getAllThingsToSee', [ThingsToSeeController::class, 'getAllThingsToSee']);
Route::get('/getThingsToSeeByCategoryId/{id}', [ThingsToSeeController::class, 'getThingsToSeeByCategory']);
Route::get('/getThingsToSeeById/{id}', [ThingsToSeeController::class, 'getThingsToSeeById']);


//==========Things to see Frontend=========
Route::get('/todoSorrounding', [NearbyArmeniaController::class, 'getAllNearby']);
Route::get('/nearbyByCategoryId/{id}', [NearbyArmeniaController::class, 'getNearbyByCategory']);
Route::get('/nearbyById/{id}', [NearbyArmeniaController::class, 'getNearbyById']);


//==========Things to do Frontend=========
Route::get('/getAllThingsToDo', [ThingsToDoController::class, 'getAllThingsToDo']);
Route::get('/getThingsToDoByCategoryId/{id}', [ThingsToDoController::class, 'getThingsToDoByCategory']);
Route::get('/getThingsToDoById/{id}', [ThingsToDoController::class, 'getThingsToDoById']);


//==========Frontend Article=========
Route::get('/Articles',[TravelBlogController::class, 'getTravelBlog']);
Route::get('/Article/{id}',[TravelBlogController::class, 'getTravelBlogById']);



//==========Frontend Hotel=========

Route::get('/hs', [HotelController::class, 'getHotels']);
Route::get('/h/{id}', [HotelController::class, 'getHotelDetails']);



//==========Frontend Accessiories=========
Route::get('/acs', [AccessioriesController::class, 'getAccessiories']);
Route::get('/ac/{id}', [AccessioriesController::class, 'getAccessioriesDetails']);



//========Frontend CarAirport=========
Route::get('/MT', [CarAirportController::class, 'getAllCarAirport']);


//======frontend send step route ==========


Route::get('/secondStep', function () {
    return view('partials.secondStepReq');
});

Route::get('/ThirdStep', function () {
    return view('partials.SendAMsg');
});



// Route::get('/privacy', function () {
//     return view('Frontend.About.PrivacyPolicy');
// });

Route::get('/TourFrontPage', function () {
    return view('Frontend.Tours.Tour');
});

Route::get('/Rv', function () {
    return view('Frontend.BasicTours.RequestABasicTour');
});

Route::get('/b', [BrochureController::class, 'getAll']);

Route::get('/withDriver', function () {
    return view('Frontend.Cars.WithDriver');
});

Route::get('/RF', function () {
    return view('Frontend.Cars.RentACarForm');
});

Route::get('/usefulToKnow', [UsefulInfoController::class, 'getUsefulInfo']);



Route::get('/TentForm', function () {
    return view('Frontend.TourAccesories.TentForm');
});






Route::get('/article', function () {
    return view('Frontend.Blogs.Article');
});





Route::get('/BookHotel', function () {
    return view('Frontend.Hotels.BookHotelForm');
});







Route::get('/driver', [CarWithDriverController::class, 'getAll']);


//=======Book==========


//==========Book Tour=========
Route::get('/BookATour/{id}', [BookATourController::class, 'BookATour']);
Route::post('/BookATour/store/{id}', [BookATourController::class, 'store']);



//==========Book Departure=========
Route::get('/BookATourDeparture/{id}/departure/{departureId}', [BookATourDepartureController::class, 'BookATour']);
Route::post('/BookATour/store/{id}/departure/{departureId}', [BookATourDepartureController::class, 'store']);


//==========Book Car=========
Route::get('/BookACar/{id}', [BookingACarController::class, 'BookACar']);
Route::post('/BookACar/store/{id}', [BookingACarController::class, 'store']);


// =========Book Car With Driver=========
Route::get('/BookACar/', [BookingACarWithDriverController::class, 'BookACar']);
Route::post('/BookACar/store', [BookingACarWithDriverController::class, 'store']);

//==========Book a car at airport=========
Route::get('/BookACar/airport/at', [BookingACarAtAirportController::class, 'BookACar']);
Route::post('/BookACar/airport/store', [BookingACarAtAirportController::class, 'store']);


//==========Book Room=========
Route::get('/BookARoom/{id}', [BookingARoomController::class, 'BookARoom']);
Route::post('/BookARoom/store/{id}', [BookingARoomController::class, 'store']);


//==========Book Acc=========
Route::get('/BookATent/{id}', [BookingAccessioriesController::class, 'BookAcc']);
Route::post('/BookATent/store/{id}', [BookingAccessioriesController::class, 'store']);


//==========Book Mice=========
Route::get('/BookMice/{id}', [BookingMiceController::class, 'BookMice']);
Route::post('/BookMice/store/{id}', [BookingMiceController::class, 'store']);


//======Contact Us=======

Route::post('/contact/store', [ContactFormController::class, 'store']);
Route::get('/contact', [ContactFormController::class, 'index']);


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/AMD', [FrontendController::class, 'index'])->name('amd');
// Route::get('/EUR', [FrontendController::class, 'index'])->name('eur');
// Route::get('/RUB', [FrontendController::class, 'index'])->name('rub');


});