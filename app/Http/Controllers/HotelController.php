<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
   
    public function index()
    {
        $hotels = Hotel::all();
        return view('Backend.Admin.Services.Hotels.view', compact('hotels'));
    }

    
    public function create()
    {
        return view('Backend.Admin.Services.Hotels.create');
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'stars' => 'required',
            'price' => 'required',
            'free_cancelation' => 'required',
        ]);
        $hotel = new Hotel();
        $hotel->name = $request->name;
        $hotel->description = $request->description;
        $hotel->address = $request->address;
        $hotel->stars = $request->stars;
        $hotel->price = $request->price;
        $hotel->free_cancelation = $request->free_cancelation;
        $hotel->save();
        return redirect()->back()->with("msg", "Upadated successfully!")
        ->with("success", true);
    }

    
    public function show($id)
    {
        //show the details of hotel

        $hotel = Hotel::find($id);
        return view('Backend.Admin.Services.Hotels.show', compact('hotel'));

    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'stars' => 'required',
            'price' => 'required',
            'free_cancelation' => 'required',
        ]);
        $hotel = Hotel::find($id);
        $hotel->name = $request->name;
        $hotel->address = $request->address;
        $hotel->stars = $request->stars;
        $hotel->price = $request->price;
        $hotel->free_cancelation = $request->free_cancelation;
        $hotel->save();
        return redirect()->back()->with("msg", "Upadated successfully!")
        ->with("success", true);
    }

    public function destroy($id)
    {
        //delete the hotel
        $hotel = Hotel::find($id);
        $hotel->delete();
        return redirect()->back()->with("msg", "Deleted successfully!")
        ->with("success", true);

    }
}
