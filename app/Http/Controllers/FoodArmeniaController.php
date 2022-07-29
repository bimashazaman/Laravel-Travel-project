<?php

namespace App\Http\Controllers;

use App\Models\FoodArmenia;
use App\Models\FoodArmeniaCategory;
use App\Models\Image;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class FoodArmeniaController extends Controller
{
    public function index()
    {
        
        
    // $things = ThingsToSee::where('category_id', $name)->get();
    //     $category = ThingsToSeeCategory::where('name', $name)->first();
    //     return view('Backend.Admin.Armenia.ThingsToSee.view', compact('things', 'category'));

        $categories = FoodArmeniaCategory::all();
        $foods = FoodArmenia::simplePaginate(9);
        return view('Backend.Admin.Armenia.FoodAndDrink.view', compact('categories','foods'));

    }

   
    public function create()
    {
        $categories = FoodArmeniaCategory::all();
        return view('Backend.Admin.Armenia.FoodAndDrink.create', compact('categories'));
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

     $things = FoodArmenia::create([
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
         $image->move("Food/" . $things->id . "/", $imageName);
         $image = new Image();
         $image["filename"] = $imageName;
         $image["path"] = "Food/" . $things->id . "/" . $imageName;
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


    public function edit($id)
    {
        $categories = FoodArmeniaCategory::all();
        $food = FoodArmenia::find($id);
        return view('Backend.Admin.Armenia.FoodAndDrink.update', compact('categories','food'));
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
            
            $things = FoodArmenia::find($id);
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
            
            $things = FoodArmenia::find($id);
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

    public function getfoodsByCategory($id)
    {
        $foods = FoodArmenia::with('images')->where('category_id', $id)->simplePaginate(9);
        $category = FoodArmeniaCategory::where('id', $id)->first();
        return view('Frontend.Armenia.foods', compact('foods', 'category'));
    }

    // {
    //     $things = ThingsToSee::where('category_id', $id)->get();
    //     return view('Frontend.Armenia.ThingsToSee', compact('things'));
    // }

    public function getfoodsById($id)
    {
        $foods = FoodArmenia::with('images')->where('id', $id)->first();
        return view('Frontend.Armenia.food', compact('foods'));
    }

    //get all foods to see
    // public function getAllFoods()
    // {
    //     $foods = FoodArmenia::all();
    //     return view('Frontend.Armenia.foods', compact('foods'));
    // }

}
