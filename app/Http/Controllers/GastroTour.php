<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class GastroTour extends Controller
{
    public function getTours()
    {
        $tour = Tour::with('images')->where('category_id', 3)->simplePaginate(9);
        $category = TourCategory::where('id', 3)->first();
        
        return view('Frontend.GastroTours.gastroTours', compact('tour', 'category'));
    }

    public function getClassicTour($id)
    {
        $tour = Tour::find($id);
        $relatedTour = Tour::where('category_id', 3)
        ->where('id', '!=', $tour->id)
        ->with('images')
        ->take(3)
        ->get();

        // $reviews = $tour->reviews()->orderBy('created_at', 'desc')->take(3)->get();
        return view('Frontend.BasicTours.BasicTour', compact('tour','relatedTour'));
    }
}
