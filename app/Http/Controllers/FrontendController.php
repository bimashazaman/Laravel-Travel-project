<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Meal;
use App\Models\Tour;
use App\Models\TripType;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * render the home page
     *
     * @return \Illuminate\Http\View
     */
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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
