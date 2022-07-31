<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class OneDayController extends Controller
{
    // return view('Frontend.OneDayTour.OneDayTour');

   public function index()
   {
    $tour = Tour::with('images')->where('category_id', 5)->simplePaginate(9);
    $category = TourCategory::where('id', 5)->first();
    
    return view('Frontend.OneDayTour.OneDayTour', compact('tour', 'category'));
   }

   public function getClassicTour($id)
   {
       $tour = Tour::find($id);
       //get related tour'
        //  $relatedTour = Tour::where('category_id', 5)->get();
        $relatedTour = Tour::where('category_id', 5)
        ->where('id', '!=', $tour->id)
        ->with('images')
        ->take(3)
        ->get();
       return view('Frontend.BasicTours.BasicTour', compact('tour','relatedTour'));
   }
}
