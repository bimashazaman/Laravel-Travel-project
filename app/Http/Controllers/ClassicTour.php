<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class ClassicTour extends Controller
{
    public function getClasicTours()
    {
        // get all data with paginate

        $tour = Tour::with('images')->where('category_id', 1)->simplePaginate(9);

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
            ->with('departureTable')
            ->where('id', $id)->first();
        $category = TourCategory::where('id', 1)->first();
        
        //get related tour with images


//get related tour with images
        // $relatedTour = Tour::where('category_id', 1)->get();



        $relatedTour = Tour::where('category_id', 1)
        ->where('id', '!=', $tour->id)
        ->with('images')
        ->take(3)
        ->get();
         

        // $tour = Tour::find($id)
        //     ->with('images')
        //     ->with('highlights')
        //     ->with('program')
        //     ->with('facility')
        //     ->with('departureTable')
        //     ->where("category_id", 1)
        //     ->whereNull('deleted_at')
        //     ->get();



        return view('Frontend.BasicTours.BasicTour', compact('tour','category','relatedTour'));
    }
}
