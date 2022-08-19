<?php

namespace App\Http\Controllers;

use App\Models\Accessiories;
use App\Models\BookingAccessiories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingAccessioriesController extends Controller
{
    public function BookAcc($id)
    {
       
       $acc = Accessiories::find($id);
        
        return view('Frontend.Booking.accessiories', compact('acc'));
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
        $bookAAcc = BookingAccessiories::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'persons' => $request->persons,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'subject' => $request->subject,
            // 'message' => $request->message,
            'accessiories_id' => $id,
        ]);

        

        $a = Accessiories::find($id);
        


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
            'accessiories_id' => $a->name,
        ];

            Mail::send('Frontend.Booking.AccEmail', array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'persons' => $request->persons,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'subject' => $request->subject,
            // 'message' => $request->message,
            'accessiories_id' => $a->name,
        
        ), function( $data) use ($request){
            $a = Accessiories::find($request->id);
             $data->from($request->email);
             $data->to('info@2expedition.com')->subject('Booking Tour Accessiories for ' . $a->name);
        });
       

        return redirect()
        ->back()
        ->with("msg", "Thanks for booking! We will contact you soon.")
        ->with("success", true);
    }
}
