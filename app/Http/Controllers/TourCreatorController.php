<?php

namespace App\Http\Controllers;

use App\Models\CreatorDestination;
use App\Models\TourCreator;
use Illuminate\Http\Request;

class TourCreatorController extends Controller
{
    public function index()
    {
        $destination = CreatorDestination::all();
        return view('partials.TourPackages', compact('destination'));
    }


    // public function createOne()
    // {

    // }


    public function storeOne(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'start_date' => 'required|date',
            'adult' => 'required|integer',
            'child' => 'required|integer',
            'car' => '',
            'motorcycle' => '',
            'bike' => '',
            'hiking' => '',
            'meals' => 'required',
            'creator_destinations_id' => 'required',
        ]);

        if(empty($request->session()->get('destination'))) {
            $creator = new TourCreator();
            $creator->fill($validatedData);
            $request->session()->put('creator', $creator);
        }
        else {
            $creator = $request->session()->get('creator');
            $creator->fill($validatedData);
            $request->session()->put('creator', $creator);
        }
        return redirect()->route('tour.createTwo');
    }

    public function createTwo(Request $request)
    {

        $creator = $request->session()->get('creator');

        return view('partials.secondStepReq', compact('creator'));
    }

    public function storeTwo()
    {

    }

    public function createThree()
    {

    }

    public function storeThree()
    {

    }
}
