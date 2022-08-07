<?php

namespace App\Http\Controllers;

use App\Models\BookingARoom;
use App\Models\Hotel;
use App\Models\HotelRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingARoomController extends Controller
{
    public function BookARoom($id)
    {
       
        $hotel = Hotel::find($id);
        $room = HotelRoom::where('hotel_id', $id)->get();
        // $type = Type::all();
        return view('Frontend.Booking.room', compact('hotel', 'room'));
    }


    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'start_date' => 'required',
            'persons' => 'required',
            'end_date' => 'required',
            'subject' => 'required',
            'room_id' => 'required',

        ]);

        $hotel = Hotel::find($id);
      

        //use create method to create a new record in database
        $bookARoom = BookingARoom::create([
            
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'subject' => $request->subject,
            'persons' => $request->persons,
            'room_id' => $request->room_id,
            'hotel_id' => $id,

        ]);

       


        // return ddd($bookARoom);


        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'persons' => $request->persons,
            'subject' => $request->subject,
            'room_id' => $request->room_id,
            'hotel_id' => $id,
        
        ];

        //room 
        $room = HotelRoom::find($request->room_id);

            Mail::send('Frontend.Booking.roomEmail', array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'persons' => $request->persons,
            'subject' => $request->subject,
            'room_id' => $room->name,
            'hotel_id' => $hotel->name,
           

        
        ), function( $data) use ($request){
            // $car = Vehicle::find($request->id);
             $data->from($request->email);
             $data->to('Sales.2expedition@gmail.com')->subject('Booking a room at' . $request->hotel_id);
        });
       
        return redirect()
        ->back()
        ->with("msg", "Thanks for booking! We will contact you soon.")
        ->with("success", true);
    }
}
