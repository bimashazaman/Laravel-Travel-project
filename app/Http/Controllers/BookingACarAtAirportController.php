<?php

namespace App\Http\Controllers;

use App\Models\BookingACarAtAirport;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingACarAtAirportController extends Controller
{
    public function BookACar()
    {
        // $destinations = Destination::all();
        $car = Vehicle::all();
        // $type = Type::all();
        return view('Frontend.Booking.airport', compact('car'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'subject' => 'required',
            // 'message' => 'required',

        ]);

        //use create method to create a new record in database
        $bookACar = BookingACarAtAirport::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'subject' => $request->subject,
            // 'message' => $request->message,
            // 'vehicle_id' => $id,
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'subject' => $request->subject,
            // 'vehicle_id' => $car->name,
        ];

            Mail::send('Frontend.Booking.airportEmail', array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'subject' => $request->subject,
           
        
        ), function( $data) use ($request){
            // $car = Vehicle::find($request->id);
             $data->from($request->email);
             $data->to('info@2expedition.com')->subject('Booking Car at Airport');
        });
       
        return redirect()
        ->back()
        ->with("msg", "Thanks for booking! We will contact you soon.")
        ->with("success", true);
    }
}
