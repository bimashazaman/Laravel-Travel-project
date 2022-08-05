<?php

namespace App\Http\Controllers;

use App\Models\Mice;
use Illuminate\Http\Request;

class BookingMiceController extends Controller
{
    public function BookMice($id)
    {
       
       $mice = Mice::find($id);
        // $type = Type::all();
        
        return view('Frontend.Booking.Mice', compact('mice'));
    }
}
