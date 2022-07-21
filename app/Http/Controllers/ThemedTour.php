<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class ThemedTour extends Controller
{
    public function getTours()
    {
        $tour = Tour::where('category_id', 6)->get();
        $category = TourCategory::where('id', 6)->first();
        
        return view('Frontend.ThemedTours.ThemedTours', compact('tour', 'category'));
    }

    public function getClassicTour($id)
    {
        $tour = Tour::find($id);
        return view('Frontend.BasicTours.BasicTour', compact('tour'));
    }
}