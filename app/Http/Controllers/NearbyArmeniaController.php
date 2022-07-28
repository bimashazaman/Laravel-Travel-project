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
        $things = NearbyArmenia::all();
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
         "category_id" => "required|string",
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

            //saving tour images
            // foreach ($request->file('images') as $key => $file) {

            //     $fileOrignalName = $file->getClientOriginalName();
            //     // return $fileOrignalName;
            //     $fileNameArray = explode('.', $fileOrignalName);
            //     $fileExtension = end($fileNameArray);
            //     $newFilename = $key . now()->timestamp . "." . $fileExtension;
            //     $path = "tour/" . $tour->id . "/";
            //     $file->move($path, $newFilename);
            //     $image = new Image();
            //     $image["filename"] = $newFilename;
            //     $image["path"] = $path . $newFilename;
            //     $image->save();
            //     TourImage::create([
            //         "tour_id" => $tour->id,
            //         "image_id" => $image->id
            //     ]);
            // }

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

    public function getNearbyByCategory($id)
    {
        $things = NearbyArmenia::with('images')->where('category_id', $id)->get();
        $category = NearbyArmeniaCategory::where('id', $id)->first();
        return view('Frontend.Armenia.nearby', compact('things', 'category'));
    }

    // {
    //     $things = Nearby::where('category_id', $id)->get();
    //     return view('Frontend.Armenia.Nearby', compact('things'));
    // }

    public function getNearbyById($id)
    {
        $things = NearbyArmenia::with('images')->where('id', $id)->first();
        return view('Frontend.Armenia.NearbyDetails', compact('things'));
    }

    //get all things to see
    public function getAllNearby()
    {
        $things = NearbyArmenia::all();
        return view('Frontend.Armenia.nearby', compact('things'));
    }


}
