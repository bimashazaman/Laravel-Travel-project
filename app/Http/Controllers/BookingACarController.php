<?php

namespace App\Http\Controllers;

use App\Models\BookingACar;
use App\Models\Vehicle;
use Illuminate\Http\Request;

use Mail;

class BookingACarController extends Controller
{
    public function BookACar($id)
    {
        // $destinations = Destination::all();
        $car = Vehicle::find($id);
        // $type = Type::all();
        return view('Frontend.Booking.car', compact('car'));
    }

    // public function storeContactForm(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'phone' => 'required|digits:10|numeric',
    //         'subject' => 'required',
    //         'message' => 'required',
    //     ]);

    //     $input = $request->all();

    //     BookingACar::create($input);

    //     //  Send mail to admin
    //     \Mail::send('developerbimasha@gmail.com', array(
    //         'name' => $request->get('name'),
    //         'email' => $request->get('email'),
    //         'phone' => $request->get('phone'),
    //         'subject' => $request->get('subject'),
    //         'message' => $request->get('message'),
        
    //     ), function($message) use ($request){
    //         $message->from($request->email);
    //         $message->to('developerbimasha@gmail.com', 'Admin')->subject($request->get('subject'));
    //     });

    //     return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    // }

}
