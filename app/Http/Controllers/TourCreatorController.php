<?php

namespace App\Http\Controllers;

use App\Models\CreatorDestination;
use App\Models\FromDilijan;
use App\Models\FromGyumri;
use App\Models\FromJermuk;
use App\Models\FromStepanakert;
use App\Models\FromTbilisi;
use App\Models\FromYerevan;
use App\Models\thirdStep;
use App\Models\TourCreator;
use Illuminate\Http\Request;

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
            $creator->fill($validatedData);
            $request->session()->put('creator', $creator);
        } else {
            $creator = $request->session()->get('creator');
            $creator->fill($validatedData);
            $request->session()->put('creator', $creator);
        }


        return redirect()->route('tour.createTwo');
    }

    public function createTwo(Request $request)
    {

        $creator = $request->session()->get('creator');

        $yerevan =  FromYerevan::all();
        $dilijan =  FromDilijan::all();
        $gyumri =  FromGyumri::all();
        $jermuk =  FromJermuk::all();
        $stepanakert =  FromStepanakert::all();
        $tbilisi =  FromTbilisi::all();

        return view('partials.secondStepReq', compact('creator', 'yerevan', 'dilijan', 'gyumri', 'jermuk', 'stepanakert', 'tbilisi'));
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
        $request->session()->forget('creator');
        
        return redirect()
                ->back()
                ->with("msg", "Your tour has been sent to the admin. We will contact you soon.")
                ->with("success", true);
    


        // try {
        //     $creator = $request->session()->get('creator');
        //     $creator = new TourCreator();
        //     $creator->fill($validatedData);
        //     $creator->save();
        //     $request->session()->forget('creator');
        //     return redirect()
        //         ->back()
        //         ->with("msg", "Your tour has been sent to the admin. We will contact you soon.")
        //         ->with("success", true);
        // } catch (\Exception $e) {
        //     return redirect()
        //         ->back()
        //         ->with("msg", "Something went wrong. Please try again.")
        //         ->with("success", false);
        // }

        // $creator = $request->session()->get('creator');
        // $creator->fill($validatedData);

        // $creator->save();

        // $request->session()->forget('creator');






    }
}
