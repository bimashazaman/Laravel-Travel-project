<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\TourEvent;

class TourEventController extends Controller
{
  
    public function index()
    {
        
        $tour_events = TourEvent::all();
        
        return view('Backend.Admin.Armenia.Events.view', compact('tour_events'));
        
    }

   
    public function create()
    {
        return view('Backend.Admin.Armenia.Events.create');
    }

  
    public function store(Request $request)
    {
       
        // $tour_event = new TourEvent;
        // $tour_event->name = $request->name;
        // $tour_event->location = $request->location;
        // $tour_event->time = $request->time;
        // $tour_event->type = $request->type;
        // $tour_event->period = $request->period;
        // $tour_event->settlement = $request->settlement;
        // $tour_event->distance = $request->distance;
        // $tour_event->duration = $request->duration;
        // $tour_event->price = $request->price;
        // $tour_event->save();


        
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'time' => 'required',
            'type' => 'required',
            'period' => 'required',
            'settlement' => 'required',
            'distance' => 'required',
            'duration' => 'required',
            'price' => 'required|numeric',
            'images' => 'required',

        ]);

        $tour_event = TourEvent::create([
            'name' => $request->name,
            'location' => $request->location,
            'time' => $request->time,
            'type' => $request->type,
            'period' => $request->period,
            'settlement' => $request->settlement,
            'distance' => $request->distance,
            'duration' => $request->duration,
            'price' => $request->price,
        
        ]);
        

        foreach ($request->file('images') as  $image) {

            $imageName = $image->getClientOriginalName();
            $image->move("Event/" . $tour_event->id . "/", $imageName);
            $image = new Image();
            $image["filename"] = $imageName;
            $image["path"] = "Event/" . $tour_event->id . "/" . $imageName;
            $image->save();
            $tour_event->images()->attach($image->id);
        
        }

      

        return redirect()->back()->with("msg", "Created successfully!")
        ->with("success", true);
        
    }

    public function show($id)
    {
        //show the details of the selected tour event
        
        $tour_event = TourEvent::find($id)
        ->with('images')
        ->where('id', $id)
        ->first();
        return view('Backend.Admin.Armenia.Events.show', compact('tour_event'));
        
    }

    public function edit($id)
    {
        //edit the selected tour event
        $tour_event = TourEvent::find($id)
        ->with('images')
        ->where('id', $id)
        ->first();
        return view('Backend.Admin.Armenia.Events.update', compact('tour_event'));
    }


  
    public function update(Request $request, $id)
    {
        //update the selected tour event
        $tour_event = TourEvent::find($id);
        $tour_event->name = $request->name;
        $tour_event->location = $request->location;
        $tour_event->time = $request->time;
        $tour_event->type = $request->type;
        $tour_event->period = $request->period;
        $tour_event->settlement = $request->settlement;
        $tour_event->distance = $request->distance;
        $tour_event->duration = $request->duration;
        $tour_event->price = $request->price;
        $tour_event->save();
        
        return redirect()->back()->with("msg", "Updated successfully!")
        ->with("success", true);
    }


    public function destroy($id)
    {
        $tour_event = TourEvent::find($id);
        $tour_event->delete();
        return redirect()->back()->with("msg", "Deleted successfully!")
        ->with("success", true);
    }

    //show the data in the frontend
    public function showFrontend($locale = null)
    {
        
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        $tour_events = TourEvent::all();
        return view('Frontend.Conferences.Conferences', compact('tour_events'));
    }

    //show the data in the frontend
    public function showFrontendDetails($id, $locale = null)
    {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        $tour_event = TourEvent::find($id)
        ->with('images')
        ->where('id', $id)
        ->first();
        
        return view('Frontend.Armenia.ThingsToSeePage', compact('tour_event'));
    }
}
