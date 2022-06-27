<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Home');
});

Route::get('/pac', function () {
    return view('partials.Tour');
});

Route::get('/pacs', function () {
    return view('partials.Tours');
});


Route::get('/Hotel', function () {
    return view('partials.Hotel');
});

Route::get('/RentACar', function () {
    return view('partials.RentACar');
});

Route::get('/Rt', function () {
    return view('partials.RequestTour');
});


Route::get('/c', function () {
    return view('partials.Contact');
});

Route::get('/c2', function () {
    return view('Frontend.About.AboutUs');
});










