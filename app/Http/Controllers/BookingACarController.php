<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class BookingACarController extends Controller
{
    public function BookACar($id)
    {
        // $destinations = Destination::all();
        $car = Vehicle::find($id);
        // $type = Type::all();
        return view('Frontend.Booking.car', compact('car'));
    }
}
