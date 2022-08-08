<?php

namespace App\Http\Controllers;

use App\Models\Accessiories;
use App\Models\Image;
use App\Models\TourAccessoriesCMS;
use Illuminate\Http\Request;

class AccessioriesController extends Controller
{
  
    public function index()
    {
        $a = Accessiories::simplePaginate(9);
        return view('Backend.Admin.Services.Accessiories.view', compact('a'));
    }

   
    public function create()
    {
        return view('Backend.Admin.Services.Accessiories.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'availability'=>'required',
            'type'=>'required',
            'total_pax'=>'required',
            'free_cancellation'=>'required',
            'one_day_price'=>'required|numeric',
            'one_week_price'=>'required|numeric',
            'one_month_price'=>'required|numeric',
            'images' => 'required',
        ]);
        $a = Accessiories::create([
            'name' => $request->name,
            'description' => $request->description,
            'availability' => $request->availability,
            'type' => $request->type,
            'total_pax' => $request->total_pax,
            'free_cancellation' => $request->free_cancellation,
            'one_day_price' => $request->one_day_price,
            'one_week_price' => $request->one_week_price,
            'one_month_price' => $request->one_month_price,
        ]);

        foreach ($request->file('images') as  $image) {

            $imageName = $image->getClientOriginalName();
            $image->move("Accessiories/" . $a->id . "/", $imageName);
            $image = new Image();
            $image["filename"] = $imageName;
            $image["path"] = "Accessiories/" . $a->id . "/" . $imageName;
            $image->save();
            $a->images()->attach($image->id);

        }
        return redirect()->back()->with("msg", "Created successfully!")
            ->with("success", true);
    }

   
    public function show($id)
    {
       
        $a = Accessiories::find($id)
            ->with('images')
            ->where('id', $id)
            ->first();
        return view('Backend.Admin.Services.Accessiories.show', compact('a'));

    }

  
    public function edit($id)
    {
        $a = Accessiories::find($id)
            ->with('images')
            ->where('id', $id)
            ->first();
        return view('Backend.Admin.Services.Accessiories.update', compact('a'));
        
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
        $a = Accessiories::with('images')
            ->simplePaginate(9);

            $cms = TourAccessoriesCMS::all();
        return view('Frontend.TourAccesories.Accesories', compact('a','cms'));
    }

    //get the details of the selected accessiories
    public function getAccessioriesDetails($id)
    {
        $a = Accessiories::find($id);

        $related = Accessiories::inRandomOrder()
            ->simplePaginate(3);
        return view('Frontend.TourAccesories.Accesiorieses', compact('a','related'));
    }

    
    
}
