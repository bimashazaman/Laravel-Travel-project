<?php

namespace App\Http\Controllers;

use App\Models\Destination;
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
            ->with('facility')
            ->where("category_id", $cat->id)
            ->whereNull('deleted_at')
            ->get();
        // return response()->json(["tour"=>$tours]);
        return view("Frontend.Tours.Tour", [
            "tour" => $tours
        ]);
    }
   }

    public function index()
    {
        //
        //get tours latest
        //get destinations
        //meals
        //get trip typs

        $tours = Tour::with('images')
            ->with('category')
            ->whereNull('deleted_at')
            ->latest()
            // ->take(8)
            ->get();
        $destinations = Destination::whereNull('deleted_at')
            ->get();
        $types = TripType::all();
        $meals = Meal::all();

        return view('Home', [
            "tours" => $tours,
            "destinations" => $destinations,
            "types" => $types,
            "meals" => $meals
        ]);
    }
    /**
     * render the tour detail page
     *
     * @return \Illuminate\Http\View
     */
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
   
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
