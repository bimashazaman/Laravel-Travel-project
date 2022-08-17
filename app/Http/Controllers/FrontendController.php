<?php

namespace App\Http\Controllers;

use App\Models\CreatorDestination;
use App\Models\Destination;
use App\Models\HomeCMS;
use App\Models\Meal;
use App\Models\Tour;
use App\Models\TourCategory;
use App\Models\TripType;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    // public function getClasicTours()
    // {
    //     $tours = Tour::where('tour_category_id', 1)->get();
    //     return view('Frontend.BasicTours.BasicTours', compact('tours'));
    // }


   public function getTours($name) {
    $cat = TourCategory::where('name', $name)->first();
    if ($cat) {

        $tours = Tour::with('images')
            ->with('highlights')
            ->with('types')
            ->with('facility')
            ->where('home_tour_id', 1)
            ->where("category_id", $cat->id)
            ->whereNull('deleted_at')
        ->get();
        // return response()->json(["tour"=>$tours]);
        return view("Frontend.Tours.Tour", [
            "tour" => $tours,
            
        ]);
    }
   }

    public function index($locale = null)
    {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
       

        $home = HomeCMS::all();
        $destination = CreatorDestination::all();

        $tours = Tour::with('images')
            ->with('category')
            ->whereNull('deleted_at')
            ->with('types')
            ->latest()
            ->where('home_tour_id', 1)
            ->take(3)
            ->get();
        $destinations = Destination::whereNull('deleted_at')
            ->get();
        $types = TripType::all();
        $meals = Meal::all();

        return view('Home', [
            "tours" => $tours,
            "destinations" => $destinations,
            "types" => $types,
            "meals" => $meals,
            "home" => $home,
            "destination" => $destination,
        ]);
    }
  
    public function tourDescription($id)
    {
        //get tour
        $tour = Tour::with('images')
            ->with('facility')
            ->with('highlights')
            ->with('program')
            ->with('category')
            ->where('id', $id)
            ->first();
        return view('Frontend.Tours.Tour', [
            "tour" => $tour
        ]);
    }
   

}
