<?php

namespace App\Http\Controllers;

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
       
        $tour_event = new TourEvent;
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

      

        return redirect()->back()->with("msg", "Created successfully!")
        ->with("success", true);
        
    }

    public function show($id)
    {
        //show the details of the selected tour event
        
        $tour_event = TourEvent::find($id);
        return view('Backend.Admin.Armenia.Events.show', compact('tour_event'));
        
    }


  
    public function update(Request $request, $id)
    {
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
    public function showFrontend()
    {
        $tour_events = TourEvent::all();
        return view('Frontend.Conferences.Conferences', compact('tour_events'));
    }

    //show the data in the frontend
    public function showFrontendDetails($id)
    {
        $tour_event = TourEvent::find($id);
        return view('Frontend.Conferences.Conference', compact('tour_event'));
    }
}
