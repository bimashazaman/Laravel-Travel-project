<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class ClassicTour extends Controller
{
    public function getClasicTours()
    {
        $tour = Tour::where('category_id', 1)->get();
        $category = TourCategory::where('id', 1)->first();
        
        return view('Frontend.BasicTours.BasicTours', compact('tour', 'category'));
    }

    public function getClassicTour($id)
    {
        $tour = Tour::find($id);
        return view('Frontend.BasicTours.BasicTour', compact('tour'));
    }
}
