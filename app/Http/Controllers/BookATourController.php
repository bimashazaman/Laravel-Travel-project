<?php

namespace App\Http\Controllers;

use App\Models\BookATour;
use App\Models\Destination;
use App\Models\Tour;
use App\Models\Type;
use Illuminate\Http\Request;
use Mail;


use function PHPSTORM_META\type;

class BookATourController extends Controller
{
    public function BookATour($id)
    {
        $destinations = Destination::all();
        $tour = Tour::find($id);
        $type = Type::all();
        return view('Frontend.Booking.tour', compact('tour', 'type', 'destinations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        // ]);

        $input = $request->all();

        BookATour::create($input);

        //  Send mail to admin
        // \Mail::send('contactMail', array(
        //     'name' => $input['name'],
        //     'email' => $input['email'],
        //     'phone' => $input['phone'],
        //     'subject' => $input['subject'],
        //     'message' => $input['message'],
        // ), function($message) use ($request){
        //     $message->from($request->email);
        //     $message->to('admin@admin.com', 'Admin')->subject($request->get('subject'));
        // });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
