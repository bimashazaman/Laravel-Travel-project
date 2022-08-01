<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class ClassicTour extends Controller
{
    public function getClasicTours()
    {
        // get all data with paginate

        $tour = Tour::with('images')->with('types')->where('category_id', 1)->orderBy('id', 'DESC')->simplePaginate(9);

        $category = TourCategory::where('id', 1)->first();


        return view('Frontend.BasicTours.BasicTours', compact('tour', 'category'));
    }

    //get one day tour

    public function getClassicTour($id)
    {
        $tour = Tour::with('images')
            ->with('highlights')
            ->with('facility')
            ->with('program')
            ->with('types')
            ->with('departureTable')
            ->where('id', $id)->first();
        $category = TourCategory::where('id', 1)->first();
        
        
        //admin will select from the option tour to show in related tours sections

        $relatedTour = Tour::where('category_id', 1)
        ->with('category')
        // ->where('id', '!=', $tour->id)
        ->with('images')
        ->take(3)
        ->get();


        //get reviews

        

        $reviews = Review::with('images')->where('category_id', 1)->take(4)->get();
         

      


        return view('Frontend.BasicTours.BasicTour', compact('tour','category','relatedTour','reviews'));
    }
}
