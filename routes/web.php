<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

// Add facility page
Route::get('/login', function () {
    return view('Backend.Admin.login.login');
});

//Dashboard page
Route::get('/main', function () {
    return view('Backend.Admin.Dashboard');
});



// Add facility page
Route::get('/AddFacility', function () {
    return view('Backend.Admin.Tours.classicTours.AddFacility');
});

//add highlight
Route::get('/AddHighlight', function () {
    return view('Backend.Admin.Tours.classicTours.AddHighlights');
});


//----- dashboard page ---------
Route::get("/dashboard", [DashboardController::class, 'index']);

//---- tour page ---------
Route::get("/admin/tours/{name}", [TourController::class, "index"]);
Route::get("/admin/tours/detail/{id}", [TourController::class, "show"]);
Route::post("/admin/tours/add", [TourController::class, "store"]);
// Route::get("/admin/tours/createpage", [TourController::class, "create"]);
Route::get('/admin/CreateClassicTour',[TourController::class, "create"]);
Route::post("/admin/highlight/{id}",[TourController::class,"addTourHighlights"])->name('addHighlight');
Route::post("/admin/facility/{id}",[TourController::class,"addTourFacility"])->name('addFacility');
Route::post("/admin/tourprogram/{id}",[TourController::class,"addTourProgram"])->name('addTourProgram');

//-------- end -------------

Route::get('/check', [TourController::class, 'index']);
Route::post('/checkpost', [TourController::class, 'checkStore']);

Route::get('/', function () {
    return view('Home');
})->name('home');

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

Route::get('/admin11', function () {
    return view('Backend.Admin.AdminHome');
});




Route::get('/tours', function () {
    return view('Frontend.Tours.Tours');
});

Route::get('/Tour', function () {
    return view('Frontend.Tours.Tour');
})->name('tour')->name('Tour');


Route::get('/BT', function () {
    return view('Frontend.BasicTours.BasicTour');
});

Route::get('/Bv', function () {
    return view('Frontend.BasicTours.BasicTours');
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

Route::get('/MT', function () {
    return view('Frontend.Cars.MeetTheTransfer');
});

Route::get('/RF', function () {
    return view('Frontend.Cars.RentACarForm');
});

Route::get('/acs', function () {
    return view('Frontend.TourAccesories.Accesories');
});



Route::get('/ac', function () {
    return view('Frontend.TourAccesories.Accesiorieses');
});

Route::get('/TentForm', function () {
    return view('Frontend.TourAccesories.TentForm');
});

Route::get('/mices', function () {
    return view('Frontend.Mice.Mices');
});

Route::get('/mice', function () {
    return view('Frontend.Mice.Micee');
});

Route::get('/oneDay', function () {
    return view('Frontend.OneDayTour.OneDayTour');
});

Route::get('/gurantee', function () {
    return view('Frontend.GuaranteeTour.Guarantee');
});

Route::get('/themed', function () {
    return view('Frontend.ThemedTours.ThemedTours');
});


Route::get('/activeTours', function () {
    return view('Frontend.ActiveTours.ActiveTours');
});

Route::get('/gastroTours', function () {
    return view('Frontend.GastroTours.GastroTours');
});



Route::get('/ClassicTour', function () {
    return view('Frontend.BasicTours.BasicTours');
});

Route::get('/cars', function () {
    return view('Frontend.Cars.Cars');
});

Route::get('/RenACar', function () {
    return view('Frontend.Cars.RentACarForm');
});

Route::get('/car', function () {
    return view('Frontend.Cars.Car');
});

Route::get('/c', function () {
    return view('Frontend.Conferences.Conference');
});

Route::get('/cs', function () {
    return view('Frontend.Conferences.Conferences');
});


Route::get('/h', function () {
    return view('Frontend.Hotels.Hotel');
});

Route::get('/hs', function () {
    return view('Frontend.Hotels.Hotels');
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

Route::get('/admin/events', function () {
    return view('Backend.Admin.Armenia.Events.view');
});

Route::get('/admin/brochure', function () {
    return view('Backend.Admin.Armenia.Brochure.view');
});

Route::get('/admin/TravelBlog', function () {
    return view('Backend.Admin.Armenia.TravelBlog.view');
});

Route::get('/admin/Accessiories', function () {
    return view('Backend.Admin.Services.Accessiories.view');
});

Route::get('/admin/CarAtAirport', function () {
    return view('Backend.Admin.Services.CarAtAirport.view');
});

Route::get('/admin/CarWithDriver', function () {
    return view('Backend.Admin.Services.CarWithDriver.view');
});

Route::get('/admin/Hotel', function () {
    return view('Backend.Admin.Services.Hotels.view');
});

Route::get('/admin/Mice', function () {
    return view('Backend.Admin.Services.Mice.view');
});


//===============Create routes=============

Route::get('/admin/thingstoSeeCreate', function () {
    return view('Backend.Admin.Armenia.ThingsToSee.create');
});

Route::get('/admin/accCreate', function () {
    return view('Backend.Admin.Services.Accessiories.create');
});


Route::get('/admin/createHotel', function () {
    return view('Backend.Admin.Services.Hotels.create');
});

Route::get('/admin/createCar', function () {
    return view('Backend.Admin.Services.Car.create');
});

Route::get('/admin/createMice', function () {
    return view('Backend.Admin.Services.MICE.create');
});















