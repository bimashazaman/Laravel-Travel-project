<?php

namespace App\Http\Controllers;

use App\Models\TourCategory;
use Illuminate\Http\Request;

class TourFinder extends Controller
{
    public function searhTour(Request $request)
    {
        //search tour by tour type, destination, date

        $type = $request->input('type');
        $destination = $request->input('destination');
        $date = $request->input('date');

        //search tour by tour type, destination, date

        $tourType = TourCategory::all();


        // $search = $request->input('search');
        // $tours = Tour::where('name', 'like', '%' . $search . '%')->get();
        // return view('tourfinder', ['tours' => $tours]);
    }
}
