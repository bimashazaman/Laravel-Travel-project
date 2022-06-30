<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Home');
})->name('home');



Route::get('/c2', function () {
    return view('Frontend.About.AboutUs');
});


Route::get('/tours', function () {
    return view('Frontend.Tours.Tours');
})->name('tours');

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








Route::get('/cars', function () {
    return view('Frontend.Cars.Cars');
});

Route::get('/RenACar', function () {
    return view('Frontend.Cars.RentACar');
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








