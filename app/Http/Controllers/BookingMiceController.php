<?php

namespace App\Http\Controllers;

use App\Models\BookingMice;
use App\Models\Mice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingMiceController extends Controller
{
    public function BookMice($id)
    {
       
       $mice = Mice::find($id);
        // $type = Type::all();
        
        return view('Frontend.Booking.Mice', compact('mice'));
    }


    public function store(Request $request, $id)
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
        $bookAAcc =BookingMice::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'persons' => $request->persons,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'subject' => $request->subject,
            // 'message' => $request->message,
            'mice_id' => $id,
        ]);

        

        $mice = Mice::find($id);
        


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
            'mice_id' => $mice->name,
        ];

            Mail::send('Frontend.Booking.miceEmail', array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'persons' => $request->persons,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'subject' => $request->subject,
            // 'message' => $request->message,
            'mice_id' => $mice->name,
        
        ), function( $data) use ($request){
            $a = Mice::find($request->id);
             $data->from($request->email);
             $data->to('info@2expedition.com')->subject('Booking Mice' . $a->name);
        });
       

        return redirect()
        ->back()
        ->with("msg", "Thanks for booking! We will contact you soon.")
        ->with("success", true);
    }
}
