<?php

namespace App\Http\Controllers;

use App\Models\CreatorDestination;
use Illuminate\Http\Request;

class TourCreatorController extends Controller
{
    public function index()
    {
        $destination = CreatorDestination::all();
        return view('partials.TourPackages', compact('destination'));
    }


    public function createOne()
    {

    }


    public function storeOne()
    {

    }

    public function createTwo()
    {

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
