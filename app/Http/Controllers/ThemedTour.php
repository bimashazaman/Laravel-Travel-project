<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Tour;
use App\Models\TourCategory;
use App\Models\TourCMS;
use Illuminate\Http\Request;

class ThemedTour extends Controller
{
    public function getTours()
    {
        $tour = Tour::with('images')->with('types')->where('category_id', 6)->orderBy('id', 'DESC')->simplePaginate(9);
        $category = TourCategory::where('id', 6)->first();

        $cms = TourCMS::all();
        
        return view('Frontend.ThemedTours.ThemedTours', compact('tour', 'category','cms'));
    }

    public function getClassicTour($id)
    {
        $tour = Tour::find($id);
        $relatedTour = Tour::where('category_id', 6)
        // ->where('id', '!=', $tour->id)
        ->with('images')
        ->with('types')
        ->inRandomOrder()
        ->take(3)
        ->get();

        $reviews = Review::with('images')->where('category_id', 6)->take(4)->get();
        return view('Frontend.BasicTours.BasicTour', compact('tour','relatedTour','reviews'));
    }
}
