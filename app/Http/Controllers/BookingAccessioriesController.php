<?php

namespace App\Http\Controllers;

use App\Models\Accessiories;
use Illuminate\Http\Request;

class BookingAccessioriesController extends Controller
{
    public function BookAcc($id)
    {
       
       $acc = Accessiories::find($id);
        // $type = Type::all();
        
        return view('Frontend.Booking.accessiories', compact('acc'));
    }
}
