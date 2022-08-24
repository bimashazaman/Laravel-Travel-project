<?php

namespace App\Http\Controllers;

use App\Models\CreatorDestination;
use App\Models\FromDilijan;
use App\Models\FromGyumri;
use App\Models\FromJermuk;
use App\Models\FromStepanakert;
use App\Models\FromTbilisi;
use App\Models\FromYerevan;
use App\Models\TourCreator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TourCreatorController extends Controller
{
    public function storeOne(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'start_date' => 'required|date',
            'adult' => 'required|integer',
            'child' => 'required|integer',
            'car' => '',
            'motorcycle' => '',
            'bike' => '',
            'hiking' => '',
            'meals' => 'required',
            'creator_destinations_id' => 'required',
        ]);
        if (empty($request->session()->get('destination'))) {
            $creator = new TourCreator();
            $creator->fill($validatedData );
            $request->session()->put('creator', $creator);
        } else {
            $creator = $request->session()->get('creator');
            $creator->fill($validatedData );
            $request->session()->put('creator', $creator);
        }
        return redirect()->route('tour.createTwo');
    }

    public function createTwo(Request $request)
    {
        $creator = $request->session()->get('creator');

        $yerevanMotor = FromYerevan::where('type','motorcycle')->get();
        $yerevanBike = FromYerevan::where('type','bike')->get();
        $yerevanHiking = FromYerevan::where('type','hiking')->get();
        $yerevan =  FromYerevan::where('type', 'car')->get();

        $dilijanMotor = FromDilijan::where('type','motorcycle')->get();
        $dilijanBike = FromDilijan::where('type','bike')->get();
        $dilijanHiking = FromDilijan::where('type','hiking')->get();
        $dilijan =  FromDilijan::where('type', 'car')->get();

        
        $gyumri =  FromGyumri::where('type', 'car')->get();
        $jermuk =  FromJermuk::where('type', 'car')->get();
        $stepanakert =  FromStepanakert::where('type', 'car')->get();
        $tbilisi =  FromTbilisi::where('type', 'car')->get();

        return view('partials.secondStepReq', compact('creator', 'yerevanMotor','yerevanBike', 'yerevanHiking', 'yerevan', 'dilijan', 'gyumri', 'jermuk', 'stepanakert', 'tbilisi'));
    }

    public function storeTwo(Request $request)
    {
        $creator = $request->session()->get('creator');
        // $creator->save();
        return redirect()->route('tour.createThree');
    }

    public function createThree(Request $request)
    {
        $creator = $request->session()->get('creator');
        return view('partials.SendAMsg', compact('creator'));
    }

    public function storeThree(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'info' => '',
            'coupon' => '',
        ]);
        //save in database
        $creator = $request->session()->get('creator');
        $creator->fill($validatedData);
        $creator->save();

        Mail::send('Frontend.Booking.creator', array(
            'name' =>  $creator->name,
            'email' =>  $creator->email,
            'phone' =>  $creator->phone,
            'country' =>  $creator->country,
            'info' =>  $creator->info,
            'coupon' =>  $creator->coupon,
            'name' =>  $creator->name,
            'start_date' =>  $creator->start_date,
            'adult' =>  $creator->adult,
            'child' =>  $creator->child,
            'car' =>  $creator->car,
            'motorcycle' =>  $creator->motorcycle,
            'bike' =>  $creator->bike,
            'hiking' =>  $creator->hiking,
            'meals' =>  $creator->meals,
            'creator_destinations_id' =>  $creator->creator_destinations_id,
        
        ), function( $creator) use ($request){
            $creator->from($request->email);
            $creator->to('info@2expedition.com')->subject('Tour Create Request');
        });
        $request->session()->forget('creator');
        
        return redirect()
                ->back()
                ->with("msg", "Your tour has been sent to the admin. We will contact you soon.")
                ->with("success", true);
    }
}
