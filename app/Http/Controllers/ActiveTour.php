<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class ActiveTour extends Controller
{
    public function getTours()
    {
        $tour = Tour::with('images')->where('category_id', 4)->simplePaginate(9);
        // $tour = Tour::with('images')->where('category_id', 4)->get();
        
        $category = TourCategory::where('id', 4)->first();
        
        return view('Frontend.ActiveTours.ActiveTours', compact('tour', 'category'));
    }

    public function getClassicTour($id)
    {
        $tour = Tour::find($id);
        $relatedTour = Tour::where('category_id', 4)
        ->where('id', '!=', $tour->id)
        ->with('images')
        ->take(3)
        ->get();

        $reviews = Review::with('images')->where('category_id', 4)->take(4)->get();
        return view('Frontend.BasicTours.BasicTour', compact('tour','relatedTour','reviews'));
    }
}
