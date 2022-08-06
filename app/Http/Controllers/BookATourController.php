<?php

namespace App\Http\Controllers;

use App\Models\BookATour;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


use function PHPSTORM_META\map;
use function PHPSTORM_META\type;

class BookATourController extends Controller
{
    public function BookATour($id)
    {
       
        $tour = Tour::find($id);
        return view('Frontend.Booking.tour', compact('tour'));
    }

    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);

        //use create method to create a new record in database
        $bookATour = BookATour::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'subject' => $request->subject,
            'message' => $request->message,
            'tour_id' => $id,
        ]);

        

        $tour = Tour::find($id);
        


        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'subject' => $request->subject,
            'message' => $request->message,
            'tour_id' => $tour->name,
        ];

            Mail::send('Frontend.Booking.email', array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'subject' => $request->subject,
            'message' => $request->message,
            'tour_id' => $tour->name,
        
        ), function( $data) use ($request){
             $data->from($request->email);
             $data->to('developerbimasha@gmail.com')->subject($request->get('subject'));
        });
       



       


       


        return redirect()
        ->back()
        ->with("msg", "Added successfully!")
        ->with("success", true);
    }
}
