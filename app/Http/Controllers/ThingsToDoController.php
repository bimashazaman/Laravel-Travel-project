<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\ThingsToDo;
use App\Models\ThingsToDoCategory;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ThingsToDoController extends Controller
{
    public function index()
    {
        

        $categories = ThingsToDoCategory::all();
        $things = ThingsToDo::simplePaginate(6);
        return view('Backend.Admin.Armenia.ThingsToDo.view', compact('categories','things'));

    }

   
    public function create()
    {
        $categories = ThingsToDoCategory::all();
        return view('Backend.Admin.Armenia.ThingsToDo.create', compact('categories'));
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
         "price" => "required",
         "category_id" => "required|string",
         "images" => "required",
     ]);

     $things = ThingsToDo::create([
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

       
     foreach ($request->file('images') as  $image) {

         $imageName = $image->getClientOriginalName();
         $image->move("ThingsToDo/" . $things->id . "/", $imageName);
         $image = new Image();
         $image["filename"] = $imageName;
         $image["path"] = "ThingsToDo/" . $things->id . "/" . $imageName;
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
        $validate = Validator::make($request->all(), [
            "name" => "required|string",
            "description" => "required|string",
            "time" => "required|string",
            "address" => "required|string",
            "duration" => "required|string",
            "period" => "required|string",
            "distance" => "required|string",
            "price" => "required",
            "category_id" => "required|string",
            
        ]);
        if ($validate->fails()) {
           
            return redirect()
                ->back()
                ->with("msg", $validate->errors()->first())
                ->with("fail", true);
        }
        try {
           
            DB::beginTransaction();
            
            $things = ThingsToDo::find($id);
            $things->fill($request->all());
            $things->save();

            

            DB::commit();
            
            return redirect()
                ->back()
                ->with("msg", "Updated successfully!")
                ->with("success", true);
        } catch (Exception $e) {
            DB::rollBack();
            // return $e;
            return self::failure('Error in adding tour data!', ["data" => $e->getMessage()]);
        }

    }

    public function edit($id)
    {
        $categories = ThingsToDoCategory::all();
        $things = ThingsToDo::find($id);
        return view('Backend.Admin.Armenia.ThingsToDo.update', compact('categories','things'));
    }

  
    public function destroy($id)
    {
        try {
           
            DB::beginTransaction();
            
            $things = ThingsToDo::find($id);
            $things->delete();
            DB::commit();
            
            return redirect()
                ->back()
                ->with("msg", "Deleted successfully!")
                ->with("success", true);
        } catch (Exception $e) {
            DB::rollBack();
            // return $e;
            return self::failure('Error in adding tour data!', ["data" => $e->getMessage()]);
        }

    }

    public function getThingsToDoByCategory($id, $locale=null)
    {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        $things = ThingsToDo::with('images')->where('category_id', $id)->simplePaginate(6);
        $category = ThingsToDoCategory::where('id', $id)->first();
        return view('Frontend.Armenia.ThingsToDo', compact('things', 'category'));
    }

 

    public function getThingsToDoById($id, $locale=null)
    {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        $things = ThingsToDo::with('images')->where('id', $id)->first();
        $related = ThingsToDo::where('category_id', $things->category_id)->inRandomOrder()->simplePaginate(3);
        return view('Frontend.Armenia.ThingsToDoDetails', compact('things','related'));
    }

    //get all things to see
    public function getAllThingsToDo($locale=null)
    {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        $things = ThingsToDo::with('images')->simplePaginate(6);
        return view('Frontend.Armenia.ThingsToDo', compact('things'));
    }

}
