<?php

namespace App\Http\Controllers;

use App\Models\Call;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function index($locale = null)
    {

        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        return view('Frontend.Contact.Contact');
    }

    public function callNow($locale = null)
    {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        return view('Frontend.Contact.call');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',


        ]);
        $bookAAcc =ContactForm::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,

        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
        ];

            Mail::send('Frontend.Booking.contactEmail', array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,

        ), function( $data) use ($request){

             $data->from($request->email);
             $data->to('Sales.2expedition@gmail.com')->subject('Contact from '. $request->name);
        });
        return redirect()
        ->back()
        ->with("msg", "Thanks for Contacting! We will contact you soon.")
        ->with("success", true);
    }


    public function callStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'country_code' => 'required',
            'via' => '',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',

        ]);
        $bookAAcc =Call::create([
            'name' => $request->name,
            'country_code' => $request->country_code,
            'via' => $request->via,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,

        ]);
        $data1 = [
            'name' => $request->name,
            'country_code' => $request->country_code,
            'phone' => $request->phone,
            'email' => $request->email,
            'via' => $request->via,
            'message' => $request->message,
        ];

            Mail::send('Frontend.Booking.callEmail', array(
            'name' => $request->name,
            'country_code' => $request->country_code,
            'phone' => $request->phone,
            'email' => $request->email,
            'via' => $request->via,
            'message' => $request->message,

        ), function( $data1) use ($request){

             $data1->from($request->email);
             $data1->to('Sales.2expedition@gmail.com')->subject('Call from '. $request->name);
        });
        return redirect()
        ->back()
        ->with("msg", "Thanks for Contacting! We will contact you soon.")
        ->with("success", true);

    }
}
