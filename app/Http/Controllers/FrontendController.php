<?php

namespace App\Http\Controllers;

use App\Models\CreatorDestination;
use App\Models\Destination;
use App\Models\HomeCMS;
use App\Models\Meal;
use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

   public function filter(Request $request)
    {

        $data = $request->all();

        $tours = Tour::all();
        $tour_category = TourCategory::where('id', $data['name'])->first();

        return view('Frontend.Filter.index', compact( 'tours', 'tour_category'));

    }


    public function Search(Request $request)
    {
        $tours = Tour::where('name', 'like', '%' . $request->search . '%')->get();
        return view('Frontend.Search.Search', compact('tours'));
    }


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

    public function index($locale = null, Request $request)
    {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
            session()->put('locale', $locale);
        }


        $home = HomeCMS::all();
        $destination = CreatorDestination::all();
        $creator = $request->session()->get('creator');

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

        $types = TourCategory::all();

        $meals = Meal::all();

        // $types = TripType::all();

        return view('Home', [
            "tours" => $tours,
            "destinations" => $destinations,
            "types" => $types,
            "meals" => $meals,
            "home" => $home,
            "destination" => $destination,
            "creator" => $creator,
            "types" => $types,
        ]);
    }


    // public function getToursByType()
    // {
    //    $types =  TourCategory::all();
    //      return view('partials.FindTour', compact('types'));
    // }

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
