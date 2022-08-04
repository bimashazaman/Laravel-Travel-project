<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Tour;
use App\Models\Type;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class BookATour extends Controller
{
    public function BookATour($id)
    {
        $destinations = Destination::all();
        $tour = Tour::find($id);
        $type = Type::all();
        return view('Frontend.Booking.tour', compact('tour', 'type', 'destinations'));
    }
}
