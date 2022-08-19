<?php

namespace App\Http\Controllers;

use App\Models\BookATourDeparture;
use App\Models\DepartureTable;
use App\Models\Destination;
use App\Models\Tour;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookATourDepartureController extends Controller
{
    public function BookATour($id)
    {
        $tour = Tour::find($id);
        $departure = DepartureTable::where('tour_id', $id)->first();
        // $departure = DepartureTable::where('tour_id', $id)->get();
        return view('Frontend.Booking.Departure', compact('tour', 'departure'));
    }




    public function store(Request $request, $id, $departureId)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'persons' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'subject' => 'required',
            // 'message' => 'required',

        ]);

        //use create method to create a new record in database
        $bookATour = BookATourDeparture::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'persons' => $request->persons,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'subject' => $request->subject,
            // 'message' => $request->message,
            'tour_id' => $id,
            'departure_id' => $departureId,
        ]);

        

        $tour = Tour::find($id);
        


        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'persons' => $request->persons,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'subject' => $request->subject,
            // 'message' => $request->message,
            'tour_id' => $tour->name,
            'departure_id' => $departureId,
        ];

            Mail::send('Frontend.Booking.departureEmail', array(
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'persons' => $request->persons,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'subject' => $request->subject,
                // 'message' => $request->message,
                'tour_id' => $tour->name,
        
        ), function( $data) use ($request){
            $tour = Tour::find($request->id);
             $data->from($request->email);
             $data->to('info@2expedition.com')->subject('Booking Tour for Guaranteed Departures ' . $tour->name);
        });
       

        return redirect()
        ->back()
        ->with("msg", "Thanks for booking! We will contact you soon.")
        ->with("success", true);
    }

    



    






}
