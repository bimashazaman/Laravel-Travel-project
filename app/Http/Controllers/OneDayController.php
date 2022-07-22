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
    $tour = Tour::where('category_id', 5)->get();
    $category = TourCategory::where('id', 5)->first();
    
    return view('Frontend.OneDayTour.OneDayTour', compact('tour', 'category'));
   }

   public function getClassicTour($id)
   {
       $tour = Tour::find($id);
       return view('Frontend.BasicTours.BasicTour', compact('tour'));
   }
}
