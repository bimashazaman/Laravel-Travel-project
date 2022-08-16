<?php

namespace App\Http\Controllers;

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
}
