<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class GuranteeTour extends Controller
{
    public function getTours()
    {
        $tour = Tour::with('images')->where('category_id', 2)->simplePaginate(9);
        $category = TourCategory::where('id', 2)->first();
        
        return view('Frontend.GuaranteeTour.Guarantee', compact('tour', 'category'));
    }

    public function getClassicTour($id)
    {
        $tour = Tour::find($id);
        $relatedTour = Tour::where('category_id', 2)
        ->where('id', '!=', $tour->id)
        ->with('images')
        ->take(3)
        ->get();

        $reviews = Review::with('images')->where('category_id', 2)->take(4)->get();
        return view('Frontend.BasicTours.BasicTour', compact('tour','relatedTour','reviews'));
    }
}
