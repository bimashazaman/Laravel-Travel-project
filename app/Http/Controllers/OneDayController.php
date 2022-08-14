<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Tour;
use App\Models\TourCategory;
use App\Models\TourCMS;
use Illuminate\Http\Request;

class OneDayController extends Controller
{
    // return view('Frontend.OneDayTour.OneDayTour');

   public function index($locale = null)
   {
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
    }

    $tour = Tour::with('images')->with('types')->where('category_id', 5)->orderBy('id', 'DESC')->simplePaginate(9);
    $category = TourCategory::where('id', 5)->first();

    $cms = TourCMS::all();
    
    return view('Frontend.OneDayTour.OneDayTour', compact('tour', 'category','cms'));
   }

   public function getClassicTour($id)
   {
       $tour = Tour::find($id);
       //get related tour'
        //  $relatedTour = Tour::where('category_id', 5)->get();
        $relatedTour = Tour::where('category_id', 5)
        // ->where('id', '!=', $tour->id)
        ->with('images')
        ->with('types')
        ->with('useful')
        ->inRandomOrder()
        ->take(3)
        ->get();

        $reviews = Review::with('images')->where('category_id', 5)->take(4)->get();
       return view('Frontend.BasicTours.BasicTour', compact('tour','relatedTour','reviews'));
   }
}
