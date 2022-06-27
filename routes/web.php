<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Home');
});

// Route::get('/pac', function () {
//     return view('partials.Tour');
// });

// Route::get('/pacs', function () {
//     return view('partials.Tours');
// });


// Route::get('/Hotel', function () {
//     return view('partials.Hotel');
// });

// Route::get('/RentACar', function () {
//     return view('partials.RentACar');
// });

// Route::get('/Rt', function () {
//     return view('partials.RequestTour');
// });


// Route::get('/c', function () {
//     return view('partials.Contact');
// });

Route::get('/c2', function () {
    return view('Frontend.About.AboutUs');
});






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

Route::get('/cars', function () {
    return view('Frontend.Cars.Cars');
});

Route::get('/car', function () {
    return view('Frontend.Cars.Car');
});








