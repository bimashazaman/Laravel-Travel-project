<?php

namespace App\Http\Controllers;

use App\Models\Accessiories;
use Illuminate\Http\Request;

class AccessioriesController extends Controller
{
  
    public function index()
    {
        $a = Accessiories::all();
        return view('Backend.Admin.Services.Accessiories.view', compact('a'));
    }

   
    public function create()
    {
        return view('Backend.Admin.Services.Accessiories.create');
    }

   
    public function store(Request $request)
    {
        $a = new Accessiories;
        $a->name = $request->name;
        $a->description = $request->description;
        $a->availability = $request->availability;
        $a->type = $request->type;
        $a->total_pax = $request->total_pax;
        $a->free_cancellation = $request->free_cancellation;
        $a->one_day_price = $request->one_day_price;
        $a->one_week_price = $request->one_week_price;
        $a->one_month_price = $request->one_month_price;
        $a->save();
        return redirect()->back()->with("msg", "Created successfully!")
        ->with("success", true);
    }

   
    public function show($id)
    {
        //show the details of the selected accessiories

        $a = Accessiories::find($id);
        return view('Backend.Admin.Services.Accessiories.show', compact('a'));

    }

  
    public function edit($id)
    {
        
    }

 
    public function update(Request $request, $id)
    {
        
        $a = Accessiories::find($id);
        $a->name = $request->name;
        $a->description = $request->description;
        $a->availability = $request->availability;
        $a->type = $request->type;
        $a->total_pax = $request->total_pax;
        $a->free_cancellation = $request->free_cancellation;
        $a->one_day_price = $request->one_day_price;
        $a->one_week_price = $request->one_week_price;
        $a->one_month_price = $request->one_month_price;
        $a->save();
        return redirect()->back()->with("msg", "Upadated successfully!")
        ->with("success", true);
    }

 
    public function destroy($id)
    {
          //delete the record
        $a = Accessiories::find($id);
        $a->delete();
        return redirect()->back()->with("msg", "Deleted successfully!")
        ->with("success", true);

    }


    //get the datas on frontend for the accessiories pass compact
    public function getAccessiories()
    {
        $a = Accessiories::all();
        return view('Frontend.TourAccesories.Accesories', compact('a'));
    }

    //get the details of the selected accessiories
    public function getAccessioriesDetails($id)
    {
        $a = Accessiories::find($id);
        return view('Frontend.TourAccesories.Accesiorieses', compact('a'));
    }

    
    
}
