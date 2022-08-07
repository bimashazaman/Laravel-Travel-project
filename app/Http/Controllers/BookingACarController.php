<?php

namespace App\Http\Controllers;

use App\Models\BookingACar;
use App\Models\Car;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;

class BookingACarController extends Controller
{
    public function BookACar($id)
    {
        // $destinations = Destination::all();
        $car = Vehicle::find($id);
        // $type = Type::all();
        return view('Frontend.Booking.car', compact('car'));
    }

    public function store(Request $request, $id)
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
        $bookACar = BookingACar::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'subject' => $request->subject,
            // 'message' => $request->message,
            'vehicle_id' => $id,
        ]);

        

        $car = Vehicle::find($id);
        


        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'subject' => $request->subject,
            'vehicle_id' => $car->name,
        ];

            FacadesMail::send('Frontend.Booking.CarEmail', array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'subject' => $request->subject,
            'vehicle_id' => $car->name,
        
        ), function( $data) use ($request){
            $car = Vehicle::find($request->id);
             $data->from($request->email);
             $data->to('developerbimasha@gmail.com')->subject('Booking Car for ' . $car->name);
        });
       
        return redirect()
        ->back()
        ->with("msg", "Thanks for booking! We will contact you soon.")
        ->with("success", true);
    }

   
}
