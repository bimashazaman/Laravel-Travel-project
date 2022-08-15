<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\NearbyArmenia;
use App\Models\NearbyArmeniaCategory;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NearbyArmeniaController extends Controller
{
    
    public function index()
    {
        
        $categories = NearbyArmeniaCategory::all();
        $things = NearbyArmenia::simplePaginate(9);
        return view('Backend.Admin.Armenia.TODO.view', compact('categories','things'));

    }

   
    public function create()
    {
        $categories = NearbyArmeniaCategory::all();
        return view('Backend.Admin.Armenia.TODO.create', compact('categories'));
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
         "category_id" => "required",
         "images" => "required",
     ]);

     $things = NearbyArmenia::create([
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
         $image->move("Nearby/" . $things->id . "/", $imageName);
         $image = new Image();
         $image["filename"] = $imageName;
         $image["path"] = "Nearby/" . $things->id . "/" . $imageName;
         $image->save();
         $things->images()->attach($image->id);
     
     }

     return redirect()->back()->with("msg", "Created successfully!")
     ->with("success", true);
        
    }

 
    public function edit($id)
    {
        $categories = NearbyArmeniaCategory::all();
        $things = NearbyArmenia::find($id);
        return view('Backend.Admin.Armenia.TODO.update', compact('categories','things'));
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
            "price" => "required|string",
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
            
            $things = NearbyArmenia::find($id);
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

  
    public function destroy($id)
    {
        try {
           
            DB::beginTransaction();
            
            $things = NearbyArmenia::find($id);
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

    public function getNearbyByCategory($id ,$locale = null)
    {

        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        $things = NearbyArmenia::with('images')->where('category_id', $id)->simplePaginate(9);;
        $category = NearbyArmeniaCategory::where('id', $id)->first();

        return view('Frontend.Armenia.nearby', compact('things', 'category'));
    }

   

    public function getNearbyById($id ,$locale = null)
    {

        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        $things = NearbyArmenia::with('images')->where('id', $id)->first();
        //related
        $related = NearbyArmenia::with('images')->where('category_id', $things->category_id)->inRandomOrder()->simplePaginate(3);
        return view('Frontend.Armenia.NearbyDetails', compact('things','related'));
    }

    //get all things to see
    public function getAllNearby($locale = null)
    {

        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }
        $things = NearbyArmenia::all();
        return view('Frontend.Armenia.nearby', compact('things'));
    }


}
