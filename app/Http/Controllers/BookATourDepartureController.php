<?php

namespace App\Http\Controllers;

use App\Models\DepartureTable;
use App\Models\Destination;
use App\Models\Tour;
use App\Models\Type;
use Illuminate\Http\Request;

class BookATourDepartureController extends Controller
{
    public function BookATour($id, $departureId)
    {
        $destinations = Destination::all();
        $tour = Tour::find($id);
        $departure = DepartureTable::find($departureId);
        $type = Type::all();
        return view('Frontend.Booking.Departure', compact('tour', 'type', 'destinations', 'departure'));
    }

}
