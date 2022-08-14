<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Mice;
use App\Models\MiceCMS;
use Illuminate\Http\Request;

class MiceController extends Controller
{
  
    public function index()
    {
        $mices = Mice::simplePaginate(9);
        return view('Backend.Admin.Services.MICE.view', compact('mices'));
    }

 
    public function create()
    {
        return view('Backend.Admin.Services.MICE.create');
    }

    public function edit($id)
    {
        $mice = Mice::find($id);
        return view('Backend.Admin.Services.MICE.update', compact('mice'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'available' => 'required',
            'description' => 'required',
            'total_pax' => 'required',
            'personal' => 'required',
            'Products' => 'required',
            'Extra' => 'required',
            'images' => 'required',

        ]);
        $mice = Mice::create([
            'name' => $request->name,
            'available' => $request->available,
            'description' => $request->description,
            'total_pax' => $request->total_pax,
            'personal' => $request->personal,
            'Products' => $request->Products,
            'Extra' => $request->Extra,
        ]);
      
        foreach ($request->file('images') as  $image) {

            $imageName = $image->getClientOriginalName();
            $image->move("Mice/" . $mice->id . "/", $imageName);
            $image = new Image();
            $image["filename"] = $imageName;
            $image["path"] = "Mice/" . $mice->id . "/" . $imageName;
            $image->save();
            $mice->images()->attach($image->id);
        

           
        }

        return redirect()->back()->with("msg", "Created successfully!")
        ->with("success", true);
    }

  
    public function show($id)
    {
        //show the details of hotel
 
        $mice = Mice::find($id)->with('images')->where('id', $id)->first();
        return view('Backend.Admin.Services.MICE.show', compact('mice'));
 
    }


   
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'available' => 'required',
            'total_pax' => 'required',
            'personal' => 'required',
            'Products' => 'required',
            'Extra' => 'required',
        ]);
        $mice = Mice::find($id);
        $mice->name = $request->name;
        $mice->available = $request->available;
        $mice->total_pax = $request->total_pax;
        $mice->personal = $request->personal;
        $mice->Products = $request->Products;
        $mice->Extra = $request->Extra;
        $mice->save();
        return redirect()->back()->with("msg", "Updated successfully!")
        ->with("success", true);
    }

 
    public function destroy($id)
    {
        $mice = Mice::find($id);
        $mice->delete();
        return redirect()->back()->with("msg", "Deleted successfully!")
        ->with("success", true);
    }

   //Show the data in the frontend
    public function showMice($locale = null)
    {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        $mices = Mice::with('images')
        ->simplePaginate(9);
        $cms = MiceCMS::all();
        return view('Frontend.Mice.Mices', compact('mices','cms'));
    }

    public function showMiceDetails($id, $locale = null)
    {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        $mice = Mice::with('images')
        ->where('id', $id)
        ->first();
        return view('Frontend.Mice.Micee', compact('mice'));
    }
}
