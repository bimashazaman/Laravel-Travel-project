<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class GastroTour extends Controller
{
    public function getTours()
    {
        $tour = Tour::where('category_id', 3)->get();
        $category = TourCategory::where('id', 3)->first();
        
        return view('Frontend.GastroTours.gastroTours', compact('tour', 'category'));
    }

    public function getClassicTour($id)
    {
        $tour = Tour::find($id);
        return view('Frontend.BasicTours.BasicTour', compact('tour'));
    }
}
