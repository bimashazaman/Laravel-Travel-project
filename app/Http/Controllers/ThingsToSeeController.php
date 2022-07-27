<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\ThingsToSee;
use App\Models\ThingsToSeeCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ThingsToSeeController extends Controller
{
    
    public function index()
    {
        
        
    // $things = ThingsToSee::where('category_id', $name)->get();
    //     $category = ThingsToSeeCategory::where('name', $name)->first();
    //     return view('Backend.Admin.Armenia.ThingsToSee.view', compact('things', 'category'));

        $categories = ThingsToSeeCategory::all();
        $things = ThingsToSee::all();
        return view('Backend.Admin.Armenia.ThingsToSee.view', compact('categories','things'));

    }

   
    public function create()
    {
        $categories = ThingsToSeeCategory::all();
        return view('Backend.Admin.Armenia.ThingsToSee.create', compact('categories'));
    }

    public function edit($id)
    {
        $categories = ThingsToSeeCategory::all();
        $things = ThingsToSee::find($id);
        return view('Backend.Admin.Armenia.ThingsToSee.update', compact('things', 'categories'));
    }

  
    public function store(Request $request)
    {

        $request->validate([
               "name" => "required|string",
            "description" => "required|string",
            "time" => "required|string",
            "address" => "required|string",
            "duration" => "required|string",
            "period" => "required|string",
            "distance" => "required|string",
            "price" => "required|string",
            "category_id" => "required|string",
            "images" => "required",
        ]);

        $things = ThingsToSee::create([
            "name" => $request->name,
            "description" => $request->description,
            "time" => $request->time,
            "address" => $request->address,
            "duration" => $request->duration,
            "period" => $request->period,
            "distance" => $request->distance,
            "price" => $request->price,
            "category_id" => $request->category_id,
        ]);

        // $validate = Validator::make($request->all(), [
        //     "name" => "required|string",
        //     "description" => "required|string",
        //     "time" => "required|string",
        //     "address" => "required|string",
        //     "duration" => "required|string",
        //     "period" => "required|string",
        //     "distance" => "required|string",
        //     "price" => "required|string",
        //     "category_id" => "required|string",
            
        // ]);
       
        

          
        foreach ($request->file('images') as  $image) {

            $imageName = $image->getClientOriginalName();
            $image->move("ThingsToSee/" . $things->id . "/", $imageName);
            $image = new Image();
            $image["filename"] = $imageName;
            $image["path"] = "ThingsToSee/" . $things->id . "/" . $imageName;
            $image->save();
            $things->images()->attach($image->id);
        
        }

        return redirect()->back()->with("msg", "Created successfully!")
        ->with("success", true);
    }

 
    public function show($id)
    {
        //
    }


  
    public function update(Request $request, $id)
    {
      
        $request->validate([
            "name" => "required|string",
            "description" => "required|string",
            "time" => "required|string",
            "address" => "required|string",
            "duration" => "required|string",
            "period" => "required|string",
            "distance" => "required|string",
            "price" => "required|string",
            "category_id" => "required|string",
            // "images" => "required",
        ]);
        
        $things = ThingsToSee::find($id);
        $things->name = $request->name;
        $things->description = $request->description;
        $things->time = $request->time;
        $things->address = $request->address;
        $things->duration = $request->duration;
        $things->period = $request->period;
        $things->distance = $request->distance;
        $things->price = $request->price;
        $things->category_id = $request->category_id;
        $things->save();
        
        // foreach ($request->file('images') as  $image) {

        //     $imageName = $image->getClientOriginalName();
        //     $image->move("ThingsToSee/" . $things->id . "/", $imageName);
        //     $image = new Image();
        //     $image["filename"] = $imageName;
        //     $image["path"] = "ThingsToSee/" . $things->id . "/" . $imageName;
        //     $image->save();
        //     $things->images()->attach($image->id);
        
        // }
        
        return redirect()->back()->with("msg", "Updated successfully!")
        ->with("success", true);

    }

  
    public function destroy($id)
    {
        $things = ThingsToSee::find($id);
        $things->delete();
        return redirect()->back()->with("msg", "Deleted successfully!")
        ->with("success", true);

    }

    public function getThingsToSeeByCategory($id)
    {
        $things = ThingsToSee::with('images')->where('category_id', $id)->get();
        $category = ThingsToSeeCategory::where('id', $id)->first();
        return view('Frontend.Armenia.ThingsToSee', compact('things', 'category'));
    }

    // {
    //     $things = ThingsToSee::where('category_id', $id)->get();
    //     return view('Frontend.Armenia.ThingsToSee', compact('things'));
    // }

    public function getThingsToSeeById($id)
    {
        $things = ThingsToSee::with('images')->where('id', $id)->first();
        return view('Frontend.Armenia.ThingsToSeeDetails', compact('things'));
    }

    //get all things to see
    public function getAllThingsToSee()
    {
        $things = ThingsToSee::all();
        return view('Frontend.Armenia.ThingsToSee', compact('things'));
    }


}
