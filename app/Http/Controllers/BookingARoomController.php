<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\HotelRoom;
use Illuminate\Http\Request;

class BookingARoomController extends Controller
{
    public function BookARoom($id)
    {
       
        $hotel = Hotel::find($id);
        $room = HotelRoom::where('hotel_id', $id)->get();
        // $type = Type::all();
        return view('Frontend.Booking.room', compact('hotel', 'room'));
    }
}
